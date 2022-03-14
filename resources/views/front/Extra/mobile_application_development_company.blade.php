@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is one of the top mobile app development company in Kansas, NJ. Our mobile application developers create iPhone, iPad and Android apps. Get a quote now!')
@section('meta_keywords', 'mobile app development company in Kansas, app development Kansas, mobile app development Kansas, ')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/mobile-application-development-company" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mobile App Development Company in Kansas, NJ | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-best-mobile-application-development-provider.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/mobile-application-development-company">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is one of the top mobile app development company in Kansas, NJ. Our mobile application developers create iPhone, iPad and Android apps. Get a quote now!">
@endsection
@section('title', 'Mobile App Development Company in Kansas, NJ | Empyreal Infotech')
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
            <img width="1920" height="189" src="assets/images/shape.svg" alt="Shape">
        </span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content typewriter">
                        <div class="waviy">
                            <span style="--i:1">A</span>
                            <span style="--i:2">p</span>
                            <span style="--i:3">p</span>
                            <span></span>
                            <span style="--i:4">d</span>
                            <span style="--i:5">e</span>
                            <span style="--i:6">v</span>
                            <span style="--i:7">e</span>
                            <span style="--i:8">l</span>
                            <span style="--i:9">o</span>
                            <span style="--i:10">p</span>
                            <span style="--i:11">m</span>
                            <span style="--i:12">e</span>
                            <span style="--i:13">n</span>
                            <span style="--i:14">t</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Website Design</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>App Devepolment</li>
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
                            src="assets/images/illustration/best-app-development-service-provider-in-india.svg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">Mobile Application Development </h2>
                        <div class="about-text">
                            <p>Empyreal Infotech is Proud of having Mobile app experts with Skills like:</p>
                            <div class="emp-skils">
                                <div class="emp-skils-left">
                                    <p><img src="assets/images/icons/best-mobile-application-development-company/best-android-app-development-company.svg"
                                            alt="Top Rated PHP developers">Android</p>
                                    <p><img src="assets/images/icons/best-mobile-application-development-company/best-ios-app-development-company.svg"
                                            alt="Top Rated Codeignitor developers">Ios</p>
                                </div>
                                <div class="emp-skils-right">
                                    <p><img src="assets/images/icons/best-mobile-application-development-company/develop-hybrid-mobile-app-using-flutter.svg"
                                            alt="Top Rated Node.js developers">Flutter</p>
                                    <p><img src="assets/images/icons/best-mobile-application-development-company/develop-hybrid-mobile-app-using-react-native.svg"
                                            alt="Top Rated Wordpress developers">React Native </p>
                                </div>
                            </div>
                            <p>There are over 4B smartphone users worldwide approximately, so there is no doubt that Mobile
                                app Industry is booming. Stats are growing steadily, towards upward directions only. and
                                according to studies average person around the world checks their mobile phone one time
                                every minute. Mobile app helps you connect with your customers in an easy way and
                                hassle-free process.</p>
                        </div>
                        <!-- <a href="about-us.php" class="sec-btn gradient" title="Read More"><span>Read More</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Contact Start -->
    <section class="main-contact emp-contact">
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
                            <h2 class="h2-title">Why Mobile app development is important? </h2>
                            <div class="about-text">
                                <p>Today, the online experience is essential to the success of every business and
                                    organization, Developing an effective Mobile app helps you to connect your leads in a
                                    really easy and fast way. Every person that's Transacting with has you on their
                                    fingertip.</p>
                                <p>Following are the benefits of mobile app development</p>
                                <ul>
                                    <li>Communicate with your visitors effectively</li>
                                    <li>Improve your connectivity.</li>
                                    <li>Hassle-free business process.</li>
                                    <li>Growth with help of the digital platforms to sell more of your services and
                                        products.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->


    <section class="main-features page-services-features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title ">
                        <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s">
                            <p class="sub-title">Processes </p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Our Mobile app development process
                        </h2>
                        <p class="wow fadeup-animation" data-wow-delay="0.3s">Empyreal Infotech's comprehensive mobile app
                            development strategy ensures a perfectly crafted professional App for your business that will
                            boost your business and digital presence.</p>
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb_md-50 mb_sm-40 wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-submit-your-idea.svg" alt="Process Images">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">1</span>
                            <span class="sub-title extra04-color">First step process</span>
                            <h2 class="title">Submit your idea </h2>
                            <p class="subtitle-2">Experts Empyreal Infotech will collect all the details and grab your
                                ideas and references and will do the RND procedure over it and bring out something creative
                                from their side.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb--100 text-start mb_md--50 mb_sm--40 wow fadeup-animation"
                data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">2</span>
                            <span class="sub-title extra05-color">Second step process</span>
                            <h2 class="title">Design </h2>
                            <p class="subtitle-2">In the second stage, all the creative ideas come to reality, where our
                                best app designers try to grab the reports and pour them into your project designing the
                                flow and UI/UX and making it a complete Flow of app and designing it for you.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-design.svg" alt="Process Images">
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb--100 mb_md--50 mb_sm--40 wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-web-development.svg" alt="Process Images">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">3</span>
                            <span class="sub-title extra06-color">third step process</span>
                            <h2 class="title">Development</h2>
                            <p class="subtitle-2">In the third stage, all the Design and flow are made dynamic from the
                                static stage, all the functionalities are developed and the backed is integrated with the
                                mobile app and the app is brought to its completion stage.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb--100 text-start mb_md--50 mb_sm--40 wow fadeup-animation"
                data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">4</span>
                            <span class="sub-title extra04-color">fourth step process</span>
                            <h2 class="title">Revision </h2>
                            <p class="subtitle-2">Here where your role is to check the designs made by our designers and
                                give feedback on their work and check the flow is working well all the functionalities that
                                you wanted in the app are perfectly working and guide them about if there is any revision
                                required on the project.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-design-review.svg" alt="Process Images">
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb--100 mb_md--50 mb_sm--40 wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-testing-web-or-app.svg" alt="Process Images">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">5</span>
                            <span class="sub-title extra04-color">fifth step process</span>
                            <h2 class="title">Test </h2>
                            <p class="subtitle-2">In this stage, all the revised project is tested will all aspects
                                like flow, functionalities, gateway, and checking other all aspects by professional testers
                                and do all resolutions and other required aspects. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb--100 text-start mb_md--50 mb_sm--40 wow fadeup-animation"
                data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">6</span>
                            <span class="sub-title extra04-color">Sixth step process</span>
                            <h2 class="title">Launch </h2>
                            <p class="subtitle-2">After all the complete testing is done We are good to go for the
                                successful launch for your app to be launched on the app store and play store as per your
                                requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-launch.svg" alt="Process Images">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NewsLetter Start -->
    <section class="main-newsletter">
        <span class="map">
            <img width="1200" height="602" src="assets/images/map.png" alt="Map">
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
                            <div class="portfolio-box wow fadeup-animation" data-wow-delay="0.2s">
                                <div class="portfolio-img-box img-box" {!! $style !!}>
                                    <div class="portfolio-img img back-img" style="background-image: url('{{ $image  }}');"></div>
                                </div>
                                <div class="portfolio-text-box">
                                    @if(isset($portfolio->name) && $portfolio->name!='')
                                    <h3 class="h3-title">{{ $portfolio->name }}</h3>
                                    @endif
                                    @if(isset($portfolio->short_description) && $portfolio->short_description!='')
                                    <h6 class="pt-3">{{ \Illuminate\Support\Str::limit(strip_tags($portfolio->short_description) ?? '',100,' ...') }}</h6>
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
@endsection
@section('page-script')
@endsection
