@extends('layouts.template')
@section('title', 'Featured Products')

@section('loadProductPageCss')

  <style type="text/css">

    .accordion.accordion-2 p {
        font-size: 1rem;
    }
    .accordion.accordion-2 .card {
        border: 0;
        background-color: transparent;
    }
    .accordion.accordion-2 .card .card-header,
    .accordion.accordion-2 .card .card-body {
        border: 0;
        border-radius: 3px;
    }

  </style>

@endsection

@section('content')

  <div class="container">
    <!-- Grid row -->
    <div class="row d-flex justify-content-center">
        <!-- Grid column -->
        <div class="col-md-10 col-xl-6 py-5">
            <!--Accordion wrapper-->
            <div class="accordion accordion-2" id="accordionEx7" role="tablist" aria-multiselectable="true">
                <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                        <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Apparels 
                            </h5>
                        </a>
                    </div>
                    <!-- Card body -->
                    <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx7">
                        <div class="card-body mb-1 rgba-grey-light white-text">
                            <ul class="list-unstyled quick-links">
                              <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Electronics <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <!-- Card body -->
                    <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx7">
                        <div class="card-body mb-1 rgba-grey-light white-text">
                          <ul class="list-unstyled quick-links">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Stationary <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <!-- Card body -->
                    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
                        <div class="card-body mb-1 rgba-grey-light white-text">
                          <ul class="list-unstyled quick-links">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Information</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
            </div>
            <!--/.Accordion wrapper-->
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>

@endsection
