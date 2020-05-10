<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <header class="sticky-top bg-white">
        <div class="header-bottom ptb-20 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets/img/logo/logo-3.png')}}" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper categories-search-wrapper2">
                    {{-- <div class="all-categories">
                        <div class="select-wrapper">
                            <select class="select">
                                <option value="">All Categories</option>
                                <option value="">Smartphones </option>
                                <option value="">Computers</option>
                                <option value="">Laptops </option>
                                <option value="">Camerea </option>
                                <option value="">Watches</option>
                                <option value="">Lights </option>
                                <option value="">Air conditioner</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="categories-wrapper">
                        <form action="{{route('product.search')}}" method="GET">
                            <input type="text" name="query" placeholder="Enter your key word">
                            <button type="submit"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    <div class="trace same-style">
                        <div class="same-style-icon">
                            @auth
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="pe-7s-users"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{route('login')}}"><i class="pe-7s-users"></i></a>
                            @endauth
                        </div>
                        <div class="same-style-text">
                            @auth
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Close <br> Session
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}">My<br>Account</a>
                            @endauth
                        </div>
                    </div>
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            @auth
                                @if (auth()->user()->hasRole('seller'))
                                    <a href="{{ url('/admin') }}"><i class="pe-7s-shopbag"></i></a>
                                @else
                                    <a href="{{ route('shops.create') }}"><i class="pe-7s-shopbag"></i></a>
                                @endif
                            @else
                                <a href="{{ route('shops.create') }}"><i class="pe-7s-shopbag"></i></a>
                            @endauth
                        </div>
                        <div class="same-style-text">
                            @auth
                                @if (auth()->user()->hasRole('seller'))
                                    <a href="{{ url('/admin') }}">My<br>Shop</a>
                                @else
                                    <a href="{{ route('shops.create') }}">Open<br>Your Shop</a>
                                @endif
                            @else
                                <a href="{{ route('shops.create') }}">Open<br>Your Shop</a>
                            @endauth
                        </div>
                    </div>
                    <div class="header-cart-3 same-style">
                        <div class="same-style-icon">
                            <a href="{{ route('cart.index') }}"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            @auth
                                <a href="{{ route('cart.index') }}">
                                    My Cart<br> {{ Cart::session(auth()->id())->getContent()->count() }} Item
                                </a>
                                <ul class="cart-dropdown">
                                    <li class="single-product-cart">
                                        <div class="cart-img">
                                            <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-title">
                                            <h5><a href="#"> Bits Headphone</a></h5>
                                            <h6><a href="#">Black</a></h6>
                                            <span>$80.00 x 1</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href="#"><i class="ti-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-product-cart">
                                        <div class="cart-img">
                                            <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-title">
                                            <h5><a href="#"> Bits Headphone</a></h5>
                                            <h6><a href="#">Black</a></h6>
                                            <span>$80.00 x 1</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href="#"><i class="ti-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-product-cart">
                                        <div class="cart-img">
                                            <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-title">
                                            <h5><a href="#"> Bits Headphone</a></h5>
                                            <h6><a href="#">Black</a></h6>
                                            <span>$80.00 x 1</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href="#"><i class="ti-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="cart-space">
                                        <div class="cart-sub">
                                            <h4>Subtotal</h4>
                                        </div>
                                        <div class="cart-price">
                                            <h4>$240.00</h4>
                                        </div>
                                    </li>
                                    <li class="cart-btn-wrapper">
                                        <a class="cart-btn btn-hover" href="{{route('cart.index')}}">View cart</a>
                                        <a class="cart-btn btn-hover" href="{{route('cart.checkout')}}">Checkout</a>
                                    </li>
                                </ul>
                            @else
                                <a href="{{ route('cart.index') }}">
                                    My Cart<br> 0 Item
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                {{-- <div class="mobile-menu-area mobile-menu-none-block electro-2-menu">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="container">
        {{-- display success message --}}
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {{-- display error message --}}
        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    @yield('content')    
    
    <footer class="footer-area">
        <div class="footer-middle black-bg-2 pt-35 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-car"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Free Shipping</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-shield"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Money Guarentee</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Online Support</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top-3 black-bg pt-75 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-4">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Contact Us</h3>
                            <div class="footer-info-wrapper-2">
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Address:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>77 Seventh Streeth Banasree
                                            <br>Road Rampura -2100 Dhaka</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Phone:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>+11 (019) 2518 4203
                                            <br>+11 (251) 2223 3353</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Email:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p><a href="#">domain@mail.com</a>
                                            <br><a href="#">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">My Account</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="login.html">Login Hare</a></li>
                                    <li><a href="cart.html">Cart History</a></li>
                                    <li><a href="checkout.html"> Payment History</a></li>
                                    <li><a href="shop.html">Product Tracking</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xl-2">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Information</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Our Service</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                    <li><a href="#"> Vendor Detail</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget widget-right mb-40">
                            <h3 class="footer-widget-title-3">Service</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="#">Product Service</a></li>
                                    <li><a href="#">Payment Service</a></li>
                                    <li><a href="#"> Discount Service</a></li>
                                    <li><a href="#">Shopping Service</a></li>
                                    <li><a href="#">Promotional Add</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom  black-bg pt-25 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="blog.html"> Blog</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright f-right mrg-5">
                            <p>
                                Copyright ©
                                <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}





    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>