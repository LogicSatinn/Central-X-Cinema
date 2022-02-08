<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group mb-3">
            {!! Form::label('region_id', 'Region') !!}
            {!! Form::select('region_id', $region, null,['class' => 'form-control']) !!}
        </div>

    </div> <!-- /.col -->
    <div class="col-md-6">
        <div class="form-group mb-3">
            {!! Form::label('location', 'Location') !!}
            {!! Form::text('location', null,['class' => 'form-control']) !!}
        </div>
    </div>

</div>
<button type="submit" class="btn mt-2 mb-2 btn-primary"
><span
class="fa fa-arrow-right mr-2"></span>Save
</button>


