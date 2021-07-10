@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Result'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::model($result, ['method'=>'PATCH', 'route' => ['backend.results.update', $result]]) !!}
            @include('backend.results._form', ['button_text' => 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection



