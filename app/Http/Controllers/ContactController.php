<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        $data=[
            'subject'=>'New Contact Message',
            'body'=>'Message from',
            'path'=>'/public/name.pdf'
        ];

        Mail::to('elameen37.io@gmail.com')->send(new ContactFormMail($data));
        
        return 'Message sent successfully';

    }
}
