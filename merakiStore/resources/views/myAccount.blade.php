@extends('layouts.template')
@section('title', 'Account')

@section('accountCss')
  <style type="text/css">
    .chose_area { width:100%; margin-bottom: 40px;}
    .chose_area input[type !="submit"]{ width: 100%; }
  </style>
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
		        <div class="chose_area">
              <form>
		            <h4>Registered User</h4>
		            <p>If you are already registered, please log in.</p>
		            <input type="text" class="text-field" placeholder="Name" size="50" required/><br>
		            <input type="password" class="text-field" placeholder="Password" size="50" required/><br><br>
		            <input type="submit" value="Login" class="btn btn-default code" />
              </form>
		         </div>
		        </div>
		        <div class="col-sm-6">
		          <div class="chose_area">
                <form>
  		            <h4>New User</h4>
  		            <p>Register now and make the most of My Account.</p>
  		            <input type="text" class="text-field" placeholder="Name" required/>
  		            <input type="text" class="text-field" placeholder="Email" required/>
  		            <input type="password" class="text-field" placeholder="Password" required/>
  		            <input type="password" class="text-field" placeholder="Confirm Password" required/>
  		            <input type="submit" value="Register" class="btn btn-default code" />
              </form>
		          </div>
		        </div>
    </div>
  </div>

@endsection
