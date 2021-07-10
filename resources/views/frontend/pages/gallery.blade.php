@extends('frontend.layouts.app')

@section('main-content')
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Gallery</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="{{ $about->site_name }}" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span>Gallery</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- faq-section -->
        <section class="ttm-row project-style2-section clearfix">
            <div class="container">
                <div class="row">
                    
                    @foreach($gallery as $img)
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img class="img-fluid" src="{{ asset(imagePath($img->image, 'gallery')) }}" alt="{{ $img->title }}"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="{{ asset(imagePath($img->image, 'gallery')) }}"><i class="ti ti-search"></i></a>
                                        <i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="featured-content featured-content-portfolio text-center box-shadow2">
                                <div class="featured-title">
                                    <h5><a href="#">{{ $img->title }}</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    @endforeach

                </div>
                <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ttm-pagination">
                       {{ $gallery->links() }}
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- faq-section end -->
        
    </div><!--site-main end-->
@endsection

@section('meta_elements')
    @include('frontend.partials._meta', [
        'contents' => $gallery->getOnlyTitlesMetas(),
        'class' => 'gallery',
    ])
@endsection




