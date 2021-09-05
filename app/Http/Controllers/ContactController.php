<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        if ($request->has('sendemail')) {
 
        $details = [
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'msg'=>$request->msg
        ];
        $mailsend = Mail::to('dptdey95@gmail.com')->send(new ContactMail($details));
        if ($mailsend) {
            return back('')->with('message','Email send Successfully !!');
          }
          else{
            return back('')->with('message','Email send Successfully !!');
          }
    }
    }
}
