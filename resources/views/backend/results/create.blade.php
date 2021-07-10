@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Create Results'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::open(array('method'=>'POST','route' => 'backend.results.store', 'files'=>true)) !!}
            @include('backend.results._form', ['button_text' => 'Create result'])
            {!! Form::close() !!}
        </div>
    </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

