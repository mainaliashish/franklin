@extends('backend.layouts.app')
@section('main-content')
<br />
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card" style="background: lavender">
        <div class="card-header">
            <h3 class="card-title user-block text-bold">Results</h3>
        </div>
        <div class="result-block">
        <ul class="list-group results" style="margin-left: 20px;margin-right: 20px;margin-top:20px;">
            <li class="list-group-item">Result Number of Visa : <span class="text-green text-bold">{{ $result->number_of_visas_lodged }}</span></li>
            <li class="list-group-item"> Number of Students Enrolled : <span class="text-green text-bold">{{ $result->number_of_students_enrolled }}</span></li>
            <li class="list-group-item"> Number of Partner Universities : <span class="text-green text-bold">{{  $result->number_of_partner_universities }}</span>
            </li>
            <li class="list-group-item">Excellence Years : <span class="text-green text-bold">{{ $result->years_of_excellence }}</span></li>
            <li class="list-group-item"> Number of Teams : <span class="text-green text-bold">{{ $result->number_of_teams }}</span></li>
            <li class="list-group-item"> Number of Countries : <span class="text-green text-bold">{{ $result->number_of_countries }}</span></li>
        </ul>
        </div>
        <div class="post float-end" style="margin-top: 20px;padding:10px;">
            <div class="row">
                <a class="btn btn-warning btn-sm col-md-1 col-sm-2 ml-1 mr-1" style="color: white"
                    href="{{ route('backend.results') }}">
                    <i class="fas fa-undo-alt" style="color: white"></i>
                    Back
                </a>
                <a class="btn btn-info btn-sm col-md-1 col-sm-2 ml-2"
                    href="{{ route('backend.results.edit', $result->id) }}">
                    <i class="fa fa-pencil-alt">
                    </i>
                    Edit
                </a>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
</div>
@endsection

@section('headerElements')
<style>
    .post {
        border-bottom: 1px solid coral;
        color: black;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }

    .user-block.text-bold {
        font-size: 20px !important;
        color: indigo;
        text-shadow: 1px 1px lime;
        font-family: serif;
        font-style: italic;
    }

    .result-block {
        font-size: 20px;
    }

</style>
@endsection
