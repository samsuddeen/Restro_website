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
<h2>Register</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="{{ url('/') }}">Home </a></li>
<li>Register</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="login-wrap pt-100 pb-100">
<img src="assets/img/shape-1.png" alt="Image" class="login-shape-1">
<img src="assets/img/shape-2.png" alt="Image" class="login-shape-2">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
<div class="login-form">
<div class="login-header bg-green">
<h2 class="text-center mb-0">Register</h2>
@if(session('success'))
                            <div class="alert alert-success" style="background-color: #28a745; color: #fff; text-align: center; padding: 10px;">
                                {{ session('success') }}
                            </div>
                        @endif
</div>
<div class="login-body">
    <form action="{{route('user.register')}}" method="post">
        @csrf
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="email">Full Name</label>
<input id="name" name="fullname" type="text" placeholder="Full name*" required>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label for="email">Email Address</label>
<input id="email" name="email" type="email" placeholder="Email Address*" required>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label for="pwd">Password</label>
<input id="pwd" name="password" type="password" placeholder="Password">
@if ($errors->first('password'))
         <span style='color:red;'>{{ $errors->first('password') }}</span>
     @endif
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label for="pwd">Confirm Password</label>
<input id="pwd_2"  name="password_confirmation" type="password" placeholder="Confirm Password">
@if ($errors->first('password'))
            <span style='color:red;'>{{ $errors->first('password') }}</span>
             @endif
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<button class="btn style1 w-100 d-block">Register</button>
</div>
</div>
<div class="col-lg-12">
<div class="or-text">

</div>
</div>
<div class="col-md-12 text-center">
<p class="mb-0">Already Have an Account? <a class="link style2" href="{{ url('login') }}">Login</a></p>
</div>
</div>
</form>
</div>
</div>
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
