<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Link;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactAdd(Request $request){
      $contact = Contact::create([
        'address' => $request->address,
        'phone1' => $request->phone1,
        'phone2' => $request->phone2,
        'email' => $request->email,
      ]);

      return back();
    }

    public function contactRemove(){
      $contacts = Contact::all();
      foreach ($contacts as $contact){
        $contact->delete();
      }

      return back();
    }

    public function linkAdd(Request $request){
      $link = Link::create([
        'title' => $request->title,
        'link' => $request->link,
      ]);

      return back();
    }

    public function linkRemove(Request $request){
      $link = Link::find($request->id);
      $link->delete();
      return back();
    }
}
