<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RoomParticipant;
use App\Models\Quiz;
use App\Models\ExamRoom; // Thêm import cho ExamRoom
use App\Models\Option;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class QuizStart extends Component
{
    public $roomParticipantId;
    public $quiz;
    public $remainingTime; // Thêm thuộc tính cho thời gian còn lại
    public $startTime; // Thêm thuộc tính cho thời gian còn lại
    public $endTime; // Thêm thuộc tính cho thời gian còn lại
    public $answers = []; // Thêm thuộc tính cho thời gian còn lại
    public $questions = [];
    public $unansweredQuestions = [];

    public $showModal = false;
    public $violations = 0; // Biến lưu số lần vi phạm
    public $examRoom ; // Biến lưu số lần vi phạm

public function increaseViolations()
{
    // Tăng số lần vi phạm
    $this->violations++;
    session()->put('violations_' . $this->roomParticipantId, $this->violations);

}


    public function closeModal()
    {
        $this->showModal = false;
    }

    public function mount($roomCode)
    {
        // Lấy user_id từ Auth
        $userId = Auth::id();

        // Tìm RoomParticipant dựa trên user_id và exam_room_id
        $roomParticipant = RoomParticipant::where('user_id', $userId)
            ->whereHas('examRoom', function($query) use ($roomCode) {
                $query->where('room_code', $roomCode);
            })->firstOrFail();

        // Lưu room participant id
        $this->roomParticipantId = $roomParticipant->id;

        // Lấy quiz từ exam room
        $this->quiz = $roomParticipant->examRoom->quiz; // Giả sử có quan hệ quiz trong ExamRoom
        $this->questions = $roomParticipant->examRoom->quiz->questions;

        // Lấy thông tin phòng thi
        $this->examRoom = $roomParticipant->examRoom;

        // Lấy thời gian hiện tại ở múi giờ HCM
        $currentTime = now()->setTimezone('Asia/Ho_Chi_Minh');

        // Tính toán thời gian bắt đầu và kết thúc
        if (session()->has("quiz_start_time_{$this->quiz->id}")) {
            $this->startTime = session("quiz_start_time_{$this->quiz->id}"); // Restore từ session
        } else {
        $this->examRoom = $roomParticipant->examRoom;

            $this->startTime = $this->examRoom->start_time;
            session(["quiz_start_time_{$this->quiz->id}" => $this->startTime]); // Lưu vào session
        }

        // Tính toán thời gian kết thúc dựa trên thời gian bắt đầu và duration
        if (session()->has("quiz_end_time_{$this->quiz->id}")) {
            $this->endTime = session("quiz_end_time_{$this->quiz->id}"); // Restore từ session
        } else {
            $this->endTime = $this->startTime->copy()->addMinutes($this->examRoom->duration); // Tính toán thời gian kết thúc
            session(["quiz_end_time_{$this->quiz->id}" => $this->endTime]); // Lưu vào session
        }


        // Tính thời gian còn lại
        $currentTime = \Carbon\Carbon::now(); // Lấy thời gian hiện tại
        $this->remainingTime = $this->endTime->diffInSeconds($currentTime); // Tính thời gian còn lại theo giây
        $this->remainingTime = -$this->remainingTime; // Đảo dấu
        if ($this->remainingTime < 0) {
            $this->remainingTime = 0; // Đảm bảo không có thời gian âm
        }

        // if ($currentTime->greaterThan($this->endTime)) {
        //     $this->remainingTime = 0; // Nếu đã hết giờ, còn lại 0 giây
        // } else {
        //     $this->remainingTime = $this->endTime->copy()->addMinutes($currentTime); // Tính thời gian còn lại tính theo giây
        // }
        // Restore answers from session if available
        if (session()->has("quiz_answers_{$this->quiz->id}")) {
            $this->answers = session("quiz_answers_{$this->quiz->id}");
        }
        $this->violations = session()->get('violations_' . $this->roomParticipantId, 0);


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
        // Tính điểm số dựa trên câu trả lời của người dùng
        $score = 0;
        $correctAnswers = 0;
        $wrongAnswers = 0;

        foreach ($this->questions as $question) {
            // Kiểm tra xem câu trả lời có tồn tại không
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
                    $correctAnswers++;

                    }else {
                    $wrongAnswers++;

                    }

                    // Lưu lịch sử câu trả lời và đáp án người dùng đã nhập

                }
                     else {


                // Lấy ID của lựa chọn đã chọn
                $selectedOptionId = $this->answers[$question->id];

                // Kiểm tra xem lựa chọn đã chọn có đúng không
                $isCorrect = Option::where('id', $selectedOptionId)
                    ->where('question_id', $question->id)
                    ->where('is_correct', true)
                    ->exists();

                // Cập nhật điểm số và số lượng câu trả lời đúng/sai
                if ($isCorrect) {
                    $score++;
                    $correctAnswers++;
                } else {
                    $wrongAnswers++;
                }
            }
            }
        }
        $roomParticipant = RoomParticipant::where('user_id', Auth::user()->id)
    ->where('exam_room_id', $this->examRoom->id)
    ->first();
        // Lưu kết quả vào bảng Result
        $result = Result::create([
            'room_participant_id' => $roomParticipant->id, // Hoặc ID của người tham gia phòng tương ứng
            'total_score' => $score,
            'correct_answers' => $correctAnswers,

    'violations' => $this->violations,
            'wrong_answers' => $wrongAnswers,
        ]);

        // Xóa dữ liệu phiên sau khi nộp bài
        session()->forget(["quiz_answers_{$this->quiz->id}", "quiz_start_time_{$this->quiz->id}", "quiz_end_time_{$this->quiz->id}",   "violations_{$this->roomParticipantId}"]);

        // Hiển thị thông báo thành công
        session()->flash('message', 'Quiz submitted successfully!');

        // Chuyển hướng người dùng đến trang kết quả
        return redirect()->route('quiz.result', ['resultId' => $result->id]); // Chuyển hướng đến trang kết quả
    }

    public function render()
    {
        
        return view('livewire.quiz-start', [
            'quiz' => $this->quiz,
            'remainingTime' => $this->remainingTime,
        ]);
    }
}
