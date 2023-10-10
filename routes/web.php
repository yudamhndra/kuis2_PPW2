<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
