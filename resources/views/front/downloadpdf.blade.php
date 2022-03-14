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
        <!-- Download PDF -->
        <div class="row">
          <div class="col-lg-12">
              <h2 class="comman-title-home pb-0">Download PDF</h2>
              <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
        <section class="related-services">
          <div class="row">
            <div class="col-lg-12">
                <h2 class="cyber-title">Enter you Details</h2>
            </div>
          </div>
          <div class="row Download-form">
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
                    <button type="submit" class="btn btn-comman-home">Download PDF</button>
                </div>
              </form>
            </div>
            <div class="col-lg-6 text-center download-img-icon">
              <a href="#"><img src="{{ asset('front/images/download.png') }}" alt=""></a>
            </div>
          </div>
        </section>
      </div>
    </section>
  </section>


@endsection
@section('page-script')

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
