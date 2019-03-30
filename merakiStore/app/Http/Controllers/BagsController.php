<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bags;

class BagsController extends Controller
{
    public function index($bagType) {

        return redirect()->action('PagesController@featuredProductsDisplay');
    }

    public function show($bagType, $id) {

    }
}
