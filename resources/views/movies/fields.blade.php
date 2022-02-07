<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group mb-3">
            {!! Form::label('runtime', 'Movie Runtime') !!}
            <input class="form-control" type="time" name="runtime">
        </div>

    </div> <!-- /.col -->
    <div class="col-md-6">
        <div class="form-group mb-3">
            {!! Form::label('release_date', 'Release Date') !!}
            {!! Form::date('release_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-12">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'row' => 3]) !!}
    </div>

</div>
<button type="submit" class="btn mt-2 mb-2 btn-primary"
><span
class="fa fa-arrow-right mr-2"></span>Save
</button>


