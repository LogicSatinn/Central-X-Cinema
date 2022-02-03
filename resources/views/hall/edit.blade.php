@extends('layouts.backend')

@section('title')
    Edit Hall
@endsection

@section('page')
    Edit Hall Details
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                {!! Form::model($hall, ['route' => ['hall.update', $hall->id], 'method' => 'post']) !!}
                @csrf
                @method('put')

                @include('hall.fields')

                </form>
            </div>
        </div>
    </div>

@endsection
