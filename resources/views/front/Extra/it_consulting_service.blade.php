@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is a Kansas and NJ-based IT consulting company with 7 years of experience. Our team is happy to help you by providing IT Consulting Services for your business.')
@section('meta_keywords', 'IT consulting service, IT consulting company, IT consulting service in Kansas, IT consulting service in NJ, IT consulting company in NJ ')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/it-consulting-service" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="IT Consulting Service in NJ, Kansas | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-best-website-design-and-development-service-provider.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/it-consulting-service">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is a Kansas and NJ-based IT consulting company with 7 years of experience. Our team is happy to help you by providing IT Consulting Services for your business.">
@endsection
@section('title', 'IT Consulting Service in NJ, Kansas | Empyreal Infotech')
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
                            <span style="--i:1">i</span>
                            <span style="--i:2">t</span>
                            <span style="--i:3"></span>
                            <span style="--i:4">c</span>
                            <span style="--i:5">o</span>
                            <span style="--i:6">n</span>
                            <span style="--i:7">s</span>
                            <span style="--i:8">u</span>
                            <span style="--i:9">l</span>
                            <span style="--i:10">t</span>
                            <span style="--i:11">a</span>
                            <span style="--i:12">n</span>
                            <span style="--i:13">t</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Website Design</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>It Consultant</li>
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
                        <img width="700" height="636" src="assets/images/illustration/complete-It-consultance.svg"
                            alt="About">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">IT Consulting Services and Strategies Give You a Winsome Advantage</h2>
                        <div class="about-text">
                            <p>As one of the leading information technology corporations, Empyreal Infotech offers tailored
                                IT consultancy services and IT support to associations of any size. With empyreal infotech
                                as your companion, you can lead your organization ahead with favorably effective IT
                                techniques and execute innovative solutions with our IT consultancy services.</p>
                            <p>Like many of our customers, information technology is assumably not your root business.
                                Trying to crack all your IT challenges internally can become expensive and preoccupying
                                while other aspects of your business could suffer. Leveraging acquainted IT consulting firms
                                like Empyreal Infotech helps your company remain secure and efficient without seizing up
                                valuable work time. As one of the top IT consulting firms, empyreal infotech delegates your
                                business to start triumphing at IT.</p>
                            <p>Our strategic IT consulting will help you automate and digitalize procedures, optimize the
                                technical portfolio, and execute the latest technologies.</p>
                        </div>
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
                                <p class="sub-title">Services</p>
                                <span class="line1"></span>
                            </div>
                            <h2 class="h2-title">Why Empyreal infotech's IT Consulting Services?</h2>
                            <div class="about-text">
                                <p>When initiating a new business or creating a new product in the empires of the modern
                                    digital market, it is important to think through all the factors that are involved in
                                    the operation. Nowadays, you need people in your team who are experts, have the required
                                    expertise, and can provide you with a business approach. </p>
                                <p>It is essential as taking supervision in the digital modification of the company is not
                                    easy and brings years of understanding, deep technical skills, and knowledge of the
                                    modern market. For this reason, our company offers consulting services that help
                                    businesses automate processes and operations within the company, use the latest
                                    technologies to get the most advantages, and optimize their technology portfolio. </p>
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
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">OUR IT CONSULTING PROCESS</h2>
                        <p>For more than 7 years Empyreal Infotech has been helping associations of different scales to
                            enhance and modernize their IT techniques. This has allowed us to draft an influential strategy
                            for IT consulting that allows us to deliver the best results in less time duration.</p>
                    </div>
                </div>
            </div>
            <div class="axil-working-process mb_md-50 mb_sm-40 wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-analysis.svg" alt="Process Images">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">1</span>
                            <span class="sub-title extra04-color">First step
                                process</span>
                            <h2 class="title">ANALYSIS</h2>
                            <p class="subtitle-2">our experts will analyze your business structure and check how the
                                transformation can be done in a digitized way.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">2</span>
                            <span class="sub-title extra05-color">Second step
                                process</span>
                            <h2 class="title">STRATEGY</h2>
                            <p class="subtitle-2">everything that's been analyzed will be used to draft a roadmap to
                                build a complete digitized solution for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-strategy.svg" alt="Process Images">
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-web-development.svg" alt="Process Images">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">3</span>
                            <span class="sub-title extra06-color">Third step
                                process</span>
                            <h2 class="title">DEVELOPMENT</h2>
                            <p class="subtitle-2">Wole system is been made according to the drafted roadmap and using
                                the latest trends and tech stack PERFORMANCE.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="content order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">4</span>
                            <span class="sub-title extra04-color">Fourth step
                                process</span>
                            <h2 class="title">PERFORMANCE</h2>
                            <p class="subtitle-2">after the development stage, the performance of the system is checked
                                and made it a high-performance system that can lead your business towards success without
                                any indecisiveness.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail order-1 order-lg-2">
                    <div class="image paralax-image"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img src="assets/images/process/process-step-for-performance-check.svg" alt="Process Images">
                    </div>
                </div>
            </div>
            <div class="axil-working-process wow fadeup-animation" data-wow-delay="0.3s">
                <div class="thumbnail">
                    <div class="image paralax-image">
                        <img src="assets/images/process/process-step-for-Improvements.svg" alt="Process Images">
                    </div>
                </div>
                <div class="content">
                    <div class="inner">
                        <div class="section-title">
                            <span class="process-step-number">5</span>
                            <span class="sub-title extra06-color">Fifth step
                                process</span>
                            <h2 class="title">IMPROVEMENTS</h2>
                            <p class="subtitle-2">If any improvisation is needed after performance chek that is
                                improvised and made a high-performing system for your business ready to be launched.</p>
                        </div>
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
                <div class="col-xl-6 col-lg-7">
                    <div class="newsletter-content">
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Stay Always In Touch</h2>
                        <p class="wow fadeup-animation" data-wow-delay="0.4s">This is the process of our best web designing
                            procedure wherein each step you are guided by our professional experts. So what are you waiting
                            for submit your idea today itself, We are just one click away!</p>
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
                                    <span class="sub-title">{{ $portfolio->name }}</span>
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
