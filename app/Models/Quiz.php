<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'total_questions', 'duration', 'level', 'image']; // Thêm image vào $fillable

    // Quan hệ với bảng questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    // Quan hệ với bảng exam_rooms
    public function examRooms()
    {
        return $this->hasMany(ExamRoom::class);
    }

    // Quan hệ với bảng quiz_attempts
    public function quizAttempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

}
