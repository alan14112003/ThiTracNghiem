<?php
use App\Http\Controllers\ViolationController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

Route::post('/violations', [ViolationController::class, 'store']);
Route::post('/upload-video', [ViolationController::class, 'upload']);
