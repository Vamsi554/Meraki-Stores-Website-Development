@extends('layouts.template')
@section('title', 'Sample')

@section('loadBulkOrderEnquiryCss')

  <style type="text/css">
        .table>tbody>tr>td,
        .table>tbody>tr>th {
          border-top: none;
        }
  </style>

@endsection

@section('content')

  <!-- Request a Sample -->
  <section id="bulkOrdersQuote">
      <p class="ml-5 md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/request') }}" style="text-decoration: none;" class="text-secondary">Request Sample</a></p>
      <div class="container-fluid">
          <img src="{{ asset('images/custom/getQuote.png') }}" class="img-fluid img-responsive" style="width: 100%"/>
      </div>
      <div class="container mt-5">
          <h2 style="color: #Ffce37; font-weight: 600;"> Need a Sample - Reach Out to Us </h2>
          <p> Need to check the quality of the fabric? Need to check the quality of the print? Request for a sample and get it delivered right to your doorstep. </p>
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

                @if(Session::has('success'))
                   <div class="alert alert-success" style="display: inline-block;">
                      {{ Session::get('success') }}
                         @php
                          Session::forget('success');
                         @endphp
                    </div>
                @endif

                <h6>Fill in the details below</h6>
                <div class="table-responsive">
                    <table class="table form-group">
                      <form method="POST" action="/processRequestSample" autocomplete="off">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <tr class="{{ $errors->has('product') ? 'has-error' : '' }}">
                            <td>Select Product</td>
                            <td>
                                <select class="form-control" title="Please Select Product" style="width: 100%!important;"
                                id="product" name="product" value="{{ old('product') }}">
                                  <option>Select Product</option>
                                  <option value="hoodie">Hoodies</option>
                                  <option value="sportsTees">Sports Tees</option>
                                  <option value="sweatShirts">SweatShirts</option>
                                  <option value="jackets">Jackets</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('product') }}</span>
                            </td>
                        </tr>
                        <tr class="{{ $errors->has('size') ? 'has-error' : '' }}">
                            <td>Select Size</td>
                            <td>
                                <select class="form-control" title="Please Select Size"  style="width: 100%!important;"
                                id="size" name="size" value="{{ old('size') }}">
                                  <option>Select Size</option>
                                  <option value="S">Small</option>
                                  <option value="M">Medium</option>
                                  <option value="L">Large</option>
                                  <option value="XL">X-Large</option>
                                  <option value="XXL">XX-Large</option>
                                  <option value="XXXL">XXX-Large</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('size') }}</span>
                            </td>
                        </tr>
                        <tr class="{{ $errors->has('name') ? 'has-error' : '' }}">
                          <td>Name</td>
                          <td>
                            <input type="text" id="name" name="name" style="width: 100%!important;" value="{{ old('name') }}">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                          </td>
                        </tr>
                        <tr class="{{ $errors->has('email') ? 'has-error' : '' }}">
                          <td>Email</td>
                          <td>
                            <input type="email" id="email" name="email" style="width: 100%!important;" value="{{ old('email') }}">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                          </td>
                        </tr>
                        <tr class="{{ $errors->has('contact') ? 'has-error' : '' }}">
                          <td>Contact</td>
                          <td>
                            <input type="text" id="contact" name="contact" style="width: 100%!important;" value="{{ old('contact') }}">
                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                          </td>
                        </tr>
                        <tr class="{{ $errors->has('organization') ? 'has-error' : '' }}">
                          <td>Organization</td>
                          <td>
                            <input type="text" id="organization" name="organization" style="width: 100%!important;" value="{{ old('organization') }}">
                            <span class="text-danger">{{ $errors->first('organization') }}</span>
                          </td>
                        </tr>
                        <tr class="{{ $errors->has('address') ? 'has-error' : '' }}">
                          <td>Address</td>
                          <td>
                            <textarea rows="3" cols="27" placeholder="Enter Your Message" style="width: 100%!important;"
                             name="address" id="address" value="{{ old('address') }}">

                            </textarea>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                          </td>
                        </tr>

                        <tr class="{{ $errors->has('comments') ? 'has-error' : '' }}">
                            <td>Enter Additional Comments</td>
                            <td>
                              <input type="text" id="comments" name="comments" style="width: 100%!important;" value="{{ old('comments') }}"/>
                              <span class="text-danger">{{ $errors->first('comments') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn text-uppercase" style="background-color: #Ffce37;" id="getQuoteBtn">Request For Sample</button>
                            </td>
                        </tr>
                      </form>
                    </table>
                </div>
              </div>
          </div>

          <p class="merakiText mt-5">
          Reach Out to Us on <i class="fa fa-mobile"></i> {{ config('app.adminContact') }} or E-Mail us at <i class="fa fa-envelope"></i><a href="mailto: contact@meraki.store" class="text-secondary">  contact@meraki.store</a>
          </p>

      </div>
  </section>
@endsection
