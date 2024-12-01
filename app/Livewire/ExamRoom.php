<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ExamRoom as ExamRoomModel;
use App\Models\RoomParticipant;
use Illuminate\Support\Facades\Auth;

class ExamRoom extends Component
{
    public $roomCode;
    public $examRoom;
    public $participants;

    public function mount($roomCode)
    {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login'); // Chuyển hướng đến route đăng nhập nếu chưa đăng nhập
        }

        // Tìm phòng thi dựa vào room_code
        $this->examRoom = ExamRoomModel::where('room_code', $roomCode)->firstOrFail();

        // Lấy danh sách người tham gia phòng thi với trạng thái là 'pending'
        $this->participants = RoomParticipant::where('exam_room_id', $this->examRoom->id)
            ->where('status', 'pending') // Chỉ lấy những người tham gia có trạng thái là 'pending'
            ->with('user')
            ->get();

        // Kiểm tra nếu người dùng đã tham gia phòng thi
        $userId = Auth::id(); // Lấy ID của người dùng đã đăng nhập
        $participant = RoomParticipant::where('exam_room_id', $this->examRoom->id)
            ->where('user_id', $userId)
            ->first();

        // Nếu người dùng chưa tham gia phòng thi, thêm họ vào
        if (!$participant) {
            RoomParticipant::create([
                'exam_room_id' => $this->examRoom->id,
                'user_id' => $userId,
                'status' => 'pending', // Hoặc bất kỳ trạng thái nào bạn muốn
                'score' => 0, // Khởi tạo điểm số
            ]);
        }

    }
    public function startExam()
    {
        // Lấy room_code từ phòng thi
        $roomCode = $this->examRoom->room_code;

        // Tính thời gian kết thúc
        $startTime = new \Carbon\Carbon($this->examRoom->start_time);
        $endTime = $startTime->copy()->addMinutes($this->examRoom->duration); // Thêm độ dài bài thi
        // Kiểm tra nếu thời gian hiện tại đã vượt qua thời gian kết thúc
        if (now()->greaterThan($endTime)) {
            // Bạn có thể thêm một thông báo hoặc xử lý ở đây
            session()->flash('error', 'Thời gian thi đã kết thúc.'); // Thêm thông báo lỗi
            return redirect()->back(); // Không làm gì nữa
        }else {
            return redirect()->route('quiz.start', ['roomCode' => $roomCode]);

        }

        // Chuyển hướng đến route bắt đầu làm bài
    }

    public function render()
    {
        return view('livewire.exam-room', [
            'examRoom' => $this->examRoom,
            'participants' => $this->participants,
        ]);
    }
}
