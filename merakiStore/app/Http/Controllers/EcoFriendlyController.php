<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecoFriendly;

class EcoFriendlyController extends Controller
{
    public function index($ecoFriendlyType) {

        return redirect()->action('PagesController@featuredProductsDisplay');
    }

    public function show($ecoFriendlyType, $id) {

    }
}
