@extends('layouts.template')
@section('title', 'Featured Products')

@section('loadProductPageCss')
  <style type="text/css">

    #products {
      background: #fdfbfb !important;
    }
    section .section-title {
        text-align: left;
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif !important;
        font-size: 2rem;
        left: 6%;
        right: 57%;
        color: #444444 !important;
        font-weight: 100 !important;
        line-height: 1.1875;
    }
    #products .card {
        border: none;
        background: #ffffff;
    }
    .frontside {
        position: relative;
        margin-bottom: 10px;
    }
    .frontside .card{
        min-height: 300px;
    }
    .frontside .card .card-title {
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif !important;
        color: #444444 !important;
        font-weight: 100 !important;
        line-height: 1.1875;
    }
    .frontside .card .card-body img {
        width: 220px;
        height: 220px;
    }
    .accordion.accordion-2 p {
        font-size: 1rem;
    }
    .accordion.accordion-2 .card {
        border: 0;
        background-color: transparent;
    }
    .accordion.accordion-2 .card .card-header,
    .accordion.accordion-2 .card .card-body {
        border: 0;
        border-radius: 3px;
    }

    .padding-0 {
        padding-right:2px;
        padding-left:2px;
    }

    .prodCategory {

        color: #444444;
        display: block;
        width: 90%;
        font-weight: 700;
        font-size: 18px;
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif;
    }

    .prodItemCategory {

        color: #444444;
        display: block;
        width: 90%;
        font-weight: 500;
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif;
    }

    .productTitle {

        color: #444444;
        display: block;
        width: 90%;
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif;
    }

    .productTitle a {
        text-decoration: none;
    }

    </style>

@endsection

