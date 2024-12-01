<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'class_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function quizAttempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    // Quan hệ với bảng exam_rooms (người tạo phòng thi)
    public function createdRooms()
    {
        return $this->hasMany(ExamRoom::class, 'created_by');
    }

    // Quan hệ với bảng room_participants
    public function roomParticipants()
    {
        return $this->hasMany(RoomParticipant::class);
    }
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'class_id');
    }
}
