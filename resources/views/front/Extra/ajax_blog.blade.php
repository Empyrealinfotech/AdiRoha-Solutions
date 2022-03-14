@if(isset($posts) && $posts->count() > 0)
	<div class="row">
		@foreach($posts as $jckey => $post)
			<div class="col-md-6">
                <div class="blog-post wow fadeup-animation" data-wow-delay="0.2s">
                	@php
	                    $image = (isset($post->image) && $post->image!='' && \File::exists(public_path('uploads/posts/image/'.$post->image)))?asset('uploads/posts/image/'.$post->image):asset('images/default-image.jpg');
	                @endphp
                    <div class="blog-post-box img-box">
                        <div class="img back-img" style="background-image: url('{{ $image }}');">
                        </div>
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
    <div class="row">
        <div class="col-12">
            <div class="pagination wow fadeup-animation" data-wow-delay="0.2s">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endif