<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $currency->name }}</p>
</div>

<!-- Country Code Field -->
<div class="col-sm-12">
    {!! Form::label('country_code', 'Country Code:') !!}
    <p>{{ $currency->country_code }}</p>
</div>

<!-- Dial Code Field -->
<div class="col-sm-12">
    {!! Form::label('dial_code', 'Dial Code:') !!}
    <p>{{ $currency->dial_code }}</p>
</div>

