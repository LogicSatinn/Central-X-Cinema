@extends('layouts.backend')

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Hello, {{auth()->user()->name}}!</h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                    <label for="reportrange" class="sr-only">Date Ranges</label>
                                    <div id="reportrange" class="px-2 py-2 text-dark-dark">
                                        <span class="small"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card shadow mt-4 mb-4">
                        <div class="card-header">
                            <strong class="card-title">Edit Movie Details</strong>
                        </div>
                       {!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'method' => 'post']) !!}
{{--                        <form method="post" action="{{route('movies.update', $movie->id)}}">--}}
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            {!! Form::label('name', 'Name') !!}
                                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                        </div>

                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            {!! Form::label('release_date', 'Release Date') !!}
                                            {!! Form::date('release_date', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'row' => 3]) !!}
                            </div>

                            <div class="col-12">
                                <button type="submit" class="flex justify-center align-center btn mt-2 mb-2 btn-primary"
                                        style="margin-left: 39rem;"><span
                                        class="fe fe-arrow-right fe-16 mr-2"></span>Save
                                </button>
                            </div>
                        </form>
                    </div> <!-- / .card -->


                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->

@endsection
