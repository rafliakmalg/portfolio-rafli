<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Process the contact message (e.g., send an email or store in the database)
        // Here's an example using Laravel's Mail facade:
        Mail::raw($data['message'], function ($mail) use ($data) {
            $mail->from($data['email'], $data['name'])
                 ->to('your-email@example.com')
                 ->subject('New Contact Message');
        });

        // Redirect back with a success message
        return back()->with('success', 'Thank you for contacting us!');
    }
}
