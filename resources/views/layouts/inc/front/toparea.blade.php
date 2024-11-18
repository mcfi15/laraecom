<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Begin Header Top Left Area -->
            <div class="col-lg-3 col-md-4">
                <div class="header-top-left">
                    <ul class="phone-wrap">
                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Top Left Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-lg-9 col-md-8">
                <div class="header-top-right">
                    <ul class="ht-menu">
                        <!-- Begin Setting Area -->
                        <li>
                            <div class="ht-setting-trigger"><span>Account</span></div>
                            <div class="setting ht-setting">
                                <ul class="ht-setting-list">
                                    @guest
                                        @if (Route::has('login'))
                                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                                            
                                        @endif

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                                            
                                        @endif
                                    @else
                                        <li><a href="{{ url('dashboard') }}"><i class="fa fa-user"></i> Profile</a></li>
                                        <li><a href="{{ url('dashboard') }}"><i class="fa fa-list"></i> My orders</a></li>
                                        <li><a href="{{ url('dashboard') }}"><i class="fa fa-heart"></i> My Wishlists</a></li>
                                        <li><a href="{{ url('dashboard') }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                        <li>
                                            
                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> 
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                        </li>
                                        
                                    @endguest
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <!-- Setting Area End Here -->
                        <!-- Begin Currency Area -->
                        <li>
                            <span class="currency-selector-wrapper">Currency :</span>
                            <div class="ht-currency-trigger"><span>USD $</span></div>
                            <div class="currency ht-currency">
                                <ul class="ht-setting-list">
                                    <li><a href="#">EUR €</a></li>
                                    <li class="active"><a href="#">USD $</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- Currency Area End Here -->
                        <!-- Begin Language Area -->
                        <li>
                            <span class="language-selector-wrapper">Language :</span>
                            <div class="ht-language-trigger"><span>English</span></div>
                            <div class="language ht-language">
                                <ul class="ht-setting-list">
                                    <li class="active"><a href="#"><img src="{{ asset('front/images/menu/flag-icon/1.jpg') }}" alt="">English</a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/menu/flag-icon/2.jpg') }}" alt="">Français</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- Language Area End Here -->
                    </ul>
                </div>
            </div>
            <!-- Header Top Right Area End Here -->
        </div>
    </div>
</div>