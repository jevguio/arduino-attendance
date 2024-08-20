<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendaceController;
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
});

Route::get('/attendace', [AttendaceController::class,'index'])->name('attendace.view');
Route::get('/attendace/create', [AttendaceController::class,'index'])->name('attendace.create');
Route::post('/attendace', [AttendaceController::class,'post'])->name('attendace.post');
Route::post('/attendace/edit', [AttendaceController::class,'post'])->name('attendace.edit');
Route::post('/attendace/delete', [AttendaceController::class,'post'])->name('attendace.destroy');
require __DIR__.'/auth.php';
