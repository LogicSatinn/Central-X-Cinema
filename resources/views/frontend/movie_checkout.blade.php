@extends('frontend.layout')

@section('title')
    Seat Plan
@endsection

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner"
             data-background="{{ asset('frontend/images/banner/banner14.jpg') }}">
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
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                     <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">Already a Boleto Member?</h5>
                            <p>Sign in to earn points and make booking easier!</p>
                        </div>
                        <a href="#0" class="sign-in-area">
                            <i class="fas fa-user"></i><span>Sign in</span>
                        </a>
                    </div>
                    <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title mb-3">Share your Contact Details </h5>
                        <p>If you would like to pay at the theatre, then please leave use your contact details.</p>
                        <form action="{{url('/momo/'.$schedule->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Enter your Mail">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone_number" placeholder="Eg. 255695625656 ">
                            </div>
                            <div class="form-group">
                                <select name="seat[]" style="display: none;" readonly>
                                    @foreach($seats as $seat)
                                        <option value="{{$seat}}">{{$seat}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="custom-button">Make a Reservation</button>
                            </div>
                        </form>
                        <p class="notice">
                            By Clicking "Make a Reservation" you agree to the <a href="#0">terms and conditions</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">booking summary</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">{{ $schedule->movie->name }}</h6>
                                <span
                                    class="info">{{ $schedule->hall->name }} - {{ $schedule->hall->experience }}</span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>{{ $schedule->hall->theatre->name }}</span></h6>
                                <div class="info"><span>{{ $schedule->showdate->format('l, d M Y') }}</span> <span>Tickets: {{$n_seats}}</span>
                                </div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Tickets Price</span><span>{{number_format($schedule->price)}}/=</span>
                                </h6>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="info"><span>price</span><span>TZS {{(number_format($checkout_ticket_price))}}/=</span></span>
                                <span class="info"><span>vat</span><span>15%</span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>Amount Payable</span><span>TZS {{(number_format($checkout_ticket_price))}}/=</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

@endsection
