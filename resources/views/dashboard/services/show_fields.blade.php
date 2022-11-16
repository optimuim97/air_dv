<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $service->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $service->description }}</p>
</div>

<!-- Catalog Id Field -->
<div class="col-sm-12">
    {!! Form::label('catalog_id', 'Catalog Id:') !!}
    <p>{{ $service->catalog_id }}</p>
</div>

<!-- Service Type Id Field -->
<div class="col-sm-12">
    {!! Form::label('service_type_id', 'Service Type Id:') !!}
    <p>{{ $service->service_type_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $service->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $service->updated_at }}</p>
</div>

