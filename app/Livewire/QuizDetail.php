<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\QuizAttempt;

class QuizDetail extends Component
{
    public $quizId; // ID của quiz hiện tại
    public $quiz; // Thông tin quiz hiện tại
    public $attemptCount; // Số lần làm quiz hiện tại
    public $otherQuizzes; // Danh sách các bài quiz khác
    public $searchTerm = ''; // Từ khóa tìm kiếm

    public function mount($quizId)
    {
        $this->quizId = $quizId;

        // Lấy thông tin quiz hiện tại
        $this->quiz = Quiz::with('questions.options')->find($this->quizId);

        // Lấy số lần làm quiz
        $this->attemptCount = QuizAttempt::where('quiz_id', $this->quizId)->count();

        // Lấy danh sách các quiz khác, loại trừ quiz hiện tại
        $this->otherQuizzes = Quiz::where('id', '!=', $this->quizId)->get();

    }
    public function search()
    {
        return redirect()->route('home', ['keyword' => $this->searchTerm]); // Chuyển hướng về trang home với tham số keyword
    }
    public function render()
    {
        return view('livewire.quiz-detail');
    }
}
