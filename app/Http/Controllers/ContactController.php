<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Mail\ContactAutoReply;


class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email',
    'message' => 'required|string|min:10',
]);

//update the log so u can check whether the auto reply got send or not
\Log::info('Auto-reply target: ' . $validated['email']);

// Send to your own inbox
Mail::to('muhammadhafidz418@gmail.com')->send(new ContactMessage($validated));

// Send auto-reply to the user
Mail::to($validated['email'])->send(new ContactAutoReply($validated));

return back()->with('success', 'Your message has been sent!');
    }

}
