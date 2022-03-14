@extends('layouts.admin.app')
    @if(isset($page_title) && $page_title!='')
        @section('title', $page_title.' - '.config('app.name', 'Laravel'))
    @else
        @section('title', config('app.name', 'Laravel'))
    @endif
@section('page-style')
    <link href="{{ asset('admin/assets/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
    @include('layouts.admin.includes.breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form action="{{ route('control.panel.blog.tags.store') }}" name="addfrm" id="addfrm" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ isset($item->id) ? $item->id : '' }}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('name') is-invalid @enderror">
                                    <label class="control-label">Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old( 'name', isset($item->name) ? $item->name : '') }}" placeholder="Name Here" maxlength="150">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <?php /*
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('short_description') is-invalid @enderror">
                                    <label class="control-label">Short Description </label>
                                    <textarea class="form-control" name="short_description" id="short_description" placeholder="Short description Here" rows="3">{{old('short_description',isset($item->short_description) ? $item->short_description : '')}}</textarea>
                                    @error('short_description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('description') is-invalid @enderror">
                                    <label class="control-label">Description </label>
                                    <textarea class="form-control ckeditor" name="description" id="description" placeholder="Description" rows="3">{{old('description',isset($item->description) ? $item->description : '')}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                    $image = (isset($item->image) && $item->image!='' && \File::exists(public_path('uploads/blog_tags/image/'.$item->image)))?asset('uploads/blog_tags/image/'.$item->image):'';
                                ?>
                                @if($image!='')
                                    @php
                                        $imageExits = 'image-exist';
                                    @endphp
                                @else
                                    @php
                                        $imageExits = '';
                                    @endphp
                                @endif
                                <div class="form-group @error('image') is-invalid @enderror">
                                    <label class="control-label"> Image </label>
                                    <input type="file" class="form-control dropify {{ $imageExits }}" name="image" id="image" data-default-file="{{ $image }}" data-allowed-file-extensions="gif png jpg jpeg" data-max-file-size="5M" data-show-errors="true" data-errors-position="outside" data-show-remove="false">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @error('status') is-invalid @enderror">
                                    <label class="control-label">Status <span style="color: red">*</span></label>
                                    <div class="radio-list">
                                        <div>
                                            <label class="radio-inline p-0">
                                                <div class="radio radio-info">
                                                    @if(!(isset($item->id)))
                                                    <input type="radio" name="status" id="active-radio" value="1" checked>
                                                    @else
                                                    <input type="radio" name="status" id="active-radio" value="1" {!! (old('status', isset($item->status) ? $item->status : '')=='1')?'checked':'' !!}>
                                                    @endif
                                                    <label for="active-radio">Active</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline">
                                                <div class="radio radio-info">
                                                    @if(!(isset($item->id)))
                                                    <input type="radio" name="status" id="inactive-radio" value="0">
                                                    @else
                                                    <input type="radio" name="status" id="inactive-radio" value="0" {!! (old('status', isset($item->status) ? $item->status : '')=='0')?'checked':'' !!}>
                                                    @endif
                                                    <label for="inactive-radio">InActive</label>
                                                </div>
                                            </label>
                                        </div>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        */ ?>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <a href="{{ route('control.panel.blog.tags')}}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script defer src="{{ asset('admin/assets/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/plugins/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });
            $("#addfrm").validate({
                errorPlacement: function (error, element) {
                    if(element.hasClass('dropify')){
                        error.insertAfter(element.closest('div'));
                    } else if(element.hasClass('ckeditor')) {
                        error.appendTo(element.parent("div"));
                    } else if (element.attr("type") == "radio") {
                        $(element).parents('.radio-list').append(error)
                    } else {
                        error.insertAfter(element);
                    }
                },
                rules: {
                    name:{
                        required:true,
                        remote: {
                            url: '{!! route("control.panel.blog.tags.exists") !!}',
                            type: "POST",
                            data:{id:$("#id").val()},
                            headers: {'X-CSRF-TOKEN': Laravel.csrfToken}
                        }
                    },
                    // status:{
                    //     required:true
                    // }
                },
                messages:{
                    name:{
                        required:"The name field is required.",
                        remote:"The name is already in use!"
                    },
                    // status:{
                    //     required:"The status field is required."
                    // }
                },
                submitHandler: function(e) {
                    e.submit()
                }
            });
        });
    </script>
@endsection
