<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Define the Character Set -->
        <meta charset="utf-8">
        <!-- Define the meta information about the website - Meraki Store -->
        <meta name="description" content="Meraki Store">
        <meta name="keywords" content="Meraki Store, Custom Merchandise, Bulk Orders, Custom Printing">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <!-- Include the Responsive Design Feature Characteristics -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Include the Bootstrap Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/waterWheelCarousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/newsLetter.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/megaMenu.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/imagesHoverEffect.css') }}"/>
        <!-- Define the website title -->
        <title>@yield('title') | {{ config('app.name') }}</title>
        <!-- Include the website ICON File -->
        <link rel="icon" type="image/png" href="{{ asset('images/logos/merakii.ico') }}">
        <!-- Include the Font Family for Droid Sans -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans" />

        @yield('loadBulkOrderEnquiryCss')
        @yield('loadAboutUsCss')
        @yield('loadEnquiryCss')
        @yield('customersFeedbackCss')
        @yield('accountCss')
        @yield('loadProductDetailCss')
        @yield('loadProductPageCss')
        @yield('merakiStoryCss')

    </head>
    <body>
      <span id="nav-top"></span>
      <header>
        <!-- Include the Header - Display the Logo of the Company and Contact Details -->
        <nav id="headerNavigation" class="navbar navbar-expand-sm" style="background-color: #ffffff;">
            <div class="container-fluid">
            	<a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logos/merakiLogo.png') }}" class="img-rounded"
                    style="width:70px;" alt="Meraki Store">
                </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav-link">
                        <h5 class="merakiText navIcons">
                            WELCOME TO MERAKI STORE
                            <br/>
                            Custom Merchandise & much more
                        </h5>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                	<li class="nav-item nav-link" style="padding-right:10px; border-right: 2px solid #C0C0C0;">
                    	<img src="{{ asset('images/custom/headset.png') }}"
                      class="img-rounded" style="width:50px; float:left;" alt="Contact Now">
                    	<span class="merakiText navIcons ml-2"> TALK TO A REAL PERSON </span>
                    	<br/>
                    	<span class="merakiText navIcons ml-2">{{ config('app.adminContact') }}</span>
                    </li>

                	<li class="nav-item nav-link">
                		<a href="mailto:contact@meraki.store" class="text-secondary">
	                      <img src="{{ asset('images/custom/email.png') }}" class="img-rounded"
                        style="width:50px; float:left;" alt="Contact Us">
	                    </a>
                    	<span class="merakiText navIcons ml-2"> HAVE QUESTIONS? </span>
                    	<br/>
                    	<span class="merakiText navIcons ml-2"> DROP US A MAIL </span>
                    </li>
                </ul>
            </div>
        </nav> <!-- Navigation Bar End -->

        <!-- Include the Navigation Bar. Specify Links to various Home Pages -->
        <ul class="navbar navbar-expand-sm" style="background-color: #000000;">
          <div class="container">
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row">
              <!-- Home Navigation -->
              <li class="nav-item text-uppercase">
						      <a class="nav-link" href="{{ url('/') }}">
							    <span id="merakiHome" class="merakiText headerIcons" style="color: #ffffff; font-weight: 600;">{{ config('app.homeNavName') }}</span>
						      </a>
					    </li>

              <!-- Products Navigation -->
              <li class="nav-item dropdown mega-dropdown">
    						<a class="nav-link" href="{{ url('/meraki/featuredProducts') }}" target="_blank">
    							<span id="merakiProducts" class="merakiText headerIcons text-uppercase " style="color: #ffffff;">
    								{{ config('app.productsNavName') }} <i class="fa fa-chevron-down"></i>
    							</span>
    						</a>
    						<!-- Include the Hoverable Menu -->
    						<ul class="dropdown-menu mega-dropdown-menu">
                  <div class="row">
                    <li class="col-sm-2">
                        <ul class="list-unstyled ml-4">
                            <li class="dropdown-header mt-1">
                            	<img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                              Apparels
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/formalShirts') }}">Formal Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/sportsTees') }}">Sports Tees</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/poloShirts') }}">Polo Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/collaredShirts') }}">Collared T-Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/hoodies') }}">Hoodies</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/jackets') }}">Jackets</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/denimShirts') }}">Denim Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/activeWears') }}">Active Wears</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/sweatShirts') }}">Sweat Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/roundNeckShirts') }}">Round Neck T-Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/shortSleeveShirts') }}">Short Sleeve T-Shirts</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/apparels/longSleeveShirts') }}">Long Sleeve T-Shirts</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-2">
                        <ul class="list-unstyled ml-2">
                        	 <li class="dropdown-header mt-1">
                        		<img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                            Electronics
                        	</li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/electronics/penDrives') }}">Pendrives</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/electronics/powerBanks') }}">Power Banks</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/electronics/calculators') }}">Calculators</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/electronics/speakers') }}">Speakers</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/electronics/usbHubs') }}">USB Hub</a></li>
                            <li class="dropdown-header mt-2">
                                <img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                                Print
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/print/brochures') }}">Brochures</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/print/businessCards') }}">Business Cards</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/print/greetingCards') }}">Greeting Cards</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/print/posters') }}">Posters</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/print/stickers') }}">Stickers</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/print/badges') }}">Badges</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-2">
                        <ul class="list-unstyled ml-2">
                            <li class="dropdown-header mt-1">
                            	<img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                              Accessories
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/keyChains') }}">Keychains</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/photoFrames') }}">Photoframes</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/watches') }}">Watches</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/wristBands') }}">Wristbands</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/wallets') }}">Wallets</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/headBands') }}">Headbands</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/caps') }}">Caps</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/badgePacks') }}">Badge Packs</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/bottleOpeners') }}">Bottle Openers</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/fridgeMagnets') }}">Fridge Magnets</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/phoneCases') }}">Phone Cases</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/accessories/sunGlasses') }}">Sunglasses</a></li>
                        </ul>
                    </li>

                    <li class="col-sm-2">
                        <ul class="list-unstyled ml-2">
                            <li class="dropdown-header mt-1">
                                <img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                                Stationary
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/notepads') }}">Notepads</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/lenyards') }}">Lenyards</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/pens') }}">Pens</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/idCards') }}">ID Cards</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/stickers') }}">Stickers</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/badges') }}">Badges</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/books') }}">Books</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/diaries') }}">Diaries</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/calendars') }}">Calendars</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/markers') }}">Markers</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/whiteBoards') }}">Whiteboards</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/stationary/projectors') }}">Projectors</a></li>
                        </ul>
                    </li>

                    <li class="col-sm-2">
                        <ul class="list-unstyled ml-2">
                            <li class="dropdown-header mt-1">
                            	<img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                              Utilities
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/coffeeMugs') }}">Coffee Mugs</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/metalBottles') }}">Metal Bottles</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/lunchBoxes') }}">Lunch Boxes</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/slippers') }}">Slippers</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/flasks') }}">Flasks</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/glassBottles') }}">Glass Bottles</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/utilities/cups') }}">Cups</a></li>
                            <li class="dropdown-header mt-3">
                                <img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                                Momentos
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/momentos/wooden') }}">Wooden</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/momentos/metal') }}">Metal</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/momentos/crystal') }}">Crystal</a></li>
                        </ul>
                    </li>

                    <li class="col-sm-2">
                        <ul class="list-unstyled ml-2">
                        	<li class="dropdown-header mt-1">
                            	<img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                              Bags
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/toteBags') }}">Tote Bags</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/leatherBags') }}">Leather Bags</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/duffleBags') }}">Duffle Bags</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/bagPacks') }}">Bagpacks</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/lunchBags') }}">Lunch Bags</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/travelBags') }}">Travel Bags</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/bags/slingBags') }}">Sling Bags</a></li>
                            <li class="dropdown-header mt-3">
                                <img src="{{ asset('images/custom/productsHeader.png') }}" style="float: left;">
                                Eco Friendly
                            </li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/ecoFriendly/juteBags') }}">Jute Bags</a></li>
                            <li class="mt-1"><a class="ml-2 text-secondary" href="{{ url('/meraki/categories/ecoFriendly/paperBags') }}">Paper Bags</a></li>
                        </ul>
                    </li>
                  </div>
                </ul>
                <!-- End of Hoverable Menu -->
    					</li>

              <!-- Design Templates Navigation -->
              <li class="nav-item text-uppercase">
						      <a class="nav-link" href="{{ url('/meraki/designTemplates') }}" target="_blank">
						      <span id="merakiTemplates" class="merakiText headerIcons" style="color: #ffffff;">{{ config('app.designTemplatesNavName') }}</span>
						      </a>
					    </li>

              <!-- Customers Navigation -->
              <li class="nav-item text-uppercase">
						       <a class="nav-link" href="{{ url('/meraki/customers') }}">
						       <span id="merakiCustomers" class="merakiText headerIcons" style="color: #ffffff;">{{ config('app.customersNavName') }}</span>
						       </a>
					    </li>

              <!-- Bulk Orders Navigation -->
              <li class="nav-item text-uppercase">
						       <a class="nav-link" href="{{ url('/meraki/bulkOrderEnquiry') }}">
							     <span id="merakiBulkOrders" class="merakiText headerIcons" style="color: #ffffff;">{{ config('app.bulkOrdersNavName') }}</span>
						       </a>
					    </li>

              <!-- Contact Navigation -->
              <li class="nav-item text-uppercase">
						       <a class="nav-link" href="{{ url('/meraki/contactUs') }}">
							     <span id="merakiContact" class="merakiText headerIcons" style="color: #ffffff;">{{ config('app.contactUsNavName') }}</span>
						       </a>
					    </li>

            </ul> <!-- Inner UL List End -->
          </div> <!-- Container Div End -->
        </ul> <!-- UL List End-->
      </header>

      @yield('content')

      <!-- Include the content for Meraki Store NewsLetter Subscription -->
      <div class="search-text">
         <div class="container">
           <div class="row text-center">
             <div class="form mt-3">
                 <h4>SIGN UP TO OUR NEWSLETTER</h4>
                 <p class="text-capitalize">Get access to featured products and latest merchandise from Meraki Store</p>
                  <form id="search-form" class="form-search form-horizontal" action="/subscribeUser" method="POST">
                      <img class="img-responsive" src="{{ asset('images/custom/newsletter.png') }}"
                      alt="Subscribe To Our Newsletter" width="120" height="45"/>
                      <input id="userSubscriptionEmail" name="userSubscriptionEmail" type="email" class="input-search"
                      placeholder="ENTER YOUR EMAIL ADDRESS" size="150" required>
                      <input type="hidden" id="token" value="{{ csrf_token() }}">
                      <button type="submit" id="subscribeBtn" class="btn btn-outline-dark ml-2">
                          <i class="fa fa-envelope"></i>
                          <span> SUBSCRIBE </span>
                      </button>
                  </form>

                  <p id="subscribeResult" class="merakiText text-center mt-2 mr-5 ml-5"></p>

                  <!-- Social Buttons -->
                  <ul class="list-inline list-unstyled text-center social">
                      <li id="facebook"> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
                      <li id="twitter"> <a href="#"> <i class="fa fa-twitter"></i></a></li>
                      <li id="instagram"> <a href="#"> <i class="fa fa-instagram"></i></a> </li>
                      <li id="linkedin"> <a href="#"> <i class="fa fa-linkedin"></i></a> </li>
                      <li id="youtube"> <a href="#"> <i class="fa fa-youtube"></i></a> </li>
                  </ul>
              </div>
            </div>
         </div>
      </div>


      <!-- Include the content for Meraki Store Footer -->
      <footer>
          <section id="footer">
              <div class="container-fluid">
                  <div class="row text-center text-xs-center text-sm-left text-md-left">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                          <figure class="col">
                              <img src="{{ asset('images/custom/merakiStoreFooterLogo.png') }}"
                              class="img-fluid figure-img" alt="Meraki Store" width="100px;" />
                              <br/>
                              <figcaption class="text-justify">
                                  Merakii is the one stop destination for event merchandise, corporate gifting, t-shirts, etc.
                                  We provide customized merchandise for College festivals, Corporate events, etc.
                                  This is your one-stop destination for customised t-shirts, hoodies, personalised mugs, posters, wallets,
                                  shot glasses and many more creative products.
                              </figcaption>
                          </figure>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2">
                          <h5 class="navIcons text-uppercase ml-2 mt-3">Information</h5>
                          <ul class="list-unstyled quick-links">
                              <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                              <li><a href="{{ url('meraki/faqs') }}"><i class="fa fa-angle-right"></i>FAQs</a></li>
                              <li><a href="{{ url('meraki/termsConditions') }}"><i class="fa fa-angle-right"></i>Terms & Conditions</a></li>
                              <li><a href="{{ url('meraki/bulkOrderEnquiry') }}"><i class="fa fa-angle-right"></i>Get Quotation Online</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Bulk Order Payment</a></li>
                              <li><a href="{{ url('meraki/request') }}"><i class="fa fa-angle-right"></i>Request a Sample</a></li>
                          </ul>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2">
                          <h5 class="navIcons text-uppercase ml-2 mt-3">Insider</h5>
                          <ul class="list-unstyled quick-links">
                              <li><a href="#"><i class="fa fa-angle-right"></i>Blog</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Trends</a></li>
                              <li><a href="{{ url('meraki/aboutUs') }}"><i class="fa fa-angle-right"></i>About Us</a></li>
                              <li><a href="{{ url('meraki/contactUs') }}"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                          </ul>
                      </div>

                      <div class="col-xs-12 col-sm-2 col-md-2">
                          <h5 class="navIcons text-uppercase ml-2 mt-3">Company</h5>
                          <ul class="list-unstyled quick-links">
                              <li><a href="#"><i class="fa fa-angle-right"></i>Our Story</a></li>
                              <li><a href="{{ url('meraki/customers') }}"><i class="fa fa-angle-right"></i>Customer Reviews</a></li>
                              <li><a href="{{ url('meraki/team') }}"><i class="fa fa-angle-right"></i>Team</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Careers</a></li>
                          </ul>
                      </div>

                      <div class="col-xs-12 col-sm-2 col-md-2 mt-3">
                          <h5 class="navIcons text-uppercase">Pay Securely</h5>
                          <img src="{{ asset('images/custom/payment.png') }}" class="img-fluid figure-img"
                          alt="Pay Securely" />
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                          <p class="h6">&copy 2018 All right Reserved.<a class="ml-2" href="#" target="_blank">Meraki Stores</a></p>
                      </div>
                      </hr>
                  </div>
              </div>
          </section>
      </footer>

      <a id="navigateTop" href="#nav-top" class="btn btn-lg navigateTop" role="button"
      title="Navigate to Top" data-toggle="tooltip" data-placement="left">
        <span class="fa fa-chevron-up" style="color: #FFFFFF;"></span>
      </a>

      <!-- Scripts Section -->
      <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script type="text/javascript">

         $(document).ready(function(event) {
           $("#subscribeResult").hide();
             $('#subscribeBtn').click(function(event) {
                  event.preventDefault();
                  $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });

                  $.ajax({
                    method: 'POST',
                    data: {
                      emailAddress: $("#userSubscriptionEmail").val(),
                      token: $("#token").val()
                    },
                    url: "{{ url('/subscribeUser') }}",
                    success: function(info) {
                        $("#subscribeResult").text(info.message);
                        $("#subscribeResult").show();
                        $("#search-form")[0].reset();
                    }
                  });
              });
          });
      </script>
      <script type="text/javascript">
          $(document).ready(function(){
              $(".dropdown").hover(
                  function() {
                      $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeIn("fast");
                      $(this).toggleClass('open');
                  },
                  function() {
                      $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeOut("fast");
                      $(this).toggleClass('open');
                  }
              );
          });
      </script>
      <script src="{{ asset('js/jquery.waterwheelCarousel.min.js') }}"></script>
      <script src="{{ asset('js/navigateTopPage.js') }}"></script>
      <script type="text/javascript">
        $(document).ready(function () {
        var carousel = $("#waterWheelCarousel").waterwheelCarousel({
            flankingItems: 3,
            autoPlay: 2000,
            separation: 220,
            movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
            },
            movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
            },
            movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
            },
            movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
            },
            clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
            }
        });
      });
      </script>

      @yield('loadProductScript')

      @yield('underlineScript')

    </body>
</html>
