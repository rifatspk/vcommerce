<!--header middel start-->
<div class="header_bottom sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="main_menu header_position">
                    <nav>
                        <ul>

                            <li class="{{Route::currentRouteName()=='home' ? 'active': ''}}">
                                <a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> home </a>
                            </li>
                            <li class="mega_items {{Route::currentRouteName()=='shop' ? 'active': ''}}"><a
                                    href="{{route('shop')}}"><i class="zmdi zmdi-shopping-basket"></i>
                                    shop</a>
                            </li>

                            {{-- <li><a href="blog.html"><i class="zmdi zmdi-collection-music"></i> blog <i
                                        class="zmdi zmdi-caret-down"></i></a>
                                <ul class="sub_menu pages">
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="zmdi zmdi-star"></i> pages <i
                                        class="zmdi zmdi-caret-down"></i></a>
                                <ul class="sub_menu pages">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="portfolio.html">portfolio</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li> --}}

                            <li><a href="about.html"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                            <li><a href="contact.html"><i class="zmdi zmdi-account-box-mail"></i> Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header middel end-->