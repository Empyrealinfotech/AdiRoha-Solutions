@extends('layouts.admin.app')
    @if(isset($page_title) && $page_title!='')
        @section('title', $page_title.' - '.config('app.name', 'Laravel'))
    @else
        @section('title', config('app.name', 'Laravel'))
    @endif
@section('page-style')
    <link href="{{ asset('admin/assets/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/bower_components/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('breadcrumb')
    @include('layouts.admin.includes.breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form action="{{ route('control.panel.posts.store') }}" name="addfrm" id="addfrm" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ isset($item->id) ? $item->id : '' }}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group @error('blog_category_id') is-invalid @enderror">
                                    <label class="control-label">Category Name <span style="color: red">*</span></label>
                                    <select class="form-control" name="blog_category_id[]" id="blog_category_id" multiple>
                                        <option value="">Select Category Name</option>
                                        @if(isset($item->categories) && $item->categories->count() > 0)
                                            @foreach($item->categories->pluck('name','id')->toArray() as $cid => $cname)
                                            <option value="{{ $cid }}" selected>{{ $cname }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('blog_category_id')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('name') is-invalid @enderror">
                                    <label class="control-label">Post Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old( 'name', isset($item->name) ? $item->name : '') }}" placeholder="Name Here" maxlength="150">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('author') is-invalid @enderror">
                                    <label class="control-label">Author Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="author" id="author" value="{{ old( 'author', isset($item->author) ? $item->author : '') }}" placeholder="Author Name Here" maxlength="150">
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
                            <div class="col-md-6">
                                <div class="form-group @error('blog_tag_id') is-invalid @enderror">
                                    <label class="control-label">Tag Name <span style="color: red">*</span></label>
                                    <select class="form-control" name="blog_tag_id[]" id="blog_tag_id" multiple>
                                        <option value="">Select Tag Name</option>
                                        @if(isset($item->tags) && $item->tags->count() > 0)
                                            @foreach($item->tags->pluck('name','id')->toArray() as $tid => $tname)
                                            <option value="{{ $tid }}" selected>{{ $tname }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('blog_tag_id')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        */ ?>
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
                            <div class="col-md-12">
                                <?php
                                    $image = (isset($item->image) && $item->image!='' && \File::exists(public_path('uploads/posts/image/'.$item->image)))?asset('uploads/posts/image/'.$item->image):'';
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
                                    <label class="control-label"> Image <span style="color: red">*</span></label>
                                    <input type="file" class="form-control dropify {{ $imageExits }}" name="image" id="image" data-default-file="{{ $image }}" data-allowed-file-extensions="gif png jpg jpeg" data-max-file-size="5M" data-show-errors="true" data-errors-position="outside" data-show-remove="false">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('image_alt') is-invalid @enderror">
                                    <label class="control-label">Image Alt </label>
                                    <input type="text" class="form-control" name="image_alt" id="image_alt" value="{{ old( 'image_alt', isset($item->image_alt) ? $item->image_alt : '') }}" placeholder="Image Alt Here" maxlength="150">
                                    @error('image_alt')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('meta_title') is-invalid @enderror">
                                    <label class="control-label">Meta Title </label>
                                    <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ old( 'meta_title', isset($item->meta_title) ? $item->meta_title : '') }}" placeholder="Meta Title Here" maxlength="150">
                                    @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('meta_keywords') is-invalid @enderror">
                                    <label class="control-label">Meta Keywords </label>
                                    <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" value="{{ old( 'meta_keywords', isset($item->meta_keywords) ? $item->meta_keywords : '') }}" placeholder="Meta Keywords Here" maxlength="150">
                                    @error('meta_keywords')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('meta_description') is-invalid @enderror">
                                    <label class="control-label">Meta Description </label>
                                    <textarea class="form-control" name="meta_description" id="meta_description" placeholder="Meta description Here" rows="3">{{old('meta_description',isset($item->meta_description) ? $item->meta_description : '')}}</textarea>
                                    @error('meta_description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
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
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <a href="{{ route('control.panel.posts')}}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script defer src="{{ asset('admin/assets/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/plugins/bower_components/select2/select2.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/plugins/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
            var categorySelect  = $("#blog_category_id");
            categorySelect.select2({
                width:'100%',
                placeholder: "Select Category Name",
                ajax:{
                    url: "{{ route('control.panel.ajax.blog.categories.list') }}",
                    dataType: 'json',
                    headers: {'X-CSRF-TOKEN': Laravel.csrfToken},
                    type:"POST",
                    data: function(term) {
                        return {
                            search:term.term
                        };
                    },
                    processResults: function(data, page) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.text,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            }).on('select2:select', function (e) {
                var data        = e.params.data;
                $(this).valid();
            });
            <?php /*
            var tagSelect  = $("#blog_tag_id");
            tagSelect.select2({
                width:'100%',
                placeholder: "Select Tag Name",
                ajax:{
                    url: "{{ route('control.panel.ajax.blog.tags.list') }}",
                    dataType: 'json',
                    headers: {'X-CSRF-TOKEN': Laravel.csrfToken},
                    type:"POST",
                    data: function(term) {
                        return {
                            search:term.term
                        };
                    },
                    processResults: function(data, page) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.text,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            }).on('select2:select', function (e) {
                var data        = e.params.data;
                $(this).valid();
            });
            */ ?>
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });
            $("#addfrm").validate({
                ignore: [],
                errorElement: 'span',
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('is-invalid');
                },
                errorPlacement: function (error, element) {
                    if(element.hasClass('dropify')){
                        error.insertAfter(element.closest('div'));
                    } else if(element.hasClass('select2-hidden-accessible')) {
                        error.insertAfter(element.next('span'));
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
                            url: '{!! route("control.panel.posts.exists") !!}',
                            type: "POST",
                            data:{id:$("#id").val()},
                            headers: {'X-CSRF-TOKEN': Laravel.csrfToken}
                        }
                    },
                    author:{
                        required:true
                    },
                    "blog_category_id[]":{
                        required:true
                    },
                    // "blog_tag_id[]":{
                    //     required:true
                    // },
                    photo:{
                        required: function(element) {
                            if($(element).hasClass("photo-exist")) {
                                return false;
                            } else {
                                return true;
                            }
                        }
                    },
                    status:{
                        required:true
                    }
                },
                messages:{
                    name:{
                        required:"The name field is required.",
                        remote:"The name is already in use!"
                    },
                    author:{
                        required:"The author name field is required."
                    },
                    "blog_category_id[]":{
                        required:"The category name field is required."
                    },
                    // "blog_tag_id[]":{
                    //     required:"The tag name field is required."
                    // },
                    photo:{
                        required:"The photo field is required."
                    },
                    status:{
                        required:"The status field is required."
                    }
                },
                submitHandler: function(e) {
                    e.submit()
                }
            });
        });
    </script>
@endsection
