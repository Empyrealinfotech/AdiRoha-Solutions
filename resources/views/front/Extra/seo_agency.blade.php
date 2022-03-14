@extends('layouts.front.app')
@section('meta_description', 'Empyreal Infotech is best SEO Agency in New Jersey, Kansas. We are SEO specialists that focus on driving results for your business. Contact Now!')
@section('meta_keywords', 'new jersey seo company, nj seo agency, best seo company in nj, seo agency in Kansas, seo agency Kansas, seo company Kansas, best seo company Kansas')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/seo-agency" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SEO Agency in Kansas, NJ | New Jersey Seo Company | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/intro-image/empyreal-infotech-effective-search-engine-optimization.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/seo-agency">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Empyreal Infotech is best SEO Agency in New Jersey, Kansas. We are SEO specialists that focus on driving results for your business. Contact Now! ">
@endsection
@section('title', 'SEO Agency in Kansas, NJ | New Jersey Seo Company | Empyreal Infotech')
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
                            <span style="--i:1">s</span>
                            <span style="--i:2">e</span>
                            <span style="--i:3">o</span>
                            <span></span>
                            <span></span>
                            <span style="--i:4">s</span>
                            <span style="--i:5">e</span>
                            <span style="--i:6">r</span>
                            <span style="--i:7">v</span>
                            <span style="--i:8">i</span>
                            <span style="--i:9">c</span>
                            <span style="--i:10">e</span>
                            <span style="--i:10">s</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Website Design</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>SEO Services</li>
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
                            src="assets/images/illustration/highest-seo-ranking-for-your-business.svg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Services</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">SEO SERVICE</h2>
                        <div class="about-text">
                            <p>A majority of the people begin their session on the internet by 'searching' something. Search
                                is what creates organic, real traffic on the websites. With the right approach pertaining to
                                SEO, your business could land up in the very initial search pages of popular search engines
                                such as Google or Bing.</p>
                            <div class="emp-skils">
                                <div class="emp-skils-left">
                                    <p><img src="assets/images/icons/best-search-engine-optimization-techniques/effective-content-writing.svg"
                                            alt="Top Rated PHP developers">Effective Content Writing</p>
                                    <p><img src="assets/images/icons/best-search-engine-optimization-techniques/hi-tech-seo-optimization-techniques.svg"
                                            alt="Top Rated Codeignitor developers">Hi-Tech SEO Optimizations</p>
                                    <p><img src="assets/images/icons/best-search-engine-optimization-techniques/link-building-seo-strategies.svg"
                                            alt="Laravel pro developers">Link Building</p>
                                </div>
                                <div class="emp-skils-right">
                                    <p><img src="assets/images/icons/best-search-engine-optimization-techniques/off-page-seo-techniques.svg"
                                            alt="Top Rated Node.js developers">Off-page SEO</p>
                                    <p><img src="assets/images/icons/best-search-engine-optimization-techniques/reliability-check-in-seo-techniques.svg"
                                            alt="Top Rated Wordpress developers">Reliability Check </p>
                                    <p><img src="assets/images/icons/best-search-engine-optimization-techniques/social-media-marketing-strategies.svg"
                                            alt="Top Rated React.js developers">social media marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <section class="main-contact emp-contact pt-0">
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
                            <h2 class="h2-title">Why Did You End Up On The First Page?</h2>
                            <div class="about-text  wow fadeup-animation" data-wow-delay="0.3s">
                                <p>Finding your company or website on Google Search builds trust with potential
                                    customers.But what if your company is on the third page of Google search results?</p>
                                <p>Decisions about which business or shop to patronize are made far too quickly.</p>
                                <p>Your customers are unlikely to go all the way to the third page before deciding on a
                                    store.</p>
                                <p>It's either you or someone else - whoever fights it all the way to the first page.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-contact pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s">
                            <p class="sub-title">methodology</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s">Why Choose Empyreal Infotech for SEO
                            ?</h2>
                    </div>
                    <p class="text-center wow fadeup-animation" data-wow-delay="0.3s">We boost your business with our search
                        marketing Methoods. What is term Search Marketing? Search Marketing in SEO is to promot web pages or
                        web portals on the search engines like Google, Yahoo and Bing through different ways. The main
                        objective of it is to Reach maximam numbers or Useful visitors to increase the sales and leads for
                        the business.</p>

                    <p class="text-center wow fadeup-animation" data-wow-delay="0.3s">Search Marketing can be of different
                        types and we promote your products and services through all diffrent ways which includes search
                        engine marketing through Search Engine Optimization, Google Adwords, Content Marketing, Guest
                        Posting, YouTube Channel Optimization, Podcast Submissions, Social Media Marketing etc.</p>

                    <p class="text-center wow fadeup-animation" data-wow-delay="0.3s">With our SEO services you get a strong
                        and integrated approach that incorporates content marketing, research, technical SEO, social media,
                        paid methods, and other parts of online marketing can give you an edge over the competition.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-about-us">
        <div class="container">
            <div class="row align-items-center" id="about-us">
                <div class="col-lg-6 wow right-animation" data-wow-delay="0.2s">
                    <div class="about-content ">
                        <div class="sub-title-box left">
                            <p class="sub-title">Offers</p>
                            <span class="line1"></span>
                        </div>
                        <h2 class="h2-title">HERE'S WHAT WE PROVIDE</h2>
                        <div class="about-text">
                            <ul>
                                <li>COMPETITIVE SEO</li>
                                <li>GEO-TARGETING AND LOCAL SEO</li>
                                <li>ORGANIC SEO TECHNIQUES</li>
                                <li>LATEST SEO STANDARDS</li>
                            </ul>
                        </div>
                        <!-- <a href="about-us.php#contact-us" class="sec-btn gradient" title="Contact Us"><span>Contact Us</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                    <div class="">
                        <img width="700" height="636"
                            src="assets/images/illustration/about-best-website-development-company-in-india.svg"
                            alt="About">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-contact d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeup-animation;">
                            <p class="sub-title">offer</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">HERE'S
                            WHAT WE PROVIDE</h2>
                    </div>
                </div>
            </div>
            <div class="detail-comment-box odd wow fadeup-animation" data-wow-delay="0.3s">
                <div class="detail-comment-text">
                    <h4 class="detail-comment-title">1) Warlike SEO :</h4>
                    <p>Giving your company a competitive advantage by thoroughly optimizing your websites. </p>
                    <p>SEO experts with years of experience handcrafting SEO strategies for your company.</p>
                    <p>To provide effective visibility to your website, use the most competitive SEO and keyword tools.</p>
                </div>
            </div>
            <div class="detail-comment-box even wow fadeup-animation" data-wow-delay="0.3s">
                <div class="detail-comment-text">
                    <h4 class="detail-comment-title">2) Situlas SEO and Geographic intent :</h4>
                    <p>Aids in the promotion of your business to specific areas or locations.</p>
                    <p>Local SEO services are designed for regional or local businesses that need location-specific
                        visibility.</p>
                    <p>Find the best audience for your websites by using a variety of filters such as age, requirements,
                        location, or preference.</p>
                </div>
            </div>
            <div class="detail-comment-box odd wow fadeup-animation" data-wow-delay="0.3s">
                <div class="detail-comment-text">
                    <h4 class="detail-comment-title">3) Procedures for organic SEO :</h4>
                    <p>We take a results-oriented approach that genuinely raises your company's visibility among the right
                        people.</p>
                    <p>Only white hat SEO techniques are used to improve the quality and visibility of your company's
                        website without jeopardizing its reputation.</p>
                    <p>Use official tools that strictly prohibit the use of Black Hat SEO techniques that could harm your
                        website's rankings and negatively impact your business.</p>
                </div>
            </div>
            <div class="detail-comment-box even wow fadeup-animation" data-wow-delay="0.3s">
                <div class="detail-comment-text">
                    <h4 class="detail-comment-title">4) Morden SEO standards :</h4>
                    <p>Search engine algorithms and ranking parameters are constantly changing. </p>
                    <p>With the help of powerful SEO tools such as Google Analytics, Search Console, we tend to provide your
                        company only the latest standards of search engine optimization.</p>
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
                        <p class="wow fadeup-animation" data-wow-delay="0.4s">Why are you waiting for to get traffic on
                            your site!? Get the best leads from search results. we are just one click away!</p>
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
    <!-- Features End -->
@endsection
@section('page-script')
@endsection
