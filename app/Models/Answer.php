<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = ['quiz_attempt_id', 'question_id', 'option_id', 'user_answer'];

    // Quan hệ với bảng quiz_attempts
    public function quizAttempt()
    {
        return $this->belongsTo(QuizAttempt::class);
    }

    // Quan hệ với bảng questions
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Quan hệ với bảng options
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
