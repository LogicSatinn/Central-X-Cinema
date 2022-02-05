@extends('layouts.backend')

@section('title')
    Add Genre
@endsection

@section('page')
    Add Genre
@endsection

@section('action')
    Back
@endsection

@section('route')
    {{route('genre.index')}}
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                <form method="post" action="{{route('genre.store')}}">
                    @csrf

                    @include('genre.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
