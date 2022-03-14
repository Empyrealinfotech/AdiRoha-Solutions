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
<style>
    .img_box
    {
        height: 248px;
        width: 406px;
    }
    img
    {
        height: 100%;
        width: 100%
    }

    .post_title
    {

    }

    .short_description
    {

    }

    .description
    {

    }

</style>
@endsection
@section('content')

  <!-- blog -->
  <section class="index-page-bg blog-sec">
    <section class="related-services" data-aos="fade-up" data-aos-duration="1200">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
              <h2 class="comman-title-home p-0">Blog</h2>
          </div>
          <div class="col-lg-5">
            <div class="blog-searchbar">
              <div class="search">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn"> <i class="fa fa-search"></i> </button>
              </div>
            </div>
          </div>
        </div>
        <!-- tab-slider -->
        <div class="contentWrapper">
          <div class="tabsWrapper">
              <ul class="tabs">
                  @foreach ($post as $key=>$cat )
                  <li data-id="{{ $cat->slug.'_'.$key }}">{{ $cat->name }}</li>
                  @endforeach
              </ul>
          </div> <span class="next"><i class="fas fa-chevron-right"></i></span>
            <span class="previous"><i class="fas fa-chevron-left"></i></span>
            <div class="tabContent">

                @foreach ($post as $key=>$cat )
                <div class="{{ $cat->slug.'_'.$key }}">
                    <div class="row related-services-img course-text course-mobilescreen">
                        @foreach ($cat->posts  as $post)
                        <a href="{{ route('front.blog_detail',$post->id) }}">
                      <div class="row mb-5">
                        <div class="col-lg-4 col-md-4">
                            <div class="img_box">
                        <img src="{{ asset('uploads/posts/image/'.$post->image) }}" alt="{{ $post->image_alt }}">
                    </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h3 class="post_title">{!! $post->name !!}</h3>
                            <h3 class="short_description">{!! $post->short_description !!}</h3>
                            <span class="date-courses">{{ date('d/m/Y',strtotime($post->created_at)) }}</span>
                        </div>
                    </div>
                </a>
                    @endforeach
                  </div>
                </div>
                @endforeach

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
        // hide all contents accept from the first div
        $('.tabContent>div:not(:first)').toggle();
        // hide the previous button
        $('.previous').hide();

        $('.tabsWrapper .tabs li').click(function () {

            if ($(this).is(':last-child')) {
                $('.next').hide();
            } else {
                $('.next').show();
            }

            if ($(this).is(':first-child')) {
                $('.previous').hide();
            } else {
                $('.previous').show();
            }

            var position = $(this).position();
            var corresponding = $(this).data("id");

            // scroll to clicked tab with a little gap left to show previous tabs
            scroll = $('.tabsWrapper .tabs').scrollLeft();
            $('.tabsWrapper').animate({
                'scrollLeft': scroll + position.left - 30
            }, 200);

            // hide all content divs
            $('.tabContent>div').hide();

            // show content of corresponding tab
            $('div.' + corresponding).toggle();

            // remove active class from currently not active tabs
            $('.tabsWrapper .tabs li').removeClass('active');

            // add active class to clicked tab
            $(this).addClass('active');
        });

        // $('div a').click(function(e){
        //   e.preventDefault();
        //   $('li.active').next('li').trigger('click');
        // });
        $('.next').click(function(e){
          e.preventDefault();
          $('li.active').next('li').trigger('click');
        });
        $('.previous').click(function(e){
          e.preventDefault();
          $('li.active').prev('li').trigger('click');
        });
      </script>
@endsection
