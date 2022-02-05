@extends('layouts.backend')

@section('title')
    Movies
@endsection

@section('page')
    Movies
@endsection

@section('action')
    Add Movie
@endsection

@section('route')
    {{route('movies.create')}}
@endsection

@section('content')

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Movies</h3>
            </div>
            <div class="block-content block-content-full">
                @include('movies.table')
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>


@endsection
