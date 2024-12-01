<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    // Quan hệ với Học sinh
    public function students()
    {
        return $this->hasMany(User::class, 'class_id');
    }
}
