<section class="main-newsletter">
    <span class="map">
        <img width="1200" height="602" src="{{ asset('assets/images/map.png') }}" alt="Map">
    </span>
    <div class="banner-circle-box">
        <span class="circle one right animate-this"></span>
        <span class="circle two right animate-this"></span>
        <span class="circle three right animate-this"></span>
        <span class="circle four right animate-this"></span>
        <span class="circle five left animate-this"></span>
        <span class="circle six left animate-this"></span>
        <span class="circle seven left animate-this"></span>
        <span class="circle eight left animate-this"></span>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="newsletter-content">
                    <div role="alert" id="subscribe-alert-div" style="display: none;">
                        <span></span>
                    </div>
                    <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s">
                        <p class="sub-title">Newsletter</p>
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                    <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Stay Always in touch</h2>
                    <p class="wow fadeup-animation" data-wow-delay="0.4s">To get latest updates please drop your email
                        below.</p>
                    <div class="newsletter-form wow fadeup-animation" data-wow-delay="0.5s">
                        <form name="subscribefrm" id="subscribefrm" method="POST" enctype="multipart/form-data" autocomplete="off" data-action="{{ route('front.news.letter.store') }}">
                            <input type="email" name="email" placeholder="Enter Email Address..." required>
                            <button type="submit" class="sec-btn"><span>Subscribe Now</span></button>
                            <span class="text-danger error-text email_err"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
