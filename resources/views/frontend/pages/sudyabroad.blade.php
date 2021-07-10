@extends('frontend.layouts.app')

@section('main-content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title"> Study in {{ $studyabroad->country_name }}</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home') }}"><i
                                    class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span> Study in {{ $studyabroad->country_name }} </span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">
    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row d-block">
                <div class="col-lg-9 content-area">
                    <!-- ttm-service-single-content-are -->
                    <div class="ttm-service-single-content-area">
                        <div class="ttm_single_image-wrapper mb-35">
                            <img class="img-fluid" src="{{ asset(imagePath($studyabroad->country_image, 'studyabroads')) }}" alt="Study in {{ $studyabroad->country_name }}">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>About {{ $studyabroad->country_name }}</h4>
                                <div class="mb-20">
                                    {!! $studyabroad->country_description !!}
                                </div>
                            </div>
                        </div>
                        <div class="ttm-service-description mb-30">
                            <h4>Education System</h4>
                            {!! $studyabroad->education_system !!}
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-6">
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="{{ asset(imagePath($studyabroad->cost_of_studies_image, 'studyabroads')) }}" alt="Cost of Living in {{ $studyabroad->country_name }}">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ttm-service-description res-767-mt-30">
                                    <h4>Cost of Studies</h4>
                                    {!! $studyabroad->cost_of_studies !!}

                                    <ul class="ttm-list ttm-list-style-icon mt-15">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-6">
                                <div class="ttm-service-description res-767-mt-30">
                                    <h4>Living and Working</h4>
                                    {!! $studyabroad->living_and_working !!}

                                    <ul class="ttm-list ttm-list-style-icon mt-15">
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="{{ asset(imagePath($studyabroad->education_system_image, 'studyabroads')) }}" alt="Education System in {{ $studyabroad->country_name }}">

                                </div>
                            </div>

                        </div>

                        <!-- acadion -->
                        <div class="accordion pt-10 mb-35">
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey active">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne"><strong>VISA Procedures</strong></a>
                                </div>
                                <div class="toggle-content">
                                    {!! $studyabroad->visa_procedures !!}
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo"><strong>Popular Universities</strong></a>
                                </div>
                                <div class="toggle-content">
                                   {!! $studyabroad->popular_universities !!}
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree">
                                        <strong>Offered Courses</strong>
                                        </a>
                                </div>
                                <div class="toggle-content">
                                    {!! $studyabroad->offered_courses !!}
                                </div>
                            </div><!-- toggle end -->
                        </div><!-- acadion end-->
                    </div>
                    <!-- ttm-service-single-content-are end -->
                </div>
                <div class="col-lg-3 widget-area ttm-bgcolor-grey">
                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            @foreach($studyabroads_all as $studyabroad)
                            <li class="list-group-item list-group-item-action {{ route('studyabroads.show', $studyabroad) == url()->current() ? 'active' : '' }}"><a href="{{ route('studyabroads.show', $studyabroad) }}">{{ $studyabroad->country_name }}</a></li>

                            @endforeach
                        </ul>
                    </aside>
                   
                    <aside class="widget post-widget">
                        <h3 class="widget-title">Latest News</h3>
                        <ul class="widget-post ttm-recent-post-list">
                        @foreach($latest_blogs as $b)
                            <li>
                                <a href="single-blog.html"><img src="{{ asset(imagePath($b->image, 'blogs')) }}" alt="{{ $b->title }}"></a>
                                <span class="post-date">{{ $b->created_at['day'] }} {{ $b->created_at['month'] }},{{ $b->created_at['year'] }}</span>
                                <a href="single-blog.html" class="clearfix">{{ Str::limit($b->title, 45) }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </aside>
                    <aside class="widget contact-widget">
                        <h3 class="widget-title">Get in touch</h3>
                        <ul class="contact-widget-wrapper">
                            <li><i class="fa fa-map-marker"></i>{{ $about->address }}</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:{{ $about->email_one }}"
                                    target="_blank">{{ $about->email_one }}</a></li>
                            <li><i class="fa fa-phone"></i>{{ $about->contact_number_one }}, {{ $about->contact_number_two }}</li>

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

@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $studyabroad->meta_title,
        'tags' => $studyabroad->meta_tags,
        'description' => $studyabroad->meta_description
    ])
@endsection
