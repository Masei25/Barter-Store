@extends('layouts.index')

@section('content')
    <!-- register -->
    <div class="register">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Creating an account is quick and simple, and it means you
                can track, change or return your order.</p>
            <div class="login-form-grids">
                <h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
                <form class="animated wow slideInUp" data-wow-delay=".5s" method="POST">
                    @csrf
                    
                    <input type="text" placeholder="First Name..." name="first_name">
                    @if ($errors->has('first_name'))
                        <small style="color:red">
                            {{ $errors->first('first_name') }}
                        </small>
                    @endif
                    <input type="text" placeholder="Last Name..." name="last_name">
                    @if ($errors->has('last_name'))
                        <small style="color:red">
                            {{ $errors->first('last_name') }}
                        </small>
                    @endif

                    <h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>
                    <input type="email" placeholder="Email Address" name="email">
                    @if ($errors->has('email'))
                        <small style="color:red">
                            {{ $errors->first('email') }}
                        </small>
                    @endif
                    <input type="password" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                        <small style="color:red">
                            {{ $errors->first('password') }}
                        </small>
                    @endif
                    <input type="password" placeholder="Password Confirmation" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <small style="color:red">
                            {{ $errors->first('password_confirmation') }}
                        </small>
                    @endif
                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and
                                conditions</label>
                        </div>
                    </div>
                    @if ($errors->has('checkbox'))
                        <small style="color:red">
                            {{ $errors->first('checkbox') }}
                        </small>
                    @endif
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <!-- //register -->
@endsection
