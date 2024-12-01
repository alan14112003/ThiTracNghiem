<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Result;
use App\Models\RoomParticipant;

class RoomResult extends Component
{
    public $resultId; // ID của kết quả
    public $result; // Dữ liệu kết quả
    public $roomParticipantsResults; // Danh sách kết quả của các room participant
    public $quiz; // Thông tin quiz
    public function mount($resultId)
    {
        $this->resultId = $resultId;

        // Lấy dữ liệu kết quả từ database
        $this->result = Result:: find($this->resultId);

        if ($this->result) {
            // Lấy danh sách kết quả của các room participant có room id tương tự
            $roomId = $this->result->roomParticipant->examRoom->id; // Lấy room id từ room participant
            $this->roomParticipantsResults = Result::whereHas('roomParticipant', function ($query) use ($roomId) {
                $query->where('exam_room_id', $roomId);
            })
            ->orderBy('total_score', 'desc') // Sắp xếp theo điểm số cao nhất
            ->limit(10) // Giới hạn 10 kết quả
            ->get();
            $this->quiz = $this->result->roomParticipant->examRoom->quiz; // Lấy thông tin quiz từ examRoom

        } else {
            $this->roomParticipantsResults = collect(); // Nếu không tìm thấy kết quả, trả về một collection rỗng
        }
    }

    public function render()
    {
        return view('livewire.room-result', [
            'result' => $this->result,
            'roomParticipantsResults' => $this->roomParticipantsResults,
            'quiz' => $this->quiz, // Truyền thông tin quiz cho view

        ]);
    }
}