@section('content')

  <section id="products" class="md-5">
    <div class="container">
      <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/featuredProducts') }}" style="text-decoration: none;" class="text-secondary">All Products</a></p>
      <h3 class="section-title">All Products</h3>
      <div class="row">
      <!-- Accordion Menu -->
      <div class="col-sm-3">
        <!--Accordion wrapper-->
        <div class="accordion accordion-2" id="accordionEx7" role="tablist" aria-multiselectable="true">
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                    <a class="accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="text-decoration: none;">
                            Apparels
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx7">
                    <div class="card-body rgba-grey-light white-text">
                        <ul class="list-unstyled quick-links">
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/formalShirts') }}"><i class="fa fa-angle-right"></i>Formal Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/sportsTees') }}"><i class="fa fa-angle-right"></i>Sports Tees</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/poloShirts') }}"><i class="fa fa-angle-right"></i>Polo Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/collaredShirts') }}"><i class="fa fa-angle-right"></i>Collared T-Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/hoodies') }}"><i class="fa fa-angle-right"></i>Hoodies</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/jackets') }}"><i class="fa fa-angle-right"></i>Jackets</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/denimShirts') }}"><i class="fa fa-angle-right"></i>Denim Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/activeWears') }}"><i class="fa fa-angle-right"></i>Active Wears</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/sweatShirts') }}"><i class="fa fa-angle-right"></i>Sweat Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/roundNeckShirts') }}"><i class="fa fa-angle-right"></i>Round Neck T-Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/shortSleeveShirts') }}"><i class="fa fa-angle-right"></i>Short Sleeve T-Shirts</a></li>
                          <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/apparels/longSleeveShirts') }}"><i class="fa fa-angle-right"></i>Long Sleeve T-Shirts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse2" aria-expanded="false" aria-controls="collapse2" style="text-decoration: none;">
                            Electronics
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/electronics/penDrives') }}"><i class="fa fa-angle-right"></i>Pendrives</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/electronics/powerBanks') }}"><i class="fa fa-angle-right"></i>Power Banks</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/electronics/calculators') }}"><i class="fa fa-angle-right"></i>Calculators</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/electronics/speakers') }}"><i class="fa fa-angle-right"></i>Speakers</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/electronics/usbHubs') }}"><i class="fa fa-angle-right"></i>USB Hub</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse3" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                            Stationary
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/notepads') }}"><i class="fa fa-angle-right"></i>Notepads</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/lenyards') }}"><i class="fa fa-angle-right"></i>Lenyards</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/pens') }}"><i class="fa fa-angle-right"></i>Pens</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/idCards') }}"><i class="fa fa-angle-right"></i>ID Cards</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/stickers') }}"><i class="fa fa-angle-right"></i>Stickers</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/badges') }}"><i class="fa fa-angle-right"></i>Badges</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/books') }}"><i class="fa fa-angle-right"></i>Books</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/diaries') }}"><i class="fa fa-angle-right"></i>Diaries</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/calendars') }}"><i class="fa fa-angle-right"></i>Calendars</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/markers') }}"><i class="fa fa-angle-right"></i>Markers</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/whiteBoards') }}"><i class="fa fa-angle-right"></i>Whiteboards</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/stationary/projectors') }}"><i class="fa fa-angle-right"></i>Projectors</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse4" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                            Accessories
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/keyChains') }}"><i class="fa fa-angle-right"></i>Keychains</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/photoFrames') }}"><i class="fa fa-angle-right"></i>Photoframes</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/watches') }}"><i class="fa fa-angle-right"></i>Watches</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/wristBands') }}"><i class="fa fa-angle-right"></i>Wristbands</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/wallets') }}"><i class="fa fa-angle-right"></i>Wallets</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/headBands') }}"><i class="fa fa-angle-right"></i>Headbands</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/caps') }}"><i class="fa fa-angle-right"></i>Caps</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/badgePacks') }}"><i class="fa fa-angle-right"></i>Badge Packs</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/bottleOpeners') }}"><i class="fa fa-angle-right"></i>Bottle Openers</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/fridgeMagnets') }}"><i class="fa fa-angle-right"></i>Fridge Magnets</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/phoneCases') }}"><i class="fa fa-angle-right"></i>Phone Cases</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/accessories/sunGlasses') }}"><i class="fa fa-angle-right"></i>Sunglasses</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse5" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                            Print
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/print/brochures') }}"><i class="fa fa-angle-right"></i>Brochures</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/print/businessCards') }}"><i class="fa fa-angle-right"></i>Business Cards</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/print/greetingCards') }}"><i class="fa fa-angle-right"></i>Greeting Cards</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/print/posters') }}"><i class="fa fa-angle-right"></i>Posters</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/print/stickers') }}"><i class="fa fa-angle-right"></i>Stickers</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/print/badges') }}"><i class="fa fa-angle-right"></i>Badges</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse6" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                            Utilities
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/coffeeMugs') }}"><i class="fa fa-angle-right"></i> Coffee Mugs</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/metalBottles') }}"><i class="fa fa-angle-right"></i> Metal Bottles</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/lunchBoxes') }}"><i class="fa fa-angle-right"></i> Lunch Boxes</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/slippers') }}"><i class="fa fa-angle-right"></i> Slippers</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/flasks') }}"><i class="fa fa-angle-right"></i> Flasks</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/glassBottles') }}"><i class="fa fa-angle-right"></i> Glass Bottles</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/utilities/cups') }}"><i class="fa fa-angle-right"></i> Cups</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse7" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                            Momentos
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/momentos/wooden') }}"><i class="fa fa-angle-right"></i>Wooden</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/momentos/metal') }}"><i class="fa fa-angle-right"></i>Metal</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/momentos/crystal') }}"><i class="fa fa-angle-right"></i>Crystal</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse8" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                      Bags
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/toteBags') }}"><i class="fa fa-angle-right"></i>Tote Bags</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/leatherBags') }}"><i class="fa fa-angle-right"></i>Leather Bags</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/duffleBags') }}"><i class="fa fa-angle-right"></i>Duffle Bags</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/bagPacks') }}"><i class="fa fa-angle-right"></i>Bagpacks</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/lunchBags') }}"><i class="fa fa-angle-right"></i>Lunch Bags</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/travelBags') }}"><i class="fa fa-angle-right"></i>Travel Bags</a></li>
                        <li class="productTitle"><a class="accordionHeading white-text font-thin prodItemCategory" href="{{ url('/meraki/categories/bags/slingBags') }}"><i class="fa fa-angle-right"></i>Sling Bags</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                    <a class="collapsed accordionHeading white-text font-thin prodCategory" data-toggle="collapse" data-parent="#accordionEx7"
                    href="#collapse9" aria-expanded="false" aria-controls="collapse3" style="text-decoration: none;">
                            Eco-Friendly
                    </a>
                </div>
                <!-- Card body -->
                <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                    <div class="card-body mb-1 rgba-grey-light white-text">
                      <ul class="list-unstyled quick-links">
                        <li class="productTitle"><a href="{{ url('/meraki/categories/ecoFriendly/juteBags') }}" class="accordionHeading white-text font-thin prodItemCategory"><i class="fa fa-angle-right"></i>  Jute Bags </a></li>
                        <li class="productTitle"><a href="{{ url('/meraki/categories/ecoFriendly/paperBags') }}" class="accordionHeading white-text font-thin prodItemCategory"><i class="fa fa-angle-right"></i>  Paper Bags </a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Accordion wrapper-->
      </div>
      <!-- Display Products Page -->
      <div class="col-sm-9">
        <div class="row">
          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 1</h4>
                          <p><img class="img-fluid img-responsive" src="{{ asset('images/allProducts/categories/collaredShirt.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 2</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/formalShirt.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-6 padding-0">
              <div class="frontside pr-0">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 3</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/hoodie.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-5 col-xs-6 padding-0">
              <div class="frontside pr-0">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title" style="float: left;">Category 4</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/jacket.jpg') }}"
                            alt="Meraki Store Products" style="float: right;"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-3 col-xs-8 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 5</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/roundNeck.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 6</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/sportsTee.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-5 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title" style="float: left;">Category 7</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/sweatShirt.jpg') }}"
                            alt="Meraki Store Products" style="float: right;"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 8</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/vNeck.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-3 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 9</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/caps.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-8 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 10</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/keyChain.jpg') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 11</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/umbrella.jpg') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-4 col-xs-8 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 12</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/wallet.png') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-3 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 13</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/wristBands.jpg') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-6 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title" style="float: left;">Category 13</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/wristBands.jpg') }}"
                            alt="Meraki Store Products" style="float: right;"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>

          <!-- Individual Product Display -->
          <div class="col-sm-3 col-xs-6 padding-0">
              <div class="frontside">
                  <div class="card">
                    <a href="#" style="text-decoration: none;">
                      <div class="card-body text-center">
                          <h4 class="card-title">Category 13</h4>
                          <p><img class="img-fluid" src="{{ asset('images/allProducts/categories/wristBands.jpg') }}"
                            alt="Meraki Store Products"></p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiProducts").addClass("merakiUnderlineText");
</script>

@endsection
