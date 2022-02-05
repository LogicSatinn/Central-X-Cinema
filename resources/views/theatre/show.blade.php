@extends('layouts.backend')

@section('title')
    {{$theatre->name}}
@endsection

@section('page')
    {{$theatre->name}}
@endsection

@section('action')
    Back
@endsection

@section('route')
    {{ route('theatre.index') }}
@endsection

@section('content')

<div class="content">
 @include('theatre.halls_table')

 @include('theatre.halls_schedule')

</div>

@endsection
