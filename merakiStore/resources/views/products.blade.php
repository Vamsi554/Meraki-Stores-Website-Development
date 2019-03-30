@extends('layouts.template')
@section('title', 'Products')

@section('loadProductDetailCss')
  <style type="text/css">

    .table>tbody>tr>td,
    .table>tbody>tr>th {
      border-top: none;
    }
    .aboutUsLinks {
      text-decoration: none!important;
      outline: 0!important;
      color: #555!important;
    }
    .productsLayout {
      box-sizing: border-box;
    }
    .productsLayout .column {
      float: left;
      width: 25%;
      padding: 10px;
    }
    .productsLayout .column img {
        opacity: 0.8;
        cursor: pointer;
    }
    .productsLayout .column img:hover {
        opacity: 1;
    }
    .productsLayout .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .prodInfo{ width: 100%; overflow: hidden;}
    .prodInfo h3 {margin: 0 0 20px 0;color: #333;font-size: 22px;line-height: 40px;
      font-weight: 500;-webkit-text-size-adjust: 100%;-webkit-font-smoothing: subpixel-antialiased;}


  </style>
@endsection

@section('content')

  <div class="container">
    <div class="row">
       <div class="col-sm-6 productsLayout">
         <div style="position: relative;">
           <img src="{{ asset($apparel['img_main_view_loc']) }}" id="expandedImage" style="width: 100%;">
         </div>
         <!-- Other View Images -->
        <div class="row">
          <div class="column">
            <img src="{{ asset($apparel['img_main_view_loc']) }}" style="width:100%" onclick="myFunction(this);">
          </div>
          <div class="column">
            <img src="{{ asset($apparel['img_alt_view1_loc']) }}" style="width:100%" onclick="myFunction(this);">
          </div>
          <div class="column">
            <img src="{{ asset($apparel['img_alt_view2_loc']) }}" style="width:100%" onclick="myFunction(this);">
          </div>
          <div class="column">
            <img src="{{ asset($apparel['img_alt_view3_loc']) }}" style="width:100%" onclick="myFunction(this);">
          </div>
        </div>
       </div>

       <div class="col-sm-6 mt-5">
         <div id="prodInfo">
           <h4>{{ $apparel['description'] }}</h4>
           <hr style="border-bottom: 2px solid #Ffce37;">
           <div class="rating">
      		   	<div class="fk-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
               </div>
			     <p> Be the first to review this product : <a class="text-secondary" href="/">Write a Review </a></p>
            <div class="table-responsive">
              <table class="table form-group">
            	  <tr>
            		  <td>
            			  <button class="btn text-uppercase" style="background-color: #Ffce37;" id="getQuoteBtn">Request For Quote</button>
            		  </td>
            	  </tr>
              </table>
            </div>
           <h5 class="ml-3">Details</h5>
           <ul class="list-unstyled mt-1 ml-3">
               <li class="mt-1"><i class="fa fa-angle-right"></i>  {{ $apparel['additional_info_1'] }} </li>
               <li class="mt-1"><i class="fa fa-angle-right"></i>  {{ $apparel['additional_info_2'] }} </li>
               <li class="mt-1"><i class="fa fa-angle-right"></i>  {{ $apparel['additional_info_3'] }} </li>
               <li class="mt-1"><i class="fa fa-angle-right"></i>  {{ $apparel['additional_info_4'] }} </li>
               <li class="mt-1"><i class="fa fa-angle-right"></i>  {{ $apparel['additional_info_5'] }} </li>
           </ul>
		       </div>
         </div>
       </div>
    </div>
  </div>

  <div class="container">
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item mr-5">
        <a class="nav-link aboutUsLinks" data-toggle="tab" href="#descr">PRODUCT DESCRIPTION</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link aboutUsLinks" data-toggle="tab" href="#info">PRODUCT INFORMATION</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link aboutUsLinks" data-toggle="tab" href="#details">ADDITIONAL DETAILS</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link aboutUsLinks" data-toggle="tab" href="#reviews">CUSTOMER REVIEWS</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="descr" class="container tab-pane active"><br>
        <h3>Product Description</h3>
        <p>{{ $apparel['product_main_descr'] }}</p>
      </div>
      <div id="info" class="container tab-pane"><br>
        <h3>Product Information</h3>
        <p>{{ $apparel['product_main_info'] }}</p>
      </div>
      <div id="details" class="container tab-pane fade"><br>
        <h3>Additional Details</h3>
        <p>{{ $apparel['product_addtional_details'] }}</p>
      </div>
      <div id="reviews" class="container tab-pane fade"><br>
        <h3>Customer Reviews</h3>
        <p>{{ $apparel['product_cust_reviews1'] }}</p>
        <p>{{ $apparel['product_cust_reviews2'] }}</p>
        <p>{{ $apparel['product_cust_reviews3'] }}</p>
      </div>
    </div>
  </div>

@endsection


@section('loadProductScript')

  <script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImage");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
  </script>

@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiProducts").addClass("merakiUnderlineText");
</script>

@endsection
