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
    Route::resource('admin/posts', AdminPostController::class)->names([
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'show' => 'admin.posts.show',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]);
    Route::resource('author/posts', AuthorPostController::class)->names([
        'index' => 'author.posts.index',
        'create' => 'author.posts.create',
        'store' => 'author.posts.store',
        'show' => 'author.posts.show',
        'edit' => 'author.posts.edit',
        'update' => 'author.posts.update',
        'destroy' => 'author.posts.destroy',
    ]);
    Route::get('/something', [PostController::class, 'something']);
    Route::get('/home', [PostController::class, 'index'])->name('home');
});

Auth::routes();

