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
                                                                        alt="{{$movie->name}}" >
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
