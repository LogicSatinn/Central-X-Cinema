@extends('layouts.backend')

@section('title')
    Dashboard
@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Hello, {{auth()->user()->name}}!</h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                    <label for="reportrange" class="sr-only">Date Ranges</label>
                                    <div id="reportrange" class="px-2 py-2 text-dark-dark">
                                        <span class="small"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        </main> <!-- main -->
@endsection
