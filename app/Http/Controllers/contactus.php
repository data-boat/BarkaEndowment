<?php

namespace App\Http\Controllers;

use App\Models\Web;

use Illuminate\Http\Request;
use Mail;

class contactus extends Controller
{
    public function index()
    {
        $Web = Web::all();
        return view('contactus/create', ["Web" => $Web]);
    }
    public function mailContactForm(Request $request)
    {   
    
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'comment' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'comment' => $request->comment
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

       return redirect()->back()->withSuccess('Thanks for your message! We will get back to you soon!');
 
    }
}
