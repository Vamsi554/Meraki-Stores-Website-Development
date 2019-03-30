<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactUs;

class ContactUsController extends Controller
{
    public function store(Request $request) {

      $this->validate($request, [

                'name' => 'required|min:5|max:35',
                'email' => 'required|email|unique:users',
                'contact' => 'required|numeric',
                'message' => 'required'
             ],
             [
                'name.required' => 'Specify your Name',
                'name.min' => 'Name must be atleast 5 characters',
                'name.max' => 'Name may not be greater than 35 characters',
                'email.required' => 'Specify your Email Address',
                'contact.required' => 'Specify your Contact',
                'contact.numeric' => 'Specify Valid Contact Number',
                'message.required' => 'Leave a message'
             ]);

      $contactUs = new contactUs();
      $contactUs->name = $request->name;
      $contactUs->email = $request->email;
      $contactUs->contact = $request->contact;
      $contactUs->message = $request->message;
      $contactUs->save();
      
      return back()->with('success', 'Thank You For Contacting Us! We\'ll Reach Out To You!');

    }
}
