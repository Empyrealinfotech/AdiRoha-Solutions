@extends('layouts.admin.guest')
@section('title', 'Register - '.config('app.name', 'Laravel'))
@section('content')
    <div class="white-box">
        <h3 class="box-title m-b-0">Register to Admin</h3> <small>Enter your details below</small>
        <form action="{{ route('register') }}" class="form-horizontal new-lg-form" name="registerform" id="registerform" method="POST" autocomplete="off">
            @csrf
            <div class="form-group @error('name') is-invalid @enderror">
                <div class="col-xs-12">
                    <!-- <label for="name">Full Name</label> -->
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('email') is-invalid @enderror">
                <div class="col-xs-12">
                    <!-- <label for="email">Email Address</label> -->
                    <input type="email" class="form-control" name="email" id="email"  value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('password') is-invalid @enderror">
                <div class="col-xs-12">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <!-- <label for="password-confirm">Confirm Password</label> -->
                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required autocomplete="new-password">
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox checkbox-info p-t-0">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup"> I agree to all <a href="javascript:void(0)">Terms</a></label>
                    </div>
                </div>
            </div> -->
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Register</button>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <p>Already have an account? <a href="{{ route('login') }}" class="text-danger m-l-5"><b>Login</b></a></p>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
            $("#registerform").validate({
                rules: {
                    name: { required: !0 },
                    email: { required: !0, email: !0 },
                    password: { required: !0, minlength: 8 },
                    password_confirmation: { required: !0, equalTo: "#password" }
                },
                messages: {
                    name: { required: "The fullname field is required.." },
                    email: { required: "The email field is required.." },
                    password: { required: "The password field is required.", minlength: "Your password must be at least 8 characters long" },
                    password_confirmation: { required: "The confirm password field is required.", equalTo: "Enter Confirm Password Same as Password" },
                },
                submitHandler: function (e) {
                    e.submit();
                },
            });
        });
    </script>
@endsection
