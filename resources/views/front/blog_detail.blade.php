@extends('layouts.front.app')
@php
if(isset($title) && $title != '')
{
    $title=$title;
}else {
    $title='AdiRoha Solutions';
}

@endphp
@section('title', $title )
@section('meta_description', 'AdiRoha Solutions')
@section('meta_keywords', 'AdiRoha Solutions')
@section('meta_author', 'AdiRoha Solutions')
@section('meta')

@endsection

@section('page-style')
<style>
.img_box
    {
        height: 248px;
        width: 406px;
    }

    img
    {
        width: 100%;
        height: 100%;
    }
    .new-box-sec{width: 100%; height: 100%;}
    .new-box-sec img{width: 100%; height: auto;object-fit: cover;object-position: center;}
    .blog-details h1{
        padding: 114px 0 24px;
    }
    .description p
    {
        font-size: 20px;
        word-break: break-word;
    }
</style>
@endsection
@section('content')

<header id="header" class="headerblog">
</header> <!-- end of header -->
<!-- blogArtist -->
<section class="index-page-bg">
  <div class="blog-details">
    <div class="container">
      <div class="border-bottom border-bottom" data-aos="fade-up" data-aos-duration="1200">
          <h1 class="text-center">{{ isset($post->name) ? $post->name : '-'  }}</h1>
          <div class="row">
              <div class="col-lg-3 col-md-3">
                  <div class="new-box-sec">
                      <img src="{{ asset('uploads/posts/image/'.$post->image) }}" alt="{{ $post->image_alt }}">
                  </div>
              </div>
              <div class="col-lg-9 col-md-9  related-services-img course-text course-mobilescreen">
                  <h3>{{ isset($post->short_description) ? $post->short_description : '-' }}</h3>
                  <div class="description">{!! isset($post->description) ? $post->description : '-' !!}</div>
                  <span class="date-courses">{{ date('d/m/Y',strtotime($post->created_at)) }}</span>
              </div>
          </div>
      </div>
    </div>
    <section class="related-services" data-aos="fade-up" data-aos-duration="1200">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <h2 class="comman-title-home p-0">Related Articles</h2>
          </div>
        </div>
        <div class="row related-services-img course-text course-mobilescreen">
            @foreach ($category  as  $cat)
                @foreach ($cat->posts as $posts)
                @if($posts->id != $post->id)
                <a href="{{ route('front.blog_detail',$posts->id) }}">
                    <div class="col-md-12 row">
                <div class="col-lg-4 col-md-4 mb-5">
                    <div class="img_box">
                        <img src="{{ asset('uploads/posts/image/'.$posts->image) }}" alt="{{ $posts->image_alt }}">
                    </div>
                </div>
                  <div class="col-lg-8 col-md-8">
                    <h3 class="short_description">{!! $posts->short_description !!}</h3>
                    <span class="date-courses">{{ date('d/m/Y',strtotime($posts->created_at)) }}</span>
                  </div>
                </div>
                </a>
                  @endif
                @endforeach
            @endforeach
        </div>
      </div>
    </section>
  </div>
</section>
@endsection
@section('page-script')

@endsection
