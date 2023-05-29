<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/',[ContactController::class, 'Index'])->name('home.page');
//Route::get('/generate',[GenerateController::class, 'GenerateMethod']);   //->name('home.page');

// Route::get('/generate', function () {
//     return view('generate');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/generate', function () {
        return view('generated_qr');
    })->name('generated_qr');
});
