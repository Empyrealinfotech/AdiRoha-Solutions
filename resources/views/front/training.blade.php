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
        <section class="cyber-security-course">
          <h2 class="comman-title-home">Cyber Security Course</h2>
          <div class="row">
            <div class="col-lg-6">
              <div class="youtube-player" data-id="6qGiXY1SB68"></div>
              <div class="service-btn">
                <a class="btn-solid-sm" href="{{ route('front.downloadpdf') }}">Download PDF</a>
                <a class="btn-solid-sm" href="{{ route('front.courses_sucess') }}">Schedule Demo</a>
              </div>
            </div>
            <div class="col-lg-6">
              <h2 class="cyber-title">Course Overview</h2>
              <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </section>
        <section class="course-top-sec">
          <div class="row">
            <div class="col-lg-12">
                <h2 class="cyber-title">Course Syllabus</h2>
                <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

                <div class="accordion accordion-courses" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Lorem ipsum dolor sit amet, consectetur
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor suscipit, iure tenetur eveniet, vero tempore delectus? Perferendis, quisquam ullam consequuntur?
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Lorem ipsum dolor sit amet, consectetur
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor suscipit, iure tenetur eveniet, vero tempore delectus? Perferendis, quisquam ullam consequuntur?
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Lorem ipsum dolor sit amet, consectetur
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor suscipit, iure tenetur eveniet, vero tempore delectus? Perferendis, quisquam ullam consequuntur?
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor suscipit, iure tenetur eveniet, vero tempore delectus? Perferendis, quisquam ullam consequuntur?
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor suscipit, iure tenetur eveniet, vero tempore delectus? Perferendis, quisquam ullam consequuntur?
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </section>
        <section class="related-services">
          <div class="row">
            <div class="col-lg-12">
                <h2 class="cyber-title">Download</h2>
            </div>
          </div>
          <div class="row Download-form">
            <div class="col-lg-6">
              <form>
                <div class="form-group">
                    <input type="text" class="form-control-input" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control-input" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="n0" class="form-control-input" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-comman-home">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </section>
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
    document.addEventListener("DOMContentLoaded", function() {
      var div,
        n,
        v = document.getElementsByClassName("youtube-player");
      for (n = 0; n < v.length; n++) {
        div = document.createElement("div");
        div.setAttribute("data-id", v[n].dataset.id);
        div.innerHTML = noThumb(v[n].dataset.id);
        div.onclick = noIframe;
        v[n].appendChild(div);
      }
    });

    function noThumb(id) {
      var thumb = '<img src="{{ asset('front/images/cyber_security.png') }}">',
        play = '<div class="play"></div>';
      return thumb.replace("ID", id) + play;
    }

    function noIframe() {
      var iframe = document.createElement("iframe");
      var embed =
        "https://www.youtube-nocookie.com/embed/ID?autoplay=1&modestbranding=1&iv_load_policy=3&rel=0&showinfo=0";
      iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "1");
      iframe.setAttribute("allow", "autoplay; encrypted-media");
      this.parentNode.replaceChild(iframe, this);
    }
  </script>
@endsection
