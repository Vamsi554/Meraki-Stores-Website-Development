@extends('layouts.template')
@section('title', 'Home')

@section('content')
  <!-- Include the Carousel Show -->
  <div class="container-fluid">
      <div class="carousel slide" id="featured" data-ride="carousel" >

          <ol class="carousel-indicators">
              <li data-target="#featured" data-slide-to="0" class="active"></li>
              <li data-target="#featured" data-slide-to="1"></li>
              <li data-target="#featured" data-slide-to="2"></li>
              <li data-target="#featured" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner">

              <div class="carousel-item active">
                  <a href="{{ url('/meraki/featuredProducts') }}" target="_blank"><img class="img-fluid"
                    src="{{ asset('images/banners/corporateBranding.png') }}" alt="corporateBranding"/></a>
              </div>

              <div class="carousel-item">
                  <a href="{{ url('/meraki/featuredProducts') }}" target="_blank"><img class="img-fluid"
                    src="{{ asset('images/banners/corporateGifting.png') }}" alt="corporateGifting"/></a>
              </div>

              <div class="carousel-item">
                  <a href="{{ url('/meraki/featuredProducts') }}" target="_blank"><img class="img-fluid"
                    src="{{ asset('images/banners/customizedGifting.png') }}" alt="customizedGifting"/></a>
              </div>

              <div class="carousel-item">
                  <a href="{{ url('/meraki/featuredProducts') }}" target="_blank"><img class="img-fluid"
                    src="{{ asset('images/banners/promotionalProducts.png') }}" alt="promotionalProducts"/></a>
              </div>

              <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true">
                      <span class="sr-only">Previous</span>
                  </span>
              </a>

              <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true">
                      <span class="sr-only">Next</span>
                  </span>
              </a>
          </div>
      </div>
  </div>

  <!-- Include the content for Services offered by Meraki Store -->
  <div id="Meraki_Services"></div>
  <div class="container" style="background-color: #fdfbfb">

      <h3 class="merakiText text-center text-uppercase mt-3">
          <span class="merakiText merakiUnderlineText"
          style="color: #000000;">
              Our Services
          </span>
      </h3>

      <section class="text-center mt-5">
          <div class="row">
              <figure class="col">
                  <img class="img-fluid figure-img" src="images/services/promotionalProducts.png" style="width:120px;"/>
                  <h5 class="merakiText headerIcons text-uppercase">Promotional Products</h5>
                  <br/>
                  <figcaption class="merakiText text-justify">
                      We create wide range of products for diverse segments of people, branded
                      with a logo or slogan, used in marketing programs.
                  </figcaption>
              </figure>

              <figure class="col">
                  <img class="img-fluid figure-img" src="images/services/corporateGifting.png" style="width:120px;"/>
                  <h5 class="merakiText headerIcons text-uppercase">Corporate Gifting</h5>
                  <br/>
                  <figcaption class="merakiText text-justify">
                      We offer gifts, given as means of showing appreciation for efforts made by
                      recepients that have benefited the corporation.
                  </figcaption>
              </figure>

              <figure class="col">
                  <img class="img-fluid figure-img" src="images/services/corporateBranding.png" style="width:120px;"/>
                  <h5 class="merakiText headerIcons text-uppercase">Corporate Branding</h5>
                  <br/>
                  <figcaption class="merakiText text-justify">
                      Join us and make your brand a part of our corporate entity, as opposed to specific services.
                      and be part of our marketing strategy.
                  </figcaption>
              </figure>

              <figure class="col">
                  <img class="img-fluid figure-img" src="images/services/customizedGifting.png" style="width:120px;"/>
                  <h5 class="merakiText headerIcons text-uppercase">Customized Gifting</h5>
                  <br/>
                  <figcaption class="merakiText text-justify">
                      Whatever the celebration, our customized gifts can be embroidered
                      to help create a smile that lasts a lifetime.
                  </figcaption>
              </figure>
          </div>
      </section>
  </div>
  <!-- Include the content for Featured Products offered by Meraki Store -->
  <div class="container" style="background-color: #fdfbfb">

      <h3 class="merakiText text-center text-uppercase mt-3">
          <span class="merakiText merakiUnderlineText"
          style="color: #000000;">
              Featured Products
          </span>
      </h3>

      <section class="text-center mt-5">
          <div class="container">
              <div class="card-columns">
                  <div class="card">
                    <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_1.png">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Pens</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                    <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_2.jpg">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Coffee Mugs</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_3.jpg">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Badges & Bands</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_4.jpg">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Printed Mugs</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_5.png">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Bottles</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>

                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_7.jpg">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Printed T-Shirts</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_5.png">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">Bottles</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_8.png">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">T-Shirts</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="hovereffect">
                        <img alt="Featured Products" class="card-img-top img-fluid"
                        src="images/products/featuredProduct_10.png">
                        <div class="overlay">
                          <h2 class="merakiText text-uppercase">School Bags</h2>
                    <a class="merakiText info" href="{{ url('/meraki/featuredProducts') }}" target="_blank">View More</a>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- Include the content for Meraki Store Customers -->
  <div id="Meraki_Customers"></div>
  <div class="container" style="background-color: #fbfbf9;">
      <h3 class="merakiText text-center text-uppercase mt-3">
          <span class="merakiText merakiUnderlineText"
          style="color: #000000;">
              Our Customers
          </span>
      </h3>

      <section class="text-center">
          <div class="row">
              <div class="col-12">
                  <div id="waterWheelCarousel">
                      <img class="img-fluid" src="images/clients/ABBOTT.jpg" />
                      <img class="img-fluid" src="images/clients/APOLLO.jpg"/>
                      <img class="img-fluid" src="images/clients/BITS.jpg"/>
                      <img class="img-fluid" src="images/clients/DELOITTE.jpg"/>
                      <img class="img-fluid" src="images/clients/FORD.jpg"/>
                      <img class="img-fluid" src="images/clients/GHMC.jpg"/>
                      <img class="img-fluid" src="images/clients/IIMC.jpg"/>
                      <img class="img-fluid" src="images/clients/IITB.jpg"/>
                      <img class="img-fluid" src="images/clients/IITBHU.jpg"/>
                      <img class="img-fluid" src="images/clients/INFOSYS.jpg"/>
                      <img class="img-fluid" src="images/clients/ISB.jpg"/>
                      <img class="img-fluid" src="images/clients/JNTU.jpg"/>
                      <img class="img-fluid" src="images/clients/KIMS.jpg"/>
                      <img class="img-fluid" src="images/clients/MAXCURE.jpg"/>
                      <img class="img-fluid" src="images/clients/ORACLE.jpg"/>
                      <img class="img-fluid" src="images/clients/AARVEE.jpg"/>
                      <img class="img-fluid" src="images/clients/SAKSHI.jpg"/>
                      <img class="img-fluid" src="images/clients/SPOWER.jpg"/>
                      <img class="img-fluid" src="images/clients/SWIGGY.jpg"/>
                      <img class="img-fluid" src="images/clients/TANA.jpg"/>
                      <img class="img-fluid" src="images/clients/TSCAB.jpg"/>
                      <img class="img-fluid" src="images/clients/US.jpg"/>
                  </div>
              </div>
          </div>
      </section>
  </div>

  <div class="container">
      <section class="text-center mt-5">
      <div class="row">
          <div class="col-sm-3">
              <figure>
                  <img class="img-fluid figure-img" src="images/services/featuredPoint_1.png" style="width:100px;"/>
                  <figcaption class="merakiText text-justify">
                      Over 300000+ custom products design printed.
                  </figcaption>
              </figure>
          </div>

          <div class="col-sm-3">
              <figure>
                  <img class="img-fluid figure-img" src="images/services/featuredPoint_2.png" style="width:100px;"/>
                  <figcaption class="merakiText text-justify">
                      Proud to have many fortune 500 companies as corporate clients.
                  </figcaption>
              </figure>
          </div>

          <div class="col-sm-3">
              <figure>
                  <img class="img-fluid figure-img" src="images/services/featuredPoint_3.png" style="width:100px;"/>
                  <figcaption class="merakiText text-justify">
                      Preferred brand of premier institutions like IITs and IIMs.
                  </figcaption>
              </figure>
          </div>

          <div class="col-sm-3">
              <figure>
                  <img class="img-fluid figure-img" src="images/services/featuredPoint_4.png" style="width:100px;"/>
                  <figcaption class="merakiText text-justify">
                      Delivering to quality conscious customers across the globe.
                  </figcaption>
              </figure>
          </div>
      </div>
  </section>
  </div>

@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiHome").addClass("merakiUnderlineText");
</script>

@endsection
