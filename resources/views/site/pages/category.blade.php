@extends('site.app')
@section('title', $category->name)
@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li>{{ $category->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_sidebar mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="shop_sidebar_banner mb-50">
                        <a href="#"><img src="assets/img/bg/banner16.jpg" alt=""></a>
                    </div>
                    <div class="widget_list widget_categories">
                        <h2>category Name</h2>
                        <ul>
                            <li>
                                <a href="{{route('category.show',$category->slug)}}">{{ $category->name }}
                                    {{-- <span>(6)</span> --}}
                                </a>
                            </li>

                        </ul>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_banner">
                    {{-- <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt=""> --}}
                </div>
                <div class="shop_title">
                    <h1>shop</h1>
                </div>
                {{-- <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip"
                            title="3"></button>

                        <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip"
                            title="4"></button>

                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                            title="List"></button>
                    </div>
                    <div class=" niceselect_option">

                        <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Sort by average rating</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form>


                    </div>
                    <div class="page_amount">
                        <p>Showing 1–9 of 21 results</p>
                    </div>
                </div> --}}
                <!--shop toolbar end-->

                <div class="row no-gutters shop_wrapper">

                    @forelse ($category->products as $product)
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="{{ route('product.show', $product->slug) }}"><img
                                        src="{{ asset('storage/'.$product->images->first()->full) }}" alt=""></a>
                                <div class="label_product">
                                    @if ($product->sale_price)
                                    <span class="label_sale">sale</span>
                                    @endif

                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <div class="product_name">
                                    <h3><a href="{{ route('product.show', $product->slug) }}">{{$product->name}}</a>
                                    </h3>
                                </div>
                                <div class="price_box">
                                    @if ($product->sale_price)
                                    <span
                                        class="current_price">{{config('settings.currency_symbol')}}{{$product->sale_price}}</span>
                                    <span class="old_price">
                                        {{config('settings.currency_symbol')}}{{$product->price}}
                                    </span>
                                    @else
                                    <span class="current_price">
                                        {{config('settings.currency_symbol')}}{{$product->price}}
                                    </span>

                                    @endif
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                    class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li class="add_to_cart"><a href="cart.html" title="add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                        <li class="compare"><a href="#" title="compare"><i
                                                    class="zmdi zmdi-swap"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty
                    <p>No Products found in {{ $category->name }}.</p>
                    @endforelse

                </div>

                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>

        </div>
    </div>
</div>


@stop