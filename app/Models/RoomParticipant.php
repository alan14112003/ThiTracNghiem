<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomParticipant extends Model
{
    use HasFactory;
    protected $fillable = ['exam_room_id', 'user_id', 'status', 'score'];

    // Quan hệ với bảng exam_rooms
    public function examRoom()
    {
        return $this->belongsTo(ExamRoom::class);
    }

    // Quan hệ với bảng users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với bảng results
    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
