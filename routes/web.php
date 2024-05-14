<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
    
Route::get('/home',[PageController::class, 'index'])->name('home');
Route::get('/home',[PageController::class, 'index'])->name('about');
Route::get('/home',[PageController::class, 'index'])->name('contact');



