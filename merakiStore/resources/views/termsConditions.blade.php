@extends('layouts.template')
@section('title', 'Terms')

@section('content')

  <div class="container">
    <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/termsConditions') }}" style="text-decoration: none;" class="text-secondary">Terms & Conditions</a></p>
    <div class="row">
      <div class="col-sm-12">
		    	<h2>Terms And Conditions</h2>
		    	<hr>
		    	<p>At Meraki Store, we take utmost care of the private information provided by our customers so that it is not misused in any manner. Please go through our privacy policy to understand what kind of information we gather and how it is used.</p>
		    	<h6><i class="fa fa-hand-o-right"></i> What information do we gather?</h6>
		    	<p>We collect information from you when you sign up on our portal, place an order, consult us for a custom merchandise or contact us for any reason whatsoever.</p>
				  <p>We you make any transaction or requests for quotations on our portal, we ask for your name, contact details, billing address and payment information. </p>
				<h6><i class="fa fa-hand-o-right"></i> What do we use your information for?</h6>
		    	<div class="tab-pane">
		    		<ul>
		        		<li>To better our customer service. </li>
		        		<li>To process transactions.</li>
                <li>To send offers and tips through email.</li>
				    </ul>
		    	</div>
			    <h6><i class="fa fa-hand-o-right"></i> How do we protect it?</h6>
			    <p>We have implemented reliable security measures to maintain the confidentiality of your private information. We use a secure server, SSL technology and reliable payment gateways.</p>
			    <h6><i class="fa fa-hand-o-right"></i> Cookies</h6>
			    <p>We do use cookies to remember your preferences and offer you an optimal website experience.</p>
			    <h6><i class="fa fa-hand-o-right"></i> Do we share your information with outside parties?</h6>
			    <p>We don’t share/sell your personal information with outside parties.</p>
			    <p><strong>Note:</strong> By using our website, you agree to our privacy policy.<p>
				  <p>Have any questions regarding this policy? Feel free to contact us – We’d love to clear the air.  </p>
		  </div>
    </div>
  </div>

@endsection
