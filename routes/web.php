<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Author\PostController as AuthorPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class)->names([
        'index' => 'posts.index',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'show' => 'posts.show',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy',
    ]);
    Route::resource('author/posts', AuthorPostController::class)->names([
        'index' => 'author.index',
        'create' => 'author.create',
        'store' => 'author.store',
        'show' => 'author.show',
        'edit' => 'author.edit',
        'update' => 'author.update',
        'destroy' => 'author.destroy',
    ]);
    Route::get('/something', [PostController::class, 'something']);
    Route::get('/home', [PostController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth', 'admid']], function() {
    Route::resource('admin/posts', AdminPostController::class)->names([
        'index' => 'admin.index',
        'create' => 'admin.create',
        'store' => 'admin.store',
        'show' => 'admin.show',
        'edit' => 'admin.edit',
        'update' => 'admin.update',
        'destroy' => 'admin.destroy',
    ]);
});

Auth::routes();

