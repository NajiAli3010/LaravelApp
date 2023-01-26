<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerFeedback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index']);
Route::post('/home', [App\Http\Controllers\ControllerFeedback::class, 'store']);
Route::get('/admin', [App\Http\Controllers\Admin\FeedbackController::class, 'index']);
Route::get('/success', [App\Http\Controllers\User\HomeController::class, 'success']);


