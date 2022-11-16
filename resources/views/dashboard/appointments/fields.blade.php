<!-- Creator Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creator_id', 'Creator Id:') !!}
    {!! Form::number('creator_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Other Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_id', 'Other Id:') !!}
    {!! Form::number('other_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datepicker()
    </script>
@endpush

<!-- Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hour', 'Hour:') !!}
    {!! Form::text('hour', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time', 'Date Time:') !!}
    {!! Form::text('date_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Confirmed Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_confirmed', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_confirmed', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_confirmed', 'Is Confirmed', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Is Report Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_report', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_report', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_report', 'Is Report', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Report Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_date', 'Report Date:') !!}
    {!! Form::text('report_date', null, ['class' => 'form-control','id'=>'report_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#report_date').datepicker()
    </script>
@endpush