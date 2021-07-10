@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Test Information'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::model($testpreparation, ['method'=>'PATCH', 'route' => ['backend.testpreparations.update', $testpreparation], 'files'=>true]) !!}
            @include('backend.testpreparations._form', ['button_text' => 'Save Changes'])
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

