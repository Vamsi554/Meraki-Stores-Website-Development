<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectronicsController extends Controller
{
    public function index($electronicsType) {

        return redirect()->action('PagesController@featuredProductsDisplay');
    }

    public function show($electronicsType, $id) {

    }
}
