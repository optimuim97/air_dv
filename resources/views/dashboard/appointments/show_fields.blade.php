<!-- Creator Id Field -->
<div class="col-sm-12">
    {!! Form::label('creator_id', 'Creator Id:') !!}
    <p>{{ $appointment->creator_id }}</p>
</div>

<!-- Other Id Field -->
<div class="col-sm-12">
    {!! Form::label('other_id', 'Other Id:') !!}
    <p>{{ $appointment->other_id }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $appointment->date }}</p>
</div>

<!-- Hour Field -->
<div class="col-sm-12">
    {!! Form::label('hour', 'Hour:') !!}
    <p>{{ $appointment->hour }}</p>
</div>

<!-- Date Time Field -->
<div class="col-sm-12">
    {!! Form::label('date_time', 'Date Time:') !!}
    <p>{{ $appointment->date_time }}</p>
</div>

<!-- Is Confirmed Field -->
<div class="col-sm-12">
    {!! Form::label('is_confirmed', 'Is Confirmed:') !!}
    <p>{{ $appointment->is_confirmed }}</p>
</div>

<!-- Is Report Field -->
<div class="col-sm-12">
    {!! Form::label('is_report', 'Is Report:') !!}
    <p>{{ $appointment->is_report }}</p>
</div>

<!-- Report Date Field -->
<div class="col-sm-12">
    {!! Form::label('report_date', 'Report Date:') !!}
    <p>{{ $appointment->report_date }}</p>
</div>

