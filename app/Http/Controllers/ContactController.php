<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
 function sendEmail(Request $request){
        $data = $request->only('name','email','subject','message');
        // $to=$request->to;
        // $msg=$request->message;
        // $subject=$request->subject;
        Mail::to('tanyagulati783@gmail.com')->send(new ContactFormSubmitted($data));
        return redirect()->back()->with('success','Your query is submitted!');
    }
   
}
