<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            return redirect()->route('home'); // Chuyển hướng tới trang chính sau khi đăng nhập thành công
        } else {
            session()->flash('error', 'Email hoặc mật khẩu không chính xác');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
