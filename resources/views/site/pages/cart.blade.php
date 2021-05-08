@extends('site.app')
@section('title', 'Shopping Cart')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-60">
    <div class="container">
        <div class="row">

            @if (\Cart::isEmpty())
            <div class="col-12">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <table>
                            <tbody>
                                <span class="text-center">Your Cart Is Empty!! Please Add a product from our shop
                                    page to continue.</span>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @else
            <div class="col-12">
                <div class="table_desc">

                    <div class="cart_page table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product_name">Product Name</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                    <th class="product_remove">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\Cart::getContent() as $cartitem)
                                <tr>
                                    <td class="product_name"><a href="#">{{ Str::words($cartitem->name,20) }}</a>
                                    </td>
                                    <td class="product_thumb"><a href="#"><img
                                                src="{{ asset('storage/'.$cartitem->attributes->product_image)}}"
                                                alt=""></a>
                                    </td>
                                    <td class="product-price">
                                        {{config('settings.currency_symbol')}}{{$cartitem->price}}</td>
                                    <td class=" product_quantity">
                                        <form action="{{route('updateCart')}}" method="post">
                                            @csrf
                                            <label>Quantity</label>
                                            <input min="1" max="100" value="{{$cartitem->quantity}}" name="product_qty"
                                                type="number">
                                            <input type="hidden" name="product_id" value="{{$cartitem->id}}">
                                            <div class="cart_submit">
                                                <button type="submit">update cart</button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="product_total">
                                        {{config('settings.currency_symbol')}}
                                        {{($cartitem->quantity)*($cartitem->price)}}
                                    </td>
                                    <td class="product_remove"><a
                                            href="{{ route('checkout.cart.remove', $cartitem->id) }}"><i
                                                class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

            @endif
        </div>
        <!--coupon code area start-->

        <div class="coupon_area">
            @if (\Cart::getContent()->count()>0)
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code left">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">
                            <p>Enter your coupon code if you have one.</p>
                            <input placeholder="Coupon code" type="text">
                            <button type="submit">Apply coupon</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code right">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">
                                    {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }}</p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount"><span>Flat Rate:</span>
                                    {{ config('settings.currency_symbol') }}{{ config('settings.shipping_charge') }}</p>
                            </div>
                            {{-- <a href="#">Calculate shipping</a> --}}

                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">{{ config('settings.currency_symbol') }}
                                    {{ \Cart::getSubTotal()+config('settings.shipping_charge') }}
                                </p>
                            </div>

                            <div class="checkout_btn">
                                <a href="{{route('checkout.index')}}">Proceed to Checkout</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!--coupon code area end-->

    </div>
</div>

@stop