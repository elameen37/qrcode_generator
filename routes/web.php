<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactFormMail;
use Illuminate\http\Request;

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
    })->name('contact.show');

    Route::post('/contact', function () {
        return view('contact');
    })->name('contact.send');

    Route::get('send_mail', function (Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message                  
        ];
    
        Mail::to('mytest@meforyou.com')->send(new ContactFormMail($data));
        return back()->with('message_sent', 'Your message has been sent successfully');
    
        //dd('sent successfully!');

    });

});