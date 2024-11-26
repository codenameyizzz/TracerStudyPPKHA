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

Route::get('/usersurvey', function () {
    return view('usersurvey');
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
Route::get('/admin', [adminNavController::class, 'showDashboard'])->name('dashboard');
Route::get('/admin/responden', [adminNavController::class, 'showRespondens'])->name('data.responden');
Route::get('/admin/statistik', [adminNavController::class, 'showStatistik'])->name('data.statistik');
Route::get('/admin/unggah-data', [adminNavController::class, 'showUnggah'])->name('data.unggah');
Route::get('/admin/unduh-data', [adminNavController::class, 'showUnduh'])->name('data.unduh');
Route::get('/admin/panduan-form', [adminNavController::class, 'showPanduan'])->name('data.panduan');
Route::get('/admin/faq', [adminNavController::class, 'showFAQ'])->name('data.faq');
Route::get('/admin/contact', [adminNavController::class, 'showContact'])->name('data.contact');
Route::get('/admin/user-survey', [adminNavController::class, 'showSurvey'])->name('user.survey');



// Questionnaire Submission
Route::post('/questionnaire/submit', [App\Http\Controllers\QuestionnaireController::class, 'submit'])
    ->name('questionnaire.submit');
