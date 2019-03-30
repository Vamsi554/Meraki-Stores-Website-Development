@extends('layouts.template')
@section('title', 'Featured Templates')

@section('loadProductPageCss')
  <style type="text/css">
    #templates {
      background: #fdfbfb !important;
    }
    section {
        padding: 0px 0;
    }
    section .section-title {
        text-align: left;
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif !important;
        left: 6%;
        right: 57%;
        color: #444444 !important;
        font-weight: 100 !important;
        line-height: 1.1875;
    }
    #templates .card {
        border: none;
        background: #ffffff;
    }
    .frontside {
        position: relative;
        margin-bottom: 30px;
    }
    .frontside .card{
        min-height: 312px;
    }
    .frontside .card .card-title {
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif !important;
        left: 6%;
        right: 57%;
        color: #444444 !important;
        font-weight: 100 !important;
        line-height: 1.1875;
    }
    .frontside .card .card-body img {
        width: 220px;
        height: 220px;
        border-radius: 50%;
    }
    </style>

@endsection

@section('content')

  <section id="templates" class="pb-2">
    <div class="container">
      <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/designTemplates') }}" style="text-decoration: none;" class="text-secondary">Templates</a></p>
      <h5 class="section-title h2">All Templates</h5>
      <div class="row">
        <!-- Display Products Page -->

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">AeroSpace</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/aeroSpace.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">AeroMobile</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/autoMobile.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Chemical</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/chemical.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Civil</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/civil.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Computers</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/computer.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Cricket</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/cricket.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Electrical</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/electrical.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Engineer</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/engineer.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">FootBall</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/footBall.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Mechanical</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/mechanical.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        <!-- Individual Product Display -->
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="frontside">
                <div class="card">
                  <a href="#" style="text-decoration: none;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Robotics</h4>
                        <p><img class="img-fluid" src="{{ asset('images/designTemplates/robotics.png') }}"
                          alt="Meraki Store Products"></p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

      </div>
    </div>
  </section>

@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiTemplates").addClass("merakiUnderlineText");
</script>

@endsection
