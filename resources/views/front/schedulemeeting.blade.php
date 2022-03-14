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
<link href="{{ asset('front/css/vuetify.min.css') }}" rel="stylesheet"></link>
<link href="{{ asset('front/css/materialdesignicons.min.css') }}" rel="stylesheet"></link>
@endsection
@section('content')


<section class="index-page-bg Service-main-sec courses-main-sec ">
    <section class="Service-main">
      <div class="container">
        <div class="tab-pane fade calender-tab" id="contact" role="tabpanel" aria-labelledby="contact-tab" data-aos="fade-up" data-aos-duration="1200">
          <!-- Schedule Demo -->
          <h2 class="comman-title-home pb-0">Schedule Meeting</h2>
          <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

          <div class="row">
            <div class="col-lg-6">
              <div class="courses_calender">
                <h2 class="cyber-title">Select Date and Time</h2>
                <div id="app">
                  <v-app id="inspire">
                    <template>
                      <v-row justify="center">
                        <v-date-picker v-model="picker"></v-date-picker>
                      </v-row>
                    </template>
                  </v-app>
                </div>
            </div>
          </div>
          <div class="calender-time">
            <a href="#" class="time-zone">10:00AM</a>
            <a href="#" class="time-zone">11:00AM</a>
            <a href="#" class="time-zone">12:00AM</a>
            <a href="#" class="time-zone">1:00AM</a>
            <a href="#" class="time-zone">2:00PM</a>
            <a href="#" class="time-zone">3:00PM</a>
            <a href="#" class="time-zone">4:00PM</a>
            <a href="#" class="time-zone">5:00PM</a>
            <a href="#" class="time-zone">6:00PM</a>
            <a href="#" class="time-zone">7:00PM</a>
          </div>

          <div class="row p-0">
            <div class="col-lg-6">
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Time Zone</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row p-0">
            <div class="col-lg-12">
                <h2 class="cyber-title">Enter you Details</h2>
            </div>
          </div>
          <div class="row p-0">
            <div class="col-lg-6">
              <form>
                <div class="form-group">
                    <input type="text" class="form-control-input" placeholder="First Name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control-input" placeholder="Last Name" required>
              </div>
                <div class="form-group">
                    <input type="email" class="form-control-input" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="n0" class="form-control-input" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <a href="{{ route('front.scheduledemo') }}" type="submit" class="btn btn-comman-home">Schedule Demo</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


@endsection
@section('page-script')
    <script defer src="{{ asset('front/js/custom-scroll-count.js') }}"></script>
    <script src="{{ asset('front/js/polyfill.min.js') }}"></script>
    <script src="{{ asset('front/js/vue.min.js') }}"></script>
    <script src="{{ asset('front/js/vuetify.min.js') }}"></script>
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
          <script>
            new Vue({
              el: '#app',
              vuetify: new Vuetify(),
              data: () => ({
                picker: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
              }),
            })
          </script>

@endsection
