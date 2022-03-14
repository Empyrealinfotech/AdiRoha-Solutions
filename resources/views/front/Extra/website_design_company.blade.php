@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is a leading website design company in Kansas, New Jersey. We are offering high-quality e-commerce solutions and creative web design for a better user experience.')
@section('meta_keywords', 'website design company, web design company, website development company in Kansas, website design company in NJ, web design company in NJ, web design company in Kansas, web design agency in Kansas')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/website-design-company" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Website Design Company in Kansas, NJ | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-best-web-design-company.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/website-design-company">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is a leading website design company in Kansas, New Jersey. We are offering high-quality e-commerce solutions and creative web design for a better user experience. ">
@endsection
@section('title', 'Website Design Company in Kansas, NJ | Empyreal Infotech')
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
            <img width="1920" height="189" src="assets/images/shape.svg" alt="Website Design Company in Kansas">
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
                            <span style="--i:6">s</span>
                            <span style="--i:7">i</span>
                            <span style="--i:8">g</span>
                            <span style="--i:9">n</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Website Design</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>Website Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- About Us Start -->
    <section class="main-about-us">
        <div class="container">
            <div class="row align-items-center" id="about-us">
                <div class="col-lg-6 wow right-animation" data-wow-delay="0.2s">
                    <div class="about-img">
                        <img width="700" height="636" src="assets/images/illustration/best-web-design-for-business.svg"
                            alt="Website Design Company in NJ">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">Website Design</h2>
                        <div class="about-text">
                            <p>Empyreal Infotech is Proud of having web designing experts with Skills like:</p>

                            <div class="emp-skils">
                                <div class="emp-skils-left">
                                    <p><img src="assets/images/icons/best-web-design-company/top-rated-angular-developer.svg"
                                            alt="Top Rated Agular developers in Kansas">Angular</p>
                                    <p><img src="assets/images/icons/best-web-design-company/best-reusable-component-based-reactjs-development.svg"
                                            alt="Top Rated React Js developers in NJ">React Js</p>
                                    <p><img src="assets/images/icons/best-web-design-company/best-html-designer.svg"
                                            alt="Top Rated HTML developers in Kansas">HTML</p>
                                </div>
                                <div class="emp-skils-right">
                                    <p><img src="assets/images/icons/best-web-design-company/build-responsive-design-for-devices.svg"
                                            alt="Top Rated Responsive Design developers in Kansas">Responsive Design</p>
                                    <p><img src="assets/images/icons/best-web-design-company/creative-process-wireframe-designer.svg"
                                            alt="Top Rated Wireframe developers in NJ">Wireframe</p>
                                    <p><img src="assets/images/icons/best-web-design-company/pixel-perfect-psd-to-html-conversion.svg"
                                            alt="Top Rated PSD to HTML developers in NJ">PSD to HTML</p>
                                </div>
                            </div>
                            <p>The website design Process is a really important phase of your website development. the more
                                creative and attractive your website looks the more you can boost your reach. That is your
                                first impression of your Client and how you showcase your service or product to your
                                customers in the digital market. </p>
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
                            <h2 class="h2-title">Why Web Designing is important?</h2>
                            <div class="about-text">
                                <p>Today, the online experience is essential to the success of every business and
                                    organization, Developing an effective web presence is imperative for sustainable
                                    business growth. if your website does not appeal to your audience, your digital
                                    marketing efforts will go down the drain.</p>
                                <p>Following are the benefits of Web Design</p>
                                <ul>
                                    <li>Communicate with your visitors effectively</li>
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
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Website Design Process</h2>
                        <p class="wow fadeup-animation" data-wow-delay="0.3s">Empyreal Infotech's comprehensive Web design
                            strategy ensures a perfectly crafted professional site for your business that will boost your
                            digital presence.</p>
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb_md-50 mb_sm-40 wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-submit-your-idea.svg" alt="Website Design Process">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">1</span>
                            <span class="sub-title extra01-color">First step
                                process</span>
                            <h2 class="title">Submit your idea</h2>
                            <p class="subtitle-2"> Experts at Empyreal Infotech will collect all the details and grab
                                your ideas and references and will do the RND procedure over it and bring out something
                                creative from their side.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">2</span>
                            <span class="sub-title extra01-color">Second step
                                process</span>
                            <h2 class="title">Design</h2>
                            <p class="subtitle-2">In the second stage, all the creative ideas come to reality, where our
                                best designers try to grab the reports and pour them into your project designing and make it
                                a complete responsive websites design for you.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-design.svg" alt="Web Design Process">
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-design-review.svg" alt="Web Design Process">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">3</span>
                            <span class="sub-title extra01-color">Third step
                                process</span>
                            <h2 class="title">Revision</h2>
                            <p class="subtitle-2">Here where your role is to check the designs made by our designers and
                                give feedback to their work and guide them about if there is any revision required on the
                                project.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">4</span>
                            <span class="sub-title extra01-color">Fourth step
                                process</span>
                            <h2 class="title">Test</h2>
                            <p class="subtitle-2">In this stage, all the revised designed project is tested will all
                                aspect like responsiveness in all resolutions and other required aspects.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-testing-web-or-app.svg" alt="Website Design Process">
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-launch.svg" alt="Easy Website Design Process">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">5</span>
                            <span class="sub-title extra01-color">Fifth step
                                process</span>
                            <h2 class="title">Launch</h2>
                            <p class="subtitle-2">After all the complete testing is done We are good to go for the
                                successful launch for making the first step towards your online presence.</p>
                            <p>This is the process of our best web designing procedure wherein each step you are guided b
                                our professional experts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            your idea today itself </h2>
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
