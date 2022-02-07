@extends('frontend.layout')

@section('title')
    {{$movie->name}}
@endsection

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner bg_img" data-background="{{asset('frontend/images/banner/banner14.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    @if($movie->getFirstMediaUrl('pictures') == null)
                        <img src="{{asset('frontend/images/movie/venus.jpg')}}" alt="movie">
                    @else
                        <img src="{{asset($movie->getFirstMediaUrl('pictures'))}}"
                             alt="{{$movie->name}}" style="width: 275px; height: 396px;">
                    @endif
                    <a href="#" class="video-popup">
                        <img src="{{asset('frontend/images/movie/video-button.png')}}" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title">{{$movie->name}}</h3>
                    <div class="tags">
                        @foreach($movie->language as $language)
                            <a href="#0">{{$language->name}}</a>
                        @endforeach
                    </div>
                    @foreach($movie->genre as $genre)
                        <a href="#0" class="button">{{$genre->name}}</a>
                    @endforeach
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>{{$movie->release_date->format('d M Y')}}</span>
                            </div>
                            <div class="item">
                                <i class="far fa-clock"></i><span>{{$movie->runtime}}</span>
                            </div>
                        </div>
                        <ul class="social-share">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    @include('frontend.inc.book_section')

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-tags">
                        <ul>
                            <li>
                                <a href="#0">2D</a>
                            </li>
                            <li>
                                <a href="#0">imax 2D</a>
                            </li>
                            <li>
                                <a href="#0">3D</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    summary
                                </li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <h5 class="sub-title">Synopsis</h5>
                                        <p>{{$movie->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper bg-five">
                        @foreach($movieSchedule as $schedule)
                            <li>
                                <div class="movie-name">
                                    {{$schedule->showdate->format('l')}} {{$schedule->showtime}}
                                </div>
                                <div class="movie-schedule">
                                    <div class="">
                                        Theatre: {{$schedule->hall->theatre->name}}
                                        <br><br>
                                        Hall: {{$schedule->hall->name}}
                                        <br>
                                        <br>
                                        Ticket Price: Tsh {{number_format($schedule->price)}}
                                    </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

@endsection
