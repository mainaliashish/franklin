<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TestPreparation;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTestRequest;
use App\Http\Requests\UpdateTestRequest;

class TestPreparationsController extends Controller
{
    public function index()
    {
        $testpreparations = TestPreparation::latest()->paginate(5);
        return view('backend.testpreparations.index', compact('testpreparations'));
    }

    public function create()
    {
        return view('backend.testpreparations.create');
    }

    public function store(CreateTestRequest $request)
    {
        $input = $request->only(['test_name','test_description','test_modules','test_results', 'meta_title', 'meta_tags', 'meta_description']);
        $testpreparation = new TestPreparation;
        $input['slug'] = Str::slug($input['test_name']);


        $test_image = $request->file('test_image');
        $test_module_image = $request->file('test_module_image');

        $path = 'testpreparations';
    
        if($test_image OR $test_module_image) {
            $input['test_image'] = uploadImage($test_image, $path, 1181, 563);
            dd($input['test_image']);
            $input['test_module_image'] = uploadImage($test_module_image, $path, 1181, 563);
        }

        $result = $testpreparation->create($input);

        if($result) {
           session()->flash('success', 'Test Preparation information created Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.testpreparations');

    }

    public function edit(TestPreparation $testpreparation)
    {
        return view('backend.testpreparations.edit', compact('testpreparation'));
    }

    public function update(UpdateTestRequest $request, TestPreparation $testpreparation)
    {
        $input = $request->only(['test_name','test_description','test_modules','test_results', 'meta_title', 'meta_tags', 'meta_description']);
        $input['slug'] = Str::slug($input['test_name']);
        
        $test_image = $request->file('test_image');
        $test_module_image = $request->file('test_module_image');

        $path = 'testpreparations';
        $input['test_image'] = updateNewImageOrKeepOld($test_image, $testpreparation->test_image,$path, 1181, 563); 
        $input['test_module_image'] = updateNewImageOrKeepOld($test_module_image, $testpreparation->education_system_image, $path, 1181, 563);
        $result = $testpreparation->update($input);
        
        if($result) {
           session()->flash('success', 'Test Information updated Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.testpreparations');
    }

    public function show(TestPreparation $testpreparation)
    {
        return view('backend.testpreparations.show', compact('testpreparation'));
    }

    public function delete(TestPreparation $testpreparation)
    {
        $result = $testpreparation->delete();

         if($result) {
            session()->flash('success', 'Test Information Deleted Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.testpreparations') ;
    }
}
