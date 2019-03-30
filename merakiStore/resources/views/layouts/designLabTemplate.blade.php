<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Define the Character Set -->
        <meta charset="utf-8">
        <!-- Define the meta information about the website - Meraki Store -->
        <meta name="description" content="Meraki Store Design Lab">
        <meta name="keywords" content="Meraki Store, Design Lab">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <!-- Include the Responsive Design Feature Characteristics -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Include the Bootstrap Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/waterWheelCarousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/jquery.miniColors.css') }}"/>
        <!-- Define the website title -->
        <title>@yield('title') | {{ config('app.name') }}</title>
        <!-- Include the website ICON File -->
        <link rel="icon" type="image/png" href="{{ asset('images/logos/merakii.ico') }}">
        <!-- Include the Font Family for Droid Sans -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans" />

        @yield('merakiDesignLabCss')

    </head>
    <body>

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
                	<li class="nav-item nav-link">
                    	<img src="{{ asset('images/custom/headset.png') }}"
                      class="img-rounded" style="width:50px; float:left;" alt="Contact Now">
                    	<span class="merakiText navIcons ml-2"> TALK TO A REAL PERSON </span>
                    	<br/>
                    	<span class="merakiText navIcons ml-2">{{ config('app.adminContact') }}</span>
                    </li>
                </ul>
            </div>
        </nav> <!-- Navigation Bar End -->

        <section id="merakiDesignLab" style="background-color: #fdfbfb;">

          @yield('content')

        </section>

      <!-- Include the content for Meraki Store Footer -->
      <footer>
          <section id="footer">
              <div class="container-fluid">
                  <div class="row text-center text-xs-center text-sm-left text-md-left">
                      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 ml-5">
                          Some content on Size & Fit Guide
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 ml-5">
                          Some content on Shipping
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 ml-5">
                          Additional Details
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                          <p class="h6">Copyrights &copy 2018 All right Reserved.<a class="ml-2" href="#" target="_blank">Meraki Stores</a></p>
                      </div>
                      </hr>
                  </div>
              </div>
          </section>
      </footer>

      <!-- Scripts Section -->
      <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/jquery.waterwheelCarousel.min.js') }}"></script>
      <script src="{{ asset('js/fabric.js') }}"></script>
      <script src="{{ asset('js/tshirtEditor.js') }}"></script>
      <script src="{{ asset('js/jquery.miniColors.min.js') }}"></script>
    </body>
</html>
