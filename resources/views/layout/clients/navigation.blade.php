<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="assets/img/logo.png" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                        <a href="#" onclick="openSearch()">
                            <i class="lni lni-search-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login">
                            <i class="lni lni-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="openWishlist()">
                            <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="openCart()">
                            <i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                
                    <li><a href="#">Home</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="home-2.html">Home 2</a></li>
                            <li><a href="home-3.html">Home 3</a></li>
                            <li><a href="home-4.html">Home 4</a></li>
                            <li><a href="home-5.html">Home 5</a></li>
                            <li><a href="home-6.html">Home 6</a></li>
                            <li><a href="home-7.html">Home 7</a></li>
                            <li><a href="home-8.html">Home 8</a></li>
                            <li><a href="home-9.html">Home 9</a></li>
                            <li><a href="home-10.html">Home 10</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="javascript:void(0);">Shop</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="javascript:void(0);">Account Dashboard</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="my-orders.html">My Order</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="profile-info.html">Profile Info</a></li>
                                    <li><a href="addresses.html">Addresses</a></li>
                                    <li><a href="payment-methode.html">Payment Methode</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Support</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="shoping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="complete-order.html">Order Complete</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-style-1.html">Shop Style 01</a></li>
                            <li><a href="shop-style-2.html">Shop Style 02</a></li>
                            <li><a href="shop-style-3.html">Shop Style 03</a></li>
                            <li><a href="shop-style-4.html">Shop Style 04</a></li>
                            <li><a href="shop-style-5.html">Shop Style 05</a></li>
                            <li><a href="shop-list-view.html">Shop List Style</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="javascript:void(0);">Product</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="shop-single-v1.html">Product Detail v01</a></li>
                            <li><a href="shop-single-v2.html">Product Detail v02</a></li>
                            <li><a href="shop-single-v3.html">Product Detail v03</a></li>
                            <li><a href="shop-single-v4.html">Product Detail v04</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="javascript:void(0);">Pages</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="blog.html">Blog Style</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="docs.html">Docs</a></li>
                    
                </ul>
                
                <ul class="nav-menu nav-menu-social align-to-right">
                    <li>
                        <a href="" onclick="openSearch()">
                            <i class="lni lni-search-alt"></i>
                        </a>
                    </li>

                    @guest
                    <li>
                        <a href="{{ route('clients.login') }}">
                        <i class="lni lni-user"></i>
                    </a>
                    </li>
                    
                   
                   
                @else
                <li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->full_name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('clients.logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <form id="logout-form" action="{{ route('clients.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> 
                   

                </li>
                @endguest

               
                    <li>
                      
                        <a href="#" onclick="openCart()">
                            <i class="lni lni-shopping-basket"></i><span class="dn-counter theme-bg">3</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>