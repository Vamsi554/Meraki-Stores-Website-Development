<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requestSample;

class RequestSampleController extends Controller
{
  public function store(Request $request) {

    $this->validate($request, [

              'product' => 'required|in:hoodie, sportsTees, sweatShirts, jackets',
              'size' => 'required|in: S,M,L,XL,XXL,XXXL',
              'name' => 'required|min:5|max:35',
              'email' => 'required|email|unique:users',
              'contact' => 'required|numeric',
              'organization' => 'required',
              'address' => 'required',
              'comments' => 'required'
           ],
           [
              'product.required' => 'Select Product',
              'product.in' => 'Select Product',
              'size.required' => 'Select Size',
              'size.in' => 'Select Size',
              'name.required' => 'Specify your Name',
              'name.min' => 'Name must be atleast 5 characters',
              'name.max' => 'Name may not be greater than 35 characters',
              'email.required' => 'Specify your Email Address',
              'contact.required' => 'Specify your Contact',
              'contact.numeric' => 'Specify Valid Contact Number',
              'organization.required' => 'Specify your Organization',
              'address.required' => 'Sepcify your Address',
              'comments.required' => 'Specify any additional comments'
           ]);

    $requestSample = new requestSample();
    $requestSample->product = $request->product;
    $requestSample->size = $request->size;
    $requestSample->name = $request->name;
    $requestSample->email = $request->email;
    $requestSample->contact = $request->contact;
    $requestSample->organization = $request->organization;
    $requestSample->address = $request->address;
    $requestSample->comments = $request->comments;
    $requestSample->save();

    return back()->with('success', 'Your Sample Request Has Been Processed! We\'ll Reach Out To You Soon!');

  }
}
