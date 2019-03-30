<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
      return view('index');
  }

  public function bulkOrderEnquiry()
  {
      return view('bulkOrderEnquiry');
  }

  public function aboutUs() {

      return view('aboutUs');
  }

  public function contactUs() {

      return view('contactUs');
  }

  public function businessEnquiry() {

      return view('businessEnquiry');
  }

  public function faqs() {

      return view('faqs');
  }

  public function customersFeedback() {

      return view('customersFeedback');
  }

  public function termsAndConditions() {

      return view('termsConditions');
  }

  public function myAccount() {

      return view('myAccount');
  }

  public function products() {

      return view('products');
  }

  public function featuredProductsDisplay() {

      return view('sampleProducts');
  }

  public function displayDesignTemplates() {

      return view('sampleTemplates');
  }

  public function requestForSample() {

      return view('requestSample');
  }

  public function meetTeam() {

      return view('ourTeam');
  }

  public function designLab() {

      return view('customDesignTool');
  }

}
