@extends('layouts.admin.guest')
@section('title', 'Forgot Password - '.config('app.name', 'Laravel'))
@section('content')
    <div class="white-box">
        <h3 class="box-title m-b-0">{{ __('Forgot Password') }}</h3>
        <small>Enter your Email and instructions will be sent to you! </small>
        <form action="{{ route('password.email') }}" class="form-horizontal new-lg-form" name="forgotform" id="forgotform" method="POST" autocomplete="off">
            @csrf
            <div class="form-group m-t-10 @error('email') is-invalid @enderror">
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
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                   <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ __('Send') }}</button>
                </div>
            </div>
      </form>
   </div>
@endsection
@section('page-script')
    @if (Session::has('status'))
    <script>
        Toast.fire({
            type: "success",
            title: "{{ Session::get('status') }}"
        });
    </script>
    @endif
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
            $("#forgotform").validate({
                rules: {
                    email: {
                        required: !0,
                        email: !0
                    }
                },
                messages: {
                    email: {
                        required: "The email field is required."
                    }
                },
                submitHandler: function(e) {
                    e.submit()
                }
            });
        });
    </script>
@endsection
