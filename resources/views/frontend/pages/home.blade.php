@extends('frontend.layouts.app')
@section('main-content')
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
    data-alias="classic4export" data-source="gallery">
    <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner rev_slider_4_1_height" data-version="5.4.8.1">

        <ul>
            <!-- SLIDE  -->
            @php
                $value = 11
            @endphp
            @foreach($slider_images as $image)
            <li data-index="rs-{{ $value += 1 }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                data-thumb="{{ asset(imagePath($image->slider_image, 'sliders')) }}" data-rotate="0" data-saveperformance="off"
                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset(imagePath($image->slider_image, 'sliders')) }}" alt="{{ $image->title }}" title="home-main-sliderbg01" width="1920"
                    height="730" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                    class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption ttm-textcolor-skincolor tp-resizeme" id="slide-1-layer-1"
                    data-x="['left','left','center','center']" data-hoffset="['50','50','-628','-684']"
                    data-y="['top','top','middle','middle']" data-voffset="['159','159','-116','46']"
                    data-fontsize="['34','14','12','11']" data-fontweight="['600','600','700','700']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                    data-type="text" data-responsive_offset="on"
                    data-frames='[{"delay":140,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">{{ $about->site_name }}</div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="['left','left','center','center']"
                    data-hoffset="['50','50','0','0']" data-y="['top','top','middle','middle']"
                    data-voffset="['185','185','-107','-87']" data-fontsize="['20','18','18','18']"
                    data-lineheight="['75','75','75','60']" data-fontweight="['700','700','700','700']"
                    data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":380,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                    {{ $image->slider_title }}
                     </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" id="slide-1-layer-3" data-x="['left','left','center','center']"
                    data-hoffset="['50','50','0','0']" data-y="['top','top','middle','middle']"
                    data-voffset="['257','257','-46','-38']" data-fontsize="['20','20','20','20']"
                    data-lineheight="['35','35','75','60']" data-fontweight="['700','700','700','700']"
                    data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":540,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                   <strong class="ttm-textcolor-skincolor">{{ $image->slider_motto }}</strong> </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" id="slide-1-layer-4" data-x="['left','left','center','center']"
                    data-hoffset="['50','50','-702','-702']" data-y="['top','top','middle','middle']"
                    data-voffset="['350','350','247','247']" data-fontsize="['16','16','14','14']"
                    data-lineheight="['26','26','24','24']" data-fontweight="['400','400','400','400']"
                    data-color="['rgb(222,222,222)','rgb(222,222,222)','rgb(222,222,222)','rgb(222,222,222)']"
                    data-width="none" data-height="none" data-whitespace="nowrap"
                    data-visibility="['on','on','off','off']" data-type="text" data-responsive_offset="on"
                    data-frames='[{"delay":830,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                   {!! Str::limit($image->slider_description, 80) !!}
                   
                   </div>

                <!-- LAYER NR. 5 -->
                <a class="tp-caption skin-flat-button tp-resizeme" href="{{ route('about.services') }}" target="_self" id="slide-1-layer-5"
                    data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                    data-y="['top','top','middle','middle']" data-voffset="['452','452','39','31']"
                    data-fontsize="['13','13','12','11']" data-lineheight="['13','13','12','11']"
                    data-fontweight="['700','700','700','700']" data-width="none" data-height="none"
                    data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="on"
                    data-frames='[{"delay":910,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[16,16,14,12]"
                    data-paddingright="[35,35,30,25]" data-paddingbottom="[16,16,14,12]"
                    data-paddingleft="[35,35,30,25]">OUR SERVICES </a>

                <!-- LAYER NR. 6 -->
                <a class="tp-caption white-flatborder-button tp-resizeme" href="{{ route('about.contacts') }}" target="_self" id="slide-1-layer-6"
                    data-x="['left','left','center','center']" data-hoffset="['231','231','0','0']"
                    data-y="['top','top','middle','middle']" data-voffset="['452','452','101','82']"
                    data-fontsize="['13','13','12','11']" data-lineheight="['13','13','12','11']"
                    data-fontweight="['700','700','700','700']" data-width="none" data-height="none"
                    data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="on"
                    data-frames='[{"delay":990,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,14,12]"
                    data-paddingright="[35,35,30,25]" data-paddingbottom="[15,15,14,12]"
                    data-paddingleft="[35,35,30,25]">QUICK CALL BACK </a>
            </li>

            @endforeach
        </ul>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->

