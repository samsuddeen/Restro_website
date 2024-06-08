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

@include('frontend.common.header')


<section class="hero-wrap style1 bg-cod-grey">
<!-- <img src="assets/img/hero/hero-shape-1.png" alt="Image" class="hero-shape-1">
<img src="assets/img/hero/hero-shape-2.png" alt="Image" class="hero-shape-2">
<img src="assets/img/hero/hero-shape-31.png" alt="Image" class="hero-shape-3 md-none"> -->
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="hero-content">
<h1>{{ $setting->heading_text }}</h1>
<p>{{$setting->small_text}}</p>
<div class="hero-btn">
<a href="shop-left-sidebar.html" class="btn style1"><i class="las la-shopping-bag"></i>{{$setting->button_text}}</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hero-img-wrap">
<img src="{{ asset('backend/logo/'.$setting->slideimage) }}" alt="Image">
</div>
</div>
</div>
</div>
</section>


<section class="about-wrap style1 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="about-img-wrap">
<img src="{{ asset('assets/img/about/about-shape-1.png') }}" alt="Image" class="abouut-shape-1 md-none">
<img src="{{ asset('assets/img/about/about-shape-2.png') }}" alt="Image" class="abouut-shape-2 md-none">
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
<h2> {{ $setting->heading_text }}</h2>
</div>
<p>{{ $setting->story_bio }}</p>

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
                            <h3 class="service-title"><a href="{{ url('services') }}">{{ $rows->title }}</a></h3>
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


<section class="feature-wrap style1 pt-100 pb-20 bg-1 pos-rel">
<div class="feature-top-shape bg-f">
<img src="assets/img/shape-1.png" alt="Image" class="feature-top-shape-1 md-none">
<img src="assets/img/shape-2.png" alt="Image" class="feature-top-shape-2 md-none">
<div class="overlay op-9 bg-black"></div>
</div>
<div class="overlay op-7 bg-white"></div>
<div class="section-title style6 text-center mb-40">
<span>
<img src="assets/img/secion-shape-1.png" alt="Image">
Our Feature Items
<img src="assets/img/secion-shape-2.png" alt="Image">
</span>
<h2 class="text-white">Popular Items Of Our Restaurant</h2>
</div>
<div class="container-fluid pos-rel">
<div class="row justify-content-center">
    @forelse ($item as $items)




<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-card style1">
<div class="feature-img">
<img src="{{ asset('backend/itemimg/'.$items->item_img) }}" alt="Image" >
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">{{ $items->Item_name }}</a></h3>
<div class="feature-meta">
<p class="feature-price">{{ $items->discount_price }}$ <span>{{ $items->price }}$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.9</span>
</div>
</div>

<div class="discount-tag">
<img src="{{ asset('backend/icon/'.$items->icon) }}" alt="Image">
<p> <span>Save</span>
{{ $items->discount_percent }}%</p>
</div>
</div>
</div>
</div>
@empty
</div>
</div>
</div>
</section>
@endforelse






<section class="reservation-wrap pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="reservation-box-wrap d-flex">
                    <div class="reservation-form">
                        <h4>Table Reservation</h4>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Jhon Doe">
                            </div>
                            <div class="form-group">
                                <label for="person">Person</label>
                                <select name="person" id="person">
                                    <option value="1">1 Persons</option>
                                    <option value="2">2 Persons</option>
                                    <option value="3">3 Persons</option>
                                    <option value="4">4 Persons</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" id="contact" placeholder="contact">
                            </div>
                            <button type="submit" class="btn style1 mt-10">Book A Table <i class="flaticon-right-arrow-2"></i></button>
                        </form>
                    </div>
                    <div class="opening-hrs">
                        <div class="overlay op-9 bg-black"></div>
                        <h4>Opening Hours</h4>
                        <ul class="office-schedule list-style">
                            <li>
                                <p>Monday</p>
                                <p>09:00 - 18:00</p>
                            </li>
                            <li>
                                <p>Tuesday</p>
                                <p>10:00 - 18:00</p>
                            </li>
                            <li>
                                <p>Wednesday</p>
                                <p>11:00 - 18:00</p>
                            </li>
                            <li>
                                <p>Thursday</p>
                                <p>12:00 - 18:00</p>
                            </li>
                            <li>
                                <p>Friday</p>
                                <p>14:00 - 18:00</p>
                            </li>
                            <li>
                                <p>Saturday</p>
                                <p>14:00 - 18:00</p>
                            </li>
                            <li>
                                <p>Sunday</p>
                                <p>Closed</p>
                            </li>
                        </ul>
                    </div>
                    <div class="promotional-offer bg-f " style="min-height: 500px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="delivery-wrap ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="delivery-content">
<div class="content-title style2 text-left mb-20">
<span class>
<img src="assets/img/secion-shape-1.png" alt="Image">
Quick Delivery
<img src="assets/img/secion-shape-2.png" alt="Image">
</span>
<h2>Free Food Delivery Everyday At Your Convenience</h2>
</div>
<p>In our restaurant with people who are important to you, conversations that bring you to
closer to each other and those who enjoy our dishes. Quisque pretium dolor turpis, quis
blandit turpis semper ut. Nam malesuada eros nec luctus laoreet. Fusce sodales consequat
velit eget dictum. Integer ornare magna.</p>
<div class="row align-items-end gx-5">
<div class="col-md-8">
<div class="contact-item-wrap">
<div class="contact-item">
<span><i class="flaticon-phone-call"></i></span>
<a href="tel:49260573180">+49260-5731-80</a>
</div>
<div class="contact-item">
<div class="contact-item">
<span> <i class="lar la-clock"></i></span>
<p>Everyday From 8:00 to 12:00</p>
</div>
</div>
</div>
<form class="deilvery-address" action="#">
<input type="text" placeholder="Enter Your Area ZIP Code">
<button type="submit"><i class="flaticon-right-arrow-2"></i></button>
</form>
</div>
<div class="col-md-4 sm-none">
<div class="del-img">
<img src="assets/img/fruit-1.png" alt="Image">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="delivery-van-img">
<img src="assets/img/delivery/car.png" alt="Image">
</div>
</div>
</div>
</div>
</section> -->


