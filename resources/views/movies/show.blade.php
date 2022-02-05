@extends('layouts.backend')

@section('title')
    {{$movie->name}}
@endsection

@section('page')
    {{$movie->name}}
@endsection

@section('action')
    Add Movie
@endsection

@section('route')
    {{ route('movies.create') }}
@endsection


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center my-3">
                    <div class="col">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-hero-primary dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Action
                        </button>
                        <form method="post" action="{{route('movies.destroy', $movie->id)}}">
                            @csrf
                            @method('delete')
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addGenre">Link
                                    Genre</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addLanguage">Add
                                    Language</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addPicture">Add
                                    Movie
                                    Picture</a>
                                <a class="dropdown-item"
                                   href="{{route('movies.edit', $movie->id)}}">Edit {{$movie->name}}</a>
                                <button class="dropdown-item" type="submit">Delete {{$movie->name}}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-white" style="border-radius: 1em;">
                    <div class="row">
                        <div class="col-md-4">
                            @if($movie->getFirstMediaUrl('pictures') == null)
                                    <img class="img-fluid p-2" src="{{asset('assets/avatars/avatar.jpg')}}" alt="...">
                            @else
                                    <img class="img-fluid p-2" src="{{asset($movie->getFirstMediaUrl('pictures'))}}"
                                         alt="{{$movie->name}}">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-2">
                                <h5><span
                                        class="badge badge-dark">@foreach($movie->genre as $genre) {{$genre->name}} @endforeach</span>
                                </h5>
                                <h5><span
                                        class="badge badge-dark">@foreach($movie->language as $language) {{$language->name}} @endforeach</span>
                                </h5>
                                <p class="small mb-0 text-muted">Released
                                    on: {{$movie->release_date->format('d M Y')}}</p>
                                <p class="normal-case mb-3"><span class="badge badge-success">Now Showing</span></p>
                                <p class="card-text">
                                    {{$movie->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @include('movies.show_table')

            </div> <!-- /.col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->


    <div class="modal fade" id="addGenre" tabindex="-1" role="dialog" aria-labelledby="addGenre" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGenre">Link Genre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => ['linkGenre', $movie->id]]) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Genre:</label>
                        {!! Form::select('genre_id', $genre, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="movie_id" value="{{$movie->id}}"
                               placeholder="{{$movie->name}}" hidden>
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

    <div class="modal fade" id="addLanguage" tabindex="-1" role="dialog" aria-labelledby="addLanguage" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLanguage">Add Language</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => ['addLanguage', $movie->id]]) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Language:</label>
                        {!! Form::select('language_id', $language, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="movie_id" value="{{$movie->id}}" hidden>
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

    <div class="modal fade" id="addPicture" tabindex="-1" role="dialog" aria-labelledby="addPicture"
         aria-hidden="true">
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
