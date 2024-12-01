<?php

namespace App\Livewire;

use Livewire\Component;

class QuizSubmit extends Component
{
    public $quizId;
    public $answers = [];

    public function mount($quizId)
    {
        $this->quizId = $quizId;
    }

    public function submitQuiz()
    {
        // Logic để lưu kết quả quiz vào database
        // Bạn cần xác định cách lưu câu trả lời và xử lý kết quả
        // Có thể dùng Eloquent để lưu vào bảng kết quả tương ứng

        // Sau khi nộp bài, có thể chuyển hướng đến trang kết quả
        session()->flash('message', 'Bạn đã nộp bài thành công!');
        return redirect()->route('quiz.result', ['roomId' => $this->quizId]); // Chuyển hướng đến trang kết quả
    }

    public function render()
    {
        return view('livewire.quiz-submit');
    }
}
