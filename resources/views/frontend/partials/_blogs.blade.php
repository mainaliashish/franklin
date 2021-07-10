@foreach($blogs as $blog)   
@endforeach
@if(isset($blogs) && $blogs->count() > 0)
    <!--blog-text-section-->
    <section class="ttm-row blog-text-section ttm-bgcolor-grey mt_120 res-991-mt-0 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- section-title -->
                    <div class="section-title style2 clearfix">
                        <div class="title-header">
                            <h5>Our latest News</h5>
                            <h2 class="title">Read Our Latest Blogs &amp; News</h2>
                        </div>
                        <div class="title-desc"><span class="quote-title">Quote of the day : </span> ❝{{ $q }}❞</div>
                    </div><!-- section-title end -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--blog-text-section end-->

    <!--blog-section-->
    <section class="ttm-row blog-section home-blog-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- post-slide -->
                <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                    <!-- featured-imagebox-post -->
                    @foreach($blogs as $blog)
                    <div class="featured-imagebox featured-imagebox-post box-shadow">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt=""{{ $blog->title }}>
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                    <i class="ti ti-pencil"></i>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-title featured-title">
                                <h5><a href="{{ route('blogs.show', $blog) }}">{{ Str::limit($blog->title, 50) }}</a></h5>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{ $blog->created_at['month'] }} {{ $blog->created_at['day'] }},
                                    {{ $blog->created_at['year'] }}</span>
                                <span class="ttm-meta-line"><i class="fa fa-eye"></i>{{ $blog->views['number_of_views'] }}</span>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- featured-imagebox-post end -->
                </div>
            </div><!-- row end-->
        </div>
    </section>
    <!--blog-section end-->
@endif