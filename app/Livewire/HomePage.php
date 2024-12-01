<?php

namespace App\Livewire;

use App\Models\ExamRoom;
use Livewire\Component;
use App\Models\Quiz;

class HomePage extends Component
{
    public $quizzes; // Danh sách bài thi
    public $searchTerm = ''; // Biến để lưu từ khóa tìm kiếm
    public $room_code;

    public function joinRoom()
    {
        // Kiểm tra mã phòng thi
        $examRoom = ExamRoom::where('room_code', $this->room_code)->first();

        if (!$examRoom) {
            session()->flash('error', 'Mã phòng thi không tồn tại.');
            return;
        }

        // Điều hướng tới trang phòng thi
        return redirect()->route('exam.room', ['roomCode' => $this->room_code]);
    }
    public function mount() // Lấy dữ liệu khi component khởi tạo
    {
        if (request()->has('keyword')) {
            $this->searchTerm = request()->get('keyword'); // Gán giá trị từ URL vào searchTerm
            $this->quizzes = Quiz::where('title', 'like', '%' . $this->searchTerm . '%')->get(); // Tìm kiếm bài thi theo tiêu đề
        } else {
            $this->quizzes = Quiz::all(); // Lấy tất cả bài thi nếu không có tìm kiếm
        }
    }

    public function updatedSearchTerm() // Phương thức được gọi khi từ khóa tìm kiếm thay đổi
    {
        $this->quizzes = Quiz::where('title', 'like', '%' . $this->searchTerm . '%')->get(); // Tìm kiếm bài thi theo tiêu đề
    }

    public function render()
    {
        return view('livewire.home-page');
    }

    public function alertSuccess()
    {
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Created Successfully!',
            'text' => 'It will list on users table soon.'
        ]);
    }
}
