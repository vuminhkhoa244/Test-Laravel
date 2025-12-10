<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World from Laravel!';
});
Route::get('/greet', [App\Http\Controllers\MyController::class, 'greet']);
Route::get('/hello', function () {
    return view('hello'); 
});


