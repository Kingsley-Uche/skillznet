<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Skillznet</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="OLekamma Kingsley Uche">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="{{asset('frontend/images/fevicon.png')}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
<!-- owl stylesheets -->
<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}" media="screen">
</head>
<body>
    <style>


@media(min-width:768px){
    .separator{
        margin-top:10vh
    }

}


    .hi:hover{
        background-color:tomato;
        color:white;

    }
#ffsd{
    /* background-color: linear-gradient(to top, ,transparent)!important */
background-color:rgba(10, 0, 0, 0.3)
}
    </style>

@include('layouts.frontend.layouts.header')

@yield('content')



    <div class="footer_section layout_padding bg-primary text-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="fooer_logo"><img src="{{asset('images/logo.png')}}"></div>
            <h1 class="customer_text">CUSTOMER SERVICE</h1>
            <p class="footer_lorem_text">There are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h1 class="customer_text">LET US HELP YOU</h1>
            <p class="footer_lorem_text">There are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h1 class="customer_text">INFORMATION</h1>
            <p class="footer_lorem_text1">About Us<br>
Careers<br>
Sell on shopee<br>
Press & News<br>
Competitions<br>
Terms & Conditions</p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h1 class="customer_text">OUR SHOP</h1>
            <p class="footer_lorem_text">There are many variat
ions of passages of L
orem Ipsum available
, but the majority h
ave suffered altera
tion in some form, by </p>
          <div class="social_icon">
            <ul>
              <li><a href="#"><img src="{{asset('frontend/images/fb-icon.png')}}"></a></li>
              <li><a href="#"><img src="{{asset('frontend/images/twitter-icon.png')}}"></a></li>
              <li><a href="#"><img src="{{asset('frontend/images/instagram-icon.png')}}"></a></li>
              <li><a href="#"><img src="{{asset('frontend/images/linkedin-icon.png')}}"></a></li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!--  footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <div class="border"></div>
        <p class="copyright_text">2023 All Rights Reserved. Designed by <a href="#">Kamasoft Technologies for FFSD test</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script  src='{{asset('frontend/js/jquery.min.js')}}'></script>
    <script src='{{asset('frontend/js/popper.min.js')}}'></script>
    <script src='{{asset('frontend/js/bootstrap.bundle.min.js')}}'></script>
    <script  src='{{asset('frontend/js/jquery-3.0.0.min.js')}}'></script>
    <script src="{{asset('frontend/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/js/custom.js ')}} "></script>
    <!-- javascript -->
    <script src="{{asset('frontend/js/owl.carousel.js')}} "></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
