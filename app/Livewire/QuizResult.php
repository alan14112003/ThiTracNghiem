<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\QuizAttempt;
use Carbon\Carbon;

class QuizResult extends Component
{
    public $quizAttemptId; // ID của lần làm bài hiện tại
    public $quizAttempt; // Dữ liệu lần làm bài
    public $totalScore; // Tổng điểm
    public $totalTime; // Tổng thời gian làm bài
    public $questions; // Danh sách câu hỏi và trạng thái (đúng, sai, chưa chọn)
    public $quizAttemptsCount; // Tổng số lần thi của bài thi hiện tại
    public $quiz; // Tổng số lần thi của bài thi hiện tại
    public $searchTerm = ''; // Từ khóa tìm kiếm
    public function search()
      {
          return redirect()->route('home', ['keyword' => $this->searchTerm]); // Chuyển hướng về trang home với tham số keyword
      }
    public function mount($quizAttemptId)
    {
        $this->quizAttemptId = $quizAttemptId;

        // Lấy dữ liệu lần làm bài hiện tại
        $this->quizAttempt = QuizAttempt::with('quiz.questions.options', 'answers')->find($this->quizAttemptId);

        // Tính tổng điểm
        $this->totalScore = $this->quizAttempt->score;

        // Tính tổng thời gian làm bài
        $this->totalTime = Carbon::parse($this->quizAttempt->started_at)
                            ->diffForHumans(Carbon::parse($this->quizAttempt->finished_at));

        // Đếm tổng số lần thi cho bài thi hiện tại
        $this->quizAttemptsCount = QuizAttempt::where('quiz_id', $this->quizAttempt->quiz_id)->count();

        // Lấy danh sách câu hỏi và trạng thái của từng câu hỏi
        $this->questions = $this->quizAttempt->quiz->questions->map(function ($question) {
            $answer = $this->quizAttempt->answers->where('question_id', $question->id)->first();

            // Xác định trạng thái đúng, sai, hoặc chưa chọn
            if ($answer) {
                // Kiểm tra nếu loại câu hỏi là "value"
                $correctOption = $question->options->where('is_correct', true)->first();
                if ($question->type === 'value') {
                    // Nếu là câu hỏi kiểu "value", so sánh trực tiếp user_answer với option_text của option đúng
                    $correctOption = $question->options->where('is_correct', true)->first(); // Lấy đáp án đúng
                    $isCorrect = $answer->user_answer == $correctOption->option_text; // Kiểm tra xem user_answer có khớp với đáp án đúng không
                } else {
                    // Nếu là câu hỏi dạng chọn (multiple choice), kiểm tra bằng is_correct của option
                    $isCorrect = $answer->option->is_correct ?? false;
                }

                // Đặt trạng thái là 'correct' hoặc 'incorrect' dựa trên $isCorrect
                $status = $isCorrect ? 'correct' : 'incorrect';

                // Lấy thông tin đáp án đã chọn và đáp án đúng
                $selectedOption = $answer->option->option_text ?? null; // Đáp án đã chọn (chỉ dùng cho câu hỏi dạng chọn)
                $correctAnswerContent = $correctOption ? $correctOption->option_text : null; // Nội dung đáp án đúng
            } else {
                $status = 'not_answered'; // Câu hỏi chưa được trả lời
                $selectedOption = null; // Không có đáp án nào đã chọn
                $correctAnswerContent = null; // Không có đáp án đúng
            }

            return [
                'id' => $question->id, // ID của câu hỏi
                'question' => $question->question_text, // Nội dung câu hỏi
                'selected_option' => $selectedOption, // Đáp án đã chọn
                'correct_answer' => $correctAnswerContent, // Đáp án đúng
                'type' => $question->type, // Đáp án đúng
                'status' => $status, // Trạng thái (đúng, sai, chưa chọn)
                'options' => $question->options->map(function ($option) {
                    return [
                        'id' => $option->id, // ID của tùy chọn
                        'text' => $option->option_text, // Nội dung của tùy chọn
                        'is_correct' => $option->is_correct, // Có phải là đáp án đúng không
                    ];
                }), // Thêm danh sách tùy chọn cho câu hỏi
            ];
        });


    }

    public function render()
    {
        return view('livewire.quiz-result', [
            'quizAttempt' => $this->quizAttempt,
            'totalScore' => $this->totalScore,
            'totalTime' => $this->totalTime,
            'questions' => $this->questions,
            'quizAttemptsCount' => $this->quizAttemptsCount, // Truyền dữ liệu cho view
        ]);
    }
}
