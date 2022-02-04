@extends('layouts.backend')

@section('title')
    Schedule
@endsection

@section('page')
    Schedule
@endsection

@section('action')
    Add Schedule
@endsection

@section('route')
    {{route('schedule.create')}}
@endsection

@section('content')

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Schedule</h3>
            </div>
            <div class="block-content block-content-full">
                @include('schedule.table')
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>


@endsection
