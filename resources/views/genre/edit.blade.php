@extends('layouts.backend')

@section('title')
    Edit Genre
@endsection

@section('page')
    Edit Genre
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
                {!! Form::model($genre, ['route' => ['genre.update', $genre->id], 'method' => 'post']) !!}
                @csrf
                @method('put')

                @include('genre.fields')
                </form>
            </div>
        </div>
    </div>

@endsection
