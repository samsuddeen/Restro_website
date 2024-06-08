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
<h2>Service Details</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="{{ url('/') }}">Home </a></li>
<li><a href="{{ url('services') }}">Services </a></li>
<li>Service Details</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="service-details-wrap pt-100 pb-100">
<div class="container">
<div class="row gx-5">
<div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
<div class="sidebar">
<div class="sidebar-widget search-box">
<h4>Search </h4>
<div class="form-group">
<input type="search" placeholder="Search">
<button type="submit"> <i class="flaticon-search"></i></button>
</div>
</div>
<div class="sidebar-widget categories">
<h4>Category</h4>
<div class="category-box">
<ul class="list-style">
<li><a href="shop-left-sidebar.html">Dishes<i class="flaticon-right-arrow-angle"></i> </a></li>
<li><a href="shop-left-sidebar.html">Nuts & Greens<i class="flaticon-right-arrow-angle"></i> </a></li>
<li><a href="shop-left-sidebar.html">Smoothies<i class="flaticon-right-arrow-angle"></i> </a></li>
<li><a href="shop-left-sidebar.html">Vegetables<i class="flaticon-right-arrow-angle"></i> </a></li>
<li><a href="shop-left-sidebar.html">Takeaway Pack<i class="flaticon-right-arrow-angle"></i> </a></li>
<li><a href="shop-left-sidebar.html">Fresh Fruits<i class="flaticon-right-arrow-angle"></i> </a></li>
</ul>
</div>
</div>
<div class="sidebar-widget contact-widget">
<h4>Contact us</h4>
<form action="#" class="contact-widget-form">
<div class="form-group">
<input type="text" placeholder="Name">
</div>
<div class="form-group">
<input type="email" placeholder="Email">
</div>
<div class="form-group">
<textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
</div>
<button class="btn style1 w-100 d-block">Send Now<i class="flaticon-right-arrow-2"></i></button>
</form>
</div>
<div class="sidebar-widget tags">
<h4>Popular Tags </h4>
<div class="tag-list">
<ul class="list-style">
<li><a href="blog-left-sidebar.html">Food</a></li>
<li><a href="blog-left-sidebar.html">Restaurant</a></li>
<li><a href="blog-left-sidebar.html">Health</a></li>
<li><a href="blog-left-sidebar.html">Review </a></li>
<li><a href="blog-left-sidebar.html">Fastfood</a></li>
<li><a href="blog-left-sidebar.html">Business</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
<div class="service-desc">
<div class="service-img">
<img src="assets/img/service/single-service.jpg" alt="Image">
</div>
<h1>Breakfast At Reasonable Price</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia excepturi eaque,
corporis nulla maxime inventore magni reprehenderit consequatur deserunt, eligendi
totam voluptas natus maiores commodi provident. In cumque similique quo placeat
distinctio tenetur eum voluptatum, voluptatibus perferendis nesciunt facilis nostrum
eligendi totam voluptas natus maiores commodi provident. In cumque similique.</p>
<div class="row">
<div class="col-lg-6 col-md-6">
    @forelse ($item as $items)
<div class="feature-card style1">
<div class="feature-img">
<img src="{{ asset('backend/itemimg/'.$items->item_img) }}" alt="Image">
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">{{ $items->Item_name }}</a>
</h3>
<div class="feature-meta">
<p class="feature-price">{{ $items->discount_price }}$ <span>{{ $items->price }}$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.9</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{ asset('backend/icon/'.$items->icon) }}" alt="Image">
<p> <span>Save</span>
{{ $items->discount_percent }}%</p>
</div>
</div>
</div>
@empty

    @endforelse
</div>

</div>
<p class="mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita accusantium ipsam
excepturi impedit voluptas vero nam qui sint unde alias?</p>
<h3>Service Overview</h3>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia excepturi eaque,
corporis nulla maxime inventore magni reprehenderit consequatur deserunt, eligendi
totam voluptas natus maiores commodi provident. In cumque similique quo placeat
distinctio tenetur eum voluptatum, voluptatibus perferendis nesciunt facilis nostrum
eligendi totam voluptas natus maiores commodi provident. In cumque similique.</p>
<div class="service-overview-wrap">
<div class="service-overview-item">
<i class="flaticon-takeaway"></i>
<h4>Book Online In 60 Seconds</h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda delectus possimus accusamus corporis consectetur cupiditate veniam, neque enim beatae officiis?</p>
</div>
<div class="service-overview-item">
<i class="flaticon-satisfaction"></i>
<h4>Top Quality Food</h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda delectus possimus accusamus corporis consectetur cupiditate veniam, neque enim beatae officiis?</p>
</div>
<div class="service-overview-item">
<i class="flaticon-take-away"></i>
<h4>Manage Everything Online</h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda delectus possimus accusamus corporis consectetur cupiditate veniam, neque enim beatae officiis?</p>
</div>
<div class="service-overview-item">
<i class="flaticon-chef"></i>
<h4>Top Quality Chefs</h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda delectus possimus accusamus corporis consectetur cupiditate veniam, neque enim beatae officiis?</p>
</div>
</div>
<h3>Service Quality</h3>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia excepturi eaque,
corporis nulla maxime inventore magni reprehenderit consequatur deserunt, eligendi
totam voluptas natus maiores commodi provident. In cumque similique quo placeat
distinctio tenetur eum voluptatum, voluptatibus perferendis nesciunt facilis nostrum
eligendi totam voluptas natus maiores commodi provident. In cumque similique.</p>
<div class="service-quote">
<i class="flaticon-quote"></i>
<p>I just wanted to say how much I appreciate the excellent work done by your staff. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<div class="client_name">
<p>Christan Juels</p>
<span>Content Creator</span>
</div>
</div>
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
                Check More
                <img src="assets/img/secion-shape-2.png" alt="Image">
            </span>
            <h2>Similar Services</h2>
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
</div>


@include('frontend.common.footer')

</div>


<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery-magnific-popup.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/caban/default/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Apr 2024 08:19:07 GMT -->
</html>
