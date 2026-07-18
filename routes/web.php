<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/uastec', function () {
    return view('uastec');
});

Route::get('/imsc', function () {
    return view('imsc');
});

Route::get('/mo', function () {
    return view('mo');
});

Route::get('/ibcc', function () {
    return view('ibcc');
});