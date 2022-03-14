@extends('layouts.admin.app')
    @section('title', 'Verify Email - '.config('app.name', 'Laravel'))
@section('breadcrumb')
    <div class="row bg-title">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        </div>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">{{ __('Verify Your Email Address') }}</h3>
            <p class="text-muted m-b-0 font-13"> {{ __('Before proceeding, please check your email for a verification link.') }} </p>
            <p class="text-muted m-b-20 font-13">{{ __('If you did not receive the email') }},</p>
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Click here to request another</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('page-script')
    @if (session('resent'))
        <script>
            Toast.fire({
                type: "success",
                title: "A fresh verification link has been sent to your email address."
            });
        </script>
    @endif
@endsection
