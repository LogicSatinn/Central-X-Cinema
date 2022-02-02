@extends('layouts.backend')

@section('title')
    Edit Movie
@endsection

@section('page')
    Edit Movie Details
@endsection

@section('content')
        <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                {!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'method' => 'post']) !!}
                @csrf
                @method('put')

                @include('movies.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
