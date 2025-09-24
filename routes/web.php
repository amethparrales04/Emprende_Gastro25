<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/conoce', function () {
    return view('conoce');
})->name('conoce');


Route::get('/dashboard', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','admin')->group(function () {
    Route::get('/addcategory', [AdminController::class, 'addCategory'])->name('admin.addcategory');
    Route::post('/addcategory', [AdminController::class, 'postAddCategory'])->name('admin.postaddcategory');
    
});

require __DIR__.'/auth.php';
