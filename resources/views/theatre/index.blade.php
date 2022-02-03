@extends('layouts.backend')

@section('title')
    Theatre
@endsection

@section('page')
    Theatre
@endsection

@section('action')
    Add Theatre
@endsection

@section('route')
    {{route('theatre.create')}}
@endsection

@section('content')

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Theatre</h3>
            </div>
            <div class="block-content block-content-full">
                @include('theatre.table')
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>


@endsection
