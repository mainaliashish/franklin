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
        Paginator::useBootstrap();
      
        $about = About::first();
        $site_logo = About::where('id', 1)->value('site_logo');
        $studies_title = StudyAbroad::latest()->select('country_name', 'slug')->get();
        $popular_services = Service::latest()->select('service_name', 'service_description', 'slug')->take(5)->get();
        $tests_title = TestPreparation::latest()->select('test_name', 'slug')->get();
        $latest_blogs = Blog::where('is_featured', 1)->latest()->inRandomOrder()->take(3)->get();
        $team_sliders = Team::all();
        $footer_contacts = Contact::latest()->take(3)->get();
        $q = Inspiring::quote();
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
            'q'             => $q,
            'footer_contacts'      => $footer_contacts,
            'result' => $result
        ]);
    }
}
