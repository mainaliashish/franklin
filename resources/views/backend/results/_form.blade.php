 <div class="form-group">
     {!! Form::label('number_of_visas_lodged', 'Number of Visas Lodged : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('number_of_visas_lodged', $result->number_of_visas_lodged ?? '' , ['class' => 'form-control','placeholder'=>'Enter number of visas lodged']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('number_of_students_enrolled', 'Number of Students Enrolled : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('number_of_students_enrolled', $result->number_of_students_enrolled ?? '' , ['class' => 'form-control','placeholder'=>'Enter number of students enrolled']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('number_of_partner_universities', 'Number of Partner Universities : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('number_of_partner_universities', $result->number_of_partner_universities ?? '' , ['class' => 'form-control','placeholder'=>'Enter number of visas lodged']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('years_of_excellence', 'Excellence Years : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('years_of_excellence', $result->years_of_excellence ?? '' , ['class' => 'form-control','placeholder'=>'Enter years of excellence']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('number_of_teams', 'Number of Teams : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('number_of_teams', $result->number_of_teams ?? '' , ['class' => 'form-control','placeholder'=>'Enter number of teams']) !!}
 </div>

   <div class="form-group">
     {!! Form::label('number_of_countries', 'Number of Countries : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('number_of_countries', $result->number_of_countries ?? '' , ['class' => 'form-control','placeholder'=>'Enter number of countries']) !!}
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
     <a href="{{ route('backend.results') }}" class="btn btn-primary float-left">Cancel</a>
 </div>

