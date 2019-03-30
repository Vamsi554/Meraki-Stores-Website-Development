@extends('layouts.template')
@section('title', 'Bulk Order Enquiry')

@section('loadBulkOrderEnquiryCss')

  <style type="text/css">
        .table>tbody>tr>td,
        .table>tbody>tr>th {
          border-top: none;
        }
  </style>

@endsection

@section('content')

  <!-- Bulk Order Enquiry Section -->
  <section id="bulkOrdersQuote">
      <p class="ml-5 md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/bulkOrderEnquiry') }}" style="text-decoration: none;" class="text-secondary">Bulk Order Enquiry</a></p>
      <div class="container-fluid">
          <img src="{{ asset('images/custom/getQuote.png') }}" class="img-fluid img-responsive" style="width: 100%"/>
      </div>
      <div class="container mt-5">
          <h2 style="color: #Ffce37; font-weight: 600;"> Get Quick Quote - Reach Out to Us </h2>
          <p> Looking to purchase a whole lot of customised t-shirts and hoodies for your classmates, teammates, batchmates, cousins, colleagues or any group, send us your details to get a quick quote in no time.</p>
          <div class="row mt-3">
              <!-- Quotation -->
              <div class="col-sm-6" style="background-color: #FFFFFF;">
                  <h5 style="color: #Ffce37; font-weight: 200;">Bulk Orders Enquiry</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
              </div>
              <span class="col-sm-0"></span>
              <!-- Personal Details -->
              <div class="col-sm-6" style="background-color: #fdfbfb;">
                <h4>Order Details</h4>
                <div class="table-responsive">
                    <table class="table form-group">
                        <tr>
                          <td>Name</td>
                          <td><input type="text" name="" style="width: 100%!important;"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><input type="email" name="" style="width: 100%!important;" required></td>
                        </tr>
                        <tr>
                          <td>Contact</td>
                          <td><input type="text" name="" style="width: 100%!important;" required></td>
                        </tr>
                        <tr>
                            <td>Select Product</td>
                            <td>
                                <select class="form-control" title="Please Select Product" style="width: 100%!important;" required>
                                  <option>Select Product</option>
                                  <option>Hoodies</option>
                                  <option>Sports Tees</option>
                                  <option>SweatShirts</option>
                                  <option>Jackets</option>
                                  <option>Electronics</option>
                                  <option>Stationary</option>
                                  <option>Momentos</option>
                                  <option>Bags</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Select No.Of Print Colors</td>
                            <td><input type="number" name="" min="0" style="width: 100%!important;"/></td>
                            <td><a href="#" title="Help"><img src="{{ asset('images/custom/questionMark.png') }}"/></a></td>
                        </tr>
                        <tr>
                            <td>Select Design Size</td>
                            <td>
                                <select class="form-control" title="Please Select Size" style="width: 100%!important;">
                                  <option>Select Design Size</option>
                                  <option>A3</option>
                                  <option>A4</option>
                                </select>
                            </td>
                            <td><a href="#" title="Help"><img src="{{ asset('images/custom/questionMark.png') }}"/></a></td>
                        </tr>
                        <tr>
                            <td>Enter Additional Comments</td>
                            <td><input type="text" name="" style="width: 100%!important;"/></td>
                            <td><a href="#" title="Help"><img src="{{ asset('images/custom/questionMark.png') }}"/></a></td>
                        </tr>
                        <tr>
                            <td>Enter Quantity</td>
                            <td><input type="number" name="" min="0" style="width: 100%!important"/></td>
                            <td><a href="#" title="Help"><img src="{{ asset('images/custom/questionMark.png') }}"/></a></td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn text-uppercase" style="background-color: #Ffce37;" id="getQuoteBtn">Get Estimate</button>
                            </td>
                        </tr>
                    </table>
                </div>
              </div>
          </div>

          <p class="merakiText mt-5">
          Reach Out to Us on <i class="fa fa-mobile"></i> {{ config('app.adminContact') }} or E-Mail us at <i class="fa fa-envelope"></i><a href="mailto: contact@meraki.store" class="text-secondary">  contact@meraki.store</a>
          </p>

          <p class="merakiText">
          If you didn't find your required merchandise at our store, raise an enquiry to our customer support team <strong><a href="{{ url('/enquiry') }}" style="text-decoration: none; color: #Ffce37;">HERE</a></strong>. We'll sort that out.
          </p>

      </div>
  </section>
@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiBulkOrders").addClass("merakiUnderlineText");
</script>

@endsection
