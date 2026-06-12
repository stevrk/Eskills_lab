<?php

use Illuminate\Support\Facades\Route;

// Login page as home
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Main Tutorials Page - Current semester only (Year 3, Semester 1)
Route::get('/tutorials', function () {
    return view('tutorials-current');
})->name('tutorials');

// Archive/Review Tutorials - Previous years with filtering
Route::get('/tutorials/review', function () {
    return view('tutorials-review');
})->name('tutorials.review');

// Tutorial Details
Route::get('/tutorial/{id}', function ($id) {
    return view('tutorial-details', ['id' => $id]);
})->name('tutorial.details');

// Documents Library
Route::get('/documents', function () {
    return view('documents');
})->name('documents');

// Clinical Guidelines
Route::get('/guidelines', function () {
    return view('guidelines');
})->name('guidelines');

// Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');