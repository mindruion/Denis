<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="/public/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eff90e359c.js"></script>

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('styles/styles_init.css') }}"> -->

    <link href="{{ asset('styles/fonts.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/jquery.tagsinput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha256-gvEnj2axkqIj4wbYhPjbWV7zttgpzBVEgHub9AAZQD4=" crossorigin="anonymous" />

</head>
<body>
    <div id="app">
        <header id="header">
          <div class="header-top-bar">

            <!--
            HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
            -->

            <div class="header-notification-bar" style="display:none;">
              <div class="register-user">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3 col-sm-3">
                      <div class="logo-section">
                        <a href="/index.html"><img src="/public/icons/logo-bu.png" alt=""></a>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-5">
                      <div class="search-form">
                        <form action="/index.html#">
                          <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                          <input type="search" placeholder="Search..." class="topbar-search-input">
                          <button class="search-button"><i class="fa fa-search"></i></button>
                        </form>

                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                      <div class="notification-section text-right">
                        <ul class="list-inline">
                          <li><a href="/index.html#"><i class="fa fa-envelope-o"></i></a><span class="new-notification">3</span></li>
                          <li><a href="/index.html#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                          <li class="user-profile-pic"><a href="/index.html#"><img src="/public/icons/agent-img-1.jpg" alt=""></a></li>
                        </ul>
                      </div>
                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .container -->
              </div> <!-- end .register-user -->
            </div> <!-- end. header-notification-bar  -->

            <!--
            END HEADER NOTIFICATION TOP BAR
            -->

            <!--
            HEADER TOP BAR FOR NON REGISTER USER
            -->

            <div class="header-notification-bar">
              <div class="non-register-user">

                <div class="container">
                  <div class="row">

                    <div class="col-md-3 col-sm-3">
                      <div class="logo-section">
                        <a href="/index.html"><img src="/icons/logo-bu.png" alt=""></a>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-5">
                      <div class="search-form">

                        <form action="/index.html#">
                          <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                          <input type="search" placeholder="Search..." class="topbar-search-input">
                          <button class="search-button"><i class="fa fa-search"></i></button>
                        </form>

                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                      <div class="notification-section text-right">

                        <ul class="list-inline">
                          <li><a href="/index.html#">EN<i class="fa fa-caret-down"></i></a>
                            <ul>
                              <li><a href="/index.html#">DE</a></li>
                              <li><a href="/index.html#">ES</a></li>
                              <li><a href="/index.html#">IT</a></li>
                            </ul>

                          </li>
                          <li><a href="/index.html#">Login</a></li>
                          <li><a href="/index.html#">Register</a></li>
                        </ul>
                      </div>
                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .container -->
              </div> <!-- end .visitors-top-bar -->
            </div> <!-- end. header-notification-bar  -->


            <!--
            END HEADER TOP BAR FOR WITHOUT LOGIN USER
            -->

            <!-- Navigation -->
            <div class="main-navbar">

              <nav class="navbar navbar-default">
                <div class="container">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.html"><img src="/public/icons/logo-bu.png" alt=""></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/index.html">Home</a></li>

                      <li class="dropdown">
                        <a href="/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Job
                          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/job-search.html">job search</a></li>
                          <li><a href="/job-preview.html">Job Preview</a></li>
                          <li><a href="/job-registration(full-width).html">Job Registration (full-width)</a></li>
                          <li><a href="/job-registration(sidebar).html">Job Registration (sidebar)</a></li>

                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidate
                          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/candidate-profile.html">candidate profile</a></li>
                          <li><a href="/candidate-registration.html">Candidate registration</a></li>
                        </ul>
                      </li>
                      <li><a href="/professionals.html">Professionals</a></li>
                      <li class="dropdown">
                        <a href="/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our clients
                          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/clients.html">Our clients</a></li>
                          <li><a href="/add-client.html">Quick add client</a></li>
                          <li><a href="/client-profile(tab1).html">Client profile</a></li>
                          <li><a href="/client-profile(tab2).html">Client team</a></li>
                          <li><a href="/client-profile(tab3).html">Applicants</a></li>
                          <li><a href="/client-registration.html">Client registration</a></li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agent
                          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/our-agents.html">Our agents</a></li>
                          <li><a href="/agent-profile.html">Agent profile</a></li>
                          <li><a href="/add-agents.html">Add agent</a></li>
                        </ul>
                      </li>
                      <!-- <li><a href="#">Blog</a></li> -->
                      <li class="dropdown">
                        <a href="/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration
                          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/register-process1.html">Registration step 1</a></li>
                          <li><a href="/register-process2.html">Registration step 2</a></li>
                          <li><a href="/register-process3.html">Registration step 3</a></li>
                          <li><a href="/register-process4.html">Registration step 4</a></li>
                        </ul>
                      </li>
                      <li><a href="/contact-us.html">Contact</a></li>
                    </ul>

                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
              </nav>
            </div> <!-- main-navbar -->
            <!-- end .header-top-bar -->
          </div>

        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="fit-vids-style" id="fit-vids-style" style="display: none;">­<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></div><script src="/public/js/jquery-3.1.1.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="/public/js/crs.min.js"></script>
    <script type="text/javascript" src="/public/js/scripts_init.js"></script>

    <script src="/public/js/bootstrap.js"></script>
    <script src="/public/js/jquery.ba-outside-events.min.js"></script>
    <script src="/public/js/jquery.responsive-tabs.js"></script>
    <script src="/public/js/jquery.flexslider-min.js"></script>
    <script src="/public/js/jquery.fitvids.js"></script>
    <script src="/public/js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/public/js/jquery.inview.min.js"></script>

    <script src="/public/js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/public/js/owl.carousel.min.js"></script>
    <script src="/public/js/scripts.js"></script>

</body>
</html>
