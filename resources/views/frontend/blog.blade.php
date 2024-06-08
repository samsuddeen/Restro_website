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
                                <h2>Blog No Sidebar</h2>
                                <ul class="breadcrumb-menu list-style">
                                    <li><a href="{{ url('/') }}">Home </a></li>
                                    <li>Blog No Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="blog-wrap ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row justify-content-center">
                                @forelse ($blogs as $blog)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="blog-card style1">
                                            <div class="blog-img">
                                                <img src="{{ asset('backend/blog_img/'.$blog->blog_img) }}" alt="Image" style="height: 370px; width: 545px;">
                                                <div class="blog-social">
                                                    <span><i class="flaticon-share"></i></span>
                                                    <ul class="social-profile style2 list-style">
                                                        <li><a target="_blank" href="https://facebook.com/"><i
                                                                    class="flaticon-facebook"></i> </a></li>
                                                        <li><a target="_blank" href="https://twitter.com/"> <i
                                                                    class="flaticon-twitter-1"></i> </a></li>
                                                        <li><a target="_blank" href="https://instagram.com/"> <i
                                                                    class="flaticon-instagram"></i> </a></li>
                                                        <li><a target="_blank" href="https://youtube.com/"> <i
                                                                    class="flaticon-youtube"></i> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog-info">
                                                <h3 class="blog-title"><a href="blog-left-sidebar.html">{{ $blog->title }}</a></h3>
                                                <p>{{ $blog->description }}</p>
                                                <div class="blog-metainfo">
                                                    <a href="blog-left-sidebar.html" class="blog-date"><i
                                                            class="flaticon-calendar-1"></i>{{ $blog->date }}</a>
                                                    <a href="blog-left-sidebar.html" class="blog-author"><i
                                                            class="flaticon-user"></i>By
                                                        Admin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <div class="col-12">
                                        <p>No blog posts available.</p>
                                    </div>
                                @endforelse
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
