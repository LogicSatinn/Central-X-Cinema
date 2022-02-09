@extends('frontend.layout')

@section('title')
    Seat Plan
@endsection

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner"
        data-background="{{ asset('frontend/images/banner/banner04.jpg') }}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">{{ $schedule->movie->name }}</h3>
                    <div class="tags">
                        <a href="#0">{{ $schedule->hall->theatre->name }} </a>
                        <a href="#0">{{ $schedule->hall->name }} </a>
                        <br>
                        <a href="#0"> {{ $schedule->hall->experience }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="{{ url()->previous() }}" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">{{ $schedule->showdate->format('l, d M Y') }}</span>
                    <select class="select-bar">
                        <option value="sc1">{{ $schedule->showtime }}</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">screen</h4>
                <div class="screen-thumb">
                    <img src="{{ asset('frontend/images/movie/screen-thumb') }}.png" alt="movie">
                </div>
                <h5 class="subtitle">silver plus</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <ul class="seat--area">
                                <li class="front-seat">
                                    @foreach ($reservations as $seats)
                                        <ul style="float: left;">
                                            <li class="single-seat">
                                                <a href="#" data-toggle="modal" data-target="#bookSeat">
                                                    <img src="{{ asset('frontend/images/movie/seat01-free.png') }}"
                                                    alt="seat">
                                                <span class="sit-num">{{ $seats->seat_number }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="proceed-book bg_img" data-background="{{ asset('frontend/images/movie/movie-bg') }}-proceed.jpg">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>ticket price per seat</span>
                        <h3 class="title">Tsh {{ number_format($schedule->price) }}/=</h3>
                    </div>
                    <div class="book-item">
                        <button type="submit" class="custom-button">proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    <div class="modal fade" id="bookSeat" tabindex="-1" role="dialog" aria-labelledby="bookSeat" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    {!! Form::open(['url' => ['/ticket/checkout/'. $schedule->id]]) !!}
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label" style="color: black;">Seat Number:</label>
                        <select class="form-control" name="seat[]" multiple data-live-search="true">
                            @foreach ($reservations as $seats)
                                <option value="{{ $seats->seat_number }}">{{ $seats->seat_number }}</option>
                            @endforeach
                        </select>
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

@endsection
