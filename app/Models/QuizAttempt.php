<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'quiz_id', 'score', 'status', 'started_at', 'finished_at', 'video_url', 'violate_count'];

    // Quan hệ với bảng users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với bảng quizzes
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Quan hệ với bảng answers
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
