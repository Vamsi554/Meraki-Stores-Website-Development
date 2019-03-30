<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MomentosController extends Controller
{
  public function index($momentoType) {

      return redirect()->action('PagesController@featuredProductsDisplay');
  }

  public function show($momentoType, $id) {

  }
}
