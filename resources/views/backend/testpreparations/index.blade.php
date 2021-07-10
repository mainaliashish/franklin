@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Test Preparations'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Test Preparations</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            @if(isset($testpreparations) && $testpreparations->count() > 0)
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Test Name
                        </th>
                        <th class="text-center" style="width: 20%">
                            Image
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testpreparations as $testpreparation)
                    <tr>
                        <td>
                            {{ Str::limit($testpreparation->test_name, 46, '....') }}
                        </td>
                        <td>
                            <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($testpreparation->test_image, 'testpreparations')) }}">
                        </td>
                        <td>
                            {!! Str::limit($testpreparation->test_description, 46, '....') !!}
                        </td>

                        <td class="project-actions">
                            <a class="btn btn-primary btn-sm" href="{{ route('backend.testpreparations.show', $testpreparation) }}">
                                <i class="far fa-eye"></i>
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('backend.testpreparations.edit', $testpreparation) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('backend.testpreparations.delete', $testpreparation) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="container">
                <ul class="list-group">
                    <div class="alert alert-danger mt-2">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        You do not have any study abroad yet.
                    </div>
                </ul>
                <a class="btn btn-success btn-sm mb-2" href="{{ route('backend.testpreparations.create') }}">Add a Country</a>
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('backend.dashboard') }}">
                    <i class="fas fa-undo-alt" style="color: white"></i>
                    Back
                </a>
            </div>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
    {{ $testpreparations->links() }}
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection

