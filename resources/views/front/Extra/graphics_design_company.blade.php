@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is a creative graphic design company in Kansas, NJ. Our graphic design team are expert at creating high quality graphics and all. Contact Now!')
@section('meta_keywords', 'graphic design company in Kansas, graphic design company in NJ, creative graphic design company in Kansas, ')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/graphics-design-company" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Creative Graphic Design Company in Kansas, NJ | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-creative-graphic-design-company.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/graphics-design-company">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is a creative graphic design company in Kansas, NJ. Our graphic design team are expert at creating high quality graphics and all. Contact Now!">
@endsection
@section('title', 'Creative Graphic Design Company in Kansas, NJ | Empyreal Infotech')
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
                            <span style="--i:1">G</span>
                            <span style="--i:2">r</span>
                            <span style="--i:3">a</span>
                            <span style="--i:4">p</span>
                            <span style="--i:5">h</span>
                            <span style="--i:6">i</span>
                            <span style="--i:7">c</span>
                            <span style="--i:8">s</span>
                            <span></span>
                            <span></span>
                            <span style="--i:9">d</span>
                            <span style="--i:10">e</span>
                            <span style="--i:11">s</span>
                            <span style="--i:12">i</span>
                            <span style="--i:13">g</span>
                            <span style="--i:14">n</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Website Design</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>Graphics & Logo Design</li>
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
                        <img width="700" height="636"
                            src="assets/images/illustration/creative-and-artistic-graphic-design-for-your-business.svg"
                            alt="About">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">Graphic Design</h2>
                        <div class="about-text">
                            <p>At Empyreal infotech we have passionate & creative designers, we offer outstanding and
                                attention-catching, and creative out-of-the-box visuals for logos, brochures, banners,
                                flyers, business cards, e-books, and many more.</p>
                            <p>Our graphic designers can develop a great impression of your business ideas graphically
                                represented on your customers. With a complete mixture of pure professional skills and
                                stunning creativity, our expert designers can make a bright portfolio for your business.</p>
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
                            <h2 class="h2-title">Benefits of hiring us for your Designing job </h2>
                            <div class="about-text">
                                <p></p>
                                <ul>
                                    <li>Unique and professional graphic designs.</li>
                                    <li>Affordable and feasible price.</li>
                                    <li>Sleek communication.</li>
                                    <li>Regular follow-ups and revision for design approval.</li>
                                    <li>Deliver your design in a timely manner.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
    <!-- About Us Start -->
    <section class="main-about-us">
        <div class="container">
            <div class="row align-items-center" id="about-us">
                <div class="col-lg-6 col-md-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Service Offer</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">Graphic Design Services that empyreal infotech Offer</h2>
                        <div class="about-text">
                            <p>At Empyreal infotech we have passionate & creative designers, we offer outstanding and
                                attention-catching, and creative out-of-the-box visuals for logos, brochures, banners,
                                flyers, business cards, e-books, and many more.</p>
                            <ul>
                                <li>Logo Design & Brand design</li>
                                <li>Social Media Design</li>
                                <li>Website UI & UX Design</li>
                                <li>Mobile UI & UX Design</li>
                                <li>Presentation Design</li>
                            </ul>
                        </div>
                        <!-- <a href="about-us.php" class="sec-btn gradient" title="Read More"><span>Read More</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow right-animation" data-wow-delay="0.2s">
                    <div class="">
                        <img width="700" height="636" src="assets/images/illustration/services_offer.jpg" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!-- Tools that we use -->
    <section class="main-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title ">
                        <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeup-animation;">
                            <p class="sub-title">Design Tools</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">Graphics
                            designs tools that we use</h2>
                    </div>
                </div>
            </div>
            <div class="row emp-service-box-list">
                <div class="col-lg-3  col-md-4 col-sm-6 pt-4">
                    <div class="service-box-list">
                        <div class="service-box wow fadeup-animation" data-wow-delay="0.2s">
                            <div class="service-icon">
                                <img width="112" height="114" class="bg" src="assets/images/custom-shape.svg"
                                    alt="shape">
                                <span class="icon">
                                    <img width="40" height="40"
                                        src="assets/images/icons/top-rated-creative-graphic-design/creative-adobe-photoshop-design.svg"
                                        alt="Graphic Design">
                                </span>
                            </div>
                            <h3 class="h3-title">Adobe Photoshop </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-6 pt-4">
                    <div class="service-box-list">
                        <div class="service-box wow fadeup-animation" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <img width="112" height="114" class="bg" src="assets/images/custom-shape.svg"
                                    alt="shape">
                                <span class="icon">
                                    <img width="41" height="40"
                                        src="assets/images/icons/top-rated-creative-graphic-design/coreldraw-professional-design.svg"
                                        alt="Web Design">
                                </span>
                            </div>
                            <h3 class="h3-title">Adobe Corealdraw</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-6 pt-4">
                    <div class="service-box-list">
                        <div class="service-box wow fadeup-animation" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <img width="112" height="114" class="bg" src="assets/images/custom-shape.svg"
                                    alt="shape">
                                <span class="icon">
                                    <img width="41" height="40"
                                        src="assets/images/icons/top-rated-creative-graphic-design/wow-indesign-design-maker.svg"
                                        alt="Web Design">
                                </span>
                            </div>
                            <h3 class="h3-title">Adobe Indesign</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-6 pt-4">
                    <div class="service-box-list">
                        <div class="service-box wow fadeup-animation" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <img width="112" height="114" class="bg" src="assets/images/custom-shape.svg"
                                    alt="shape">
                                <span class="icon">
                                    <img width="41" height="40"
                                        src="assets/images/icons/top-rated-creative-graphic-design/top-rated-canva-designer.svg"
                                        alt="Web Design">
                                </span>
                            </div>
                            <h3 class="h3-title">Canva</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-6 pt-4">
                    <div class="service-box-list">
                        <div class="service-box wow fadeup-animation" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <img width="112" height="114" class="bg" src="assets/images/custom-shape.svg"
                                    alt="shape">
                                <span class="icon">
                                    <img width="41" height="40"
                                        src="assets/images/icons/top-rated-creative-graphic-design/creative-and-expirinced-adobe-XD-designer.svg"
                                        alt="Web Design">
                                </span>
                            </div>
                            <h3 class="h3-title">Adobe XD</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-6 pt-4">
                    <div class="service-box-list">
                        <div class="service-box wow fadeup-animation" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <img width="112" height="114" class="bg" src="assets/images/custom-shape.svg"
                                    alt="shape">
                                <span class="icon">
                                    <img width="41" height="40"
                                        src="assets/images/icons/top-rated-creative-graphic-design/creative-adobe-illustrator-designer-and-illustrator.svg"
                                        alt="Web Design">
                                </span>
                            </div>
                            <h3 class="h3-title">Adobe Illustrator </h3>
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
