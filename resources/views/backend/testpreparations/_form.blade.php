 <div class="form-group">
     {!! Form::label('test_name', 'Country Name : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('test_name', $testpreparation->test_name ?? '' , ['class' => 'form-control','placeholder'=>'Enter
     Test name']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('test_description', 'Test Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote_1" name="test_description" placeholder="">
     {{ $testpreparation->test_description ?? '' }}
     </textarea>
 </div>

 @if($testpreparation->test_image ?? '')
 <div class="form-group" id="CountryImageDiv">
     <img id="countryDBImage" src="{{ asset(imagePath($testpreparation->test_image, 'testpreparations')) }}" alt=""
         style="width: auto;" height="300px">
 </div>
 @endif
 <div class="form-group">
     <img id="countryImageShow" src="#" alt="" style="" />
 </div>

 {!! Form::label('test_image', ' Test Image : ', ['class' => ' font-weight-bold']) !!}
 <div class="custom-file mb-2">
     <input type="file" name="test_image" class="custom-file-input" id="countryImage">
     <label class="custom-file-label" for="chooseFile">Select Test Image</label>
 </div>

 <div class="form-group">
     {!! Form::label('test_modules', 'Education System : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote_2" name="test_modules" placeholder="">
     {{ $testpreparation->test_modules ?? '' }}
     </textarea>
 </div>

 @if($testpreparation->test_module_image ?? '')
 <div class="form-group" id="EduImageDiv">
     <img src="{{ asset(imagePath($testpreparation->test_module_image, 'testpreparations')) }}" alt=""
         style="width: auto;" height="300px">
 </div>
 @endif

 <div class="form-group">
     <img id="EduImageShow" src="#" alt="" style="" />
 </div>

 {!! Form::label('test_module_image', 'Test Module Image : ', ['class' => ' font-weight-bold']) !!}
 <div class="custom-file mb-2">
     <input type="file" name="test_module_image" class="custom-file-input" id="EduImage">
     <label class="custom-file-label" for="chooseFile">Select Test Module Image</label>
 </div>

 <div class="form-group">
     {!! Form::label('test_results', 'Test Results : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote_3" name="test_results" placeholder="">
     {{ $testpreparation->test_results ?? '' }}
     </textarea>
 </div>

 {!! Form::label('SEO', 'For Better SEO ', ['class' => 'font-weight-bold']) !!}

 <div class="form-group">
     {!! Form::label('meta_title', 'Blog Meta title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_title', $blog->meta_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta
     title']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('meta_tags', 'Blog Meta tags : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_tags', $blog->meta_tags ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta
     tags']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('meta_description', 'Blog Meta description : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_description', $blog->meta_description ?? '' , ['class' => 'form-control','placeholder'=>'Enter
     blog meta description']) !!}
 </div>


 <div class="form-group">
     <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
     <a href="{{ route('backend.testpreparations') }}" class="btn btn-primary float-left">Cancel</a>
 </div>
