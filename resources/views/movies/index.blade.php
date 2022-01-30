@extends('layouts.backend')

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Movies</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>No:</th>
                                            <th>Name</th>
                                            <th>Genre</th>
                                            <th>Release Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($movies as $movie)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label"></label>
                                                </div>
                                            </td>
                                            <td>{{$movie->id}}</td>
                                            <td>{{$movie->name}}</td>
                                            <td>{{$movie->genre}}</td>
                                            <td>{{($movie->release_date)->format('d M, Y')}}</td>
                                            <td>
                                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <form method="post" action="{{route('movies.destroy', $movie->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{route('movies.edit', $movie->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('movies.show', $movie->id)}}">View</a>
                                                    <button class="dropdown-item" type="submit">Remove</button>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>

@endsection
