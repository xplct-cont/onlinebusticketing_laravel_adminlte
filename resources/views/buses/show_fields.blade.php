<!-- Bus Name Field -->
<div class="col-sm-12">
    {!! Form::label('bus_name', 'Bus Name:') !!}
    <p>{{ $buses->bus_name }}</p>
</div>

<!-- Maximum Seats Field -->
<div class="col-sm-12">
    {!! Form::label('maximum_seats', 'Maximum Seats:') !!}
    <p>{{ $buses->maximum_seats }}</p>
</div>

<!-- Plate No Field -->
<div class="col-sm-12">
    {!! Form::label('plate_no', 'Plate No:') !!}
    <p>{{ $buses->plate_no }}</p>
</div>

<!-- Franchise No Field -->
<div class="col-sm-12">
    {!! Form::label('franchise_no', 'Franchise No:') !!}
    <p>{{ $buses->franchise_no }}</p>
</div>

