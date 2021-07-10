<?php

namespace App\Http\Controllers\Backend;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultsController extends Controller
{

    public function index()
    {
        $result = Result::first();
        return view('backend.results.index', compact('result'));
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
    public function store($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::first();
        return view('backend.results.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this -> validate($request, [
        'number_of_visas_lodged' => 'required|numeric', 
        'number_of_students_enrolled' => 'required|numeric',
        'number_of_partner_universities' => 'required|numeric',
        'years_of_excellence' => 'required|numeric',
        'number_of_teams' => 'required|numeric',
        'number_of_countries' => 'required|numeric'
       ]);

       $input = $request->only([
        'number_of_visas_lodged', 
        'number_of_students_enrolled',
        'number_of_partner_universities',
        'years_of_excellence',
        'number_of_teams',
        'number_of_countries',
        'meta_title', 'meta_tags', 'meta_description'
       ]);
        $status = Result::first();
        $result = $status->update($input);
        if($result) {
             session()->flash('success', 'Result Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }
        return redirect() -> route('backend.results');
    }

}