<!--site-main start-->
<div class="site-main">

    <!--row-top-section-->
    <section class="ttm-row row-top-section first-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt_86 mlr-30 res-991-mt-0">
                    <div class="row">
                        <!-- row -->
                        <!-- post-slide -->
                        <div class="services-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false"
                            data-dots="false" data-auto="true">
                            <!-- featured-imagebox-post -->
                            @foreach($services as $service)
                            <div class="featured-imagebox featured-imagebox-services text-center">
                                <div class="featured-title">
                                    <h5><a href="corporate-finanace.html">{{ $service->service_name }}</a></h5>
                                </div>
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid"
                                            src="{{ asset(imagePath($service->service_image, 'services')) }}"
                                            alt="{{ $service->service_name }}"></a>

                                </div>
                                <div class="featured-content featured-content-services">
                                    <div class="featured-desc">
                                        <p>{!! Str::limit($service->service_description, '130') !!}</p>
                                    </div>
                                    <a href="{{ route('about.services.show', $service) }}"
                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="ti ti-angle-right"></i>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                            @endforeach

                        </div>
                    </div><!-- row end -->
                </div>
            </div><!-- row end -->
            <div class="row pt-25">
                <div class="col-md-12 text-center mb-55 res-991-mb-0">
                    <p>Don’t hesitate, contact us for better help and services.<strong><u><a
                                    href="{{ route('about.services') }}" class="ttm-textcolor-darkgrey"> Explore all
                                    services</a></u></strong></p>
                </div>
            </div>
        </div>
    </section>
    <!-- row-top-section end -->
    @include('frontend.partials._results')
    <!-- about-section -->
    <section class="ttm-row about-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="pr-80 res-991-pr-0">
                        <!-- section title -->
                        <div class="section-title pr-60 res-991-pr-0 clearfix">
                            <div class="title-header">
                                <h5>ABOUT {{ $about->site_name }}</h5>
                            </div>
                            <div class="title-desc">{!! Str::limit($about->site_description, 500, '.....') !!}<u><a
                                        href="{{ route('about') }}" class="ttm-textcolor-skincolor">Read More</a></u>

                            </div>
                        </div><!-- section title end -->
                        <div class="row no-gutters mt-40 mb-27">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <ul class="ttm-list ttm-list-style-icon">
                                    @foreach($popular_services as $service)
                                    <a href="{{ route('about.services.show', $service) }}">
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">{{ $service->service_name }}</span>
                                        </li>
                                    </a>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <ul class="ttm-list ttm-list-style-icon">
                                    @foreach($studies_title as $t)
                                    <a href="{{ route('studyabroads.show', $t) }}">
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">{{ 'Study in ' .$t->country_name }}</span>
                                        </li>
                                    </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="separator">
                            <div class="sep-line dashed"></div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-6 col-sm-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box style1 without-icon right-border">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>{{ $about->contact_number_one }} </h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Call to ask any question</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box style1 without-icon right-border">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>{{ $about->contact_number_two }}</h5>

                                        </div>
                                        <div class="featured-desc">
                                            <p>Call to ask any question</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="ml_30 res-991-ml-0 res-991-mt-30 position-relative">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper w100 p-12 with-border">
                            <img class="img-fluid" src="{{ asset(imagePath($about->site_image, 'abouts')) }}"
                                title="single-img-one" alt="{{ $about->site_name }}">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->
    <!-- element-style-section -->
    <section class="element-row element-style mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title clearfix">
                        <h3 class="title">{{ __('Popular Picks') }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false"
                    data-dots="false" data-auto="true" >
                    <!-- featured-imagebox -->
                    @foreach($popular_images as $img)
                    <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                        <div class="ttm-box-view-content-inner">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset(imagePath($img->image, 'gallery')) }}"
                                        alt="{{ $img->title }}"></a>
                            </div><!-- featured-thumbnail end-->
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery]" title=""
                                        data-rel="prettyPhoto" href="{{ asset(imagePath($img->image, 'gallery')) }}"><i
                                            class="ti ti-search"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="featured-content featured-content-portfolio text-center box-shadow2">
                            <div class="featured-title">
                                <h6><a href="#">{{ Str::limit($img->title, '60') }}</a></h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- featured-imagebox end-->
                </div>
            </div>
        </div>
    </section>
    <!-- element-style-section end-->

    @include('frontend.partials._teams')

    @include('frontend.partials._blogs')

    @include('frontend.partials._map', ["width"=> 600, "height"=> 190, "margin"=> -48])
    


</div>
<!--site-main end-->
@endsection

@section('footerelements')
<script>
    $(document).ready(function () {
        $('img').lazyload();
    })
</script>
@endsection

@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $about->meta_title,
        'description' => $about->meta_description,
        'tags' => $about->meta_tags,
        'author' => $about->site_name,
    ])
@endsection
