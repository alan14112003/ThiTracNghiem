<?php

namespace App\Http\Controllers;

use ElephantIO\Client;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function upload(Request $request)
    {
        // Lấy hình ảnh Base64 từ request
        $imageData = $request->input('image');

        // Kiểm tra dữ liệu hình ảnh
        if (!$imageData) {
            return response()->json(['error' => 'No image data provided'], 400);
        }

        // Loại bỏ tiền tố 'data:image/jpeg;base64,' nếu có
        $base64Image = preg_replace('/^data:image\/\w+;base64,/', '', $imageData);
        $base64Image = str_replace(' ', '+', $base64Image);

        // Kết nối tới Python server qua WebSocket
        $serverUrl = "http://54.167.60.89:5555";
        $roomParticipantId = "test_participant_001";

        $client = new Client(new Version($serverUrl));
        try {
            $client->initialize();

            // Gửi dữ liệu
            $data = [
                'roomParticipantId' => $roomParticipantId,
                'image' => $base64Image,
            ];
            $client->emit('frame', $data);

            $client->close();
            return response()->json(['success' => 'Image sent to Python server'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
