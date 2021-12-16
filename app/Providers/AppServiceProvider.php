<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Result;
use App\Models\Contact;
use App\Models\Service;
use App\Models\StudyAbroad;
use App\Models\TestPreparation;
use Illuminate\Foundation\Inspiring;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
        Paginator::useBootstrap();
      
        $about = cache()->remember('abouts', 60*60*24, function() {
            return About::first();
        });
        $site_logo = cache()->remember('logo', 60*60*24, function() {
            return About::where('id', 1)->value('site_logo');
        });
        $studies_title = cache()->remember('studies', 60*60*24, function() {
            return StudyAbroad::latest()->select('country_name', 'slug')->get();
        });
        $popular_services = cache()->remember('services', 60*60*24, function() {
            return Service::latest()->select('service_name', 'service_description', 'slug')->take(5)->get();
        });
        $tests_title = cache()->remember('tests', 60*60*24, function() { 
            return TestPreparation::latest()->select('test_name', 'slug')->get();
        });

        $latest_blogs = cache()->remember('latest_blogs', 60*60*24, function() {
            return Blog::where('is_featured', 1)->latest()->inRandomOrder()->take(3)->get();
        });

        $team_sliders = cache()->remember('teams', 60*60*24, function() {
            return Team::all();
        });
        $footer_contacts = cache()->remember('contacts', 60*60*24, function() {
            return Contact::latest()->take(3)->get();
        });
        // $q = Inspiring::quote();
        $result = Result::first();
        // dd($result);
        View::share([
            'site_logo' => $site_logo, 
            'studies_title' => $studies_title,
            'tests_title'   => $tests_title,
            'about'         => $about,
            'latest_blogs'  => $latest_blogs,
            'popular_services' => $popular_services,
            'team_sliders'      => $team_sliders,
            'q'             => $q ?? '',
            'footer_contacts'      => $footer_contacts,
            'result' => $result
        ]);
    }
}
