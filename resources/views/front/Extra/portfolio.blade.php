@extends('layouts.front.app')
@section('meta_description', 'Check out our Excellent work portfolio. We have served many clients across globe in different industry with web development, mobile app development, e-commmerce, Graphic design, SEO, and all kind of IT services.')
@section('meta_keywords', 'web design portfolio, web development portfolio, mobile app portfolio, graphic design portfolio, seo portfolio')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/portfolio" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Recent Work Portfolio | Web, Mobile Apps and SEO Company in NJ and Kansas">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/empyreal-infotech-best-website-design-and-development-service-provider.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/portfolio">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Check out our Excellent work portfolio. We have served many clients across globe in different industry with web development, mobile app development, e-commmerce, Graphic design, SEO, and all kind of IT services.">
@endsection
@section('title', 'Recent Work Portfolio | Web, Mobile Apps and SEO Company in NJ and Kansas')
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
                            <span style="--i:1">o</span>
                            <span style="--i:2">u</span>
                            <span style="--i:3">r</span>
                            <span></span>
                            <span style="--i:4">p</span>
                            <span style="--i:5">o</span>
                            <span style="--i:6">r</span>
                            <span style="--i:7">t</span>
                            <span style="--i:8">f</span>
                            <span style="--i:9">o</span>
                            <span style="--i:10">l</span>
                            <span style="--i:11">i</span>
                            <span style="--i:12">o</span>
                        </div>
                        <!-- <h1 class="h1-title wow fadeup-animation">Our Portfolio</h1> -->
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="main-services emp-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title ">
                        <div class="sub-title-box wow fadeup-animation" data-wow-delay="0.2s" id="team"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeup-animation;">
                            <p class="sub-title">Portfolio</p>
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                        <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">Our
                            Success Stories</h2>
                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            @if(isset($categories) && $categories->count() > 0)
                <ul class="nav nav-tabs wow fadeup-animation" role="tablist" data-wow-delay="0.3s" id="tabul">
                    @foreach($categories as $skey => $category)
                        <li role="presentation">
                            <a data-target="#tab-{{ \Str::slug($category->name, '-') }}" href="javascript:void(0);" aria-controls="profile" role="tab" data-toggle="tab" data-id="{{ $category->id }}" data-slug="{{ \Str::slug($category->name, '-') }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- Tab panes -->
                <div class="tab-content emp-tab-new">
                    @foreach($categories as $skey => $category)
                        <div role="tabpanel" class="tab-pane wow fadeup-animation" id="tab-{{ \Str::slug($category->name, '-') }}" data-wow-delay="0.3s">
                            @php
                                $lazy = $category->lazy()->limit(($category->name=='Graphics')?3:2)->get();
                            @endphp
                            @if($category->name=='Graphics')
                                <div class="row">
                                    @if($lazy->count() > 0)
                                        @foreach($lazy as $skey => $portfolio)
                                            @if(isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))
                                                @php
                                                    $style      = '';
                                                    if(isset($portfolio->color_code) && $portfolio->color_code!=''){
                                                        $style  = "style='background-color:".$portfolio->color_code."'";
                                                    }
                                                @endphp
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="emp-content-main-sec graphics-portfolio-img" {!! $style !!}>
                                                        <img src="{{ (isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))?asset('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png'):asset('assets/images/default-image.jpg') }}" alt="{{ isset($portfolio->name)?$portfolio->name:''}}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            @else
                                @if($lazy->count() > 0)
                                    @foreach($lazy as $skey => $portfolio)
                                        @if(isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))
                                            @php
                                                $style      = '';
                                                if(isset($portfolio->color_code) && $portfolio->color_code!=''){
                                                    $style  = "style='background-color:".$portfolio->color_code."'";
                                                }
                                            @endphp
                                            <div class="emp-content-main-sec wow fadeup-animation" data-wow-delay="0.3s" {!! $style !!}>
                                                <div class="content-mask">
                                                    @if(isset($portfolio->name) && $portfolio->name!='')
                                                    <h5>{{ $portfolio->name }}</h5>
                                                    @endif
                                                    @if(isset($portfolio->short_description) && $portfolio->short_description!='')
                                                    <h3>{!! $portfolio->short_description !!}</h3>
                                                    @endif
                                                    @if(isset($portfolio->description) && $portfolio->description!='')
                                                    <p>{!! $portfolio->description !!}</p>
                                                    @endif
                                                </div>
                                                <div class="emp-content-project-img">
                                                    <img src="{{ (isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))?asset('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png'):asset('assets/images/default-image.jpg') }}" alt="{{ isset($portfolio->name)?$portfolio->name:''}}">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endif
                            <div id="{{ \Str::slug($category->name, '-') }}">

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <!-- Get Started Start -->
    <section class="main-get-started">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="get-started-box wow fadeup-animation" data-wow-delay="0.2s">
                        <div class="get-started-text emp-get-started-text">
                            <h2 class="h2-title">Ready To Get Started?</h2>
                            <p>Tell us your problem and get the services from you</p>
                        </div>
                        <div class="get-started-btn">
                            <a href="{{ route('front.contact.us') }}" class="sec-btn gradient"
                                title="Get Started"><span>Get Started</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Started End -->
@endsection
@section('page-script')
<script defer src="{{ asset('assets/js/recliner.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabul a:first').trigger("click");
    });
    $('#tabul a').on('show.bs.tab', function(){
        var that    = $(this);
        nextTabPaneView(that);
    });
    $('#tabul a').on('hide.bs.tab', function(e){
        var that    = $(this);
        var slug    = that.data('slug');
        var href    = that.attr("data-target");
        var hash    = href.substr(href.indexOf("#"));
        $('#'+slug).html('');
    });
    $(document).on('lazyshow', '.lazy', function() {
        $(".lazy:not(.lazy-loaded)").recliner({
            attrib: "data-src", // selector for attribute containing the media src
            throttle: 300,      // millisecond interval at which to process events
            threshold: 100,     // scroll distance from element before its loaded
            printable: true,    // be printer friendly and show all elements on document print
            live: true          // auto bind lazy loading to ajax loaded elements
        });
    });
    function nextTabPaneView(that,page=1){
        var id      = that.data('id');
        var slug    = that.data('slug');
        var href    = that.attr("data-target");
        var hash    = href.substr(href.indexOf("#"));
        $('#'+slug).html('');
        var url     = '{{ route("front.portfolio.data",[":id",":page"]) }}';
        url1        = url.replace(':id', id);
        url2        = url1.replace(':page', page);
        if(url2!=''){
            $('#'+slug).html('<div class="lazy" data-src='+url2+'></div>');
            $(".lazy").recliner({
                attrib: "data-src", // selector for attribute containing the media src
                throttle: 300,      // millisecond interval at which to process events
                threshold: 100,     // scroll distance from element before its loaded
                printable: true,    // be printer friendly and show all elements on document print
                live: true          // auto bind lazy loading to ajax loaded elements
            });
        }
    }
</script>
@endsection
