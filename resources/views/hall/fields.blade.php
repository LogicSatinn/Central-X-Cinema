<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group mb-3">
            {!! Form::label('experience', 'Experience') !!}
            {!! Form::select('experience', ['2D' => '2D', 'IMAX' => 'IMAX', '3D' => '3D'], null, ['class' => 'form-control']) !!}
        </div>

    </div> <!-- /.col -->
    <div class="col-md-6">
        <div class="form-group mb-3">
            {!! Form::label('n_of_seats', 'Number of Seats') !!}
            {!! Form::number('no_of_seats', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group mb-3">
            {!! Form::label('theatre_id', 'Theatre') !!}
            {!! Form::select('theatre_id', $theatre, null, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>
<button type="submit" class="btn mt-2 mb-2 btn-primary"
><span
        class="fe fe-arrow-right fe-16 mr-2"></span>Save
</button>


