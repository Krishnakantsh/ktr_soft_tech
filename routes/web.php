<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


// Admin routes

Route::
prefix('admin')
->controller(AdminController::class)
->middleware(['auth','verified'])
->group(function(){
    Route::get('/dashboard', 'index')->name('admin.dashboard');
});


//. Authentication routes for admin

Route::
prefix('admin')
->controller(AdminController::class)
->group(function(){
    Route::get('/login', 'login')->name('admin.login');
    Route::get('/signup', 'signup')->name('admin.signup');
    Route::get('/reset-pass', 'reset_pass')->name('admin.reset.pass');
    Route::get('/forget-pass', 'forget_pass')->name('admin.forget.pass');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
