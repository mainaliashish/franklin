@extends('frontend.layouts.app')

@section('main-content')
    <!--site-main start-->
    <div class="site-main">

        <!-- team-member-section -->
        <section class="ttm-row team-member-section clearfix">
            <div class="container">
                <div class="row">
                    @foreach($teams as $team)     
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team mb-30">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset(imagePath($team->image, 'teams')) }}" alt="{{ $team->name }}">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="{{ $team->facebook }}" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="{{ $team->twitter }}" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="featured-content featured-content-team">
                                    <div class="featured-title">
                                        <h5><a href="#">{{ $team->name }}</a></h5>
                                    </div>
                                    <p class="category"><i class="fa fa-phone"></i> {{ $team->contact }}</p>
                                </div>
                            </div><!-- featured-imagebox-team end-->
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- team-member-section end -->
        
    </div><!--site-main end-->

@endsection