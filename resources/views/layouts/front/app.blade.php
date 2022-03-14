<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Styles -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="@yield('meta_description', config('app.name', 'Laravel'))">
    <meta name="keywords" content="@yield('meta_keywords', config('app.name', 'Laravel'))">
    <meta name="author" content="@yield('meta_author', config('app.name', 'Laravel'))">
    @yield('meta')
    <link rel="icon" href="{{ asset('front/images/AdirohaLogo.png') }}" type="image/png">

    @stack('before-styles')
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/fontawesome-all.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}"/>
    <title>AdiRoha Solution</title>
    <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: left;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    </style>
    @stack('after-styles')
    @if (trim($__env->yieldContent('page-style')))
        @yield('page-style')
    @endif

</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    <div class="main">
        @include('layouts.front.includes.header')
        @yield('content')
        @yield('modal')
        @include('layouts.front.includes.footer')
    </div>
    @stack('before-scripts')
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/aos.js') }}"></script>
    <script src="{{ asset('front/js/scripts.js') }}"></script>
    <script src="{{ asset('front/js/swiper-bundle.min.js') }}"></script>


    @stack('after-scripts')
    @if (trim($__env->yieldContent('page-script')))
        @yield('page-script')
    @endif
    <script>
        // $(document).ready(function() {
        //     if($("#subscribefrm").length > 0){
        //         $("#subscribefrm").validate({
        //             rules: {
        //                 email:{
        //                     required:true,
        //                     email:true
        //                 }
        //             },
        //             submitHandler: function(form) {
        //                 var formData =  new FormData(form);
        //                 var action   =  $("#subscribefrm").attr('data-action');
        //                 $.ajax({
        //                     url         : action,
        //                     type        : "POST",
        //                     data        : formData,
        //                     cache       : false,
        //                     processData : false,
        //                     dataType    :"json",
        //                     mimeType    : "multipart/form-data",
        //                     contentType : false,
        //                     headers     : { 'X-CSRF-Token': Laravel.csrfToken },
        //                     beforeSend: function () {
        //                         $(form).find(':submit').attr('disabled', 'disabled').html("<span>Processing...</span>");
        //                         $('#subscribefrm .email_err').text('');
        //                     }
        //                 }).done(function(data) {
        //                     $(form).find(':submit').removeAttr('disabled').html("<span>Subscribe Now</span>");
        //                     if($.isEmptyObject(data.errors)){
        //                         if(data.success){
        //                             $("#subscribefrm")[0].reset();
        //                             printMsg('subscribe-alert-div','alert alert-success',data.message);
        //                         }else{
        //                             printMsg('subscribe-alert-div','alert alert-danger',data.message);
        //                         }
        //                     }else{
        //                         var error      = '';
        //                         $(data.errors).each(function (index, value) {
        //                             var isLastElement = index == data.errors.length -1;
        //                             if (isLastElement) {
        //                                 error +=  value;
        //                             }else{
        //                                 error +=  value+' , ';
        //                             }
        //                         });
        //                         $('#subscribefrm .email_err').text(error);
        //                         setTimeout(function(){
        //                             $('#subscribefrm .email_err').text('');
        //                         },7000);
        //                     }
        //                 }).fail(function(jqXHR, status, exception) {
        //                     $(form).find(':submit').removeAttr('disabled').html("<span>Subscribe Now</span>");
        //                     if (jqXHR.status === 0) {
        //                         error = 'Not connected.\nPlease verify your network connection.';
        //                     } else if (jqXHR.status == 404) {
        //                         error = 'The requested page not found. [404]';
        //                     } else if (jqXHR.status == 500) {
        //                         error = 'Internal Server Error [500].';
        //                     } else if (exception === 'parsererror') {
        //                         error = 'Requested JSON parse failed.';
        //                     } else if (exception === 'timeout') {
        //                         error = 'Time out error.';
        //                     } else if (exception === 'abort') {
        //                         error = 'Ajax request aborted.';
        //                     } else {
        //                         error = 'Uncaught Error.\n' + jqXHR.responseText;
        //                     }
        //                     printMsg('subscribe-alert-div','alert alert-danger',error);
        //                 });
        //                 return false;
        //             }
        //         });
        //     }
        //     if($("#contactfrm").length > 0){
        //         $("#contactfrm").validate({
        //             errorPlacement: function(error, element) {
        //                 error.insertAfter(element.parent('.form-box'));
        //             },
        //             rules: {
        //                 first_name:{
        //                     required:true
        //                 },
        //                 last_name:{
        //                     required:true
        //                 },
        //                 email:{
        //                     required:true,
        //                     email:true
        //                 },
        //                 phone_no:{
        //                     required:true
        //                 },
        //                 message:{
        //                     required:true
        //                 }
        //             },
        //             submitHandler: function(form) {
        //                 var formData =  new FormData(form);
        //                 var action   =  $("#contactfrm").attr('data-action');
        //                 $.ajax({
        //                     url         : action,
        //                     type        : "POST",
        //                     data        : formData,
        //                     cache       : false,
        //                     processData : false,
        //                     dataType    :"json",
        //                     mimeType    : "multipart/form-data",
        //                     contentType : false,
        //                     headers     : { 'X-CSRF-Token': Laravel.csrfToken },
        //                     beforeSend: function () {
        //                         $(form).find(':submit').attr('disabled', 'disabled').html("<span>Processing...</span>");

        //                         $("#contact-alert-div").hide();
        //                         $("#contact-alert-div").addClass('');
        //                         $("#contact-alert-div span").html('');
        //                     }
        //                 }).done(function(data) {
        //                     $(form).find(':submit').removeAttr('disabled').html("<span>Submit</span>");
        //                     if($.isEmptyObject(data.errors)){
        //                         if(data.success){
        //                             $("#contactfrm")[0].reset();
        //                             printMsg('contact-alert-div','alert alert-success',data.message);
        //                         }else{
        //                             printMsg('contact-alert-div','alert alert-danger',data.message);
        //                         }
        //                     }else{
        //                         var error  = '';
        //                         $(data.errors).each(function (row, val) {
        //                             error += '<li>' + val + '</li>';
        //                         });
        //                         if(error!=''){
        //                             error  = '<ul>'+error+'</ul>';
        //                             setTimeout(function(){
        //                                 printMsg('contact-alert-div','alert alert-danger',error);
        //                             },500);
        //                         }else{
        //                             printMsg('contact-alert-div','alert alert-danger','Oops! Something went wrong..');
        //                         }
        //                     }
        //                 }).fail(function(jqXHR, status, exception) {
        //                     $(form).find(':submit').removeAttr('disabled').html("<span>Submit</span>");
        //                     if (jqXHR.status === 0) {
        //                         error = 'Not connected.\nPlease verify your network connection.';
        //                     } else if (jqXHR.status == 404) {
        //                         error = 'The requested page not found. [404]';
        //                     } else if (jqXHR.status == 500) {
        //                         error = 'Internal Server Error [500].';
        //                     } else if (exception === 'parsererror') {
        //                         error = 'Requested JSON parse failed.';
        //                     } else if (exception === 'timeout') {
        //                         error = 'Time out error.';
        //                     } else if (exception === 'abort') {
        //                         error = 'Ajax request aborted.';
        //                     } else {
        //                         error = 'Uncaught Error.\n' + jqXHR.responseText;
        //                     }
        //                     printMsg('contact-alert-div','alert alert-danger',error);
        //                 });
        //                 return false;
        //             }
        //         });
        //     }
        //     if($("#quotefrm").length > 0){
        //         $("#quotefrm").validate({
        //             errorPlacement: function(error, element) {
        //                 error.insertAfter(element.parent('.form-box'));
        //             },
        //             rules: {
        //                 name:{
        //                     required:true
        //                 },
        //                 email:{
        //                     required:true,
        //                     email:true
        //                 },
        //                 phone_no:{
        //                     required:true
        //                 }
        //             },
        //             submitHandler: function(form) {
        //                 var formData =  new FormData(form);
        //                 var action   =  $("#quotefrm").attr('data-action');
        //                 $.ajax({
        //                     url         : action,
        //                     type        : "POST",
        //                     data        : formData,
        //                     cache       : false,
        //                     processData : false,
        //                     dataType    :"json",
        //                     mimeType    : "multipart/form-data",
        //                     contentType : false,
        //                     headers     : { 'X-CSRF-Token': Laravel.csrfToken },
        //                     beforeSend: function () {
        //                         $(form).find(':submit').attr('disabled', 'disabled').html("<span>Processing...</span>");

        //                         $("#quote-alert-div").hide();
        //                         $("#quote-alert-div").addClass('');
        //                         $("#quote-alert-div span").html('');
        //                     }
        //                 }).done(function(data) {
        //                     $(form).find(':submit').removeAttr('disabled').html("<span>Submit</span>");
        //                     if($.isEmptyObject(data.errors)){
        //                         if(data.success){
        //                             $("#quotefrm")[0].reset();
        //                             printMsg('quote-alert-div','alert alert-success',data.message);
        //                         }else{
        //                             printMsg('quote-alert-div','alert alert-danger',data.message);
        //                         }
        //                     }else{
        //                         var error  = '';
        //                         $(data.errors).each(function (row, val) {
        //                             error += '<li>' + val + '</li>';
        //                         });
        //                         if(error!=''){
        //                             error  = '<ul>'+error+'</ul>';
        //                             setTimeout(function(){
        //                                 printMsg('quote-alert-div','alert alert-danger',error);
        //                             },500);
        //                         }else{
        //                             printMsg('quote-alert-div','alert alert-danger','Oops! Something went wrong..');
        //                         }
        //                     }
        //                 }).fail(function(jqXHR, status, exception) {
        //                     $(form).find(':submit').removeAttr('disabled').html("<span>Submit</span>");
        //                     if (jqXHR.status === 0) {
        //                         error = 'Not connected.\nPlease verify your network connection.';
        //                     } else if (jqXHR.status == 404) {
        //                         error = 'The requested page not found. [404]';
        //                     } else if (jqXHR.status == 500) {
        //                         error = 'Internal Server Error [500].';
        //                     } else if (exception === 'parsererror') {
        //                         error = 'Requested JSON parse failed.';
        //                     } else if (exception === 'timeout') {
        //                         error = 'Time out error.';
        //                     } else if (exception === 'abort') {
        //                         error = 'Ajax request aborted.';
        //                     } else {
        //                         error = 'Uncaught Error.\n' + jqXHR.responseText;
        //                     }
        //                     printMsg('quote-alert-div','alert alert-danger',error);
        //                 });
        //                 return false;
        //             }
        //         });
        //     }
        // });
    </script>

</body>
</html>
