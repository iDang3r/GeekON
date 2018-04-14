<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Phone;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function addForm($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        return view('add_phone', ['contact' => $contact]);
    }

    public function add($contact_id, Request $request)
    {
        $contact = Contact::findOrFail($contact_id);
        $request->validate([
            'phone' => 'required',
        ]);
        $phone = new Phone();
        $phone->phone = $request->phone;
        $phone->contact_id = $contact_id;
        $phone->save();
        return redirect('/contact/'.$contact_id);
    }

    public function delete($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();
        return redirect('/contact/'.$phone->contact->id);
    }
}
