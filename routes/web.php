<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Login page as home
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Demo navigation - direct to views without controller
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tutorials', function () {
    return view('tutorials');
})->name('tutorials');

Route::get('/tutorial/{id}', function ($id) {
    return view('tutorial-details', ['id' => $id]);
})->name('tutorial.details');

Route::get('/documents', function () {
    return view('documents');
})->name('documents');

Route::get('/guidelines', function () {
    return view('guidelines');
})->name('guidelines');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');