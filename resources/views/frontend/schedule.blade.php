@extends('frontend.layout')

@section('title')
    Schedule
@endsection

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="{{asset('frontend/images/banner/banner21.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title">Schedule</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two" action="{{ url('/scheduleQuery') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('frontend/images/ticket/city.png')}}" alt=" ticket" />
                    </div>
                    <span class="type">city</span>
                    {!! Form::select('region_id', $region, null,['class' => 'select-bar']) !!}
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('frontend/images/ticket/cinema.png')}}" alt=" ticket">
                    </div>
                    <span class="type">cinema</span>
                    {!! Form::select('theatre_id', $theatre, null,['class' => 'select-bar']) !!}
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('frontend/images/ticket/exp.png')}}" alt=" ticket">
                    </div>
                    <span class="type">Experience</span>
                    {!! Form::select('hall_experience', ['2D' => '2D', 'IMAX' => 'IMAX', '3D' => '3D'], null,['class' => 'select-bar']) !!}
                </div>
                <div class="form-group ">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper bg-five">
                        @foreach($schedules as $schedule)
                            <li>
                                <div class="movie-name">
                                    {{$schedule->showdate->format('l')}} {{$schedule->showtime}}
                                    <a href="{{url('ticket/seat_plan/'. $schedule->id)}}" class="custom-button back-button">Book Ticket</a>
                                </div>
                                <div class="movie-schedule">
                                    <div class="">
                                        Movie: {{$schedule->movie->name}}
                                        <br><br>
                                        Theatre: {{$schedule->hall->theatre->name}}
                                        <br><br>
                                        Hall: {{$schedule->hall->name}}
                                        <br>
                                        <br>
                                        Ticket Price: TZS {{number_format($schedule->price)}}/=
                                    </div>
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
