<?php

namespace Alamindev27\ContactForm\Http\Controllers;

use Alamindev27\ContactForm\Mail\InquiryEmail;
use Alamindev27\ContactForm\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends BaseController
{
    public function create()
    {
        return view('contactform::create');
    }

    public function submit(Request $request) {

        $validated = $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | email',
            'subject' => 'required | string | max:255',
            'message' => 'required | string | max:255'
        ]);

        Contact::create($validated);

        $admin_email = \config('contactform.admin_email');

        if ($admin_email === null || $admin_email === '') {
            echo 'The value of admin email not set. ';
        }else{
            Mail::to($admin_email)->send(new InquiryEmail($validated));
        }

        return redirect()->back()->with('success', 'Inquirey sent, Please wait for response.');
    }
}
