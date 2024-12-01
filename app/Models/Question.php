<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['quiz_id', 'question_text', 'type'];

    // Quan hệ với bảng options
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    // Quan hệ ngược với bảng quizzes
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function correctOption()
    {
        return $this->hasOne(Option::class)->where('is_correct', true);
    }
}
