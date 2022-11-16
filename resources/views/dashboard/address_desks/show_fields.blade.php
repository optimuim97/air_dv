<!-- Lat Field -->
<div class="col-sm-12">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{{ $addressDesk->lat }}</p>
</div>

<!-- Lon Field -->
<div class="col-sm-12">
    {!! Form::label('lon', 'Lon:') !!}
    <p>{{ $addressDesk->lon }}</p>
</div>

<!-- Adresse Name Field -->
<div class="col-sm-12">
    {!! Form::label('adresse_name', 'Adresse Name:') !!}
    <p>{{ $addressDesk->adresse_name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $addressDesk->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $addressDesk->updated_at }}</p>
</div>

