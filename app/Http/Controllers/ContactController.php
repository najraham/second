<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;

class ContactController extends Controller
{
    public function editContact(Request $request){
        $contact = ContactInfo::find($request->input('id'));

        $contact->address = $request->input('address');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->website = $request->input('website');
        $contact->save();

        return [
            'contact' => $contact,
            'message' => "Data updated successfully!",
        ];
    }
}
