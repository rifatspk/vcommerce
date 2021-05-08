@extends('site.app')
@section('title', 'Checkout')
@section('content')


<!--Checkout page section-->
<div class="Checkout_section mt-60">
    <div class="container">
        @if (Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
                        @csrf
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-6 mb-20">
                                <label>First Name <span>*</span></label>
                                <input type="text" required name="first_name"
                                    value="{{ old('first_name') ??  auth()->user()->first_name}}">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Last Name <span>*</span></label>
                                <input type="text" required name="last_name"
                                    value="{{ old('last_name') ??  auth()->user()->last_name}}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Address</label>
                                <input type="text" name="address" required
                                    value="{{ old('address') ??  auth()->user()->address}}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Post Code<span>*</span></label>
                                <input name="post_code" type="text" required
                                    value="{{old('post_code')?? auth()->user()->post_code}}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Country</label>
                                <input type="text" name="country" required
                                    value="{{ old('country') ??  auth()->user()->country}}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Town / City <span>*</span></label>
                                <input type="text" required name="city"
                                    value="{{ old('city') ??  auth()->user()->city}}">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Phone<span>*</span></label>
                                <input type="text" required name="phone_number"
                                    value="{{ old('phone_number') ??  auth()->user()->phone_number}}">

                            </div>
                            <div class="col-lg-6 mb-20">
                                <label> Email Address <span>*</span></label>
                                <input type="text" required name="email"
                                    value="{{ old('email') ??  auth()->user()->email}}">

                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note" name="notes"> {{ old('notes')}}
                                    </textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-lg-6 col-md-6">

                    <h3>Your order</h3>
                    <div class="order_table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\Cart::getContent() as $cartitem)
                                <tr>
                                    <td> {{ Str::words($cartitem->name,20) }} <strong> ×
                                            {{$cartitem->quantity}}</strong></td>
                                    <td> {{config('settings.currency_symbol')}}
                                        {{($cartitem->quantity)*($cartitem->price)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td>{{ config('settings.currency_symbol') }}{{ \Cart::getsubTotal() }}</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td><strong>{{ config('settings.currency_symbol') }}{{ config('settings.shipping_charge') }}</strong>
                                    </td>
                                </tr>
                                <tr class="order_total">
                                    <th>Order Total</th>
                                    <td><strong>{{ config('settings.currency_symbol') }}{{ \Cart::getTotal() }}</strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        {{-- <div class="panel-default">
                            <input id="payment" name="check_method" type="radio" value="cashondelivery" />
                            <label for="payment">Cash On Delivery</label>
                        </div> --}}
                        @if (\Cart::getsubTotal()>0)
                        <div class="order_button">
                            <button type="submit">Proceed</button>
                        </div>

                        @else
                        <div class="order_button">
                            <button> Your Cart is Empty</button>
                        </div>

                        @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop