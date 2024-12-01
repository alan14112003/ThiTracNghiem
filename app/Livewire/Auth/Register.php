<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Models\Classroom;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $class_id; // Thêm trường để chọn lớp học

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'class_id' => 'required|exists:classrooms,id', // Xác thực rằng lớp học tồn tại
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'class_id' => $this->class_id, // Lưu lớp học
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.auth.register', [
            'classrooms' => Classroom::all(), // Lấy danh sách các lớp học
        ]);
    }
}
