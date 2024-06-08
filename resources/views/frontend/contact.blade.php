<!DOCTYPE html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}">
<title>Kaina Italian Kitchen </title>
<link rel="icon" type="image/png" href="{{ asset('backend/logo/'.$setting->bglogo) }}">
</head>
<body>

<div class="preloader js-preloader">
<img src="assets/img/logo.png" alt="Image">
</div>




<div class="page-wrapper ">

@include('frontend.common.header')

<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1">
<div class="overlay bg-black op-9"></div>
<img src="assets/img/shape-1.png" alt="Image" class="br-shape-1">
<img src="assets/img/shape-2.png" alt="Image" class="br-shape-2">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="breadcrumb-title">
<h2>Contact Us</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index.html">Home </a></li>
<li>Contact Us</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="contact-wrap pt-100 pb-100">
<div class="container">
<div class="row gx-5">
<div class="col-md-12">
<div class="contact-form">
<form action="" class="form-wrap" id="contactForm">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="fname">First Name</label>
<input type="text" name="fname" placeholder="First Name*" id="fname" required data-error="Please Enter Your First Name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="lname">Last Name</label>
<input type="text" name="lname" placeholder="Last Name*" id="lname" required data-error="Please Enter Your Last Name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="email">Email Address</label>
<input type="email" name="email" id="email" required placeholder="Email Address*" data-error="Please Enter Valid Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="phone_number">Phone Number</label>
<input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" required data-error="Please Enter Your Phone Number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group v1">
<label for="message">Your Message</label>
<textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please Enter Your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<div class="checkbox style2">
<input type="checkbox" id="test_1">
<label for="test_1">I consent to having this website store my
submitted information</label>
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="btn style1 w-100 d-block op-95 mt-20">Send
Message</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<section class="contact-wrap style3 bg-f contact-bg-2 ptb-100  contact-page">
<div class="container pos-rel">
<img src="assets/img/contact/agent-1.png" alt="Image" class="agent-img md-none">
<div class="section-title style6 text-center mb-30">
<span>
<img src="assets/img/secion-shape-1.png" alt="Image">
Contact Us
<img src="assets/img/secion-shape-2.png" alt="Image">
</span>
<h2 class="text-white">Not Sure What To Order? <br> Contact Us Now</h2>
</div>
<div class="row">
<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
<div class="contact-btn">
<a href="tel:880123654223" class="btn style1">Make A Call<i class="flaticon-right-arrow-2"></i></a>
<a href="contact.html" class="btn style3">Contact Us<i class="flaticon-right-arrow-2"></i></a>
</div>
</div>
</div>
</div>
</section>


<section class="contact-wrap style2 pb-100  contact-page2">
<div class="map-bg bg-f"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="contact-card">
<div class="contact-icon">
<i class="flaticon-home"></i>
</div>
<div class="contact-info">
<h4>Our Location</h4>
<p>{{$setting->address}}</p>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="contact-card">
<div class="contact-icon">
<i class="flaticon-mail"></i>
</div>
<div class="contact-info">
<h4>Our Email</h4>
<a href=""><span class="__cf_email__" data-cfemail="">{{$setting->email}}</span></a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="contact-card">
<div class="contact-icon">
<i class="flaticon-phone-call"></i>
</div>
<div class="contact-info">
<h4>Contact Us</h4>
<a href="tel:4434567890">{{$setting->mobile}}</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="contact-card">
<div class="contact-icon">
<i class="flaticon-wall-clock-1"></i>
</div>
<div class="contact-info">
<h4>Opening Hour</h4>
<p>Mon - Sunday</p>
<p>8:00 am - 10:00 pm</p>
</div>
</div>
</div>
<div class="col-md-12 mt-30 text-center">
<a href="contact.html" class="btn style1">Explore Map <i class="flaticon-right-arrow-2"></i>
</a>
</div>
</div>
</div>
</section>

</div>



@include('frontend.common.footer')

</div>


<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- <script src="assets/js/form-validator.min.js"></script> -->
<!-- <script src="assets/js/contact-form-script.js"></script> -->
<!-- <script src="assets/js/aos.js"></script> -->
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery-magnific-popup.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<!-- <script src="assets/js/odometer.min.js"></script> -->
<script src="assets/js/main.js"></script>
</body>


</html>
