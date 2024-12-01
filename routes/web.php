<?php

use App\Http\Controllers\PythonController;
use App\Http\Controllers\ViolationController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\QuizSubmit;
use App\Livewire\QuizPlay;
use App\Livewire\ExamRoom;
use App\Livewire\HomePage;
use App\Livewire\QuizDetail;
use App\Livewire\QuizResult;
use App\Livewire\QuizStart;
use App\Livewire\RoomResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', HomePage::class)->name('home');
Route::get('/quiz/start/{roomCode}', QuizStart::class)->name('quiz.start');
Route::get('/exam-room/{roomCode}', ExamRoom::class)->name('exam.room'); // Route vào phòng thi
Route::get('/quiz/result/{resultId}', RoomResult::class)->name('quiz.result'); // Route kết quả thi





Route::get('/quiz/single/result/{quizAttemptId}', QuizResult::class)->name('quiz.single.result'); // Route kết quả thi
Route::get('/quiz/detail/{quizId}', QuizDetail::class)->name('quiz.detail');
// Route cho quiz không cần phòng thi
Route::get('/quiz/{quizId}',  QuizPlay::class)->name('quiz.take'); // Route để làm quiz thường

// Route cho việc làm bài quiz
Route::post('/quiz/submit/{quizId}', QuizSubmit::class)->name('quiz.submit'); // Route để nộp bài quiz
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('/start-monitoring', [PythonController::class, 'startMonitoring']);
Route::post('/upload-camera-image', [CameraController::class, 'upload']);
