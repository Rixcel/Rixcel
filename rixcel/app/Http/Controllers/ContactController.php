<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller {

      public function getContact() {

       return view('user.kontak');
      }

     public function saveContact(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'no_telp' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->no_telp = $request->no_telp;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('success', 'Thank you for contact us!');

    }
}
