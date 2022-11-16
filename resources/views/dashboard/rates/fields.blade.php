<!-- Service Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_id', 'Service Id:') !!}
    {!! Form::number('service_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix', 'Prix:') !!}
    {!! Form::text('prix', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_id', 'Currency Id:') !!}
    {!! Form::text('currency_id', null, ['class' => 'form-control']) !!}
</div>