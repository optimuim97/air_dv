<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Catalog Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catalog_id', 'Catalog Id:') !!}
    {!! Form::number('catalog_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_type_id', 'Service Type Id:') !!}
    {!! Form::text('service_type_id', null, ['class' => 'form-control']) !!}
</div>