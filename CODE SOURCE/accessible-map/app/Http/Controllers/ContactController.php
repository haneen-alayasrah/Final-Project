<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.contact');
    }

    public function store(ContactFormRequest $request)
    {
        $data = $request->validated();

        $contact = new Contact;
        $contact->sent_by = $data['sent_by'];
        $contact->number = $data['number'];
        $contact->email = $data['email'];
        $contact->message= $data['message'];
        $contact->save();

        return redirect('/contact')->with('message','Thank You For Your Message , You Will Be Answered As Soon As Possible');
    }
}
