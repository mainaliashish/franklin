@extends('frontend.layouts.app')

@section('main-content')
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">About {{ $testpreparation->test_name }}</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span>About {{ $testpreparation->test_name }}</span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- faq-section -->
            <section class="ttm-row single-project-section clearfix">
                <div class="container">
                    <div class="row mt-60 res-991-mt-30">
                        <div class="col-md-12">
                            <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                <img class="img-fluid" src="{{ asset(imagePath($testpreparation->test_image, 'testpreparations')) }}" alt="{{ $testpreparation->test_name }} Information">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="ttm-portfolio-title mt-40">
                                <h4 class="ttm-pf-detailbox-title">Exam Description</h4>
                            </div>
                            {!! $testpreparation->test_description !!}

                        </div>
                        <div class="row mb-10 mt-30">
                            <div class="col-md-6">
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="{{ asset(imagePath($testpreparation->test_module_image, 'testpreparations')) }}" alt="Modules in {{ $testpreparation->test_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ttm-service-description res-767-mt-30">
                                    <h4>Exam Modules</h4>
                                        {!! $testpreparation->test_modules !!}
                                    <ul class="ttm-list ttm-list-style-icon mt-15">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="ttm-portfolio-title mt-40">
                                <h4 class="ttm-pf-detailbox-title">Exam Evaluation</h4>
                            </div>
                            {!! $testpreparation->test_results !!}
                        </div>

                    </div>


                    <div class="row ttm-pf-single-related-wrapper mt-50">
                        <div class="col-lg-12">
                            <div class="mb-30">
                                <h3 class="ttm-pf-single-related-title">Related Examination</h3>
                            </div>
                        </div>
                        @foreach($testpreparations as $tp)
                            
                        <div class="col-md-3">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                <div class="ttm-box-view-content-inner">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <a href="#"> <img class="img-fluid" src="{{ asset(imagePath($tp->test_image, 'testpreparations')) }}" alt="{{ $tp->test_name }}"></a>
                                    </div><!-- featured-thumbnail end-->
                                    <!-- ttm-box-view-overlay -->
                                    <div class="ttm-box-view-overlay">
                                        <div class="featured-iconbox ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="{{ asset(imagePath($tp->test_image, 'testpreparations')) }}"><i class="ti ti-search"></i></a>

                                            <a href="{{ route('testpreparations.show', $tp) }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                        </div>
                                    </div><!-- ttm-box-view-overlay end-->
                                </div>
                                <div class="featured-content featured-content-portfolio text-center box-shadow2">
                                    <div class="featured-title">
                                        <h5><a href="{{ route('testpreparations.show', $tp) }}">{{ $tp->test_name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        <!-- featured-imagebox -->
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </section>
            <!-- faq-section end -->

        </div>
        <!--site-main end-->
@endsection

@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $testpreparation->meta_title,
        'tags' => $testpreparation->meta_tags,
        'description' => $testpreparation->meta_description
    ])
@endsection