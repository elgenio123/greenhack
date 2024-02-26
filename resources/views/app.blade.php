
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Open+Sans&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/jquery-ui.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.min.css") }}">

  <link rel="stylesheet" href="{{ asset("assets/css/jquery.fancybox.min.css") }}">

  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-datepicker.css") }}">

  <link rel="stylesheet" href="{{ asset("assets/fonts/flaticon/font/flaticon.css") }}">

  <link rel="stylesheet" href="{{ asset("assets/css/aos.css") }}">
  <link href="{{ asset("assets/css/jquery.mb.YTPlayer.min.css") }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

  <title>Seeds of tomorow </title>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

     @include("partials.header")

      
        @yield("content")
        
      
    @include("partials.footer")


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#116530"/></svg></div>

    <script src="{{ asset("assets/js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery-migrate-3.0.1.min.js")}}"></script>
    <script src="{{ asset("assets/js/jquery-ui.js")}}"></script>
    <script src="{{ asset("assets/js/popper.min.js")}}"></script>
    <script src="{{ asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("assets/js/owl.carousel.min.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.stellar.min.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.countdown.min.js")}}"></script>
    <script src="{{ asset("assets/js/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.easing.1.3.js")}}"></script>
    <script src="{{ asset("assets/js/aos.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.fancybox.min.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.sticky.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.mb.YTPlayer.min.js")}}"></script>




    <script src="{{ asset("assets/js/main.js") }}"></script>

    
  </body>

  </html>

