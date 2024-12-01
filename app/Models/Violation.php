<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_participant_id',
        'left',
        'right',
        'up',
        'down',
        'multiple_people_count',
    ];
}
