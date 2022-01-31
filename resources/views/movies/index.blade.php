@extends('layouts.backend')

@section('title')
    Movies
@endsection

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                        <h2 class="mb-2 page-title">Movies</h2>
                    <div class="col-12 text-right">
                        <a href="{{route('movies.create')}}" class="btn btn-primary ">
                            Create
                        </a>
                    </div>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    @include('movies.table')
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>


@endsection
