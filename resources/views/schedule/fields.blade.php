<div class="row">
    <div class="form-group col-md-6 mb-3">
        {!! Form::label('movie_id', 'Movie') !!}
        {!! Form::select('movie_id', $movie, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-6 mb-3">
        {!! Form::label('hall_id', 'Hall') !!}
        {!! Form::select('hall_id', $hall, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-6 mb-3">
        {!! Form::label('price', 'Ticket Price') !!}
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-6 mb-3">
        {!! Form::label('showdate', 'Air Date') !!}
        {!! Form::date('showdate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-6 mb-3">
        {!! Form::label('showtime', 'Air Time') !!}
        <input class="form-control" type="time" name="showtime">
    </div>

</div>
<button type="submit" class="btn mt-2 mb-2 btn-primary"
><span
        class="fa fa-arrow-right mr-2"></span>Save
</button>


