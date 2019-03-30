<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stationary;

class StationaryController extends Controller
{
    public function index($stationaryType) {

        // Re-directing temporarily
        return redirect()->action('PagesController@featuredProductsDisplay');

        $stationary = stationary::select('stationary_product_id', 'stationary_type', 'description', 'price_per_unit_descr', 'additional_descr', 'img_main_view_loc')
                      ->where('stationary_type', $stationaryType)
                      ->paginate(12);

        $stationaryTypeDescr = '';

        if(count($stationary) > 0) {

            switch($stationaryType) {

              case "Notepads":
                $stationaryTypeDescr = 'Notepads';
                break;
              case "lenyards":
                $stationaryTypeDescr = 'Lenyards';
                break;
              case "pens":
                $stationaryTypeDescr = 'Pens';
                break;
              case "idCards":
                $stationaryTypeDescr = 'ID Cards';
                break;
              case "stickers":
                $stationaryTypeDescr = 'Stickers';
                break;
              case "badges":
                $stationaryTypeDescr = 'Badges';
                break;
              case "books":
                $stationaryTypeDescr = 'Books';
                break;
              case "diaries":
                $stationaryTypeDescr = 'Diaries';
                break;
              case "calendars":
                $stationaryTypeDescr = 'Calendars';
                break;
              case "markers":
                $stationaryTypeDescr = 'Markers';
                break;
              case "whiteBoards":
                $stationaryTypeDescr = 'White Boards';
                break;
              case "projectors":
                $stationaryTypeDescr = 'Projectors';
                break;
            }

            $stationaryTypeUrl = '/meraki/categories/stationary/' . $stationaryType;
            return view('stationaryProducts', compact('stationary', 'stationaryType', 'stationaryTypeDescr', 'stationaryTypeUrl'));
        }

        return redirect()->action('PagesController@featuredProductsDisplay');
    }

    public function show($stationaryType, $id) {

        $stationaryProd = stationary::find($id);
        if($stationaryProd) {
          return view('products', array('stationaryProd' => $stationaryProd));
        }
    }
}
