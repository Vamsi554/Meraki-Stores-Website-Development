<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accessories;

class AccessoriesController extends Controller
{
    public function index($accessoryType) {

        return redirect()->action('PagesController@featuredProductsDisplay');
    }

    public function show($accessoryType, $id) {

    }
}
