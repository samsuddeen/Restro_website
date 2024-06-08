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
<h2>Our Services</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index.html">Home </a></li>
<li>Our Services</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="service-wrap bg-f service-bg-1 pt-100 pb-75">
    <div class="overlay op-7 bg-white"></div>
    <div class="container">
        <div class="section-title style1 text-center mb-110">
            <span>
                <img src="assets/img/secion-shape-1.png" alt="Image">
                Our Services
                <img src="assets/img/secion-shape-2.png" alt="Image">
            </span>
            <h2>What We Offer</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-card-wrap">
                    @forelse ($services as $rows)
                    <div class="service-card style1">
                        <div class="service-img">
                            <img src="{{ asset('backend/servicelogo/'.$rows->logo) }}" alt="Image">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title"><a href="{{ url('service-details') }}">{{ $rows->title }}</a></h3>
                            <p>{{ $rows->description }}</p>
                        </div>
                    </div>
                    @empty
                    <p>No services available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>





<section class="newsletter-wrap bg-f newsletter-bg-1 ptb-100">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title style1 text-center mb-50">
<h2>Newsletter Subscribe</h2>
<p>Drop us your mail address. We love to hear from you and are happy to answer any
questions.</p>
</div>
<form action="#" class="newsletter-form">
<div class="form-group">
<input type="email" placeholder="Enter Your Email Address">
<button type="submit"><i class="flaticon-direct"></i></button>
</div>
</form>
</div>
</div>
</div>
</section>


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
