<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/article/{article_id}', [PagesController::class, 'article'])->name('article');
Route::post('/comment', [PagesController::class, 'comment'])->name('comment');
Route::get('/admin/login', [AuthController::class, 'index'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('auth.login');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', [ContactsController::class, 'index'])->name('admin.home');
    Route::resource('/blog', ArticlesController::class);
});