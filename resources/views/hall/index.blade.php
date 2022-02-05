@extends('layouts.backend')

@section('title')
    Halls
@endsection

@section('page')
    Halls
@endsection

@section('action')
    Add Hall
@endsection

@section('route')
    {{route('hall.create')}}
@endsection

@section('content')

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Halls</h3>
            </div>
            <div class="block-content block-content-full">
                @include('hall.table')
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>


@endsection
