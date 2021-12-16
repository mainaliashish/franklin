@if(isset($team_sliders) && $team_sliders->count() > 0)

    <!-- team-section -->
    <section class="ttm-row ttm-bg team-section clearfix" style="margin-buttom:-20px;padding:0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8">
                    <!-- section title -->
                    <div class="section-title text-center with-desc clearfix">
                        <div class="title-header">
                            <h5>OUR TEAM MEMBER</h5>
                            <h2 class="title">Discover our team and experts</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
                <div class="col-md-3 col-sm-2"></div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="wrap-team team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                    <!-- featured-imagebox-team -->
                    @foreach($team_sliders as $team)

                    <div class="featured-imagebox featured-imagebox-team">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset(imagePath($team->image, 'teams')) }}" alt="{{ $team->name }}">
                            <div class="ttm-social-links-wrapper">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="{{ $team->facebook }}" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="{{ $team->twitter }}" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="featured-content featured-content-team">
                            <div class="featured-title">
                                <h5><a class="team-name" href="{{ route('about') }}">{{ $team->name }}</a></h5>
                            </div>
                            <p class="category"> <i class="fa fa-phone"></i> {{ $team->contact }}</p>
                            <p class="category"><i class="fa fa-envelope"></i> {{ $team->email }}</p>
                            <p class="category"><i class="fa fa-home"></i> {{ $team->address }}</p>

                        </div>
                    </div><!-- featured-imagebox-team end-->
                    
                    @endforeach

                </div>
            </div><!-- row end -->
        </div>
    </section>
</div>
    <!-- team-section end -->
@endif
