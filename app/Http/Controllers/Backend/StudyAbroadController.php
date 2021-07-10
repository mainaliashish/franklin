<?php

namespace App\Http\Controllers\Backend;


use App\Models\StudyAbroad;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateStudyAbroadRequest;
use App\Http\Requests\UpdateStudyAbroadRequest;

class StudyAbroadController extends Controller
{
    private function getTitle()
    {
      return $title = 'Study Abroad';
    }

    public function index()
    {
        // dd($this->getTitle());
        $studyabroads = StudyAbroad::latest()->paginate(8);
        return view('backend.studyabroad.index', compact('studyabroads'));
    }

    public function create()
    {
        return view('backend.studyabroad.create');
    }

    public function store(CreateStudyAbroadRequest $request)
    {
        $input = $request->only([
                    'country_name',
                    'country_description',
                    'education_system',
                    'cost_of_studies',
                    'living_and_working',
                    'visa_procedures',
                    'offered_courses',
                    'popular_universities'
                    , 'meta_title', 'meta_tags', 'meta_description'
                ]);

        $studyabroad = new StudyAbroad;

        $input['slug'] = Str::slug($input['country_name']);

        $country_image = $request->file('country_image');
        $education_system_image = $request->file('education_system_image');
        $cost_of_studies_image = $request->file('cost_of_studies_image');
        $path = 'studyabroads';

        if($country_image OR $education_system_image OR $cost_image ) {
            $input['country_image'] = uploadImage($country_image, $path, 1181, 563);
            $input['education_system_image'] = uploadImage($education_system_image, $path, 1181, 563);
            $input['cost_of_studies_image'] = uploadImage($cost_of_studies_image, $path, 1181, 563);
        }

        $studyabroad = $studyabroad->create($input);

        if($studyabroad) {
           session()->flash('success', 'Study Abroad created Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.studyabroads');
    }

    public function edit(StudyAbroad $studyabroad)
    {
        return view('backend.studyabroad.edit', compact('studyabroad'));
    }

    public function update(UpdateStudyAbroadRequest $request, StudyAbroad $studyabroad)
    {
        $input = $request->only([
                    'country_name',
                    'country_description',
                    'education_system',
                    'cost_of_studies',
                    'living_and_working',
                    'visa_procedures',
                    'offered_courses',
                    'popular_universities'
                    , 'meta_title', 'meta_tags', 'meta_description'
                ]);

        $input['slug'] = Str::slug($input['country_name']);

        $country_image = $request->file('country_image');
        $education_system_image = $request->file('education_system_image');
        $cost_of_studies_image = $request->file('cost_of_studies_image');

        $path = 'studyabroads';
        $input['country_image'] = updateNewImageOrKeepOld($country_image, $studyabroad->country_image,$path, 1181, 563); 
        $input['education_system_image'] = updateNewImageOrKeepOld($education_system_image, $studyabroad->education_system_image, $path, 1181, 563);
        $input['cost_of_studies_image'] = updateNewImageOrKeepOld($cost_of_studies_image, $studyabroad->cost_of_studies_image,$path, 1181, 563);
        $result = $studyabroad->update($input);
        
        if($result) {
           session()->flash('success', 'Study Abroad updated Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.studyabroads');
    }

    public function show(StudyAbroad $studyabroad)
    {
        return view('backend.studyabroad.show', compact('studyabroad'));
    }

    public function delete(StudyAbroad $studyabroad)
    {
        $result = $studyabroad->delete();

         if($result) {
            session()->flash('success', 'Study Abroad Deleted Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.studyabroads') ;
    }
}
