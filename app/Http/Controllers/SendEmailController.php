<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function index(){
        return view('send_email');
    }

    function send(Request $request){
        $this->validate($request, [
            'name'          =>          'required',
            'email'         =>          'required|email',
            'phone'         =>          'required',
            'message'       =>          'required'
        ]);
        
        $data = array(
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'phone'         =>  $request->phone,
            'message'       =>  $request->message
        );

        Mail::to('cyborgitweb@gmail.com')->send(new SendMail($data));

        return back()->with('success', 'Thanks for contacting us!');
    }
}
