@extends('site.app')
@section('title', 'Login')
@section('content')
<div class="customer_login mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form action="{{ route('register') }}" method="POST" role="form">
                        @csrf
                        <div class="row">
                            <p class="col-md-6">
                                <label for="first_name">First Name<span>*</span></label>
                                <input type="text" name="first_name" id="first_name" required>
                            </p>
                            <p class="col-md-6">
                                <label for="last_name">Last Name<span>*</span></label>
                                <input type="text" name="last_name" id="last_mame" required>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-md-12">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="email" id="email" name="email" required>
                            </p>

                        </div>
                        <div class="row">
                            <p class="col-md-6">
                                <label for="password">Password<span>*</span></label>
                                <input type="password" id="password" name="password" required>
                            </p>
                            <p class="col-md-6">
                                <label for="confirm_pass">Confirm Password<span>*</span></label>
                                <input type="password" id="confirm_pass" name="password_confirmation" required>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-md-6">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address">
                            </p>
                            <p class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city">
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-md-12">
                                <label for="country">Country</label>
                                <input type="text" id="country" name="country">
                            </p>
                        </div>
                        <div class="login_submit">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>

@stop