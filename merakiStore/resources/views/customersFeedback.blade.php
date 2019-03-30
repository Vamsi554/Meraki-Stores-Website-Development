@extends('layouts.template')
@section('title', 'Customers')

@section('customersFeedbackCss')

  <style type="text/css">
  .rewbox {height: 180px; width: 100%; overflow: auto; margin-bottom: 20px;}
  .rewbox span { text-align: right; color: #000;font-family: 'open_sanssemibold'; display: block;
                border-bottom: 1px dotted #000; padding-bottom: 10px; }

  </style>

@endsection

@section('content')

  <div class="container">
    <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/customers') }}" style="text-decoration: none;" class="text-secondary">Customers</a></p>
    <div class="row">
      <div class="col-sm-12">
    		<h2>What do our customers say?</h2>
    		<hr>
    	</div>
  		<div class="col-sm-6">
  			<div class="rewbox">
  				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  				<span>  Deloitte </span>
  		    </div>
  		</div>
  		<div class="col-sm-6">
  			<div class="rewbox">
  				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  				<span>  Oracle</span>
  			</div>
  		</div>
  		<div class="col-sm-6">
  			<div class="rewbox">
  				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  				<span>  ABBOTT Laboratories </span>
  			</div>
  		</div>
      <div class="col-sm-6">
  			<div class="rewbox">
  				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  				<span>  Indian School Of Business </span>
  			</div>
  		</div>
      <div class="col-sm-6">
  			<div class="rewbox">
  				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  				<span>  IIT Madras </span>
  			</div>
  		</div>
    </div>
  </div>

@endsection


@section('underlineScript')

<script type="text/javascript">

  $(window).load(function() {
      $("#merakiCustomers").addClass("merakiUnderlineText");
  });

</script>

@endsection
