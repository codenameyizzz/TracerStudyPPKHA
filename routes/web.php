<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
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

Route::get('/signin', function () {
    return view('signin');
});

Route::post('/questionnaire/submit', 'QuestionnaireController@submit')
    ->name('questionnaire.submit');
