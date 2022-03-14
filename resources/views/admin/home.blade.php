@extends('layouts.admin.app')
    @if(isset($page_title) && $page_title!='')
        @section('title', $page_title.' - '.config('app.name', 'Laravel'))
    @else
        @section('title', config('app.name', 'Laravel'))
    @endif
@section('breadcrumb')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Home </h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-10">Welcome to {{ config('app.name', 'Laravel') }}</h3>
            </div>
        </div>
    </div>
@endsection
