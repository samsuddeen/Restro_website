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
                                <h2>Gallery</h2>
                                <ul class="breadcrumb-menu list-style">
                                    <li><a href="{{ url('/') }}">Home </a></li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="gallery-wrap pt-100 pb-75">
                <div class="container">
                    <div class="row justify-content-center">
                        @forelse ($item as $items)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="gallery-item">
                                    <div class="gallery-img">
                                        <a data-fancybox="gallery" href="{{ asset('backend/itemimg/'.$items->item_img) }}">
                                            <img src="{{ asset('backend/itemimg/'.$items->item_img) }}" alt="Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p>No images available.</p>
                            </div>
                        @endforelse
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
