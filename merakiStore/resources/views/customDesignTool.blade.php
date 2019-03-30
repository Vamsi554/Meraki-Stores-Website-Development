@extends('layouts.designLabTemplate')
@section('title', 'Design Lab')

@section('merakiDesignLabCss')

  <style type="text/css">

      .pt {
        padding-top: 20px;
      }

      .aUnderline {
        text-decoration: none;
      }

      ::-webkit-input-placeholder {
          color: #808080;
          text-align: center;
      }

      :-moz-placeholder {
          color: #808080;
          text-align: center;
      }
      .color-preview {
	      	border: 1px solid #CCC;
          padding-top: 3px;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	    }
	    .rotate {
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
		    -ms-transform:rotate(90deg);
		  }

		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}

  </style>

@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-md-6 col-sm-6">
        <div class="accordion" id="faqs">
            <!-- FAQ 1 -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <h5><a class="accordion-toggle collapsed text-secondary" data-toggle="collapse"
                    data-parent="#faqs" href="#faq1" style="text-decoration: none;">
                  ADD TEXT
                </a></h5>
              </div>
              <div id="faq1" class="accordion-body collapse">
                <div class="accordion-inner text-secondary">
                    <p class="text-secondary">ADD TEXT</p>
                    <form>
                      <table>
                        <tr>
                          <td><input type="text" placeholder="Enter Text Here" style="height: 50px; width: 250px;" required></td>
                        </tr>
                        <tr></tr>
                        <tr>
                          <td class="pt text-right"><button class="btn btn-primary">ADD TO DESIGN</button></td>
                        </tr>
                      </table>
                    </form>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-group mt-3">
              <div class="accordion-heading">
                <h5><a class="accordion-toggle collapsed text-secondary" data-toggle="collapse"
                    data-parent="#faqs" href="#faq2" style="text-decoration: none;">
                  PRODUCT COLORS
                </a></h5>
              </div>
              <div id="faq2" class="accordion-body collapse">
                <div class="accordion-inner text-secondary">
                  <div class="well">
      							<ul class="nav">
      								<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
      								<li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
      								<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
      								<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
      								<li class="color-preview" title="Black" style="background-color:#222222;"></li>
      								<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
      								<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
      								<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
      								<li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
      								<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
      								<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
      								<li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
      								<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
      								<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
      								<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
      								<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
      								<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
      								<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
      								<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
      								<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>
      								<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
      							</ul>
      						</div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-group mt-3">
              <div class="accordion-heading">
                <h5><a class="accordion-toggle collapsed text-secondary" data-toggle="collapse"
                    data-parent="#faqs" href="#faq3" style="text-decoration: none;">
                  ADD CLIPART
                </a></h5>
              </div>
              <div id="faq3" class="accordion-body collapse">
                <div class="accordion-inner text-secondary">
                  <div class="well">
    							   <div id="avatarlist">
      								 <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                       <img style="cursor:pointer;" class="img-polaroid" src="{{ asset('images/designTool/invisibleman.jpg') }}">
                     </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-group mt-3">
              <div class="accordion-heading">
                <h5><a class="accordion-toggle collapsed text-secondary" data-toggle="collapse"
                    data-parent="#faqs" href="#faq4" style="text-decoration: none;">
                  ADD NOTES
                </a></h5>
              </div>
              <div id="faq4" class="accordion-body collapse">
                <div class="accordion-inner text-secondary">
                <form>
                  <table>
                    <tr><td class="text-secondary">Leave a note for our Production Team</td></tr>
                    <tr>
                      <td>
                        <textarea rows="5" cols="50">

                        </textarea>
                      </td>
                    </tr>
                    <tr><td class="pt text-right"><button class="btn btn-primary">SAVE NOTES</button></td></tr>
                  </table>
                </form>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-6 col-sm-6">
        <div id="shirtDiv" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
          <img name="tshirtview" id="tshirtFacing" src="{{ asset('images/designTool/crew_front.png') }}">
          <div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">
            <canvas id="tcanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

@endsection
