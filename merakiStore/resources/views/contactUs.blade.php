@extends('layouts.template')
@section('title', 'Contact Us')

@section('loadBulkOrderEnquiryCss')

  <style type="text/css">
        .table>tbody>tr>td,
        .table>tbody>tr>th {
          border-top: none;
        }
  </style>

@endsection


@section('content')
  <!-- Page Relevant Content Goes Here -->
  <section id="contactUs">
   <div class="container">
         <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/contactUs') }}" style="text-decoration: none;" class="text-secondary">Contact Us</a></p>
         <h2 class="merakiText">Connect with Us</h2>
         <hr style="border: 1px solid #000000;">
         <div class="row mt-4">
             <div class="col-sm-5 ml-5 mr-5" style="background-color: #fdfbfb;">
                 <h4>Contact Us</h4>
                 <p>
                     Have a question? Please reach out to us or fill in the form provided. <br>
                     Skim through our <a href="faqs.php">Frequently Asked Questions</a>
                 </p>
                 <hr style="border: 1px solid #C0C0C0;">
                 <ul class="list-unstyled">
                     <li style="margin-bottom: 20px;">
                         <h6>Call Us</h6>
                         <i class="fa fa-phone-square"></i> +91 9000 909 109
                     </li>
                     <li style="margin-bottom: 20px;">
                         <h6>Email Us</h6>
                         <i class="fa fa-envelope"></i> contact@meraki.store
                     </li>
                     <li style="margin-bottom: 20px;">
                         <h6>Head Quarters</h6>
                         <i class="fa fa-map-marker"></i>
                         Samast Enterprises India (OPC) Pvt Ltd. <br>
                         8-3-319/10/2, Murthy Enclave, <br>
                         Yellareddyguda, Ameerpet, <br>
                         Hyderabad, Telengana - 500073
                     </li>
                 </ul>
             </div>

             <div class="col-sm-5 ml-4" style="background-color: #fdfbfb;">

               @if(Session::has('success'))
                  <div class="alert alert-success" style="display: inline-block;">
                     {{ Session::get('success') }}
                        @php
                         Session::forget('success');
                        @endphp
                   </div>
               @endif

                 <h6>We’d Love to Hear from You.</h6>
                 <div class="table-responsive">
                     <table class="table">
                      <form method="POST" action="/processEnquiry" autocomplete="off">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                         <tr class="{{ $errors->has('name') ? 'has-error' : '' }}">
                             <td>Name</td>
                             <td>
                                 <input type="text" id="name" name="name" size="27"
                                 style="width:100%!important" value="{{ old('name') }}">
                                 <span class="text-danger">{{ $errors->first('name') }}</span>
                             </td>
                         </tr>
                         <tr class="{{ $errors->has('email') ? 'has-error' : '' }}">
                             <td>Email</td>
                             <td>
                                 <input type="email" id="email" name="email" size="27"
                                 style="width:100%!important" value="{{ old('email') }}">
                                 <span class="text-danger">{{ $errors->first('email') }}</span>
                             </td>
                         </tr>
                         <tr class="{{ $errors->has('contact') ? 'has-error' : '' }}">
                             <td>Contact</td>
                             <td>
                                 <input type="numeric" id="contact" name="contact" size="27"
                                 style="width:100%!important" value="{{ old('contact') }}">
                                 <span class="text-danger">{{ $errors->first('contact') }}</span>
                             </td>
                         </tr>
                         <tr class="{{ $errors->has('message') ? 'has-error' : '' }}">
                             <td>Message</td>
                             <td>
                                 <textarea rows="6" cols="27" id="message" name="message"
                                  style="width:100%!important" value="{{ old('contact') }}">
                                 </textarea>
                                 <span class="text-danger">{{ $errors->first('message') }}</span>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <button class="btn text-uppercase" type="submit" style="background-color: #Ffce37;" id="getQuoteBtn">
                                 Send Message</button>
                             </td>
                         </tr>
                       </form>
                     </table>
                 </div>
             </div>
         </div>

         <div class="row-fluid">
           <div class="span8">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.6141832406593!2d78.43664431413261!3d17.430293606155796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d2303ad193%3A0xe66ad0e220deb169!2sMeraki+Store!5e0!3m2!1sen!2sin!4v1533360423034" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
           </div>
         </div>
     </div>
  </section>

@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiContact").addClass("merakiUnderlineText");
</script>

@endsection
