<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

     function save_contact(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->name = $req['name'];
        $contact->subject = $req['subject'];
        $contact->email = $req['email'];
        $contact->message = $req['message'];

        $contact->save();
  
        return redirect()->route('welcome')->with('success', "Message enregistré avec succès");
    }
}
