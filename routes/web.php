<?php

use App\Http\Controllers\adminNavController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/questionnaire', function () {
    return view('questionnaire');
})->middleware(['role:alumni'])->name('questionnaire');

Route::get('/usersurvey', function () {
    return view('usersurvey');
})->name('usersurvey');  // Tidak ada middleware 'auth'

Route::get('/report', function () {
    return view('report');
})->name('report');  // Tidak ada middleware 'auth'

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
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin', [adminNavController::class, 'showDashboard'])->name('dashboard');
    Route::get('/admin/responden', [adminNavController::class, 'showRespondens'])->name('data.responden');
    Route::get('/admin/statistik', [adminNavController::class, 'showStatistik'])->name('data.statistik');
    Route::get('/admin/unggah-data', [adminNavController::class, 'showUnggah'])->name('data.unggah');
    Route::get('/admin/unduh-data', [adminNavController::class, 'showUnduh'])->name('data.unduh');
    Route::get('/admin/panduan-form', [adminNavController::class, 'showPanduan'])->name('data.panduan');
    Route::get('/admin/faq', [adminNavController::class, 'showFAQ'])->name('data.faq');
    Route::get('/admin/contact', [adminNavController::class, 'showContact'])->name('data.contact');
    Route::get('/admin/user-survey', [adminNavController::class, 'showSurvey'])->name('user.survey');

    // Logout route for admin
    Route::post('/admin/logout', [AuthController::class, 'getLogout'])->name('admin.logout');
});

// Questionnaire Submission
Route::post('/questionnaire/submit', [App\Http\Controllers\QuestionnaireController::class, 'submit'])
    ->middleware(['auth', 'role:alumni'])
    ->name('questionnaire.submit');
