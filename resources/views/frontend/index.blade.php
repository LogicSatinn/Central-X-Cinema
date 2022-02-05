@extends('frontend.layout')

@section('title')
    Home
@endsection

@section('content')
    @include('frontend.inc.banner')

    @include('frontend.inc.ticket_search')

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <div class="widget-1 widget-check">
                        <div class="widget-header">
                            <h5 class="m-title">Filter By</h5> <a href="#0" class="clear-check">Clear All</a>
                        </div>
                        <div class="widget-1-body">
                            <h6 class="subtitle">Language</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang4"><label for="lang4">English</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang5"><label for="lang5">Multiple
                                        Language</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang5"><label for="lang5">Swahili</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang1"><label for="lang1">Tamil</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang3"><label for="lang3">Hindi</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang3"><label for="lang3">Arabic</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">experience</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode1"><label for="mode1">2d</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode2"><label for="mode2">3d</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode2"><label for="mode2">imax</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">genre</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre1"><label for="genre1">thriller</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre2"><label for="genre2">horror</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre3"><label for="genre3">drama</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre4"><label for="genre4">romance</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre5"><label for="genre5">action</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre6"><label for="genre6">comedy</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre7"><label for="genre7">romance</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre8"><label
                                        for="genre8">animation</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre9"><label for="genre9">sci-fi</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre10"><label
                                        for="genre10">adventure</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left">
                                    <div class="item">
                                        <span class="show">Sort By :</span>
                                        <select class="select-bar">
                                            <option value="showing">now showing</option>
                                            <option value="exclusive">exclusive</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="grid-button tab-menu">
                                    <li class="active">
                                        <i class="fas fa-th"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-bars"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="row mb-10 justify-content-center">

                                        @foreach ($movies->chunk(1) as $chunk)
                                            @foreach($chunk as $movie)
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="movie-grid">
                                                        <div class="movie-thumb c-thumb">
                                                            <a href="{{route('movieDetails', $movie->id)}}">
                                                                @if($movie->getFirstMediaUrl('pictures') == null)
                                                                    <img src="{{asset('frontend/images/movie/movie01.jpg')}}"
                                                                         alt="{{ $movie->name }}" >
                                                                @else
                                                                    <img
                                                                        src="{{asset($movie->getFirstMediaUrl('pictures'))}}"
                                                                        alt="{{$movie->name}}" style="width: 255px; height: 357px;">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="movie-content bg-one">
                                                            <h5 class="title m-0">
                                                                <a href="{{route('movieDetails', $movie->id)}}">{{ $movie->name }}</a>
                                                            </h5>
                                                            <ul class="movie-rating-percent">
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{asset('frontend/images/movie/tomato.png')}}"
                                                                             alt="movie">
                                                                    </div>
                                                                    <span class="content">88%</span>
                                                                </li>
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{asset('frontend/images/movie/cake.png')}}"
                                                                             alt="movie">
                                                                    </div>
                                                                    <span class="content">88%</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach

                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="movie-area mb-10">
                                    @foreach ($movies as $movie)
                                        <div class="movie-list">
                                            <div class="movie-thumb c-thumb">
                                                <a href="{{route('movieDetails', $movie->id)}}" class="w-100 bg_img h-100"
                                                   data-background="{{ asset('frontend/images/movie/movie01.jpg') }}">

                                                    @if($movie->getFirstMediaUrl('pictures') == null)
                                                        <img class="d-sm-none"
                                                             src="{{ asset('frontend/images/movie/movie01.jpg') }}"
                                                             alt="{{ $movie->name }}">
                                                    @else
                                                        <img
                                                             src="{{asset($movie->getFirstMediaUrl('pictures'))}}"
                                                             alt="{{$movie->name}}" >
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title">
                                                    <a href="{{route('movieDetails', $movie->id)}}">{{ $movie->name }}</a>
                                                </h5>
                                                <p class="duration">{{ $movie->runtime }}</p>
                                                <div class="movie-tags">
                                                    @foreach($movie->genre as $genre)
                                                        <a href="#0">{{$genre->name}}</a>
                                                    @endforeach
                                                </div>
                                                <div class="release">
                                                    <span>Release Date : </span> <a
                                                        href="#0"> {{ $movie->release_date->format('M d, Y') }}</a>
                                                </div>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('frontend/images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('frontend/images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                                <div class="book-area">
                                                    <div class="book-ticket">
                                                        <div class="react-item">
                                                            <a href="#0">
                                                                <div class="thumb">
                                                                    <img src="{{asset('frontend/images/icons/heart.png')}}"
                                                                         alt="icons">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="react-item mr-auto">
                                                            <a href="#0">
                                                                <div class="thumb">
                                                                    <img src="{{asset('frontend/images/icons/book.png')}}"
                                                                         alt="icons">
                                                                </div>
                                                                <span>book ticket</span>
                                                            </a>
                                                        </div>
                                                        <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                                <div class="thumb">
                                                                    <img src="{{asset('frontend/images/icons/play-button.png')}}"
                                                                         alt="icons">
                                                                </div>
                                                                <span>watch trailer</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area text-center">
                            {{ $movies->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

@endsection
