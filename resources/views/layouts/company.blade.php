<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/reset.css')}}">
        <link href="{{url('/assets/fonts/material-design-icons/iconfont/material-icons.css')}}" rel="stylesheet">
        <link href="{{url('/assets/fonts/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
        @yield('css')
        <script src="{{url('/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>
    <div class="main-wrapper">
      <div id="top-collapse" class="collapse-only container-fluid">
        <div class="container">
          <div class="row">
          <div class="col-sm-4 col-xs-4">
            <button id="collapse-button" class="collapse-only">
               <i class="material-icons">menu</i>
            </button>
          </div>
          <div class="col-sm-4 col-xs-4 text-center"><a  href="#" >Educive.com</a></div>
          <div class="col-sm-4 col-xs-4 text-right"><a href="#">Log out</a></div>
        </div>
        </div>
      </div>
      <nav id="navbar" class="navbar navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand full-nav-only" href="#" style="color:black">Educive.com</a>
            <!-- Search bar in collapse -->
            <div id="collapse-search" class="input-group collapse-only">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="button-search"><i class="material-icons">search</i></button>
              </span>
            </div>
          </div>
          <!-- Search form for full navbar -->
          <div id="full-nav-search" class="input-group full-nav-only pull-right">
            <input type="text" id="input-search" class="form-control  pull-right" placeholder="Search for...">
            <span class="input-group-btn">
              <a class="button-search" href="#"><i class="material-icons">search</i></a>
            </span>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class={{Request::is('home')  ? 'active' : ''}}>Home</a></li>
              <li><a href="#">Name</a></li>
              <li><a href="#">Add Post</a></li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      @yield('content')

     <footer id="footer" >
        <section id="copyright">
          <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <h6>Copyrights © 2015 All Rights Reserved</h6>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        </section>
      </footer>

    </div>


    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  -->
    <script>window.jQuery || document.write('<script src="{{url('/assets/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
    <script src="{{url('/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/js/vendor/jQuery-crop-gh-pages/jquery.crop-cover.js')}}"></script>
  	<script type="text/javascript" src="{{url('/assets/js/vendor/jQuery-crop-gh-pages/cropper.js')}}"></script>
    @yield('script')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script> -->
    </body>
</html>
