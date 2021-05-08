@extends('site.app')
@section('title', 'Login')
@section('content')
<div class="customer_login mt-60">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="offset-md-3 col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <p>
                            <label>Email <span>*</span></label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="email" name="email">
                        </p>
                        <p>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                        </p>
                        <div class="login_submit">
                            <a href="#">Lost your password?</a>
                            <label for="remember">
                                <input id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}
                                    type="checkbox">
                                Remember me
                            </label>
                            <button type="submit">login</button>

                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->
        </div>
    </div>
</div>

@stop