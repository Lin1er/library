<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Models\Book;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing', [
        'title' => 'Home',
    ]);
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('users', 'AdminController@users')->name('admin.users');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin');
    Route::post('/admin/books/create', [BookController::class, 'store'])->name('admin');


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
    Route::post('/logout', [LoginController::class, 'logout']);

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