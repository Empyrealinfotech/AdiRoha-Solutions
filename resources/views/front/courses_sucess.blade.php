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
<link href="{{ asset('front/css/vuetify.min.css" rel="stylesheet') }}"></link>
<link href="{{ asset('front/css/materialdesignicons.min.css" rel="stylesheet') }}"></link>
@endsection
@section('content')

<section class="index-page-bg Service-main-sec courses-main-sec ">
    <section class="Service-main">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="1200">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Courses <i class="fas fa-chevron-right"></i></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cyber Security Course <i class="fas fa-chevron-right"></i></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Schedule Demo</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="service-set-border-bottom" data-aos="fade-up" data-aos-duration="1200">
                      <h2 class="comman-title-home pb-0">Demo Succesfully Scheduled</h2>
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
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- Cyber Security Course -->
            <section class="cyber-security-course" data-aos="fade-up" data-aos-duration="1200">
            <h2 class="comman-title-home">Cyber Security Course</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="youtube-player" data-id="6qGiXY1SB68"></div>
                  <div class="service-btn">
                    <a class="btn-solid-sm" href="{{ route('front.downloadpdf') }}">Download PDF</a>
                    <a class="btn-solid-sm" href="{{ route('front.scheduledemo') }}">Schedule Demo</a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <h2 class="cyber-title">Course Overview</h2>
                  <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
            </section>

              <section class="course-top-sec" data-aos="fade-up" data-aos-duration="1200">
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

              <section class="related-services" data-aos="fade-up" data-aos-duration="1200">
                <div class="row">
                  <div class="col-lg-12">
                      <h2 class="cyber-title">Download PDF</h2>
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
                          <button type="submit" class="btn btn-comman-home">Download PDF</button>
                      </div>
                    </form>
                  </div>
                </div>
              </section>
          </div>
          <div class="tab-pane fade calender-tab" id="contact" role="tabpanel" aria-labelledby="contact-tab" data-aos="fade-up" data-aos-duration="1200">
            <!-- Schedule Demo -->
            <h2 class="comman-title-home pb-0">Schedule Demo</h2>
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
      </div>
    </section>
  </section>
@endsection
@section('page-script')
<script src="{{ asset('front/js/polyfill.min.js') }}"></script>
<script src="{{ asset('front/js/vue.min.js') }}"></script>
<script src="{{ asset('front/js/vuetify.min.js') }}"></script>

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
