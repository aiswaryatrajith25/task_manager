<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/forgotpassword', function(){
    return view('forgotpassword');
})->name('forgotpassword');

Route::get('/test', function () {
    return 'Route works!';
});

