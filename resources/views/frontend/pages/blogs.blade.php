@extends('frontend.layouts.app')

@section('main-content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title">Blog</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span>Blog</span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">

    <!--blog-section-->
    <section class="ttm-row blog-grid-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post box-shadow">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt="{{ $blog->title }}">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                    <i class="ti ti-pencil"></i>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-title featured-title">
                                <h5><a href="{{ route('blogs.show', $blog) }}">{{ Str::limit($blog->title, 50) }}</a></h5>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{ $blog->created_at['month'] }} {{ $blog->created_at['day'] }}, {{ $blog->created_at['year'] }}</span>
                                @if($blog->views['number_of_views'] > 1)
                                <span class="ttm-meta-line"><i class="fa fa-eye"></i>{{ $blog->views['number_of_views'] }}</span>
                                @endif
                                <span class="ttm-meta-line"><i class="fas fa-book-open"></i>{{ $blog->category->name }}</span>

                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                @endforeach
            </div><!-- row end-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ttm-pagination">
                       {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog-section end-->

</div>
<!--site-main end-->
@endsection
@section('meta_elements')
    @include('frontend.partials._meta', [
        'contents' => $blog->getOnlyTitlesMetas(),
        'class' => 'blog',
    ])
@endsection