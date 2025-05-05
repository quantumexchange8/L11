<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Models\Contact;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the request
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contactCreated = new Contact([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'company' => $request->company,
            'position' => $request->position,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    
        Mail::to("hew20032018@gmail.com")->send(new ContactEmail($contactCreated));

        return redirect()->route('contact-us')->with('contactSent', 'Message has been sent successfully.');
    }

}
