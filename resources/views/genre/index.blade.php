@extends('layouts.backend')

@section('title')
    Genre
@endsection

@section('page')
    Genre
@endsection

@section('action')
    Add Genre
@endsection

@section('route')
    {{route('genre.create')}}
@endsection


@section('content')


    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Genre</h3>
            </div>
            <div class="block-content block-content-full">
                @include('genre.table')
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>


@endsection
