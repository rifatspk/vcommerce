<ul class="navbar-nav">
    <section class="slider_section mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">Categories</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>

                                @foreach ($categories as $ncategory)
                                @foreach ($ncategory->items as $category)
                                @if ($category->items->count() > 0)

                                <li class="menu_item_children categorie_list"><a
                                        href="{{ route('category.show', $category->slug) }}"><span><i
                                                class="zmdi zmdi-desktop-mac"></i></span> {{ $category->name }} <i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        @foreach ($category->items as $cats)
                                        @if ($cats->items->count()>0)
                                        <li class="menu_item_children"><a
                                                href="{{ route('category.show', $cats->slug) }}">{{ $cats->name }}</a>

                                            <ul class="categorie_sub_menu">

                                                @foreach ($cats->items as $citem)
                                                <li>
                                                    <a href="{{ route('category.show', $citem->slug) }}">
                                                        {{$citem->name}}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @else
                                        <li class="menu_item_children"><a
                                                href="{{ route('category.show', $cats->slug) }}">{{ $cats->name }}</a>
                                        </li>
                                        @endif
                                        @endforeach

                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ route('category.show', $category->slug) }}"><span><i
                                                class="zmdi zmdi-tv"></i></span>{{$category->name}}</a></li>
                                @endif
                                @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!--shipping area start-->
                    <div class="shipping_area">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i>
                            </div>
                            <div class="shipping_content">
                                <p>Free Shipping On Orders Over $99</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="zmdi zmdi-replay-5"></i>
                            </div>
                            <div class="shipping_content">
                                <p>30 – Day Returns Moneyback Guarantee</p>
                            </div>
                        </div>
                        <div class="single_shipping last_child">
                            <div class="shipping_icone">
                                <i class="zmdi zmdi-phone-in-talk"></i>
                            </div>
                            <div class="shipping_content">
                                <p>24/7 Support Online Consultations</p>
                            </div>
                        </div>
                    </div>
                    <!--shipping area end-->
                    <div class="slider_area owl-carousel">
                        <div class="single_slider" data-bgimg="{{asset('frontend')}}/img/slider/slider1.jpg">
                            <div class="slider_content content_position_center">
                                <h1>New</h1>
                                <h2>Designer Funiture! </h2>
                                <span>elite collections! </span>
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center"
                            data-bgimg="{{asset('frontend')}}/img/slider/slider2.jpg">
                            <div class="slider_content content_position_left">
                                <h1>New</h1>
                                <h2>Designer Funiture! </h2>
                                <span>elite collections! </span>
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>