<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', 'Country Code:') !!}
    {!! Form::text('country_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Dial Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dial_code', 'Dial Code:') !!}
    {!! Form::text('dial_code', null, ['class' => 'form-control']) !!}
</div>