@extends('frontend.layouts.app')

@section('main-content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title">Service Detail</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home') }}"><i
                                    class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span> Service </span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">
    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row d-block">
                <div class="col-lg-9 content-area pull-left">
                    <!-- ttm-blog-classic-->
                    <article class="post ttm-blog-classic">
                        <h4>
                            {!! $service->service_name !!}
                        </h4>
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset(imagePath($service->service_image, 'services')) }}" alt="{{ $service->service_name }}">
                                <div class="featured-icon">
                                    <div
                                        class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i
                                            class="fa fa-calendar"></i>{{ $service->created_at }}</span>
                                </div>
                                <div class="separator">
                                    <div class="sep-line solid mt-10 mb-20"></div>
                                </div>
                                
                                <div class="featured-desc">
                                    {!! $service->service_description !!}
                                </div>
                            </div>
                        </div>
                        <div class="ttm-blog-classic-box-comment">
                            <div id="comments" class="comments-area">
                                <div class="fb-comments" data-href="{{ Request::url() }}" data-width="auto" data-numposts="10"></div>
                            </div>
                        </div>
                </div>
                </article>
                <!-- ttm-blog-classic end -->
            </div>
            <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">
                <aside class="widget widget-search">
                    <form role="search" method="get" class="search-form  box-shadow" action="#">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <i class="fa fa-search"></i>
                            <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                        </label>
                    </form>
                </aside>
                <aside class="widget widget-text">
                    <div class="ttm-author-widget">
                        <div class="img img-rounded">
                            <img class="author-img" src="{{ asset(imagePath($site_logo, 'abouts')) }}" alt="{{ $about->site_name }}"
                                style="width:226px;height:90px;">

                        </div>
                    </div>
                </aside>
                <aside class="widget widget-categories">
                    <h3 class="widget-title">Popular Categories</h3>
                    <ul>
                        @foreach($categories as $category)
                        <li><a href="{{ route('blogs.showcat', $category) }}">{{ $category->name }}</a><span>{{ $category->blogs->count() }}</span></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget contact-widget">
                    <h3 class="widget-title">Get in touch</h3>
                    <ul class="contact-widget-wrapper">
                        <li><i class="fa fa-map-marker"></i>{{ $about->address }}</li>
                        <li><i class="fa fa-phone"></i>{{ $about->contact_number_one }}</li>
                        <li><i class="ti ti-alarm-clock"></i>{{ $about->opening_hours }}</li>
                    
                    </ul>
                </aside>
            </div>
        </div><!-- row end -->

    </div>
</div>
<!-- sidebar end -->
</div>
<!--site-main end-->
@endsection


@section('footerelements')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d1c72d41675b113"></script>

@endsection

@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $service->meta_title,
        'tags' => $service->meta_tags,
        'description' => $service->meta_description
    ])
@endsection