<?php

namespace App\Http\Controllers;

use App\Models\SiteContact;
use Illuminate\Http\Request;

class Contatc extends Controller
{
    public function contatc(Request $request){
       
        $contact = new SiteContact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->contact_reason = $request->input('reason');
        $contact->message = $request->input('message');
        print_r($contact->getAttributes());
        $contact->save();

        
        return view('site/contact');
    }  
}

