<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/tentangkami', function () {
        return view('about');
    })->name('tentangkami');
    Route::get('/jenjang', function () {
        return view('jenjang')->with('title', 'Jenjang');
    })->name('jenjang');
    Route::get('/jenjang/sd', function () {
        return view('jenjang.sd');
    })->name('jenjang.sd');
    Route::get('/form-register', [RegistrationController::class, 'showRegistrationForm'])->name('form-register');
    Route::post('/form-register', [RegistrationController::class, 'processRegistration']);
    Route::get('/subject', [SubjectController::class, 'showSubjects'])->name('subject');
    Route::post('/subject', [SubjectController::class, 'getSubjects']);
    Route::resource('mentors', MentorController::class);
    Route::post('/payment', [RegistrationController::class, 'payment'])->name('payment');
});


// Route untuk menyimpan data registrasi


