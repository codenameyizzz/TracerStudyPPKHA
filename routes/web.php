<?php

use App\Http\Controllers\adminNavController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
});

Route::get('/questionnaire', function () {
    return view('questionnaire');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
Route::post('/logout', [AuthController::class, 'getLogout'])->name('logout');

// Admin Routes
Route::get('/admin', [adminNavController::class, 'show'])->name('admin');

// Questionnaire Submission
Route::post('/questionnaire/submit', [App\Http\Controllers\QuestionnaireController::class, 'submit'])
    ->name('questionnaire.submit');
