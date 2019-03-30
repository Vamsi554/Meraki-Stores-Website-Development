@extends('layouts.template')
@section('title', 'Products')

@section('loadProductPageCss')
  <style type="text/css">

    #products {
      background: #fdfbfb !important;
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
    #products .card {
        border: none;
        background: #ffffff;
    }
    .frontside {
        position: relative;
        margin-bottom: 10px;
    }
    .frontside .card{
        min-height: 300px;
    }
    .frontside .card .card-title {
        font-family: SharpSans, Helvetica, Arial, "Trebuchet MS", sans-serif !important;
        color: #444444 !important;
        font-weight: 100 !important;
        line-height: 1.1875;
    }
    .frontside .card .card-body img {
        width: 220px;
        height: 220px;
    }
    </style>

@endsection

@section('content')

  <section id="products" class="md-5">
    <div class="container">
      <p class="md-3">
        <a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a>
        <i class="fa fa-angle-right"></i>
        <a href="{{ url('/featuredProducts') }}" style="text-decoration: none;" class="text-secondary">All Products</a>
        <i class="fa fa-angle-right"></i>
        <a href="{{ url($apparelTypeUrl) }}" style="text-decoration: none;" class="text-secondary">{{ $apparelTypeDescr }}</a>
      </p>
      <h5 class="section-title h2">{{ $apparelTypeDescr }}</h5>
      <div class="infinite-scroll">
        <div class="row">
          @foreach ($apparels as $row)
          <div class="col-sm-3 col-xs-6"><!-- Individual Product Display -->
              <div class="frontside">
                  <div class="card">
                    <a href="/categories/apparels/{{ $row['apparel_type'] }}/{{ $row['apparel_id'] }}" style="text-decoration: none;" target="_blank">
                      <div class="card-body text-center">
                          <p><img class="img-fluid img-responsive" src="{{ asset($row['img_main_view_loc']) }}"
                            alt="Meraki Store Products"></p>
                          <h4 class="card-title">{{ $row['description'] }}</h4>
                          <p class="card-title" style="font-weight: 20;"> {{ $row['price_per_unit_descr'] }} </p>
                          <p class="card-title" style="font-weight: 30;"> {{ $row['additional_descr'] }} </p>
                      </div>
                    </a>
                  </div>
              </div>
          </div><!-- End of Individual Product Display -->
          @endforeach
          {{ $apparels->links() }}
        </div><!-- End of Row -->
      </div><!-- End of Infinite Scroll -->
      </div><!-- End of container-->
  </section>

@endsection

@section('underlineScript')

<script type="text/javascript">
  $("#merakiProducts").addClass("merakiUnderlineText");
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>

<script type="text/javascript">
      $('ul.pagination').hide();
      $(function() {
          $('.infinite-scroll').jscroll({
              autoTrigger: true,
              loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
              padding: 0,
              nextSelector: '.pagination li.active + li a',
              contentSelector: 'div.infinite-scroll',
              callback: function() {
                  $('ul.pagination').remove();
              }
          });
      });
</script>

@endsection
