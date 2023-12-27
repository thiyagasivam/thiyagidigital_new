<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send an email
        Mail::to('kannasivamps@gmail.com') // Replace 'your@gmail.com' with your Gmail address
            ->send(new ContactFormMail($validatedData));

        // You can also save the form data to a database or perform other actions here

        // Redirect back with a success message
        // return redirect()->route('contact.thankyou2')->with('success', 'Form submitted successfully!');

        return view('contact.thankyou2');

    }
}
