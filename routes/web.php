<?php

use App\Http\Controllers\adminNavController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/questionnaire', function () {
    return view('questionnaire');
})->name('questionnaire');

Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication Routes
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
Route::post('/logout', [AuthController::class, 'getLogout'])->name('logout');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [adminNavController::class, 'showDashboard'])->name('dashboard');
    Route::get('/responden', [adminNavController::class, 'showRespondens'])->name('data.responden');
    Route::get('/statistik', [adminNavController::class, 'showStatistik'])->name('data.statistik');
    Route::get('/unggah-data', [adminNavController::class, 'showUnggah'])->name('data.unggah');
    Route::get('/unduh-data', [adminNavController::class, 'showUnduh'])->name('data.unduh');
    Route::get('/panduan-form', [adminNavController::class, 'showPanduan'])->name('data.panduan');
    Route::get('/faq', [adminNavController::class, 'showFAQ'])->name('data.faq');
    Route::get('/contact', [adminNavController::class, 'showContact'])->name('data.contact');
});

// Questionnaire Submission
Route::post('/questionnaire/submit', [App\Http\Controllers\QuestionnaireController::class, 'submit'])
    ->name('questionnaire.submit');
