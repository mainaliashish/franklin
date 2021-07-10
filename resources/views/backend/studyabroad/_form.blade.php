 <div class="form-group">
     {!! Form::label('country_name', 'Country Name : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('country_name', $studyabroad->country_name ?? '' , ['class' => 'form-control','placeholder'=>'Enter Country name']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('country_description', 'Country Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote_1" name="country_description" placeholder="">
     {{ $studyabroad->country_description ?? '' }}
     </textarea>
 </div>

 @if($studyabroad->country_image ?? '')
 <div class="form-group" id="CountryImageDiv">
     <img id="countryDBImage" src="{{ asset(imagePath($studyabroad->country_image, 'studyabroads')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif
 <div class="form-group">
 <img id="countryImageShow" src="#" alt="" style="" />
 </div>
 
{!! Form::label('country_image', ' Country Image : ', ['class' => ' font-weight-bold']) !!}
 <div class="custom-file mb-2">
     <input type="file" name="country_image" class="custom-file-input" id="countryImage">
     <label class="custom-file-label" for="chooseFile">Select Country Image</label>
 </div>

  <div class="form-group">
      {!! Form::label('education_system', 'Education System : ', ['class' => ' font-weight-bold']) !!}
      <textarea id="summernote_2" name="education_system" placeholder="">
      {{ $studyabroad->education_system ?? '' }}
      </textarea>
  </div>

 @if($studyabroad->education_system_image ?? '')
 <div class="form-group" id="EduImageDiv">
     <img src="{{ asset(imagePath($studyabroad->education_system_image, 'studyabroads')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif

<div class="form-group">
    <img id="EduImageShow" src="#" alt="" style="" />
</div>

{!! Form::label('education_system_image', 'Education System Image : ', ['class' => ' font-weight-bold']) !!}
  <div class="custom-file mb-2">
      <input type="file" name="education_system_image" class="custom-file-input" id="EduImage">
      <label class="custom-file-label" for="chooseFile">Select Education System Image</label>
  </div>

   <div class="form-group">
       {!! Form::label('cost_of_studies', 'Cost of Studies : ', ['class' => ' font-weight-bold']) !!}
       <textarea id="summernote_3" name="cost_of_studies" placeholder="">
       {{ $studyabroad->cost_of_studies ?? '' }}
       </textarea>
   </div>

   @if($studyabroad->cost_of_studies_image ?? '')
   <div class="form-group" id="CostImageDiv">
       <img src="{{ asset(imagePath($studyabroad->cost_of_studies_image, 'studyabroads')) }}" alt="" style="width: auto;" height="300px">
   </div>
    @endif
    <div class="form-group">
    <img id="CostImageShow" src="#" alt=""/>
    </div>

{!! Form::label('cost_of_studies_image', 'Cost of Studies Image : ', ['class' => ' font-weight-bold']) !!}
  <div class="custom-file mb-2">
      <input type="file" name="cost_of_studies_image" class="custom-file-input" id="CostImage">
      <label class="custom-file-label" for="chooseFile">Cost of Studies Image</label>
  </div>



   <div class="form-group">
       {!! Form::label('living_and_working', 'Living and Working : ', ['class' => ' font-weight-bold']) !!}
       <textarea id="summernote_4" name="living_and_working" placeholder="">
       {{ $studyabroad->living_and_working ?? '' }}
       </textarea>
   </div>

    <div class="form-group">
        {!! Form::label('visa_procedures', 'Visa Procedures : ', ['class' => ' font-weight-bold']) !!}
        <textarea id="summernote_5" name="visa_procedures" placeholder="">
        {{ $studyabroad->visa_procedures ?? '' }}
        </textarea>
    </div>

    <div class="form-group">
        {!! Form::label('popular_universities', 'Popular Universities : ', ['class' => ' font-weight-bold']) !!}
        <textarea id="summernote_6" name="popular_universities" placeholder="">
        {{ $studyabroad->popular_universities ?? '' }}
        </textarea>
    </div>

   <div class="form-group">
       {!! Form::label('offered_courses', 'Courses Offered : ', ['class' => ' font-weight-bold']) !!}
       <textarea id="summernote_7" name="offered_courses" placeholder="">
       {{ $studyabroad->offered_courses ?? '' }}
       </textarea>
   </div>


{!! Form::label('SEO', 'For Better SEO ', ['class' => 'font-weight-bold']) !!}

  <div class="form-group">
     {!! Form::label('meta_title', 'Blog Meta title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_title', $blog->meta_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta title']) !!}
 </div>

   <div class="form-group">
     {!! Form::label('meta_tags', 'Blog Meta tags : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_tags', $blog->meta_tags ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta tags']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('meta_description', 'Blog Meta description : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_description', $blog->meta_description ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta description']) !!}
 </div>



 <div class="form-group">
     <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
     <a href="{{ route('backend.studyabroads') }}" class="btn btn-primary float-left">Cancel</a>
 </div>

