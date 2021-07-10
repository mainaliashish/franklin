@extends('frontend.layouts.app')

@section('main-content')
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Our Services</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span>Our Services</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main services">

        <!--blog-section-->
        <section class="ttm-row blog-left-img-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                        <!-- featured-imagebox-post -->
                        <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                            <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                                <div class="featured-thumbnail"> 
                                    <img class="img-fluid" src="{{ asset(imagePath($service->service_image, 'services')) }}" alt="{{ $service->service_name }}"> 
                                </div> 
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('about.services.show', $service) }}">
                                    {{ Str::limit($service->service_name, 45) }}
                                    </a></h5>
                                </div>
                                <div class="featured-desc ttm-box-desc">
                                    {!! Str::limit($service->service_description, 50) !!}
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    @endforeach                   
                </div><!-- row end-->
            </div>
        </section>
        <!--blog-section end-->

    </div><!--site-main end-->
@endsection


@section('meta_elements')
    @include('frontend.partials._meta', [
        'contents' => $service->getOnlyTitlesMetas(),
        'class' => 'services',
    ])
@endsection
