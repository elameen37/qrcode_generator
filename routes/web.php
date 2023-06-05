<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactFormMail;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/contact',[ContactController::class, 'contact']);

// Route::get('/generate',[GenerateController::class, 'GenerateMethod']);   //->name('home.page');

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

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('send_mail', function () {
        $data=[
            "name" => "Zack Rocky",
            "email" => "testing@test.com",
            "subject" => "Connection Issue",
            "message" => "Hi, how do i retireve my code?"                   
        ];

    mail::to('mytest@meforyou.com')->send(new ContactFormMail($data));

    dd('sent successfully!');

    });

});