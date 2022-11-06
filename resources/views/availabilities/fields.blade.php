<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::text('end_date', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Start Time Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time_date', 'Start Time Date:') !!}
    {!! Form::text('start_time_date', null, ['class' => 'form-control','id'=>'start_time_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#start_time_date').datepicker()
    </script>
@endpush

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- End Time Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time_date', 'End Time Date:') !!}
    {!! Form::text('end_time_date', null, ['class' => 'form-control','id'=>'end_time_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#end_time_date').datepicker()
    </script>
@endpush

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control', 'required']) !!}
</div>