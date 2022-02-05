@extends('layouts.backend')

@section('title')
    Add Movie
@endsection

@section('page')
    Add Movie
@endsection


@section('action')
    Back
@endsection

@section('route')
    {{route('movies.index')}}
@endsection


@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                <form method="post" action="{{route('movies.store')}}">
                    @csrf

                    @include('movies.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
