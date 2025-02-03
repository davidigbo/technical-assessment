<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::post('/logout', function () {
   Auth::logout();
   return redirect('/home');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
