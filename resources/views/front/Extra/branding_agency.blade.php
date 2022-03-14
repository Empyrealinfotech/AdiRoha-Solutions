@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is a leading top branding agency in Kansas, NJ, that offers branding expertise. We are providing unique branding, advertising, and digital marketing solutions.')
@section('meta_keywords', 'branding agency in Kansas, creative agency Kansas, branding design Kansas, creative branding agency Kansas, branding agency nj, best branding agency nj, branding agency')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/branding-agency" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Branding Agency in Kansas | Creative Branding Agency in NJ">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-creative-branding-service-provider.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/branding-agency">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is a leading top branding agency in Kansas, NJ, that offers branding expertise. We are providing unique branding, advertising, and digital marketing solutions.">
@endsection
@section('title', 'Branding Agency in Kansas | Creative Branding Agency in NJ')
@section('page-style')
@endsection
@section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <div class="banner-circle-box">
            <span class="circle one right animate-this"></span>
            <span class="circle two right animate-this"></span>
            <span class="circle three right animate-this"></span>
            <span class="circle four right animate-this"></span>
            <span class="circle five left animate-this"></span>
            <span class="circle six left animate-this"></span>
            <span class="circle seven left animate-this"></span>
            <span class="circle eight left animate-this"></span>
            <span class="circle nine left animate-this"></span>
            <span class="circle ten left animate-this"></span>
        </div>
        <span class="shape">
            <img width="1920" height="189" src="assets/images/shape.svg" alt="Branding Agency in Kansas">
        </span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content typewriter">
                        <div class="waviy">
                            <span style="--i:1">b</span>
                            <span style="--i:2">r</span>
                            <span style="--i:3">a</span>
                            <span style="--i:4">n</span>
                            <span style="--i:5">d</span>
                            <span style="--i:6">i</span>
                            <span style="--i:7">n</span>
                            <span style="--i:8">g</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Website Design</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>Branding</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <!-- Features Start -->
    <!-- About Us Start -->
    <section class="main-about-us">
        <div class="container">
            <div class="row align-items-center" id="about-us">
                <div class="col-lg-6 wow right-animation" data-wow-delay="0.2s">
                    <div class="about-img">
                        <img width="700" height="636"
                            src="assets/images/illustration/building-your-brand-identity-from-empyreal-infotech.svg"
                            alt="Branding Agency in NJ">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">What is great branding!? Why it is important for digital presence!? </h2>
                        <div class="about-text">
                            <p>Your "brand" is your "promise" to your "customer".A brand is a name, word, layout, metaphor,
                                or other attribute that differs one seller's product or service from those of other sellers.
                            </p>
                            <p> "A brand is a voice and a product is a souvenir." - Lisa Gansky</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!-- Contact Start -->
    <section class="main-contact emp-contact pr-4">
        <div class="container">
            <div class="row align-items-center" id="contact-us">
                @include('front.service_get_quote')
                <div class="col-lg-6 order-lg-2 order-1 wow left-animation" data-wow-delay="0.2s">
                    <div class="emp-branding-matter">
                        <div class="about-content ">
                            <div class="sub-title-box left">
                                <p class="sub-title">Important</p>
                                <span class="line1"></span>
                            </div>
                            <h2 class="h2-title"> Why build you own brand!?</h2>
                            <div class="about-text">
                                <ul>
                                    <li>Trust Among Your Existing Customers</li>
                                    <li>Develop Strong Relationship</li>
                                    <li>Increase Traffic And Inquires To Your Business</li>
                                    <li>Increase Customer Satisfaction</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
    <!-- Contact Start -->
    <section class="main-contact emp-contact">
        <div class="container">
            <div class="title ">
                <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeup-animation;">
                    <p class="sub-title">service includes</p>
                    <span class="line1"></span>
                    <span class="line2"></span>
                </div>
                <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">We are Proud of
                    having branding experts with Skills like</h2>
            </div>
            <div class="emp-branding-matter emp-responsive-padding">
                <div class="about-content">
                    <div class="row emp-responsive-class">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="about-text wow fadeup-animation" data-wow-delay="0.3s">
                                <ul>
                                    <li>Logo Design</li>
                                    <li>Cover Design</li>
                                    <li>Business card Design</li>
                                    <li>Letterhead Design</li>
                                    <li>PPT Template </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="about-text wow fadeup-animation" data-wow-delay="0.3s">
                                <ul>
                                    <li>Envelope Design</li>
                                    <li>Information card Design</li>
                                    <li>Brochure Design</li>
                                    <li>Html Newsletter Design</li>
                                    <li>Email Signature</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="about-text wow fadeup-animation" data-wow-delay="0.3s">
                                <ul>
                                    <li>Iconography</li>
                                    <li>Typography</li>
                                    <li>Imagnery</li>
                                    <li>Social Media</li>
                                    <li>Print material</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
    <!-- NewsLetter Start -->
    <section class="main-newsletter">
        <span class="map">
            <img width="1200" height="602" src="assets/images/map.png" alt="Empyreal Infotech Map">
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
                <div class="col-xl-12 col-lg-12">
                    <div class="newsletter-content">
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">So what are you waiting for submit
                            your idea today itself</h2>
                        <h5 class="wow fadeup-animation font-fff" data-wow-delay="0.4s">We are just one click away!</h5>
                        <div class="text-center wow fadeup-animation mt-4" data-wow-delay="0.3s">
                            <a class="sec-btn gradient" title="Contact Us" href="javascript:void(0);" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><span>Get In Touch</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NewsLetter End -->
    @if(isset($portfolios) && $portfolios->count() > 0)
    <section class="main-features emp-feature-design">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title ">
                        <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s">
                            <p class="sub-title">Our Projects</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Featured Designs</h2>
                    </div>
                </div>
            </div>
            <div class="main-portfolio-list">
                <div class="row">
                    @foreach($portfolios as $skey => $portfolio)
                        @php
                            $style      = '';
                            if(isset($portfolio->color_code) && $portfolio->color_code!=''){
                                $style  = "style='background-color:".$portfolio->color_code."'";
                            }
                            $image      = (isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))?asset('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png'):asset('assets/images/default-image.jpg');
                        @endphp
                        <div class="col-lg-6">
                            <div class="portfolio-box wow fadeup-animation graphics-bg-sec" data-wow-delay="0.2s">
                                <div class="portfolio-img-box img-box" {!! $style !!}>
                                    <div class="portfolio-img img back-img" style="background-image: url('{{ $image  }}');"></div>
                                </div>
                                <div class="portfolio-text-box">
                                    @if(isset($portfolio->name) && $portfolio->name!='')
                                    <h3 class="h3-title">{{ $portfolio->name }}</h3>
                                    @endif
                                    @if(isset($portfolio->short_description) && $portfolio->short_description!='')
                                    <h3 class="h3-title">{{ \Illuminate\Support\Str::limit(strip_tags($portfolio->short_description) ?? '',100,' ...') }}</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center wow fadeup-animation" data-wow-delay="0.3s">
                <a href="{{ route('front.portfolio') }}" class="sec-btn gradient" title="Explore More"><span> Explore More </span></a>
            </div>
        </div>
    </section>
    @endif
    <!-- Features End -->
@endsection
@section('page-script')
@endsection
