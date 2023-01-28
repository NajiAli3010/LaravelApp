<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/admin', [FeedbackController::class, 'index']);

});

Route::middleware(['auth', 'user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/feeds', [HomeController::class, 'feeds'])->name('user.feeds');
    Route::post('/home', [FeedbackController::class, 'store']);

});

Auth::routes();