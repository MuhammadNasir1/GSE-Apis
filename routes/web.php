<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('Auth/login');
});
Route::get('/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/course', function () {
    return view('admin.course');
});
