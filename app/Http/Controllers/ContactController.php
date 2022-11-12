<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact(Request $request){
        $d = $request->all();
        $request->validate([
            'name' => ['required','max:100'],
            'email' => ['required','email', 'max:100'],
            'subject' => ['required','min:4', 'max:255'],
            'message' => ['required','min:20', 'max:1000']
        ]);
        
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->cc(env('MAIL_TO_CONTACT'))
            ->send(new ContactMail($d));

        return redirect()->route('contact');
    }
}