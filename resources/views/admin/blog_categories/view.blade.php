@extends('layouts.admin.app')
    @if(isset($page_title) && $page_title!='')
        @section('title', $page_title.' - '.config('app.name', 'Laravel'))
    @else
        @section('title', config('app.name', 'Laravel'))
    @endif
@section('page-style')
    <link href="{{ asset('admin/assets/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
    <style type="text/css">
    	.th-width{
    		width: 25% !important;
    	}
    </style>
@endsection
@section('breadcrumb')
    @include('layouts.admin.includes.breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th class="th-width">Name</th>
                            <td>{{(isset($item->name) ? $item->name :'-')}}</td>
                        </tr>
                        <?php /*
                        <tr>
                            <th class="th-width">Short Desciption</th>
                            <td>{{(isset($item->short_description) ? $item->short_description :'-')}}</td>
                        </tr>
                        <tr>
                            <th class="th-width">Desciption</th>
                            <td>{!! (isset($item->description) ? $item->description :'-') !!}</td>
                        </tr>
                        <tr>
                            <th class="th-width">Image</th>
                            <td>
                                <?php
                                    $image = (isset($item->image) && $item->image!='' && \File::exists(public_path('uploads/blog_categories/image/'.$item->image)))?asset('uploads/blog_categories/image/'.$item->image):'';
                                ?>
                                @if($image!='')
                                <a class="image-popup-vertical-fit" href="{{ $image }}">
                                    <img src="{{ $image }}" width="100px" height="100px">
                                </a>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="th-width">Status</th>
                            <td>{{(isset($item->status) ? ($item->status=='1')?'Active':'Inactive' :'-')}}</td>
                        </tr>
                        */ ?>
                        <tr>
                            <th class="th-width">Created At</th>
                            <td>{{(isset($item->created_at) ? date('d-m-Y',strtotime($item->created_at)) :'-')}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script defer src="{{ asset('admin/assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		$('.image-popup-vertical-fit').magnificPopup({
    			type: 'image',
    			closeOnContentClick: true,
    			mainClass: 'mfp-img-mobile',
    			image: {
    				verticalFit: true
    			}
    		});
    	});
    </script>
@endsection
