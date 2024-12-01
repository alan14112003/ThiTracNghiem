<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = ['room_participant_id', 'total_score', 'correct_answers', 'wrong_answers','violations'];

    // Quan hệ ngược với bảng room_participants
    public function roomParticipant()
    {
        return $this->belongsTo(RoomParticipant::class);
    }
}
