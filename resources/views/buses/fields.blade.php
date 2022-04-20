<!-- Bus Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_name', 'Bus Name:') !!}
    {!! Form::text('bus_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Maximum Seats Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maximum_seats', 'Maximum Seats:') !!}
    {!! Form::number('maximum_seats', null, ['class' => 'form-control']) !!}
</div>

<!-- Plate No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plate_no', 'Plate No:') !!}
    {!! Form::text('plate_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Franchise No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('franchise_no', 'Franchise No:') !!}
    {!! Form::number('franchise_no', null, ['class' => 'form-control']) !!}
</div>