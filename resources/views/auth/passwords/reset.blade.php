@extends('layouts.admin.guest')
@section('title', 'Reset Password - '.config('app.name', 'Laravel'))
@section('content')
    <div class="white-box">
        <h3 class="box-title m-b-0">{{ __('Reset Password') }}</h3>
        <small>Enter your details below</small>
        <form action="{{ route('password.update') }}" class="form-horizontal new-lg-form" name="resetform" id="resetform" method="POST" autocomplete="off">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group m-t-10 @error('email') is-invalid @enderror">
                <div class="col-xs-12">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Email Address" autocomplete="email" autofocus required>
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
                <div class="col-xs-12">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required autocomplete="new-password">
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                   <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ __('Reset Password') }}</button>
                </div>
            </div>
      </form>
   </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
            $("#resetform").validate({
                rules: {
                    email: { required: !0, email: !0 },
                    password: { required: !0, minlength: 8 },
                    password_confirmation: { required: !0, equalTo: "#password" }
                },
                messages: {
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
