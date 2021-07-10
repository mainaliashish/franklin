@extends('frontend.layouts.app')

@section('main-content')
<div class="site-main mb-0">

    <!--contact-section-->
    <section class="ttm-row contact-grid-section clearfix">
        <div class="container">
            <!-- row -->
            <article class="post ttm-blog-classic">
                <div class="featured-imagebox featured-imagebox-post">
                    <div class="card-header col-md-12 col-sm-12" style="font-size: 20px;font-family: sans-serif;border-radius: 6px 6px;box-shadow: 2px 2px palegreen;"><b><span style="color:green;">{{ $searchResults->count() }}</span> results found for
                            "{{ request('query') }}"</b></div>

                    <div class="card-body">

                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                        <h5 style="margin:10px;color:green">{{ ucfirst($type) }} <span class="badge badge-success"> {{ $modelSearchResults->count() }} </span></h5>

                        @foreach($modelSearchResults as $searchResult)
                        <ul>
                            <li> <i class="ti ti-arrow-right"></i>  <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                        </ul>
                        @endforeach
                        @endforeach

                    </div>
            </article>
        </div>
</div>
</section>
</div>
@endsection

@section('headerElements')
<style>
    .badge-success {
        color: #fff;
        border-radius: 20px 20px;
        background-color: tomato;
    }
</style>
@endsection