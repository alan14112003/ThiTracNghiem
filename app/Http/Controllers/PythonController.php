<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function startMonitoring($userId = 1, $examId = 1)
    {
        $client = new Client();

        try {


            return view('video' , ['url' => 'http://127.0.0.1:5555/video_feed?user_id=1&exam_id=3']);

        } catch (\Exception $e) {
            \Log::error('Error connecting to Flask server: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to connect to Flask server', 'details' => $e->getMessage()], 500);
        }
    }


}
