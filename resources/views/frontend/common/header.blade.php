



<header>
    <div class="preloader js-preloader">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Image">
        </div>


        <!-- <div class="switch-theme-mode">
        <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
        </label>
        </div> -->


        <div class="page-wrapper ">

        <header class="header-wrap style1">
        <div class="header-top">
        <div class="container">
        <div class="close-header-top xl-none">
        <button type="button"><i class="las la-times"></i></button>
        </div>
        <div class="row align-items-center">
        <div class="col-xl-8 col-lg-12">
        <div class="header-top-left">
        <div class="contact-item">
        <i class="flaticon-wall-clock"></i>
        <p>Mon - Sun[8:00am - 10:00pm]</p>
        </div>
        <div class="contact-item">
        <i class="flaticon-phone-call"></i>
        <a href="tel:13454567877">{{$setting->mobile}}</a>
        </div>

        </div>
        </div>
        <div class="col-xl-4 col-lg-12">
        <div class="header-top-right">
        <div class="select-lang">
        <div class="navbar-option-item navbar-language  language-option">

        <div class="right-txt">
        <p>Discount 0ff <strong>25%</strong>only for <span>Burger Item</span>
        </p>

        </div>
        </div>
        </div>
        <div class="">
        <!-- <select>
        <option value="1">USD</option>
        <option value="2">GBP</option>
        <option value="3">YEN</option>
        </select> -->
        </div>
        </div>
        <a href="reservation.html" class="btn style1 xl-none">Make Reservation <i class="flaticon-right-arrow-2"></i> </a>
        </div>
        </div>
        </div>
        </div>
        <div class="container ">
        <div class="header-bottom">
        <div class="row align-items-center">
        <div class="col-xl-3 col-lg-6 col-md-6 col-5">
        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('backend/logo/'.$setting->logo) }}" alt="Image"></a>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-7">
        <div class="main-menu-wrap">
        <div class="menu-close xl-none">
        <a href="javascript:void(0)"><i class="las la-times"></i></a>
        </div>
        <div id="menu">
        <ul class="main-menu list-style">
        <li>
        <a class="active" href="{{ url('/') }}">Home</a>
        </li>
        <li class="">
        <a href="{{ url('services') }}">Services</a>
        </li>
        <li class="">
        <a href="{{ url('about-us') }}">About Us</a>
        </li>
        <li><a href="{{ url('gallery') }}">Gallery</a></li>
        <!-- <li class="has-children">
        <a href="#">Pages</a>
        <ul class="sub-menu list-style">
        <li><a href="about.html">About us</a></li>
        <li><a href="feature.html">Feature Item</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="search-location.html">Search By Location</a></li>
        <li><a href="reservation.html">Make Reservation</a></li>
        <li><a href="app.html">Our App</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li class="has-children"><a href="#">User</a>
        <ul class="sub-menu list-style">
        <li>
        <a href="login.html">Login</a>
        </li>
        <li>
        <a href="register.html">Register</a>
        </li>
        <li>
        <a href="forgot-pwd.html">Forgot Password</a>
        </li>
        </ul>
        </li>
        <li><a href="privacy-policy.html">Privacy Policy</a></li>
        <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
        <li><a href="404.html">404 Error</a></li>
        </ul>
        </li> -->
        <!-- <li class="has-children"><a href="#">Shop</a>
        <ul class="sub-menu list-style">
        <li class="has-children">
        <a href="#">Shop Layout</a>
        <ul class="sub-menu list-style">
        <li>
        <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
        </li>
        <li>
        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
        </li>
        <li>
        <a href="shop-no-sidebar.html">Shop Grid</a>
        </li>
        </ul>
        </li>
        <li>
        <a href="shop-details.html">Shop Single</a>
        </li>
        <li>
        <a href="cart.html">Cart</a>
        </li>
        <li>
        <a href="wishlist.html">Wishlist</a>
        </li>
        <li>
        <a href="checkout.html">Checkout</a>
        </li>
        </ul>
        </li> -->
        <li class="">
        <a href="{{ url('blog') }}">Blog</a>
        </li>
        <li>
        <a href="{{ url('contact-us') }}">Contact</a>
        </li>
        @if(auth()->check())
    <li>
        <span style="color: white;">Hello, {{ auth()->user()->name }}</span>
        <a class="btn btn-danger" href="{{ route('userlogout') }}">Logout</a>
    </li>
@endif
        </ul>
        </div>
        </div>
        <div class="mobile-bar-wrap">
        <a href="cart.html" class="shopcart  xl-none">
        <i class="las la-shopping-cart"></i>
        <span>1</span>
        </a>
        <div class="mobile-top-bar xl-none">
        <span></span>
        <span></span>
        <span></span>
        </div>
        <div class="mobile-menu xl-none">
        <a href="javascript:void(0)"><i class="las la-bars"></i></a>
        </div>
        </div>
        </div>

        </div>
        </div>
        </div>
        </header>