<section class="contact-wrap style1 bg-f contact-bg-1 pt-100 pb-70 pos-rel">
<div class="overlay bg-black op-85"></div>
<img src="assets/img/shape-1.png" alt="Iamge" class="contact-shape-1 lg-none">
<img src="assets/img/shape-2.png" alt="Iamge" class="contact-shape-2 lg-none">
<div class="section-title style6 text-center mb-40">
<span class="text-sunshade">
<img src="assets/img/secion-shape-1.png" alt="Image">
Contact Us
<img src="assets/img/secion-shape-2.png" alt="Image">
</span>
<h2 class="text-white">Not Sure What To Order? <br> Contact Us Now</h2>
</div>
<div class="container pos-rel">
<div class="row">
<div class="col-xl-10 offset-xl-1">
<div class="contact-box-wrap">
<div class="contact-box-icon">
<i class="flaticon-phone-call"></i>
</div>
<div class="contact-box">
<h5>Make A Call</h5>
<a href="tel:880123654223">{{$setting->mobile}}</a>
</div>
<div class="contact-box">
<h5>Mail Us</h5>
<a href=""><span class="__cf_email__" data-cfemail="">{{$setting->email}}</span></a>
<img src="assets/img/contact/contact-img-1.png" alt="Image">
</div>
</div>
</div>
</div>
</div>
</section>




<section class="testimonial-wrap bg-f testimonial-bg-1 pt-100 pb-100 pos-rel">
    <div class="overlay bg-white op-7"></div>
    <div class="section-title style1 text-center mb-40">
        <span>
            <img src="assets/img/secion-shape-1.png" alt="Image">
            Testimonials
            <img src="assets/img/secion-shape-2.png" alt="Image">
        </span>
        <h2>Our Happy Customers</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider-one swiper-container">
                    <div class="swiper-wrapper">
                        @forelse ($customer as $customers)
                            <div class="swiper-slide">
                                <div class="testimonial-item style1">
                                    <div class="client-img">
                                        <img src="{{ asset('backend/customerimg/' . $customers->profile) }}" alt="Image">
                                    </div>
                                    <div class="client-info">
                                        <h4>{{ $customers->customer_name }}</h4>
                                        <span>{{ $customers->customer_title }}</span>
                                    </div>
                                    <div class="client-quote">
                                        <p>{{ Illuminate\Support\Str::limit($customers->description, 100, '...') }}</p>
                                    </div>
                                    <div class="client-rating-wrap">
                                        <ul class="ratings list-style">
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                        </ul>
                                        <div class="quote-icon">
                                            <i class="flaticon-right-quote-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <p>No testimonials found</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="testimonial-one-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!--
    <section class="app-wrap style1 ptb-100 bg-f app-bg-1">
    <div class="overlay op-95 bg-black"></div>
    <img src="assets/img/shape-1.png" alt="Image" class="app-shape-1 lg-none">
    <img src="assets/img/shape-2.png" alt="Image" class="app-shape-2 lg-none">
    <div class="container">
    <div class="row gx-5 align-items-center">
    <div class="col-lg-6">
    <div class="app-content">
    <div class="content-title style3 text-left mb-30">
    <span>
    <img src="assets/img/secion-shape-1.png" alt="Image">
    Our App
    <img src="assets/img/secion-shape-2.png" alt="Image">
    </span>
    <h2 class="text-white">Order With Our Application</h2>
    </div>
    <div class="pr-wrap style1">
    <div class="pr-item">
    <h4><i class="flaticon-check-box-with-check-sign"></i>Order And
    Pay In A Few
    Minutes</h4>
    <p>Сhoose food and pay for the order in a couple of clicks online also
    choose you current location using GPS</p>
    </div>
    <div class="pr-item">
    <h4><i class="flaticon-check-box-with-check-sign"></i>Check
    Delivery Status</h4>
    <p>Follow the status of your order in real time and also track the delivery path
    until you get it.</p>
    </div>
    </div>
    <div class="download-app-btn">
    <a href="app.html"><img src="assets/img/app/google-playstore.png" alt="Image"></a>
    <a href="app.html"><img src="assets/img/app/apple-playstore.png" alt="Image"></a>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="app-img">
    <img src="assets/img/app/app-img-1.png" alt="Image" class="app-top-img md-none">
    <img src="assets/img/app/app-showcase.png" alt="Image">
    </div>
    </div>
    </div>
    </div>
    </section> -->


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




    @include('frontend.common.footer')




<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>

<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- <script src="assets/js/form-validator.min.js"></script> -->
<!-- <script src="assets/js/contact-form-script.js"></script> -->
<script src="{{ asset('assets/js/aos.js') }}"></script> <!-- Ensure this is uncommented -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<!-- <script src="assets/js/odometer.min.js"></script> -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

