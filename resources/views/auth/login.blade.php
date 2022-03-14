@extends('layouts.admin.guest')
@section('title', 'Login - '.config('app.name', 'Laravel'))
@section('content')
    <div class="white-box">
        <h3 class="box-title m-b-0">Login to Admin</h3>
        <small>Enter your details below</small>
        <form action="{{ route('login') }}" class="form-horizontal new-lg-form" name="loginform" id="loginform" method="POST" autocomplete="off">
            @csrf
            <div class="form-group @error('email') is-invalid @enderror">
                <div class="col-xs-12">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="email" autofocus required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('password') is-invalid @enderror">
                <div class="col-xs-12">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="current-password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox checkbox-info pull-left p-t-0">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember"> Remember me </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>
                    @endif
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                   <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                </div>
            </div>
            @if (Route::has('register'))
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                       <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Register</b></a></p>
                    </div>
                </div>
            @endif
      </form>
   </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
            $("#loginform").validate({
                rules: {
                    email: {
                        required: !0,
                        email: !0
                    },
                    password: {
                        required: !0,
                        minlength: 8
                    }
                },
                messages: {
                    email: {
                        required: "The email field is required."
                    },
                    password: {
                        required: "The password field is required."
                    }
                },
                submitHandler: function(e) {
                    e.submit()
                }
            });
        });
    </script>
@endsection
