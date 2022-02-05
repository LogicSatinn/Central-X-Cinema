@extends('layouts.backend')

@section('title')
    Add Hall
@endsection

@section('page')
    Add Hall
@endsection


@section('action')
    Back
@endsection

@section('route')
    {{route('hall.index')}}
@endsection


@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                <form method="post" action="{{route('hall.store')}}">
                    @csrf

                    @include('hall.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
