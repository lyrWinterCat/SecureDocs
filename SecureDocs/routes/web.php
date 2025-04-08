<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DocumentController;
use App\Http\Middleware\CheckDeviceId; // 미들웨어 클래스 직접 임포트

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/register-device', [DeviceController::class, 'showForm']);
    Route::post('/register-device', [DeviceController::class, 'register']);
});

// 미들웨어를 클래스 이름으로 직접 참조
Route::middleware(['auth', CheckDeviceId::class])->group(function () {
    Route::get('/documents', [DocumentController::class, 'index']);
    Route::get('/documents/{id}/download', [DocumentController::class, 'download']);
});

require __DIR__.'/auth.php';
