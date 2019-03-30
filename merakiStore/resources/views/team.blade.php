@extends('layouts.template')
@section('title', 'Our Team')

@section('customersFeedbackCss')

<style type="text/css">

.timeline {
    position: relative;
    list-style: none;
}

.timeline>li:nth-child(even) {
    position: relative;
    margin-bottom: 50px;
    height: 150px;
    right:-100px;
}

.timeline>li:nth-child(odd) {
    position: relative;
    margin-bottom: 50px;
    height: 150px;
    left:-100px;
}

.timeline>li:before,
.timeline>li:after {
    content: " ";
    display: table;
}

.timeline>li:after {
    clear: both;
    min-height: 170px;
}

.timeline > li .timeline-panel {
  position: relative;
  float: left;
  width: 40%;
  padding: 0 0 0 0;
  text-align: right;
}

.timeline>li .timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 0;
    border-left-width: 0;
}

.timeline>li .timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 0;
    border-left-width: 0;
}

.timeline>li .timeline-image {
    z-index: 100;
    position: absolute;
    left: 50%;
    border: 7px solid #3b5998;
    border-radius: 100%;
    background-color: #3b5998;
    box-shadow: 0 0 5px #4582ec;
    width: 150px;
    height: 150px;
    margin-left: -100px;
    align-items: center;
}

.timeline>li .timeline-image h4 {
    margin-top: 12px;
    font-size: 10px;
    line-height: 14px;
}

.timeline>li.timeline-inverted>.timeline-panel {
    float: right;
    text-align: left;
}

.timeline>li.timeline-inverted>.timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0;
}

.timeline>li.timeline-inverted>.timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0;
}

.timeline>li:last-child {
    margin-bottom: 0;
}

.timeline .timeline-heading h4 {
  margin-top:22px;
    margin-bottom: 4px;
    padding:0;
    color: #b3b3b3;
}

.timeline .timeline-heading h4.subheading {
  margin:0;
  padding:0;
    text-transform: none;
    font-size:18px;
    color:#333333;
}

.timeline .timeline-body>p,
.timeline .timeline-body>ul {
    margin-bottom: 0;
    color:#808080;
}
/*Style for even div.line*/
.timeline>li:nth-child(odd) .line:before {
    content: "";
    position: absolute;
    top: 40px;
    bottom: 0;
    left: 690px;
    width: 4px;
    height:280px;
    background-color: #3b5998;
    -ms-transform: rotate(-44deg); /* IE 9 */
    -webkit-transform: rotate(-44deg); /* Safari */
    transform: rotate(-44deg);
    box-shadow: 0 0 5px #4582ec;
}
/*Style for odd div.line*/
.timeline>li:nth-child(even) .line:before  {
    content: "";
    position: absolute;
    top: 40px;
    bottom: 0;
    left: 450px;
    width: 4px;
    height:340px;
    background-color: #3b5998;
    -ms-transform: rotate(44deg); /* IE 9 */
    -webkit-transform: rotate(44deg); /* Safari */
    transform: rotate(44deg);
    box-shadow: 0 0 5px #4582ec;
}
</style>

@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="text-center" style="color: #Ffce37;"> Meet Our Team </h3>
        <ul class="timeline md-5">
          <li>
            <div class="timeline-image">
              <img src="{{ asset('images/team/rufus.jpg') }}" class="img-rounded" alt="Team Lead" style="width: 150px; height: 150px; border-radius: 5rem;">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Rufus Sunny</h4>
                <h4 class="subheading">Graphic Designer</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img src="{{ asset('images/team/rufus.jpg') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Rufus Sunny</h4>
                <h4 class="subheading">Graphic Designer</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>

          <li>
            <div class="timeline-image">
              <img src="{{ asset('images/team/rufus.jpg') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Rufus Sunny</h4>
                <h4 class="subheading">Graphic Designer</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img src="{{ asset('images/team/rufus.jpg') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Rufus Sunny</h4>
                <h4 class="subheading">Graphic Designer</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>

          <li>
            <div class="timeline-image">
              <img src="{{ asset('images/team/rufus.jpg') }}" class="img-rounded mr-3" alt="Team Lead" style="float: left; width: 150px; height: 150px; border-radius: 5rem;">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Rufus Sunny</h4>
                <h4 class="subheading">Graphic Designer</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>

@endsection
