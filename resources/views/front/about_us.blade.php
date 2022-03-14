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
@endsection
@section('content')
<section class="index-page-bg blog-sec">
    <section class="related-services" data-aos="fade-up" data-aos-duration="1200">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <h2 class="comman-title-home text-center">Coming soon</h2>
          </div>
        </div>
      </div>
    </section>
  </section>


@endsection
@section('page-script')

@endsection
