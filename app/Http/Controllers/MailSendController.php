<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function sendMessage(Request $request)
    {
        $settings = Setting::find(1);
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        Mail::to('info@allesproducts.kz')->send(new \App\Mail\Mail($name, $email, $comment));
//        dd($settings);
        return view('send-ok', compact('settings'));
    }
}
