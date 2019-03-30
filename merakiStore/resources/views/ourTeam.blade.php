@extends('layouts.template')
@section('title', 'Our Team')

@section('customersFeedbackCss')

  <style type="text/css">
  .rewbox {height: 180px; width: 100%; overflow: auto; margin-bottom: 20px; overflow-y: hidden;}
  .rewbox span { text-align: right; color: #000;font-family: 'open_sanssemibold'; display: block;
                border-bottom: 1px dotted #000; padding-bottom: 10px; }

  </style>

@endsection

@section('content')

  <div class="container">
    <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/meraki/team') }}" style="text-decoration: none;" class="text-secondary">Our Team</a></p>
    <div class="row">
      <div class="col-sm-12 mt-3 md-3">
    		<h2 style="color: #Ffce37;"> Meet Our Team </h2>
    		<hr>
    	</div>
      <!-- Individual Team Member -->
  		<div class="col-sm-6">
  			<div class="rewbox">
          <img src="{{ asset('images/team/user.png') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
          <h3>Abhilash Gali</h3>
          <h6>Managing Director</h6>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          <!-- Social Buttons -->
          <ul class="list-inline list-unstyled text-center social">
              <li id="facebook"> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
              <li id="instagram"> <a href="#"> <i class="fa fa-instagram"></i></a> </li>
              <li id="linkedin"> <a href="#"> <i class="fa fa-linkedin"></i></a> </li>
          </ul>
  		    </div>
          <hr/>
  		</div>

      <!-- Individual Team Member -->
  		<div class="col-sm-6">
  			<div class="rewbox">
          <img src="{{ asset('images/team/user.png') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
          <h3>Rufus Sunny</h3>
          <h6>Graphic Designer</h6>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          <!-- Social Buttons -->
          <ul class="list-inline list-unstyled text-center social">
              <li id="facebook"> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
              <li id="instagram"> <a href="#"> <i class="fa fa-instagram"></i></a> </li>
              <li id="linkedin"> <a href="#"> <i class="fa fa-linkedin"></i></a> </li>
          </ul>
  		    </div>
          <hr/>
  		</div>

      <!-- Individual Team Member -->
  		<div class="col-sm-6">
  			<div class="rewbox">
          <img src="{{ asset('images/team/user.png') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
          <h3>Pravalika Reddy</h3>
          <h6>Graphic Designer</h6>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          <!-- Social Buttons -->
          <ul class="list-inline list-unstyled text-center social">
              <li id="facebook"> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
              <li id="instagram"> <a href="#"> <i class="fa fa-instagram"></i></a> </li>
              <li id="linkedin"> <a href="#"> <i class="fa fa-linkedin"></i></a> </li>
          </ul>
  		    </div>
          <hr/>
  		</div>

      <!-- Individual Team Member -->
  		<div class="col-sm-6">
  			<div class="rewbox">
          <img src="{{ asset('images/team/user.png') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
          <h3>Vamsi Krishna</h3>
          <h6>Full Stack Web Designer & Developer</h6>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          <!-- Social Buttons -->
          <ul class="list-inline list-unstyled text-center social">
              <li id="facebook"> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
              <li id="instagram"> <a href="#"> <i class="fa fa-instagram"></i></a> </li>
              <li id="linkedin"> <a href="#"> <i class="fa fa-linkedin"></i></a> </li>
          </ul>
  		    </div>
          <hr/>
  		</div>

      <!-- Individual Team Member -->
  		<div class="col-sm-6">
  			<div class="rewbox">
          <img src="{{ asset('images/team/user.png') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
          <h3>Krishna</h3>
          <h6>Sales Executive</h6>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          <!-- Social Buttons -->
          <ul class="list-inline list-unstyled text-center social">
              <li id="facebook"> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
              <li id="instagram"> <a href="#"> <i class="fa fa-instagram"></i></a> </li>
              <li id="linkedin"> <a href="#"> <i class="fa fa-linkedin"></i></a> </li>
          </ul>
  		    </div>
  		</div>

    </div>
  </div>

@endsection
