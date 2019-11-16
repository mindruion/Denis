@extends('layouts.app')

@section('content')

<div id="main-wrapper" class="our-agents-content">

  <!-- Page Content -->
  <div id="page-content">

    <video autoplay loop poster="posterimage.jpg">
      <source src="/videos/file.mp4" type="video/mp4">
    </video>

    <div class="index-page-search-content">
      <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

        <!-- <div class="owl-wrapper-outer">
          <div class="owl-wrapper" style="width: 8106px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
            <div class="owl-item" style="width: 1351px;">
              <div class="item" style="background: url('/images/home-bg.jpg') center center no-repeat; background-size: cover;">
              </div>
            </div>
            <div class="owl-item" style="width: 1351px;">
              <div class="item" style="background: url('/images/home-bg2.jpg') center center no-repeat; background-size: cover;">
              </div>
            </div>
            <div class="owl-item" style="width: 1351px;">
              <div class="item" style="background: url('/images/home-bg3.jpg') center center no-repeat; background-size: cover;">
              </div>
            </div>
          </div>
        </div> -->


      <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
      <div class="container">
        <div class="search-holder">
          <h1>MotiJobs</h1>
          <h2>the most complete HR Admin Template</h2>

          <div id="header-search">
            <div class="header-search-bar">
              <div class="">
                <form>
                  <div class="basic-form clearfix"> <a href="http://new.uouapps.com/motijobs/index.html#" class="toggle"><span></span></a>
                    <div class="hsb-input-1">
                      <input type="text" class="form-control" placeholder="Keywords">
                    </div>
                    <div class="hsb-text-1">in</div>
                    <div class="hsb-container">
                      <div class="hsb-input-2">
                        <input type="text" class="form-control" placeholder="Location">
                      </div>

                    <div class="hsb-select">
                        <div class="uou-custom-select"><select class="form-control">
                          <option value="0">Select Category</option>
                          <option value="">Banking</option>
                          <option value="">Finance</option>
                          <option value="">IT</option>
                          <option value="">Specialists</option>
                        </select><input class="value-holder" type="text" disabled="disabled" placeholder="Select Category"><div class="trigger"><i class="fa fa-caret-down"></i></div><ul class="select-clone"><li data-value="0">Select Category</li><li data-value="">Banking</li><li data-value="">Finance</li><li data-value="">IT</li><li data-value="">Specialists</li></ul></div>
                      </div></div>
                    <div class="hsb-submit">
                      <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Search</span></button>
                    </div>
                  </div>
                  <div class="advanced-form">
                    <div class="">
                      <div class="row">
                        <label class="col-md-3">Distance</label>
                        <div class="col-md-9">
                          <div class="range-slider">
                            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="1" data-max="200" data-current="100" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 49.7487%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://new.uouapps.com/motijobs/index.html#" style="left: 49.7487%;"></a></div>
                            <div class="last-value"><span>100</span> km</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Rating</label>
                        <div class="col-md-9">
                          <div class="range-slider">
                            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="1" data-max="100" data-current="20" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 19.1919%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://new.uouapps.com/motijobs/index.html#" style="left: 19.1919%;"></a></div>
                            <div class="last-value">&gt; <span>20</span> %</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Days Published</label>
                        <div class="col-md-9">
                          <div class="range-slider">
                            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="1" data-max="60" data-current="30" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 49.1525%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://new.uouapps.com/motijobs/index.html#" style="left: 49.1525%;"></a></div>
                            <div class="last-value">&lt; <span>30</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Location</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Switzerland">
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Category</label>
                        <div class="col-md-9">
                          <div class="uou-custom-select"><select class="form-control">
                            <option value="">Select Category</option>
                            <option value="">Banking</option>
                            <option value="">Finance</option>
                            <option value="">IT</option>
                            <option value="">Specialists</option>
                          </select><input class="value-holder" type="text" disabled="disabled" placeholder="Select Category"><div class="trigger"><i class="fa fa-caret-down"></i></div><ul class="select-clone"><li data-value="">Select Category</li><li data-value="">Banking</li><li data-value="">Finance</li><li data-value="">IT</li><li data-value="">Specialists</li></ul></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- end .container -->


  </div>

  <!-- Footer Start -->
  <footer id="footer">
    <div class="copyright">
      <div class="container">
        <p>2016 © All rights reserved. Powered by <a href="http://new.uouapps.com/motijobs/index.html#">UOUapps</a></p>

        <ul class="list-inline">
          <li><a href="http://new.uouapps.com/motijobs/index.html#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://new.uouapps.com/motijobs/index.html#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://new.uouapps.com/motijobs/index.html#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="http://new.uouapps.com/motijobs/index.html#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- end #footer -->

</div>


@stop
