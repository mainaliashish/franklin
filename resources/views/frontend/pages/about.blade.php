@extends('frontend.layouts.app')

@section('main-content')
<section class="ttm-row about-top-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="position-relative">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper ttm-991-center res-991-mt-30">
                        <img class="img-fluid" src="{{ asset(imagePath($about->site_image, 'abouts')) }}"
                            title="{{ $about->site_name }}" alt="{{ $about->site_name }}">
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="pl-45 res-991-pl-0 res-991-mt-30">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h5>ABOUT {{ $about->site_name }}</h5>
                        </div>
                        <div class="title-desc">
                            {!! $about->site_description !!}
                        </div>
                        @if($about->site_policy)
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>SITE POLICY</h5>
                            </div>
                            <div class="title-desc">
                                {!! $about->site_policy !!}
                            </div>
                        </div><!-- section title end -->
                        @endif
                    </div>
                </div><!-- section title end -->
            </div>
            @include('frontend.partials._results')
            <div class="row mt-100 res-991-mt-50">
                @foreach($popular_services as $service)
                <div class="col-md-4">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box left-icon icon-align-top">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-round">
                                <i class="ti ti-info ttm-num"></i>
                            </div>
                        </div>
                        <div class="featured-content pl-20">
                            <div class="featured-title">
                                <h5 class="mb-0">{{ $service->service_name }}</h5>
                            </div>
                            <div class="featured-desc">
                                {!! Str::limit($service->service_description, 75) !!}
                            </div>
                        </div>
                    </div><!-- featured-icon-box end -->
                </div>
                @endforeach

            </div>
        </div>
</section>
<!-- about-section end -->


<!-- services-section -->
<section class="ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes about-services-section clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <!-- section title -->
                <div class="section-title text-center with-desc clearfix">
                    <div class="title-header mb-60">
                        <h5>WHY CHOOSE US</h5>
                    </div>
                </div><!-- section title end -->
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center ptb-50 res-991-ptb-20 iconalign-before-heading-row">
                    <div class="col-md-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box iconalign-before-heading style1">
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ti ti-world"></i>
                                </div>
                                <div class="featured-title">
                                    <h5 class="mb-0">Our Mission</h5>
                                </div>
                            </div><!-- featured-content -->
                        </div><!-- featured-icon-box -->
                    </div>
                    <div class="col-md-8">
                        <p class="mb-0 ml-30 res-767-mt-20 res-767-ml-10">{{ $about->site_mission }}</p>
                    </div>
                </div>
                <div class="row align-items-center ptb-50 res-991-ptb-20 iconalign-before-heading-row">
                    <div class="col-md-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box iconalign-before-heading style1">
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ti ti-bar-chart"></i>
                                </div>
                                <div class="featured-title">
                                    <h5 class="mb-0">Our Vision</h5>
                                </div>
                            </div><!-- featured-content -->
                        </div><!-- featured-icon-box -->
                    </div>
                    <div class="col-md-8">
                        <p class="mb-0 ml-30 res-767-mt-20 res-767-ml-10">{{ $about->site_vision }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-section end -->

@include('frontend.partials._teams')

<!--blog-text-section-->
@include('frontend.partials._blogs')
<!--blog-text-section end-->

</div>
<!--site-main end-->

@endsection
@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $about->meta_title,
        'tags' => $about->meta_tags,
        'description' => $about->meta_description
    ])
@endsection