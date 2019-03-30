<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@index');

Auth::routes();

Route::post('/subscribeUser', 'UserSubscriptionController@store');

Route::post('/processEnquiry', 'ContactUsController@store');

Route::post('/processRequestSample', 'RequestSampleController@store');

Route::prefix('meraki')->group(function() {

  Route::get('bulkOrderEnquiry', 'PagesController@bulkOrderEnquiry');

  Route::get('aboutUs', 'PagesController@aboutUs');

  Route::get('contactUs', 'PagesController@contactUs');

  Route::get('request', 'PagesController@requestForSample');

  Route::get('enquiry', 'PagesController@businessEnquiry');

  Route::get('faqs', 'PagesController@faqs');

  Route::get('team', 'PagesController@meetTeam');

  Route::get('customers', 'PagesController@customersFeedback');

  Route::get('termsConditions', 'PagesController@termsAndConditions');

  Route::get('products', 'PagesController@products');

  Route::get('featuredProducts', 'PagesController@featuredProductsDisplay');

  Route::get('designTemplates', 'PagesController@displayDesignTemplates');

  // Apparels
  Route::get('categories/apparels/{apparelType}', 'ApparelsController@index');
  Route::get('categories/apparels/{apparelType}/{id}', 'ApparelsController@show');

  // Electronics
  Route::get('categories/electronics/{electronicsType}', 'ElectronicsController@index');
  Route::get('categories/electronics/{electronicsType}/{id}', 'ElectronicsController@show');

  // Print
  Route::get('categories/print/{printType}', 'PrintController@index');
  Route::get('categories/print/{printType}/{id}', 'PrintController@show');


  // Accessories
  Route::get('categories/accessories/{accessoriesType}', 'AccessoriesController@index');
  Route::get('categories/accessories/{accessoriesType}/{id}', 'AccessoriesController@show');

  // Stationary
  Route::get('categories/stationary/{stationaryType}', 'StationaryController@index');
  Route::get('categories/stationary/{stationaryType}/{id}', 'StationaryController@show');

  // Utilities
  Route::get('categories/utilities/{utilityType}', 'UtilitiesController@index');
  Route::get('categories/utilities/{utilityType}/{id}', 'UtilitiesController@show');

  // Momentos
  Route::get('categories/momentos/{momentoType}', 'MomentosController@index');
  Route::get('categories/momentos/{momentoType}/{id}', 'MomentosController@show');

  // Bags
  Route::get('categories/bags/{bagType}', 'BagsController@index');
  Route::get('categories/bags/{bagType}/{id}', 'BagsController@show');

  // Eco-Friendly
  Route::get('categories/ecoFriendly/{ecoFriendlyType}', 'EcoFriendlyController@index');
  Route::get('categories/ecoFriendly/{ecoFriendlyType}/{id}', 'EcoFriendlyController@show');

});
