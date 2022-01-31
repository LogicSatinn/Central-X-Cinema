@extends('layouts.backend')

@section('title')
    {{$movie->name}}
@endsection

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center my-3">
                        <div class="col">
                            <h2 class="page-title">{{$movie->name}}</h2>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                            </button>
                            <form method="post" action="{{route('movies.destroy', $movie->id)}}">
                                @csrf
                                @method('delete')
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addGenre">Add Genre</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addPicture">Add Movie
                                        Picture</a>
                                    <a class="dropdown-item" href="{{route('movies.edit', $movie->id)}}">Edit {{$movie->name}}</a>
                                    <button class="dropdown-item" type="submit">Delete {{$movie->name}}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            @if($movie->getFirstMediaUrl('pictures') == null)
                            <div class="avatar avatar-xl">
                                <img src="{{asset('assets/avatars/avatar.jpg')}}" alt="..."
                                     class="avatar-img rounded-circle">
                            </div>
                            @else
                                <div class="avatar avatar-xl">
                                    <img src="{{asset($movie->getFirstMediaUrl('pictures'))}}" alt="{{$movie->name}}"
                                         class="avatar-img rounded-circle">
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <p class="small mb-0 text-muted">{{$movie->release_date->format('d M Y')}}</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="text-muted">{{$movie->description}}. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mb-3">Last payment</h6>
                    <table class="table table-borderless table-striped">
                        <thead>
                        <tr role="row">
                            <th>ID</th>
                            <th>Purchase Date</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">1331</th>
                            <td>2020-12-26 01:32:21</td>
                            <td>$16.9</td>
                            <td>Paypal</td>
                            <td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->


        <div class="modal fade" id="addGenre" tabindex="-1" role="dialog" aria-labelledby="addGenre" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGenre">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn mb-2 btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addPicture" tabindex="-1" role="dialog" aria-labelledby="addPicture" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPicture">Add Movie Picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['route' => ['addPicture', $movie->id], 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                            <div class="form-group">
                                <label class="col-form-label">Image:</label>
                                {!! Form::file('image', null,['class' => 'form-control']) !!}
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn mb-2 btn-primary">Done</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main> <!-- main -->

@endsection
