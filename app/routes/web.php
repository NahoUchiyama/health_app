<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/calendar', [DisplayController::class, 'calendar'])->name('calendar');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile_edit', [ProfileController::class, 'update'])->name('profile.update');

    

});
