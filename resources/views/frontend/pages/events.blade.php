@extends('frontend.layouts.app')

@section('main-content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title">Events</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home') }}"><i
                                    class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span> Events </span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main events">
    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row d-block">
                <div class="col-lg-9 content-area pull-left">
                    @foreach($events as $event)
                    <article class="post ttm-blog-classic">
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid event"
                                    src="{{ asset(imagePath($event->image, 'events')) }}" alt="{{ $event->title }}">
                                <div class="featured-icon">
                                    <div
                                        class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a
                                            href="{{ route('about.events.show', $event) }}">{{ $event->title }}</a>
                                    </h5>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i
                                            class="fa fa-calendar"></i>{{ $event->created_at }}</span>
                                </div>
                                <div class="separator">
                                    <div class="sep-line solid mt-10 mb-20"></div>
                                </div>
                                <div class="featured-desc">
                                    {!! Str::limit($event->description, 200) !!}
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ttm-blog-classic end -->
                    @endforeach
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ttm-pagination">
                                {{ $events->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.partials._rightBar')
            </div><!-- row end -->

        </div>
    </div>
    <!-- sidebar end -->
</div>
<!--site-main end-->
@endsection

@section('meta_elements')
    @include('frontend.partials._meta', [
        'contents' => $event->getOnlyTitlesMetas(),
        'class' => 'event',
    ])
@endsection