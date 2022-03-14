@extends('layouts.front.app')
@php
if(isset($title) && $title != '')
{
    $title=$title;
}else {
    $title='AdiRoha Solutions';
}

@endphp
@section('title', $title )
@section('meta_description', 'AdiRoha Solutions')
@section('meta_keywords', 'AdiRoha Solutions')
@section('meta_author', 'AdiRoha Solutions')
@section('meta')

@endsection

@section('page-style')
@endsection
@section('content')
<section class="index-page-bg Service-main-sec courses-main-sec">
    <section class="Service-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="service-set-border-bottom" data-aos="fade-up" data-aos-duration="1200">
                <h2 class="comman-title-home pb-0">Meeting Scheduled!</h2>
                <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>
        <section class="related-services" data-aos="fade-up" data-aos-duration="1200">
          <div class="row">
            <div class="col-lg-12">
                <h2 class="comman-title-home pb-0">Related Articles</h2>
            </div>
          </div>
          <div class="row related-services-img course-text course-mobilescreen">
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('front/images/sliderimg.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-md-8">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
              <span class="date-courses">24/02/2021</span>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('front/images/service1.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-md-8">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
              <span class="date-courses">24/02/2021</span>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('front/images/sliderimg.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-md-8">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
              <span class="date-courses">24/02/2021</span>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('front/images/service1.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-md-8">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
              <span class="date-courses">24/02/2021</span>
            </div>
          </div>
        </section>
      </div>
    </section>
  </section>
@endsection
@section('page-script')

@endsection
