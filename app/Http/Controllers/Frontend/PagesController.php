<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use App\Models\Category;
use App\Models\StudyAbroad;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\TestPreparation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function index()
    {

        $gallery = cache()->remember('gallery', 60*60*24, function() {
            return Gallery::where('is_featured', 1)->latest()->take(3)->get();
        });
        $popular_images = cache()->remember('gallery', 60*60*24, function() {
            return Gallery::where('is_featured', 1)->take(10)->get();
        });
        $slider_images = cache()->remember('sliders', 60*60*24, function() {
            return Slider::where('is_featured', 1)->latest()->take(6)->get();
        });
        $about = cache()->remember('abouts', 60*60*24, function() {
            return About::first();
        });
        
        $services = cache()->remember('services', 60*60*24, function() {
            return Service::latest()->take(5)->get();
        });
        
        $blogs = cache()->remember('blogs', 60*60*24, function() {
            return Blog::where('is_featured', 1)->latest()->take(3)->get();
        });

        return view('frontend.pages.home', compact('gallery','popular_images', 'about', 'slider_images','services', 'blogs'));
    }

    public function blogs()
    {
        $page = request()->get('page', 1);
        $limit = request()->get('limit', 10);
        $blogs = cache()->remember('blogs' . $page , 60*60*24, function() use ($limit) {
            return Blog::latest()->paginate($limit);
        });
        
        return view('frontend.pages.blogs', compact('blogs'));
    }

    public function blogsShow(Blog $blog)
    {
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        $blog->incrementViewsCount($blog);
        return view('frontend.pages.blog-single', compact('blog', 'categories'));
    }

    public function blogsShowCategory(Category $category)
    {
        $blogs = Blog::where('category_id', $category->id)->paginate(7);
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.blogs', compact('blogs', 'categories'));
    }

    public function about()
    {
        $blogs = Blog::where('is_featured', 1)->latest()->take(3)->get();
        return view('frontend.pages.about', compact('blogs'));
    }

    public function contacts()
    {
        $contacts = Contact::latest()->paginate(3);
        return view('frontend.pages.contact', compact('contacts'));
    }

    public function teams()
    {
        $teams = Team::latest()->paginate(24);
        return view('frontend.pages.teams', compact('teams'));
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('frontend.pages.services', compact('services'));
    }

    public function servicesShow(Service $service)
    {
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.service-single', compact('service', 'categories'));
    }

    public function events()
    {
        $events = Event::latest()->paginate(2);
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.events', compact('events', 'categories'));
    }

    public function eventsShow(Event $event)
    {
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.event-single', compact('event', 'categories'));
    }

    public function announcements()
    {
        $announcements = Announcement::latest()->paginate(3);
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.announcements', compact('announcements', 'categories'));
    }

    public function announcementsShow(Announcement $announcement)
    {
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.announcement-single', compact('announcement', 'categories'));
    }


    public function studyabroadsShow(StudyAbroad $studyabroad)
    {
        $studyabroads_all = StudyAbroad::all();
        return view('frontend.pages.sudyabroad', compact('studyabroad', 'studyabroads_all'));
    }

    public function testpreparationsShow(TestPreparation $testpreparation)
    {
        $testpreparations = TestPreparation::latest()->inRandomOrder()->take(5)->get();
        return view('frontend.pages.testpreparation', compact('testpreparation', 'testpreparations'));
    }

    public function gallery()
    {
        $gallery = Gallery::latest()->paginate(12);
        $model = new Gallery;
        return view('frontend.pages.gallery', compact('gallery', 'model'));        
    }

    public function ajaxContactForm(Request $request)
    {
        $request->validate([
             'name'           => 'required',
             'email'          => 'required|email',
             'phone'          => 'required|numeric',
             'message'        => 'required',
         ]);

        Message::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'message'       => $request->message,
        ]);
        return response()->json(['success'=>'Message Submitted. We will reach you soon.']);
    }
}
