<?php

namespace App\Http\Controllers;

use App\Contact;
use App\site;
use Illuminate\Http\Request;

class sitesController extends Controller
{
  public function addForm($contact_id)
  {
      $contact = Contact::findOrFail($contact_id);
      return view('add_site', ['contact' => $contact]);
  }

  public function add($contact_id, Request $request)
  {
      $contact = Contact::findOrFail($contact_id);
      $request->validate([
          'site' => 'required',
      ]);
      $site = new site();
      $site->site = $request->site;
      $site->contact_id = $contact_id;
      $site->save();
      return redirect('/contact/'.$contact_id);
  }

  public function delete($id)
  {
      $site = site::findOrFail($id);
      $site->delete();
      return redirect('/contact/'.$site->contact->id);
  }
}
