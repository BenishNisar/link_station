<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){

        return view("Home.contact");
    }


    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Send Email
    Mail::send('Home.emails.contact', [
        'name' => $request->name,
        'email' => $request->email,
        'messageText' => $request->message
    ], function ($message) {
        $message->to('benishnisarkhan56@gmail.com')
        ->cc('officework.weboctane@gmail.com')
        ->bcc('contact@linksstation.com.pk')
                ->subject('New Contact Form Message');
    });

    return back()->with('success', 'Your message has been sent successfully!');
}

}
