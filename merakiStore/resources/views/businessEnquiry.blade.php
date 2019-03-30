@extends('layouts.template')
@section('title', 'Enquiry')

@section('loadEnquiryCss')
  <style type="text/css">

      input, textarea {
        background-color: #fdfbfb;
      }

      .table>tbody>tr>td,
      .table>tbody>tr>th {
        border-top: none;
      }

  </style>
@endsection

@section('content')

  <section id="businessEnquiry">
    <p class="ml-5 md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/enquiry') }}" style="text-decoration: none;" class="text-secondary">Business Enquiry</a></p>
    <h2 class="text-center">Need Customized Merchandise in Bulk?</h2>
    <br>
    <div class="container">
      <br>
      <h6 class="text-center">Aside from T-Shirts or Hoodies, Meraki Store also sells lot of customized merchandise
      and corporate gifting stuff. If you need either of those in bulk quantity, please fill out the below form or
      send us an email at <a class="text-secondary" href="mailto:contact@meraki.store" style="text-decoration: none;"> contact@meraki.store </a>
      </h6>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive">
              <table class="table">
               <form id="enquiryForm" method="post" action="{{ url('/processEnquiry') }}">
                 @csrf
                  <tr>
                      <td>NAME</td>
                      <td>
                          <input type="text" name="name" size="100" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                          value="{{ old('name') }}" required autofocus>
                      </td>
                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </tr>
                  <tr>
                      <td>EMAIL</td>
                      <td>
                          <input type="email" name="email" size="100" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                          value="{{ old('email') }}"  required>
                      </td>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </tr>
                  <tr>
                    <td>TELEPHONE</td>
                    <td>
                        <input type="text" name="telephone" size="100" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"
                        value="{{ old('telephone') }}" required>
                    </td>
                  </tr>
                  <tr>
                      <td>COMMENTS</td>
                      <td>
                          <textarea rows="6" cols="100" name="comments" class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}"
                          value="{{ old('comments') }}" required>

                          </textarea>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <button class="btn text-uppercase" type="submit" style="background-color: #Ffce37;" id="getQuoteBtn">
                          SUBMIT ENQUIRY</button>
                      </td>
                  </tr>
                </form>
              </table>
          </div>
        </div>
      </div>
    </div>

  </section>
@endsection
