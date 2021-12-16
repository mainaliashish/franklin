<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\EventsController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ResultsController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Backend\CommentsController;
use App\Http\Controllers\Backend\MessagesController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Backend\SliderImageController;
use App\Http\Controllers\Backend\StudyAbroadController;
use App\Http\Controllers\Backend\AnnouncementsController;
use App\Http\Controllers\Backend\TestPreparationsController;


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contacts'])->name('about.contacts');
Route::get('/blogs', [PagesController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{blog}/show', [PagesController::class, 'blogsShow'])->name('blogs.show');
Route::get('/blogs/{category}', [PagesController::class, 'blogsShowCategory'])->name('blogs.showcat');
Route::get('/services', [PagesController::class, 'services'])->name('about.services');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('about.gallery');
Route::get('/services/{service}/show', [PagesController::class, 'servicesShow'])->name('about.services.show');
Route::get('/events', [PagesController::class, 'events'])->name('about.events');
Route::get('/teams', [PagesController::class, 'teams'])->name('about.teams');
Route::get('/events/{event}/show', [PagesController::class, 'eventsShow'])->name('about.events.show');
Route::get('/announcements', [PagesController::class, 'announcements'])->name('about.announcements');
Route::get('/announcements/{announcement}/show', [PagesController::class, 'announcementsShow'])->name('about.announcements.show');
Route::get('/studyabroads', [PagesController::class, 'studyabroads'])->name('studyabroads');
Route::get('/studyabroads/{studyabroad}/show', [PagesController::class, 'studyabroadsShow'])->name('studyabroads.show');
Route::get('/testpreparations', [PagesController::class, 'testpreparations'])->name('testpreparations');
Route::get('/testpreparations/{testpreparation}/show', [PagesController::class, 'testpreparationsShow'])->name('testpreparations.show');
Route::post('/contact-form', [PagesController::class, 'ajaxContactForm'])->name('contact.form');
Route::get('/search-form', [SearchController::class, 'search'])->name('search');


Route::group(['middleware' => ['auth'], 'prefix' => 'backend'], function () {

    Route::get('/pages/dashboard', function () { return view('backend.pages.dashboard'); })->name('backend.dashboard');

    // Blogs routes
    Route::get('/blogs', [BlogsController::class, 'index'])->name('backend.blogs');
    Route::get('/blogs/trashed', [BlogsController::class, 'getTrashed'])->name('backend.blogs.trashed');
    Route::get('/blogs/create', [BlogsController::class, 'create'])->name('backend.blogs.create');
    Route::post('/blogs/store', [BlogsController::class, 'store'])->name('backend.blogs.store');
    Route::get('/blogs/{blog}/show', [BlogsController::class, 'show'])->name('backend.blogs.show');
    Route::get('/blogs/{blog}/restore', [BlogsController::class, 'restore'])->name('backend.blogs.restore');
    Route::get('/blogs/{blog}/edit', [BlogsController::class, 'edit'])->name('backend.blogs.edit');
    Route::patch('/blogs/{blog}/update', [BlogsController::class, 'update'])->name('backend.blogs.update');
    Route::get('/blogs/{blog}/trash', [BlogsController::class, 'trash'])->name('backend.blogs.trash');
    Route::get('/blogs/{blog}/delete', [BlogsController::class, 'delete'])->name('backend.blogs.delete');
    Route::get('/blogs/delete-all', [BlogsController::class, 'deleteAll'])->name('backend.blogs.delete-all');
    Route::get('/blogs/trash-all', [BlogsController::class, 'trashAll'])->name('backend.blogs.trash-all');
    Route::get('/blogs/restore-all', [BlogsController::class, 'restoreAll'])->name('backend.blogs.restore-all');

    // Categories routes
    Route::get('/categories', [CategoriesController::class, 'index'])->name('backend.categories');
    Route::get('/categories/trashed', [CategoriesController::class, 'getTrashed'])->name('backend.categories.trashed');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('backend.categories.create');
    Route::post('/categories/store', [CategoriesController::class, 'store'])->name('backend.categories.store');
    Route::get('/categories/{category}/show', [CategoriesController::class, 'show'])->name('backend.categories.show');
    Route::get('/categories/{category}/restore', [CategoriesController::class, 'restore'])->name('backend.categories.restore');
    Route::get('/categories/{category}/edit', [CategoriesController::class, 'edit'])->name('backend.categories.edit');
    Route::patch('/categories/{category}/update', [CategoriesController::class, 'update'])->name('backend.categories.update');
    Route::get('/categories/{category}/trash', [CategoriesController::class, 'trash'])->name('backend.categories.trash');
    Route::get('/categories/{category}/delete', [CategoriesController::class, 'delete'])->name('backend.categories.delete');

    // Announcments Routes
    Route::get('/announcements', [AnnouncementsController::class, 'index'])->name('backend.announcements');
    Route::get('/announcements/create', [AnnouncementsController::class, 'create'])->name('backend.announcements.create');
    Route::post('/announcements/store', [AnnouncementsController::class, 'store'])->name('backend.announcements.store');
    Route::get('/announcements/{announcement}/show', [AnnouncementsController::class, 'show'])->name('backend.announcements.show');
    Route::get('/announcements/{announcement}/edit', [AnnouncementsController::class, 'edit'])->name('backend.announcements.edit');
    Route::patch('/announcements/{announcement}/update', [AnnouncementsController::class, 'update'])->name('backend.announcements.update');
    Route::get('/announcements/{announcement}/delete', [AnnouncementsController::class, 'delete'])->name('backend.announcements.delete');


    // Events Routes
    Route::get('/events', [EventsController::class, 'index'])->name('backend.events');
    Route::get('/events/create', [EventsController::class, 'create'])->name('backend.events.create');
    Route::post('/events/store', [EventsController::class, 'store'])->name('backend.events.store');
    Route::get('/events/{event}/show', [EventsController::class, 'show'])->name('backend.events.show');
    Route::get('/events/{event}/edit', [EventsController::class, 'edit'])->name('backend.events.edit');
    Route::patch('/events/{event}/update', [EventsController::class, 'update'])->name('backend.events.update');
    Route::get('/events/{event}/delete', [EventsController::class, 'delete'])->name('backend.events.delete');


    // Study Abroad Routes
    Route::get('/studyabroads', [StudyAbroadController::class, 'index'])->name('backend.studyabroads');
    Route::get('/studyabroads/create', [StudyAbroadController::class, 'create'])->name('backend.studyabroads.create');
    Route::post('/studyabroads/store', [StudyAbroadController::class, 'store'])->name('backend.studyabroads.store');
    Route::get('/studyabroads/{studyabroad}/show', [StudyAbroadController::class, 'show'])->name('backend.studyabroads.show');
    Route::get('/studyabroads/{studyabroad}/edit', [StudyAbroadController::class, 'edit'])->name('backend.studyabroads.edit');
    Route::patch('/studyabroads/{studyabroad}/update', [StudyAbroadController::class, 'update'])->name('backend.studyabroads.update');
    Route::get('/studyabroads/{studyabroad}/delete', [StudyAbroadController::class, 'delete'])->name('backend.studyabroads.delete');


    // Test Preparations Routes
    Route::get('/testpreparations', [TestPreparationsController::class, 'index'])->name('backend.testpreparations');
    Route::get('/testpreparations/create', [TestPreparationsController::class, 'create'])->name('backend.testpreparations.create');
    Route::post('/testpreparations/store', [TestPreparationsController::class, 'store'])->name('backend.testpreparations.store');
    Route::get('/testpreparations/{testpreparation}/show', [TestPreparationsController::class, 'show'])->name('backend.testpreparations.show');
    Route::get('/testpreparations/{testpreparation}/edit', [TestPreparationsController::class, 'edit'])->name('backend.testpreparations.edit');
    Route::patch('/testpreparations/{testpreparation}/update', [TestPreparationsController::class, 'update'])->name('backend.testpreparations.update');
    Route::get('/testpreparations/{testpreparation}/delete', [TestPreparationsController::class, 'delete'])->name('backend.testpreparations.delete');

    // Update Password
    Route::get('/changepassword', [AccountController::class, 'password'])->name('backend.accounts.changepassword');
    Route::patch('/updatepassword', [AccountController::class, 'updateAccountPassword'])->name('backend.accounts.updatepassword');
    Route::get('/changeprofile', [AccountController::class, 'profile'])->name('backend.accounts.profile');
    Route::patch('/updateprofile', [AccountController::class, 'updateAccountProfile'])->name('backend.accounts.updateproflie');
    Route::get('/changeabout', [AboutController::class, 'aboutUs'])->name('backend.accounts.about');
    Route::patch('/updateabout/{about}', [AboutController::class, 'updateAboutUs'])->name('backend.accounts.updateabout');

    // Contacts Routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('backend.contacts');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('backend.contacts.create');
    Route::post('/contacts/store', [ContactController::class, 'store'])->name('backend.contacts.store');
    Route::get('/contacts/{contact}/show', [ContactController::class, 'show'])->name('backend.contacts.show');
    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('backend.contacts.edit');
    Route::patch('/contacts/{contact}/update', [ContactController::class, 'update'])->name('backend.contacts.update');
    Route::get('/contacts/{contact}/delete', [ContactController::class, 'delete'])->name('backend.contacts.delete');

    // Messages Routes
    Route::get('/messages', [MessagesController::class, 'index'])->name('backend.messages');
    Route::get('/messages/show/{id}', [MessagesController::class, 'show'])->name('backend.messages.show');
    Route::get('/messages/destroy/{id}', [MessagesController::class, 'destroy'])->name('backend.messages.destroy');

    // // Comments Routes
    // Route::get('/comments', [CommentsController::class, 'index'])->name('backend.comments');
    // Route::get('/comments/show/{id}', [CommentsController::class, 'show'])->name('backend.comments.show');
    // Route::get('/comments/destroy/{id}', [CommentsController::class, 'destroy'])->name('backend.comments.destroy');
    // Route::get('/comments/status/{id}', [CommentsController::class, 'status'])->name('backend.comments.status');
    // Route::get('/comments/blog/{id}', [CommentsController::class, 'showSingle'])->name('backend.comments.showsingle');

    // Gallery Routes
    Route::get('/gallery', [GalleryController::class, 'index'])->name('backend.gallery');
    Route::get('/gallery/manage', [GalleryController::class, 'manage'])->name('backend.gallery.manage');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('backend.gallery.create');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('backend.gallery.edit');
    Route::patch('/gallery/{id}/update', [GalleryController::class, 'update'])->name('backend.gallery.update');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('backend.gallery.store');
    Route::get('/gallery/{id}/delete', [GalleryController::class, 'destroy'])->name('backend.gallery.destroy');

    // Services Routes
    Route::get('/services', [ServicesController::class, 'index'])->name('backend.services');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('backend.services.create');
    Route::post('/services/store', [ServicesController::class, 'store'])->name('backend.services.store');
    Route::get('/services/show/{service}', [ServicesController::class, 'show'])->name('backend.services.show');
    Route::get('/services/edit/{service}', [ServicesController::class, 'edit'])->name('backend.services.edit');
    Route::patch('/services/update/{service}', [ServicesController::class, 'update'])->name('backend.services.update');
    Route::get('/services/destroy/{service}', [ServicesController::class, 'destroy'])->name('backend.services.destroy');

    // Team Routes
    Route::get('/teams', [TeamController::class, 'index'])->name('backend.teams');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('backend.teams.create');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('backend.teams.store');
    Route::get('/teams/show/{id}', [TeamController::class, 'show'])->name('backend.teams.show');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('backend.teams.edit');
    Route::patch('/teams/update/{id}', [TeamController::class, 'update'])->name('backend.teams.update');
    Route::get('/teams/destroy/{id}', [TeamController::class, 'destroy'])->name('backend.teams.destroy');


    // Results Routes
    Route::get('/results', [ResultsController::class, 'index'])->name('backend.results');
    Route::get('/results/show/{id}', [ResultsController::class, 'show'])->name('backend.results.show');
    Route::get('/results/edit/{id}', [ResultsController::class, 'edit'])->name('backend.results.edit');
    Route::patch('/results/update/{id}', [ResultsController::class, 'update'])->name('backend.results.update');


    // Slider Images
    Route::get('/sliders', [SliderImageController::class, 'sliderImage'])->name('backend.sliders');
    Route::get('/sliders/show/{id}', [SliderImageController::class, 'showImage'])->name('backend.sliders.show'); 
    Route::get('/sliders/create', [SliderImageController::class, 'createImage'])->name('backend.sliders.create');
    Route::post('/sliders/store', [SliderImageController::class, 'storeImage'])->name('backend.sliders.store');
    Route::get('/sliders/edit/{id}', [SliderImageController::class, 'editImage'])->name('backend.sliders.edit');
    Route::patch('/sliders/update/{id}', [SliderImageController::class, 'updateImage'])->name('backend.sliders.update');
    Route::get('/sliderimages/destroy/{id}', [SliderImageController::class, 'destroyImage'])->name('backend.sliders.destroy');

});

// Route::fallback(function () {
//     return view("errors.404");
// });


require __DIR__.'/auth.php';

Route::get('/register', function() {
    return redirect('/login');
});
