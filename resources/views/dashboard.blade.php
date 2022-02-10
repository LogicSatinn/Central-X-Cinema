@extends('layouts.backend')

@section('title')
    Dashboard
@endsection

@section('page')
    Dashboard
@endsection

@section('content')
    <!-- Page Content -->
    <div class="bg-white">
        <div class="content content-full">
        @include('layouts.inc.breadcrumb')

            <!-- Statistics -->
            <div class="row">
                <div class="col-md-6">
                    <div class="block block-rounded block-bordered block-mode-loading-refresh">
                        <div class="block-header">
                            <h3 class="block-title">Movies</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                    <i class="fa fa-sync"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="fa fa-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content p-2">
                            <!-- Chart.js Charts are initialized in js/pages/db_corporate_slim.min.js which was auto compiled from _es6/pages/db_corporate_slim.js -->
                            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                            <canvas class="js-chartjs-corporate-slim-projects"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block block-rounded block-bordered block-mode-loading-refresh">
                        <div class="block-header">
                            <h3 class="block-title">Tickets</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                    <i class="fa fa-sync"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="fa fa-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content p-2">
                            <!-- Chart.js Charts are initialized in js/pages/db_corporate_slim.min.js which was auto compiled from _es6/pages/db_corporate_slim.js -->
                            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                            <canvas class="js-chartjs-corporate-slim-tickets"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Statistics -->

            <!-- Quick Stats -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-bordered" href="javascript:void(0)">
                        <div class="block-content p-2">
                            <div class="py-5 text-center bg-body-light rounded">
                                <div class="font-size-h2 font-w700 mb-0 text-black">{{$movies}}</div>
                                <div class="font-size-sm font-w600 text-uppercase">All Movies</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-bordered" href="javascript:void(0)">
                        <div class="block-content p-2">
                            <div class="py-5 text-center bg-body-light rounded">
                                <div class="font-size-h2 font-w700 mb-0 text-black">{{$schedule}}</div>
                                <div class="font-size-sm font-w600 text-uppercase">Schedules</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-bordered" href="javascript:void(0)">
                        <div class="block-content p-2">
                            <div class="py-5 text-center bg-body-light rounded">
                                <div class="font-size-h2 font-w700 mb-0 text-black">{{$tickets}}</div>
                                <div class="font-size-sm font-w600 text-uppercase">Tickets</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-bordered" href="javascript:void(0)">
                        <div class="block-content p-2">
                            <div class="py-5 text-center bg-body-light rounded">
                                <div class="font-size-h2 font-w700 mb-0 text-black">{{$halls}}</div>
                                <div class="font-size-sm font-w600 text-uppercase">Halls</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Stats -->

            <!-- People and Tickets -->
            <div class="row row-deck">
                <div class="col-xl-6 invisible" data-toggle="appear">
                    <!-- People -->
                    <div class="block block-rounded block-bordered block-mode-loading-refresh">
                        <div class="block-header border-bottom">
                            <h3 class="block-title">Schedule Details</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                    <i class="fa fa-sync"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="fa fa-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table
                                class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 120px;">Hall</th>
                                    <th class="font-w700 text-center" style="width: 60%;">Location</th>
                                    <th class="d-none d-sm-table-cell font-w700 text-center">Number of Seats</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bookedHalls as $bookedHall)
                                <tr>
                                    <td class="text-center">
                                        {{$bookedHall->movie->name}}
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base text-center">{{$bookedHall->hall->theatre->name}}</div>
                                        <div class="text-muted text-center">{{$bookedHall->hall->name}}</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base text-center">
                                        <a class="badge badge-dark" href="javascript:void(0)">{{$bookedHall->hall->no_of_seats}}</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END People -->
                </div>
                <div class="col-xl-6 invisible" data-toggle="appear" data-timeout="200">
                    <!-- Tickets -->
                    <div class="block block-rounded block-bordered block-mode-loading-refresh">
                        <div class="block-header border-bottom">
                            <h3 class="block-title">Tickets</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                    <i class="fa fa-sync"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="fa fa-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table
                                class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="font-w700" >Seat Number</th>
                                    <th class="font-w700" >Movie</th>
                                    <th class="font-w700" >Hall</th>
                                    <th class="font-w700" >Status</th>
                                    <th class="font-w700 text-center" style="width: 140px;">Reference Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bookedTickets as $bookedTicket)
                                <tr>
                                    <td>
                                        <span class="font-w600">{{$bookedTicket->seat_number}}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600">{{$bookedTicket->schedule->movie->name}}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600">{{$bookedTicket->schedule->hall->name}}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">{{$bookedTicket->status}}</span>
                                    </td>
                                    <td class="text-center">
                                        {{$bookedTicket->reference_code}}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Tickets -->
                </div>
            </div>
            <!-- END People and Tickets -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
