<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keyword')">
        <meta name="title" content="@yield('meta_title')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/favicon.png') }}">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{ asset('front/css/material-design-iconic-font.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{ asset('front/css/fontawesome-stars.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.min.css') }}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/venobox.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/helper.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('front/style.css?version2') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        <!-- Modernizr js -->
        <script src="{{ asset('front/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <style>
            .stock{
                position: absolute;
                color: #fff;
                border-radius: 4px;
                padding: 2px 12px;
                margin: 8px;
                font-size: 12px;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">

        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            @include('layouts.inc.front.toparea')
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
            @include('layouts.inc.front.middlearea')
            <!-- Header Middle Area End Here -->
            <!-- Begin Header Bottom Area -->
            @include('layouts.inc.front.bottomarea')
            
            <!-- Header Bottom Area End Here -->
            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container"> 
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>
        <!-- Header Area End Here -->

        @yield('content')

        <!-- Begin Footer Area -->
        <div class="footer">
            <!-- Begin Footer Static Top Area -->
            <div class="footer-static-top">
                <div class="container">
                    <!-- Begin Footer Shipping Area -->
                    <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                        <div class="row">
                            <!-- Begin Li's Shipping Inner Box Area -->
                            <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                <div class="li-shipping-inner-box">
                                    <div class="shipping-icon">
                                        <img src="{{ asset('front/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-text">
                                        <h2>Free Delivery</h2>
                                        <p>And free returns. See checkout for delivery dates.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Li's Shipping Inner Box Area End Here -->
                            <!-- Begin Li's Shipping Inner Box Area -->
                            <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                <div class="li-shipping-inner-box">
                                    <div class="shipping-icon">
                                        <img src="{{ asset('front/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-text">
                                        <h2>Safe Payment</h2>
                                        <p>Pay with the world's most popular and secure payment methods.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Li's Shipping Inner Box Area End Here -->
                            <!-- Begin Li's Shipping Inner Box Area -->
                            <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                <div class="li-shipping-inner-box">
                                    <div class="shipping-icon">
                                        <img src="{{ asset('front/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-text">
                                        <h2>Shop with Confidence</h2>
                                        <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Li's Shipping Inner Box Area End Here -->
                            <!-- Begin Li's Shipping Inner Box Area -->
                            <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                <div class="li-shipping-inner-box">
                                    <div class="shipping-icon">
                                        <img src="{{ asset('front/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-text">
                                        <h2>24/7 Help Center</h2>
                                        <p>Have a question? Call a Specialist or chat online.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Li's Shipping Inner Box Area End Here -->
                        </div>
                    </div>
                    <!-- Footer Shipping Area End Here -->
                </div>
            </div>
            <!-- Footer Static Top Area End Here -->
            <!-- Begin Footer Static Middle Area -->
            <div class="footer-static-middle">
                <div class="container">
                    <div class="footer-logo-wrap pt-50 pb-35">
                        <div class="row">
                            <!-- Begin Footer Logo Area -->
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-logo">
                                    <img src="images/menu/logo/1.jpg" alt="Footer Logo">
                                    <p class="info">
                                        We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                    </p>
                                </div>
                                <ul class="des">
                                    <li>
                                        <span>Address: </span>
                                        6688Princess Road, London, Greater London BAS 23JK, UK
                                    </li>
                                    <li>
                                        <span>Phone: </span>
                                        <a href="#">(+123) 123 321 345</a>
                                    </li>
                                    <li>
                                        <span>Email: </span>
                                        <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Logo Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Product</h3>
                                    <ul>
                                        <li><a href="#">Prices drop</a></li>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Best sales</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Block Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Our company</h3>
                                    <ul>
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Block Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-4">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Follow Us</h3>
                                    <ul class="social-link">
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Begin Footer Newsletter Area -->
                                <div class="footer-newsletter">
                                    <h4>Sign up to newsletter</h4>
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                       <div id="mc_embed_signup_scroll">
                                          <div id="mc-form" class="mc-form subscribe-form form-group" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                            <button  class="btn" id="mc-submit">Subscribe</button>
                                          </div>
                                       </div>
                                    </form>
                                </div>
                                <!-- Footer Newsletter Area End Here -->
                            </div>
                            <!-- Footer Block Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Static Middle Area End Here -->
            <!-- Begin Footer Static Bottom Area -->
            <div class="footer-static-bottom pt-55 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Footer Links Area -->
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Online Shopping</a></li>
                                    <li><a href="#">Promotions</a></li>
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Most Populars</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                    <li><a href="#">Special Products</a></li>
                                    <li><a href="#">Manufacturers</a></li>
                                    <li><a href="#">Our Stores</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Warantee</a></li>
                                    <li><a href="#">Refunds</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Refunds</a></li>
                                    <li><a href="#">Policy Shipping</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links Area End Here -->
                            <!-- Begin Footer Payment Area -->
                            <div class="copyright text-center">
                                <a href="#">
                                    <img src="images/payment/1.png" alt="">
                                </a>
                            </div>
                            <!-- Footer Payment Area End Here -->
                            <!-- Begin Copyright Area -->
                            <div class="copyright text-center pt-25">
                                <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                            </div>
                            <!-- Copyright Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Static Bottom Area End Here -->
        </div>
        <!-- Footer Area End Here -->

    </div>
    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('front/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <!-- Ajax Mail js -->
    <script src="{{ asset('front/js/ajax-mail.js') }}"></script>
    <!-- Meanmenu js -->
    <script src="{{ asset('front/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Wow.min js -->
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <!-- Slick Carousel js -->
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <!-- Owl Carousel-2 js -->
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific popup js -->
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Isotope js -->
    <script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('front/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Mixitup js -->
    <script src="{{ asset('front/js/jquery.mixitup.min.js') }}"></script>
    <!-- Countdown -->
    <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('front/js/waypoints.min.js') }}"></script>
    <!-- Barrating -->
    <script src="{{ asset('front/js/jquery.barrating.min.js') }}"></script>
    <!-- Jquery-ui -->
    <script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
    <!-- Venobox -->
    <script src="{{ asset('front/js/venobox.min.js') }}"></script>
    <!-- Nice Select js -->
    <script src="js/jquery.nice-select.min.js') }}"></script>
    <!-- ScrollUp js -->
    <script src="{{ asset('front/js/scrollUp.min.js') }}"></script>
    <!-- Main/Activator js -->
    <script src="{{ asset('front/js/main.js') }}"></script>

    @livewireScripts
</body>

<!-- index30:23-->
</html>