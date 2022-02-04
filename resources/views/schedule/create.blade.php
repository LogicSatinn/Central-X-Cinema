@extends('layouts.backend')

@section('title')
    Add Schedule
@endsection

@section('page')
    Add Schedule
@endsection


@section('action')
    Back
@endsection

@section('route')
    {{route('schedule.index')}}
@endsection


@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                <form method="post" action="{{route('schedule.store')}}">
                    @csrf

                    @include('schedule.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
