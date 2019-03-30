<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
  public function index($utilityType) {

      return redirect()->action('PagesController@featuredProductsDisplay');
  }

  public function show($utilityType, $id) {

  }
}
