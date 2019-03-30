<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apparels;

class ApparelsController extends Controller
{
    public function index($apparelType) {

        $apparels = Apparels::select('apparel_id', 'apparel_type', 'description', 'price_per_unit_descr', 'additional_descr', 'img_main_view_loc')
                    ->where('apparel_type', $apparelType)
                    ->paginate(12);

        $apparelTypeDescr = '';

        if(count($apparels) > 0) {

            switch($apparelType) {

              case "formalShirts":
                $apparelTypeDescr = 'Formal Shirts';
                break;
              case "sportsTees":
                $apparelTypeDescr = 'Sports Tees';
                break;
              case "poloShirts":
                $apparelTypeDescr = 'Polo Shirts';
                break;
              case "collaredShirts":
                $apparelTypeDescr = 'Collared T-Shirts';
                break;
              case "hoodies":
                $apparelTypeDescr = 'Hoodies';
                break;
              case "jackets":
                $apparelTypeDescr = 'Jackets';
                break;
              case "denimShirts":
                $apparelTypeDescr = 'Denim Shirts';
                break;
              case "activeWear":
                $apparelTypeDescr = 'Active Wears';
                break;
              case "sweatShirts":
                $apparelTypeDescr = 'Sweat Shirts';
                break;
              case "roundNeckShirts":
                $apparelTypeDescr = 'Round Neck Shirts';
                break;
              case "shortSleeve":
                $apparelTypeDescr = 'Short Sleeve Shirts';
                break;
              case "longSleeve":
                $apparelTypeDescr = 'Long Sleeve Shirts';
                break;
            }

            $apparelTypeUrl = '/meraki/categories/apparels/' . $apparelType;
            return view('apparelsProducts', compact('apparels', 'apparelType', 'apparelTypeDescr', 'apparelTypeUrl'));
        }

        return redirect()->action('PagesController@featuredProductsDisplay');
    }

    public function show($apparelType, $id) {

        $apparel = Apparels::find($id);
        if($apparel) {
          return view('products', array('apparel' => $apparel));
        }
    }
}
