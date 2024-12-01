<?php

use App\Http\Controllers\adminNavController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionnaireController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('home');

// Rute untuk kuisioner, mengarahkan ke halaman identitas
Route::get('/questionnaire', function () {
    return view('questionnaire.identity'); // Mengarahkan ke form identitas
})->middleware(['role:alumni'])->name('identity');

// Menangani pengiriman status kuisioner
Route::post('/questionnaire/status', [QuestionnaireController::class, 'storeStatus'])->name('questionnaire.storeStatus');

// Rute untuk halaman kuisioner berdasarkan status
Route::get('/questionnaire/form-bekerja', function () {
    return view('questionnaire.form-bekerja');  // Halaman jika status Bekerja
})->middleware(['role:alumni'])->name('questionnaire.form-bekerja');

Route::get('/questionnaire/form-belum-bekerja', function () {
    return view('questionnaire.form-belum-bekerja');  // Halaman untuk status Belum memungkinkan bekerja
})->middleware(['role:alumni'])->name('questionnaire.form-belum-bekerja');

Route::get('/questionnaire/form-wiraswasta', function () {
    return view('questionnaire.form-wiraswasta');  // Halaman untuk status Wiraswasta
})->middleware(['role:alumni'])->name('questionnaire.form-wiraswasta');

Route::get('/questionnaire/form-melanjutkan-pendidikan', function () {
    return view('questionnaire.form-melanjutkan-pendidikan');  // Halaman untuk status Melanjutkan Pendidikan
})->middleware(['role:alumni'])->name('questionnaire.form-melanjutkan-pendidikan');

Route::get('/questionnaire/form-mencari-kerja', function () {
    return view('questionnaire.form-mencari-kerja');  // Halaman untuk status Mencari Kerja
})->middleware(['role:alumni'])->name('questionnaire.form-mencari-kerja');

// // Rute default jika status tidak dikenali
// Route::get('/questionnaire/default', function () {
//     return view('questionnaire.default');  // Halaman default jika status tidak dikenali
// })->name('questionnaire.default');

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
