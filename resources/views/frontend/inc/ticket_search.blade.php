<!-- ==========Ticket-Search========== -->
<section class="search-ticket-section padding-top pt-lg-0">
    <div class="container">
        <div class="search-tab bg_img" data-background="frontend/images/ticket/ticket-bg01.jpg">
            <div class="row align-items-center mb--20">
                <div class="col-lg-6 mb-20">
                    <div class="search-ticket-header">
                        <h6 class="category">welcome to {{config('app.name')}} </h6>
                        <h3 class="title">what are you looking for</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <ul class="tab-menu ticket-tab-menu">
                        <li class="active">
                            <div class="tab-thumb">
                                <img src="{{asset('frontend/images/ticket/ticket-tab01.png')}}" alt="ticket">
                            </div>
                            <span>Movies</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-area">
                <div class="tab-item active">
                    <form class="ticket-search-form" method="post" action="{{ url('/query') }}">
                        @csrf
                        <div class="form-group large">
                            <input type="text" placeholder="Search fo Movies">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="frontend/images/ticket/city.png" alt="ticket">
                            </div>
                            <span class="type">city</span>
                            {!! Form::select('region_id', $region, null,['class' => 'select-bar']) !!}
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="frontend/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">Theatre</span>
                            {!! Form::select('theatre_id', $theatre, null, ['class' => 'select-bar']) !!}
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <button type="submit" class="">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Ticket-Search========== -->
