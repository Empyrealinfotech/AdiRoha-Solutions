@extends('layouts.admin.app')
    @section('title', 'Confirm Password - '.config('app.name', 'Laravel'))
@section('breadcrumb')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Confirm Password </h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">{{ __('Confirm Password') }}</h3>
                <p class="text-muted m-b-20 font-13"> {{ __('Please confirm your password before continuing.') }} </p>
                <form method="POST" action="{{ route('password.confirm') }}" name="confirmfrm" id="confirmfrm">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('password') is-invalid @enderror">
                                    <label class="control-label">{{ __('Password') }} <span style="color: red">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Current Password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Confirm Password</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-default" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
        $("#confirmfrm").validate({
            ignore: [],
            errorElement: 'span',
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('is-invalid');
            },
            rules: {
                password:{
                    required:true,
                }
             },
            messages: {
                password:{
                    required:"The current password field is required."
                }
            },
            submitHandler: function(e) {
                e.submit()
            }
        });
    });
</script>
@endsection
