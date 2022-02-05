@extends('layouts.backend')

@section('title')
    Edit Theatre
@endsection

@section('page')
    Edit Theatre Details
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                {!! Form::model($theatre, ['route' => ['theatre.update', $theatre->id], 'method' => 'post']) !!}
                @csrf
                @method('put')

                @include('theatre.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
