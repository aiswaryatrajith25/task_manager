<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/forgotpassword', function(){
    return view('forgotpassword');
})->name('forgotpassword');

Route::get('/register', function () {
    return view('register');
})->name('register');

