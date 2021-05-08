<header class="header_area">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="welcome_text">
                        <p>Welcome to <span>{{config('settings.site_name')}}</span> </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="top_right text-right">
                        <ul>
                            <li class="currency"><a href="#"><i class="fa fa-dollar"></i> US Dollar <i
                                        class="zmdi zmdi-caret-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">EUR – Euro</a></li>
                                    <li><a href="#">GBP – British Pound</a></li>
                                    <li><a href="#">INR – India Rupee</a></li>
                                </ul>



                            <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> My account <i
                                        class="zmdi zmdi-caret-down"></i></a>
                                @guest
                                <ul class="dropdown_links">
                                    <li><a href="{{ route('login') }}">Login </a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                                @else
                                <ul class="dropdown_links">
                                    <li><a href="{{route('checkout.index')}}">Checkout </a></li>
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="{{route('checkout.cart')}}">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                                @endguest

                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header top start-->
    <!--header center area start-->
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">

                        @if (config('settings.site_logo') != null)
                        <a href="{{ url('/') }}"><img src="{{ asset('storage/'.config('settings.site_logo')) }}"
                                alt="Logo"></a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header_middle_inner">
                        <div class="search-container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i>
                                <span>{{\Cart::getContent()->count()}} items -
                                    {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }}</span> </a>
                            <!--mini cart-->
                            <div class="mini_cart">
                                @foreach (\Cart::getContent() as $cartitem)
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img
                                                src="{{ asset('storage/'.$cartitem->attributes->product_image)}}"
                                                alt="{{ Str::words($cartitem->name,20) }}"></a>
                                    </div>
                                    <div class="cart_info">
                                        {{-- {{ route('product.show', $product->slug) }} --}}

                                        <a href="">{{ Str::words($cartitem->name,20) }}</a>

                                        <span class="quantity">{{$cartitem->quantity}}</span>
                                        <span class="price_cart">{{config('settings.currency_symbol')}}
                                            {{($cartitem->quantity)*($cartitem->price)}}</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="{{ route('checkout.cart.remove', $cartitem->id) }}"><i
                                                class="ion-android-close"></i></a>
                                    </div>
                                </div>

                                @endforeach
                                @if (\Cart::getContent()->count()>0)
                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>Subtotal:</span>
                                        <span
                                            class="price">{{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }}</span>
                                    </div>
                                </div>

                                <div class="mini_cart_footer">
                                    <div class="cart_button">
                                        <a href="{{route('checkout.cart')}}">View cart</a>
                                        <a href="{{route('checkout.index')}}">Checkout</a>
                                    </div>

                                </div>
                                @else
                                <h3>Your Cart is Empty</h3>
                                @endif

                            </div>
                            <!--mini cart end-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--header center area end-->
    @include('site.partials.nav')

</header>