@if($category->name=='Graphics')
    <div class="row">
        @foreach($portfolios as $skey => $portfolio)
            @php
                $style      = '';
                if(isset($portfolio->color_code) && $portfolio->color_code!=''){
                    $style  = "style='background-color:".$portfolio->color_code."'";
                }
            @endphp
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emp-content-main-sec graphics-portfolio-img" {!! $style !!}>
                    <img src="{{ (isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))?asset('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png'):asset('assets/images/default-image.jpg') }}" alt="{{ isset($portfolio->name)?$portfolio->name:''}}">
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="row">
        @foreach($portfolios as $skey => $portfolio)
            @php
                $style          = '';
                if(isset($portfolio->color_code) && $portfolio->color_code!=''){
                    $style      = "style='background-color:".$portfolio->color_code."'";
                }
            @endphp
            <div class="col-12">
                <div class="emp-content-main-sec wow fadeup-animation" data-wow-delay="0.3s" {!! $style !!}>
                    <div class="content-mask">
                        @if(isset($portfolio->name) && $portfolio->name!='')
                        <h5>{{ $portfolio->name }}</h5>
                        @endif
                        @if(isset($portfolio->short_description) && $portfolio->short_description!='')
                        <h3>{!! $portfolio->short_description !!}</h3>
                        @endif
                        @if(isset($portfolio->description) && $portfolio->description!='')
                        <p>{!! $portfolio->description !!}</p>
                        @endif
                    </div>
                    <div class="emp-content-project-img">
                        <img src="{{ (isset($portfolio->image) && $portfolio->image!='' && \File::exists(public_path('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png')))?asset('assets/images/portfolio/caviar-gauche/'.$portfolio->image.'.png'):asset('assets/images/default-image.jpg') }}" alt="{{ isset($portfolio->name)?$portfolio->name:''}}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="pagination wow fadeup-animation" data-wow-delay="0.2s">
                {{$portfolios->links()}}
            </div>
        </div>
    </div>