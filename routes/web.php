<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing', [
        'title' => 'Home',
    ]);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/{id}', [BookController::class, 'show'])->name('book');

Route::get('/blog', function () {
    return view('blog.index', [
        'title' => 'Blog',
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('book.books', [
        'title' => $category->name,
        'books' => $category->book
    ]);
});