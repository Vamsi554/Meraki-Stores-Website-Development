@extends('layouts.template')
@section('title', 'About Us')

@section('loadAboutUsCss')
  <style type="text/css">
      .aboutUsLinks {text-decoration: none!important; outline: 0!important; color: #555!important;}
  </style>
@endsection

@section('content')

 <div class="container">
    <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/aboutUs') }}" style="text-decoration: none;" class="text-secondary">About Us</a></p>
    <h2>Get to Know Meraki Store</h2>
    <div class="row">
      <div class="col-sm-4 mt-5">
        <img src="{{ asset('images/custom/merakiStoreFooterLogo.png') }}" style="width: 150px;" alt="" />
      </div>
      <div class="col-sm-8 mt-5">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
</div>

<div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item mr-5">
      <a class="nav-link aboutUsLinks" data-toggle="tab" href="#story">OUR STORY</a>
    </li>
    <li class="nav-item ml-5 mr-5">
      <a class="nav-link aboutUsLinks" data-toggle="tab" href="#offer">WHAT WE OFFER</a>
    </li>
    <li class="nav-item ml-5 mr-5">
      <a class="nav-link aboutUsLinks" data-toggle="tab" href="#diff">THE MERAKI STORE DIFFERENCE</a>
    </li>
    <li class="nav-item ml-5 mr-5">
      <a class="nav-link aboutUsLinks" data-toggle="tab" href="#info">COMPANY INFO</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="story" class="container tab-pane active"><br>
      <h3>Read Our Story</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="offer" class="container tab-pane fade"><br>
      <h3>What we Offer!</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="diff" class="container tab-pane fade"><br>
      <h3>The Meraki Store Difference</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="info" class="container tab-pane fade"><br>
      <h3>Company Info</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>

@endsection
