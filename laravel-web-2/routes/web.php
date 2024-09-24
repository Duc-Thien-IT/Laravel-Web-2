<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KafkaController;
use Junges\Kafka\Facades\Kafka;

Route::get('/', function () {
    return view('welcome');
}); //trang chủ

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::post('/send-message', [KafkaController::class, 'sendMessage']);
Route::get('/send-message', function () {
    Kafka::publishOn('your-kafka-topic', [
        'key' => 'your-key',
        'body' => ['your' => 'message'],
    ]);

    return response()->json(['status' => 'Message sent to Kafka']);
});