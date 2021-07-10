<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(8);
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
        $event = new Event;

        $input = $request->only(['title', 'description', 'is_featured', 'event_date', 'meta_title', 'meta_tags', 'meta_description']);
        $input['slug'] = Str::slug($input['title']);
        $input['is_featured'] = $event -> getFeatured($input['is_featured'] ?? '');
        
        $image = $request->file('image');
        $path = 'events';

        if($image) {
            $input['image'] = uploadImage($image, $path, 1181, 563);
        }

        $event = $event->create($input);

        if($event) {
           session()->flash('success', 'Event created Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('backend.events.show')
                ->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $model = new Event;
        
        $input = $request->only(['title', 'description', 'is_featured', 'event_date', 'meta_title', 'meta_tags', 'meta_description']);

        $input['slug'] = Str::slug($input['title']);

        $input['is_featured'] = $model->getFeatured($input['is_featured'] ?? '');

        $image = $request->file('image');
        $path = 'events';

        $input['image'] = updateNewImageOrKeepOld($image, $event->image, $path, 1181, 563);

        $result = $event->update($input);

        if($result) {
             session()->flash('success', 'Event Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Event $event)
    {
      $result = $event->delete();
      
      if($result) {
             session()->flash('success', 'Event deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.events');
    }
}
