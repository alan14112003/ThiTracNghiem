<?php

namespace App\Http\Controllers;

use App\Models\Violation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validated = $request->validate([
            'room_participant_id' => 'required|integer',
            'left' => 'required|integer',
            'right' => 'required|integer',
            'up' => 'required|integer',
            'down' => 'required|integer',
            'multiple_people_count' => 'required|integer',
        ]);

        // Tìm record dựa trên room_participant_id
        $violation = Violation::where('room_participant_id', $validated['room_participant_id'])->first();

        if ($violation) {
            // Cập nhật nếu đã tồn tại
            $violation->update([
                'left' => $violation->left + $validated['left'],
                'right' => $violation->right + $validated['right'],
                'up' => $violation->up + $validated['up'],
                'down' => $violation->down + $validated['down'],
                'multiple_people_count' => $violation->multiple_people_count + $validated['multiple_people_count'],
            ]);
        } else {
            // Tạo mới nếu không tồn tại
            $violation = Violation::create($validated);
        }

        // Trả về kết quả
        return response()->json([
            'message' => 'Violation recorded successfully',
            'data' => $violation,
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function upload(Request $request)
    {
        // Kiểm tra xem có video hay không
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $originalName = $file->getClientOriginalName();

            // Lấy phần tên file mà không có đuôi (ví dụ: video.webm -> video)
            $fileNameWithoutExtension = pathinfo($originalName, PATHINFO_FILENAME);

            // Lấy thời gian hiện tại và định dạng theo kiểu "Y-m-d-H-i-s-u"
            $currentTime = Carbon::now()->format('Y-m-d-H-i-s-u');

            // Kết hợp tên file mới với thời gian hiện tại
            $newFileName = $currentTime . '-' . substr($fileNameWithoutExtension, 0, 20) . '.mp4';
            // Lưu video vào thư mục public hoặc storage
            $path = $request->file('video')->storeAs('videos', $newFileName,'public');

            // Trả về URL video
            return response()->json([
                'message' => 'Video uploaded successfully!',
                'video_url' => 'storage/' . $path,
            ]);
        }

        return response()->json(['message' => 'No video uploaded.'], 400);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
