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

<section class="index-page-bg Service-main-sec industry-main-sec">
    <section class="Service-main" data-aos="fade-up" data-aos-duration="1200">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <h2 class="comman-title-home pb-0">Contact Us</h2>
              <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <div class="contact-details">
                <div class="contact-details-icons">
                  <i class="fas fa-phone-alt"></i>
                  <a href="#"><p>+91 96201 30405</p></a>
                </div>
                <div class="contact-details-icons">
                  <i class="fas fa-envelope"></i>
                  <a href="#"><p>adityarajapersonal@gmail.com</p></a>
                </div>
                <div class="contact-details-icons">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                </div>
                <div class="service-btn">
                  <a class="btn-solid-sm w-100" href="#">Open in Google Maps</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </section>
@endsection
@section('page-script')

@endsection
