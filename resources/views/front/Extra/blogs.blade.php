@extends('layouts.front.app')
@section('meta_description', 'Find All latest Blogs on New web development and App development and SEO Technologies and Best tips, trick and solution to Boost up your online presence provided by Empyreal Infotech Geeks.')
@section('meta_keywords', 'latest blogs, latest web development blogs, app development blogs and article, seo technologies blogs')
@section('meta_author', 'Empyreal Infotech')
@section('meta')
<link rel="canonical" href="https://www.empyrealinfotech.com/blogs" />
<meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Blogs for Web, Mobile Apps and SEO Technologies | Empyreal Infotech">
    <meta property="og:image" content="https://www.empyrealinfotech.com/assets/images/empyreal-infotech-best-website-design-and-development-service-provider.jpg">
    <meta property="og:url" content="https://www.empyrealinfotech.com/blogs">
    <meta property="og:site_name" content="Empyreal Infotech">
    <meta property="og:description" content="Find All latest Blogs on New web development and App development and SEO Technologies and Best tips, trick and solution to Boost up your online presence provided by Empyreal Infotech Geeks.">
@endsection
@section('title', 'Blogs for Web, Mobile Apps and SEO Technologies | Empyreal Infotech')
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
            <img width="1920" height="189" src="{{ asset('assets/images/shape.svg') }}" alt="Shape">
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
                            <span style="--i:4">B</span>
                            <span style="--i:5">l</span>
                            <span style="--i:6">o</span>
                            <span style="--i:7">g</span>
                        </div>
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <!-- Blog Start -->
    <section class="page-blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-page-content">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        @if(isset($recent_posts) && $recent_posts->count() > 0)
                            <div class="sidebar-box recent-post wow left-animation" data-wow-delay="0.2s">
                                <div class="sub-title-box left">
                                    <p class="sub-title">Recent Post</p>
                                    <span class="line1"></span>
                                </div>
                                @foreach($recent_posts as $key => $post)
                                    <div class="recent-post-bx">
                                        @php
                                            $image = (isset($post->image) && $post->image!='' && \File::exists(public_path('uploads/posts/image/'.$post->image)))?asset('uploads/posts/image/'.$post->image):asset('images/default-image.jpg');
                                        @endphp
                                        <div class="recent-img back-img" style="background-image: url('{{ $image }}');"></div>
                                        <div class="recent-text">
                                            <p>
                                                <a href="{{ route('front.blogs.detail',['slug' => $post->slug ]) }}" title="{{ $post->name }}">{{ $post->name }}</a>
                                            </p>
                                            <span>{{ date('M d, Y', strtotime($post->created_at)) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if(isset($blog_categories) && $blog_categories->count() > 0)
                            <div class="sidebar-box category wow left-animation" data-wow-delay="0.2s">
                                <div class="sub-title-box left">
                                    <p class="sub-title">Category</p>
                                    <span class="line1"></span>
                                </div>
                                <ul>
                                    @foreach($blog_categories as $key => $category)
                                        <li><a href="{{ route('front.blogs.by.tag.cat',['slug' => $category->slug]) }}" title="{{ $category->name }}">{{ $category->name }} <span>{{ $category->posts->count() }}</span></a>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            getPostData();
            $(document).on('click', '.pagination a',function(event){
                event.preventDefault();
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                var myurl   = $(this).attr('href');
                var page    = $(this).attr('href').split('page=')[1];
                getPostData(page);
            });
        });
        function getPostData(page=1){
            $.ajax({
                type: "POST",
                url: "{!! route('front.blogs.data') !!}",
                data:{page:page},
                dataType: 'json',
                headers: {'X-CSRF-TOKEN': Laravel.csrfToken},
                beforeSend: function () {
                    $('.loader-box').fadeIn();
                }
            }).done(function( response ) {
                var body = $("html, body");
                body.stop().animate({scrollTop:0}, 500, 'swing', function() {
                    $(".blog-page-content").html(response.html);
                });
            }).fail(function(jqXHR, status, exception)  {
                if (jqXHR.status === 0) {
                    error = 'Not connected.\nPlease verify your network connection.';
                } else if (jqXHR.status == 404) {
                    error = 'The requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    error = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    error = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    error = 'Time out error.';
                } else if (exception === 'abort') {
                    error = 'Ajax request aborted.';
                } else {
                    error = 'Uncaught Error.\n' + jqXHR.responseText;
                }
            }).always(function() {
                setTimeout(function(){
                    $('.loader-box').fadeOut();
                },300);
            });
        }
    </script>
@endsection
