@extends('layouts.backend')

@section('title')
    Edit Schedule
@endsection

@section('page')
    Edit Schedule Details
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                {!! Form::model($schedule, ['route' => ['schedule.update', $schedule->id], 'method' => 'post']) !!}
                @csrf
                @method('put')

                @include('schedule.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
