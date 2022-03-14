<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        @if(isset($page_title))
    	<h4 class="page-title">{{(isset($page_title) ? $page_title :'')}}</h4>
        @endif
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        @if(isset($btnadd) && !empty($btnadd))
            @foreach($btnadd as $btncrum)
                @if(isset($btncrum['link']))
                    <a href="{{ $btncrum['link'] }}" class="btn btn-info pull-right m-l-20 waves-effect waves-light">
                        {{ $btncrum['title'] }}
                    </a>
                @endif
            @endforeach
        @endif
        @if(isset($breadcrumb) && !empty($breadcrumb))
        <ol class="breadcrumb">
    		@foreach($breadcrumb as $crum)
    			@if(isset($crum['link']))
		    		<li><a href="{{ $crum['link'] }}">{{ $crum['title'] }}</a></li>
    		   	@else
    		   		<li class="active">{{ $crum['title'] }}</li>
    		   	@endif
    	   	@endforeach
        </ol>
        @endif
    </div>
</div>
