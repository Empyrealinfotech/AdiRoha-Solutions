@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is a affordable website development company in Kansas, NJ, India with over 7+ years of experience in the web development industry. We build website to convert traffic into leads and sales. Contact Now!')
@section('meta_keywords', config('app.name', 'Laravel'))
@section('meta_author', config('app.name', 'Laravel'))
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/website-development-company" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Affordable Website Development Company in Kansas, NJ | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-expert-web-develpoment-service-provider.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/website-development-company">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is a affordable website development company in Kansas, NJ, India with over 7+ years of experience in the web development industry. We build website to convert traffic into leads and sales. Contact Now!">
@endsection
@section('title', 'Affordable Website Development Company in Kansas, NJ | Empyreal Infotech')
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
                            <span style="--i:1">w</span>
                            <span style="--i:2">e</span>
                            <span style="--i:3">b</span>
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
                                <li>Web Development</li>
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
                            src="assets/images/illustration/best-web-development-service-provider-for-business.svg"
                            alt="About">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">Web Development.</h2>
                        <div class="about-text">
                            <p>Empyreal Infotech is Proud of having web development experts with Skills like:</p>

                            <div class="emp-skils">
                                <div class="emp-skils-left">
                                    <p><img src="assets/images/icons/best-web-development-company/top-rated-PHP-developers.svg"
                                            alt="Top Rated PHP developers">Php</p>
                                    <p><img src="assets/images/icons/best-web-development-company/top-rated-codeigniter-developers.svg"
                                            alt="Top Rated Codeignitor developers">CodeIgniter</p>
                                    <p><img src="assets/images/icons/best-web-development-company/laravel-pro-developers.svg"
                                            alt="Laravel pro developers">Laravel</p>
                                </div>
                                <div class="emp-skils-right">
                                    <p><img src="assets/images/icons/best-web-development-company/nodejs-experts.svg"
                                            alt="Top Rated Node.js developers">Nodejs</p>
                                    <p><img src="assets/images/icons/best-web-development-company/top-rated-wordpress-developers.svg"
                                            alt="Top Rated Wordpress developers">WordPress </p>
                                    <p><img src="assets/images/icons/best-web-development-company/best-shopify-expert-developer.svg"
                                            alt="Top Rated React.js developers">Shopify</p>
                                </div>
                            </div>
                            <p>The website Development Process is really important for any business. the more Easy and
                                Simplified websites are the more Customer likes to use them. That is your first impression
                                of your Client and how you can generate leads for your service or product in the digital
                                market. </p>
                        </div>
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
                            <h2 class="h2-title">Why Web development is important? </h2>
                            <div class="about-text">
                                <p>Today, the online experience is essential to the success of every business and
                                    organization, Developing an effective web presence is imperative for sustainable
                                    business growth. if your website does not appeal to your audience, your digital
                                    marketing efforts will go down the drain.</p>
                                <p>Following are benefits of Web Development</p>
                                <ul>
                                    <li>Communicate with your visitors effectively.</li>
                                    <li>Improve your connectivity.</li>
                                    <li>Prove your reliability.</li>
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
                            <p class="sub-title">Processes</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Our Web Development process</h2>
                        <p class="wow fadeup-animation" data-wow-delay="0.3s">Empyreal Infotech's comprehensive Web Development strategy ensures a perfectly crafted professional site for your business that will boost your digital presence.</p>
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
                            <span class="sub-title extra01-color">First step process</span>
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
                            <span class="sub-title extra01-color">Second step process</span>
                            <h2 class="title">Design </h2>
                            <p class="subtitle-2">In the second stage, all the creative ideas come to reality, where our
                                best designers try to grab the reports and pour them into your project designing and make it
                                a complete responsive websites design for you.</p>
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
                            <span class="sub-title extra01-color">third step process</span>
                            <h2 class="title">Development</h2>
                            <p class="subtitle-2">In this stage, the Development of required features that are to be
                                added to your are done and from just static design your site is made dynamic with all
                                working functionalities that you want to add.</p>
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
                            <span class="sub-title extra01-color">fourth step process</span>
                            <h2 class="title">Revision </h2>
                            <p class="subtitle-2">Here where your role is to check the designs and features made by our
                                designers And developers and give feedback to their work and guide them about if there is
                                any revision required on the project.</p>
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
                            <span class="sub-title extra01-color">fifth step process</span>
                            <h2 class="title">Test </h2>
                            <p class="subtitle-2">In this stage, all the revised design and developer features on the
                                project is tested will all aspect like responsiveness in all resolutions and other required
                                aspects.</p>
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
                            <span class="sub-title extra01-color">Sixth step process</span>
                            <h2 class="title">Launch</h2>
                            <p class="subtitle-2">After all the complete testing is done We are good to go for the
                                successful launch for making the first step towards your online presence. </p>
                            <p>This is the process of our best web development procedure wherein each step you are guided b
                                our professional experts</p>
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
                                    <h3 class="h3-title">{{ $portfolio->name }}</span>
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
