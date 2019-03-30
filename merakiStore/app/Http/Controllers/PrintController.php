<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
  public function index($printType) {

      return redirect()->action('PagesController@featuredProductsDisplay');
  }

  public function show($printType, $id) {

  }
}
