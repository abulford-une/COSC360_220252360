<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

