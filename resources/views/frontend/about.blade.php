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
<h2>About Us</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="{{ url('/') }}">Home </a></li>
<li>About Us</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<section class="about-wrap style1 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="about-img-wrap">
<img src="assets/img/about/about-shape-1.png" alt="Image" class="abouut-shape-1 md-none">
<img src="assets/img/about/about-shape-2.png" alt="Image" class="abouut-shape-2 md-none">
<img src="assets/img/about/about-shape-3.png" alt="Image" class="abouut-shape-3 md-none">
<div class="about-bg-1 bg-f"></div>
<div class="about-bg-2 bg-f"></div>
</div>
</div>
<div class="col-lg-6">
<div class="about-content">
<div class="content-title style2 mb-15">
<span>
<img src="assets/img/secion-shape-1.png" alt="Image">
Our Story
<img src="assets/img/secion-shape-2.png" alt="Image">
</span>
<h2>We Provide Locally Italian  Food Service </h2>
</div>
<p>In our restaurant with people who are important to you, conversations that bring you
closer to each other and those who enjoy our dishes.
Traditional dishes with local products of highest quality. including succulent Veal
Chops Sicilian, spicy Lobster Fra Diazole, tender Chicken Contadina.</p>

</div>
</div>
</div>
</div>
</section>



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
<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
<div class="section-title style1 text-center mb-40">
<h2>Newsletter Subscribe</h2>
<p>Drop us your mail address. We love to hear from you and are happy to answer any
questions immediately.</p>
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
