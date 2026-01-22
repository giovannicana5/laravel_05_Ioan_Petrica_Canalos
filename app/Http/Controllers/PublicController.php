<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }
    public function contactUs() {
        return view('contattaci');
    }
    public function submit(Request $request) {
        // dd($request);
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');
        Mail::to($email)->send(new ContactMail($name, $email, $usermessage));
        // dd($name, $email, $usermessage);
        // dd('controlla la tua casella di posta');
        // return redirect()->route('homepage')->with('status', 'Mail inviata con successo, sarai ricontattato al più presto');
        return redirect()->route('thank-you.page');
    }
    public function thankYou() {
        return view('thank-you');
    }
}
