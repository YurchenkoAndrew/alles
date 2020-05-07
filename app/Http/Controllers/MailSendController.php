<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function sendMessage(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        Mail::to('andrew@wsa.kz')->send(new \App\Mail\Mail($name, $email, $comment));
    }
}
