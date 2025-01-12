<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::post('/', [HomePageController::class, 'store'])->name('home.store');
Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/register',function(){
    return view('register');
})->name('register');

