@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Create Study Abroad'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::open(array('method'=>'POST','route' => 'backend.studyabroads.store', 'files'=>true)) !!}
            @include('backend.studyabroad._form', ['button_text' => 'Create Study Abroad'])
            {!! Form::close() !!}
        </div>
    </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('headerElements')
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('footerelements')
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('backend/custom/study.js') }}"></script>
@endsection

