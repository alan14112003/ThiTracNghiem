<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Option;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

class QuizPlay extends Component
{
    public $quizId;
    public $quiz;
    public $questions = [];
    public $userId; // ID của người dùng
    public $startTime; // Thời gian bắt đầu
    public $endTime; // Thời gian kết thúc
    public $answers = []; // Lưu đáp án của người dùng
    public $showModal = false;
    public $unansweredQuestions = [];

    public function mount($quizId)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->userId = Auth::id();
        $this->quizId = $quizId;
        $this->quiz = Quiz::findOrFail($this->quizId);
        $this->questions = $this->quiz->questions;

        // Lấy thời gian hiện tại ở múi giờ HCM
        $currentTime = now()->setTimezone('Asia/Ho_Chi_Minh');

        // Check if session has start time, otherwise set current time
        if (session()->has("quiz_start_time_{$this->quizId}")) {
            $this->startTime = session("quiz_start_time_{$this->quizId}"); // Restore from session
        } else {
            $this->startTime = $currentTime; // Sử dụng thời gian hiện tại
            session(["quiz_start_time_{$this->quizId}" => $this->startTime]); // Store in session
        }
        // Check if session has end time, otherwise set based on start time and quiz duration
        if (session()->has("quiz_end_time_{$this->quizId}")) {
            $this->endTime = session("quiz_end_time_{$this->quizId}"); // Restore from session
        } else {
            $this->endTime = $this->startTime->copy()->addMinutes($this->quiz->duration); // Calculate end time
            session(["quiz_end_time_{$this->quizId}" => $this->endTime]); // Store in session
        }

        // Restore answers from session if available
        if (session()->has("quiz_answers_{$this->quizId}")) {
            $this->answers = session("quiz_answers_{$this->quizId}");
        }
    }


    public function closeModal()
    {
        $this->showModal = false;
    }

    public function updated($propertyName)
    {
        // Kiểm tra nếu thuộc tính đã cập nhật là answers
        if (strpos($propertyName, 'answers') === 0) {
            // Lưu vào session ngay khi có sự thay đổi trong answers
            session(["quiz_answers_{$this->quizId}" => $this->answers]);
        }
    }

    public function checkAnswers()
    {
        // Reset unanswered questions
        $this->unansweredQuestions = [];

        foreach ($this->questions as $index => $question) {
            if (!isset($this->answers[$question->id])) {
                $this->unansweredQuestions[] = $index + 1; // Lưu thứ tự câu hỏi chưa trả lời (bắt đầu từ 1)
            }
        }

        // Nếu có câu hỏi chưa được trả lời, hiển thị modal
        if (count($this->unansweredQuestions) > 0) {
            $this->showModal = true; // Mở modal
            return;
        }

        // Nếu tất cả câu hỏi đã được trả lời, nộp quiz
        $this->submitQuiz();
    }


    public function submitQuiz()
    {
        $this->dispatch('stopRecording');
    }


    public function submitQuizSuccess($video_url, $countViolate)
    {
        // Calculate the score based on the user's answers
        $score = 0;

        // Store the quiz attempt first to get its ID for saving answers
        $quizAttempt = QuizAttempt::create([
            'user_id' => $this->userId,
            'quiz_id' => $this->quizId,
            'score' => 0, // Initial score, will update later
            'status' => 'completed',
            'started_at' => $this->startTime,
            'finished_at' => now(),
            'video_url' => $video_url,
            'violate_count'=> $countViolate,
        ]);

        foreach ($this->questions as $question) {
            // Check if the answer exists
            if (isset($this->answers[$question->id])) {
                if ($question->type === 'value') {
                    // Lấy đáp án người dùng nhập vào
                    $userAnswer = $this->answers[$question->id];

                    // Lấy đáp án đúng (option)
                    $correctOption = Option::where('question_id', operator: $question->id)
                        ->where('is_correct', true)
                        ->first();

                    // Kiểm tra xem đáp án của người dùng có khớp với đáp án đúng không
                    if ($correctOption && $correctOption->option_text == $userAnswer) {
                        $score++;
                    }

                    // Lưu lịch sử câu trả lời và đáp án người dùng đã nhập
                    Answer::create([
                        'quiz_attempt_id' => $quizAttempt->id,
                        'question_id' => $question->id,
                        'option_id' => null, // Không lưu option_id với câu hỏi tự điền
                        'user_answer' => $userAnswer, // Lưu đáp án mà người dùng đã điền
                    ]);
                } else {
                    // Get the selected option ID
                    $selectedOptionId = $this->answers[$question->id];

                    // Check if the selected option is correct
                    $isCorrect = Option::where('id', $selectedOptionId)
                        ->where('question_id', $question->id)
                        ->where('is_correct', true)
                        ->exists();

                    if ($isCorrect) {
                        $score++;
                    }

                    // Save the answer history
                    Answer::create([
                        'quiz_attempt_id' => $quizAttempt->id,
                        'question_id' => $question->id,
                        'option_id' => $selectedOptionId,
                    ]);
                }
            }
        }

        // Update the score in the quiz attempt
        $quizAttempt->update(['score' => $score]);

        // Clear session data after submission
        session()->forget(["quiz_answers_{$this->quizId}", "quiz_start_time_{$this->quizId}", "quiz_end_time_{$this->quizId}"]);

        // Optionally, you could redirect the user to a results page or show a success message
        session()->flash('message', 'Quiz submitted successfully!');
        return redirect()->route('quiz.single.result', $quizAttempt->id); // Redirect to a results page
    }

    public function render()
    {
        // Lấy thời gian hiện tại ở múi giờ HCM
        $now = now()->setTimezone('Asia/Ho_Chi_Minh');

        // Tính toán thời gian còn lại
        $remainingTime = abs($this->endTime->diffInSeconds($now, false)); // Lấy giá trị tuyệt đối

        return view('livewire.quiz', [
            'quiz' => $this->quiz,
            'questions' => $this->questions,
            'userId' => $this->userId,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
            'remainingTime' => $remainingTime,
        ]);
    }
}
