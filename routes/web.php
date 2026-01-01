<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
})->name('login'); 

Route::get('/register', function () {
    return view('register');
})->name('register'); 
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
use App\Http\Controllers\AuthController; // 
use Illuminate\Support\Facades\Route;



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



