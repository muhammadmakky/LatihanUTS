<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PopularController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/category', [CategoryController::class, 'index'])->name('category'); 
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show'); 

Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/writers/{writer:slug}', [WriterController::class, 'show'])->name('writer.show');

Route::get('/posts/{post:slug}', [HomeController::class, 'showPost'])->name('post.show');

Route::get('/popular', [PopularController::class, 'index'])->name('popular');