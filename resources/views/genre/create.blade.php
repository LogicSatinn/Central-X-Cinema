@extends('layouts.backend')

@section('title')
    Add Genre
@endsection

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
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

                    <div class="card shadow mt-4 mb-4">
                        <div class="card-header">
                            <strong class="card-title">Edit Genre Details</strong>
                        </div>
                        <form method="post" action="{{route('genre.store')}}">
                            @csrf

                            @include('genre.fields')

                            <div class="col-12">
                                <button type="submit" class="flex justify-center align-center btn mt-2 mb-2 btn-primary"
                                        style="margin-left: 39rem;"><span
                                        class="fe fe-arrow-right fe-16 mr-2"></span>Save
                                </button>
                            </div>
                        </form>
                    </div> <!-- / .card -->

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->

@endsection
