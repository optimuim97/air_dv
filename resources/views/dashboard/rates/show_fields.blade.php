<!-- Service Id Field -->
<div class="col-sm-12">
    {!! Form::label('service_id', 'Service Id:') !!}
    <p>{{ $rate->service_id }}</p>
</div>

<!-- Prix Field -->
<div class="col-sm-12">
    {!! Form::label('prix', 'Prix:') !!}
    <p>{{ $rate->prix }}</p>
</div>

<!-- Currency Id Field -->
<div class="col-sm-12">
    {!! Form::label('currency_id', 'Currency Id:') !!}
    <p>{{ $rate->currency_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $rate->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $rate->updated_at }}</p>
</div>

