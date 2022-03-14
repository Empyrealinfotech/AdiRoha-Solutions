@extends('layouts.front.app')

@if(isset($post->meta_description) && $post->meta_description!='')
    @section('meta_description', $post->meta_description)
@else
    @section('meta_description', config('app.name', 'Laravel'))
@endif
@if(isset($post->meta_keywords) && $post->meta_keywords!='')
    @section('meta_keywords', $post->meta_keywords)
@else
    @section('meta_keywords', config('app.name', 'Laravel'))
@endif
@section('meta_author', config('app.name', 'Laravel'))
@section('meta')
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ (isset($post->meta_title) && $post->meta_title!='')?$post->meta_title:config('app.name', 'Laravel') }}">
@if(isset($post->image) && $post->image!='' && \File::exists(public_path('uploads/posts/image/'.$post->image)))
<meta property="og:image" content="{{ asset('uploads/posts/image/'.$post->image) }}">
@endif
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
<meta property="og:description" content="{{ (isset($post->meta_description) && $post->meta_description!='')?$post->meta_description:config('app.name', 'Laravel') }}">
@endsection
@if(isset($post->meta_title) && $post->meta_title!='')
    @section('title', $post->meta_title)
@else
    @section('title', config('app.name', 'Laravel'))
@endif

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
                            <span style="--i:1">b</span>
                            <span style="--i:2">l</span>
                            <span style="--i:3">o</span>
                            <span style="--i:4">g</span>
                            <span style="--i:5">d</span>
                            <span style="--i:6">e</span>
                            <span style="--i:7">t</span>
                            <span style="--i:8">a</span>
                            <span style="--i:9">i</span>
                            <span style="--i:10">l</span>
                        </div>
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.2s">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li>Blog Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <section class="main-blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-detail-box wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        {{--<div class="blog-detail-img back-img" style="background-image: url('{{ (isset($post->image) && $post->image!='' && \File::exists(public_path('uploads/posts/image/'.$post->image)))?asset('uploads/posts/image/'.$post->image):asset('assets/images/default-image.jpg') }}');" ></div>--}}
                        <img class="blog-detail-img back-img" src="{{ (isset($post->image) && $post->image!='' && \File::exists(public_path('uploads/posts/image/'.$post->image)))?asset('uploads/posts/image/'.$post->image):asset('assets/images/default-image.jpg') }}" alt="{{ (isset($post->image_alt) && $post->image_alt!='')?$post->image_alt:$post->name }}" title="{{ (isset($post->image_alt) && $post->image_alt!='')?$post->image_alt:$post->name }}">
                        <h1 class="h1-titlenew">{{ $post->name }}</h1>
                        <p>{{ $post->short_description }}</p>
                        {!! $post->description !!}
                        <div class="blog-post-footer">
                            <div class="blog-post-social">
                                <a href="https://www.facebook.com/empyreal.infotech/" title="Follow on Facebook"><i class="fab fa-facebook-f facebook"></i></a>
                                <a href="https://www.instagram.com/empyrealinfotech/" title="Follow on Instagram"><i class="fab fa-instagram instagram"></i></a>
                                <a href="https://twitter.com/empyreal_info?lang=en/" title="Follow on Twitter"><i class="fab fa-twitter twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    @if(isset($related_posts) && $related_posts->count() > 0)
                        <div class="related-blogs wow fadeup-animation " data-wow-duration="1s" data-wow-delay="0.2s ">
                            <h2 class="h2-title">Related Blogs</h2>
                            <div class="row">
                                @foreach($related_posts as $key => $post)
                                    @php
                                        $image = (isset($post->image) && $post->image!='' && \File::exists(public_path('uploads/posts/image/'.$post->image)))?asset('uploads/posts/image/'.$post->image):asset('images/default-image.jpg');
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="blog-post wow fadeup-animation" data-wow-delay="0.2s">
                                            <div class="blog-post-box img-box">
                                                <div class="img back-img" style="background-image: url('{{ $image }}');"></div>
                                            </div>
                                            <div class="blog-post-text">
                                                <div class="blog-date">
                                                    <span>{{ date('M d, Y', strtotime($post->created_at)) }}</span>
                                                </div>
                                                <h3 class="h3-title">{{ $post->name }}</h3>
                                                @if(isset($post->short_description) && $post->short_description!='')
                                                    <p>{{ strlen($post->short_description) > 150 ? substr($post->short_description,0,150)."..." : $post->short_description }}</p>
                                                @endif
                                                <a href="{{ route('front.blogs.detail',['slug' => $post->slug ]) }}" class="read-more" title="Read More">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
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
@endsection
@section('page-script')
@endsection
