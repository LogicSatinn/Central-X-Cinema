@extends('layouts.backend')

@section('title')
    Add Theatre
@endsection

@section('page')
    Add Theatre
@endsection


@section('action')
    Back
@endsection

@section('route')
    {{route('theatre.index')}}
@endsection


@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                <form method="post" action="{{route('theatre.store')}}">
                    @csrf

                    @include('theatre.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
