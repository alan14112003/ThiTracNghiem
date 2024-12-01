<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'classroom_id'];

    // Quan hệ ngược với Classroom
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
