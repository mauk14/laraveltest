<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        
        $contact = new Contact();
        $contact-> name = $req->input('name');
        $contact-> email = $req->input('email');
        $contact-> theme = $req->input('theme');
        $contact-> message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Message was added');
    }

    public function showOneMessage($id) {
        $contact = new Contact();
        return view('one-message' , ['data' => $contact->find($id)]); 
    }

    public function allData() {
        $contact = new Contact();
        return view('messages' , ['data' => $contact->all()]);
    }

    public function updateMessage($id) {
        $contact = new Contact();
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessagePost($id, ContactRequest $req) {
        
        $contact = Contact::find($id);
        $contact-> name = $req->input('name');
        $contact-> email = $req->input('email');
        $contact-> theme = $req->input('theme');
        $contact-> message = $req->input('message');

        $contact->save();

        return redirect()->route('message-data-one', $id)->with('success', 'Message was changed');
    }

    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('messages-data')->with('success', 'Message was changed');
    }
}
