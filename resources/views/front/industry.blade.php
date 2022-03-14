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
              <h2 class="comman-title-home pb-0">Technology Industry</h2>
              <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <div class="service-btn">
                <a class="btn-solid-sm" href="{{ route('front.contactus') }}">Contact Us</a>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hunting-main-sec industry-bottom-padding" data-aos="fade-up" data-aos-duration="1200">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hunting-inner our-web-pentest">
              <h2 class="comman-title-home pb-0">Challenges in Technology Industry</h2>
              <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="hunting-inner our-web-pentest">
              <h2 class="comman-title-home pb-0">Additional Assessments in Technology Industry</h2>
              <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>
        <!-- Swiper -->
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="industry_slider_img">
                <img src="{{ asset('front/images/sliderimg.png') }}" alt="">
                <h3>Cloud Penetration Testing</h3>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="industry_slider_img">
                <img src="{{ asset('front/images/service1.png') }}" alt="">
                <h3>Mobile App Testing</h3>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="industry_slider_img">
                <img src="{{ asset('front/images/sliderimg.png') }}" alt="">
                <h3>Vulnerability Testing</h3>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="industry_slider_img">
                <img src="{{ asset('front/images/service1.png') }}" alt="">
                <h3>Cloud Penetration Testing</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

@endsection
@section('page-script')
    <script defer src="{{ asset('front/js/custom-scroll-count.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper', {
          slidesPerView: 1,
          spaceBetween: 20,
          // centeredSlides: true,
          // autoplay: {
          //   delay: 4500,
          // }
          breakpoints: {
            575: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            991: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          }
        });


        var swiper = new Swiper('.swiper-popular', {
          slidesPerView: 1,
          spaceBetween: 20,
          // centeredSlides: true,
          // autoplay: {
          //   delay: 4500,
          // }
          breakpoints: {
            575: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            991: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          }
        });

      </script>
       <script>
        var swiper = new Swiper('.swiper', {
          slidesPerView: 3,
          spaceBetween: 10,
          // centeredSlides: true,
          // autoplay: {
          //   delay: 2500,
          // },
          breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 10
          },
          480: {
            slidesPerView: 3,
            spaceBetween: 20
          },
          640: {
            slidesPerView: 3,
            spaceBetween: 20
          },
          990: {
            slidesPerView: 4,
            spaceBetween: 20
          }
        }
        });
    </script>
@endsection
