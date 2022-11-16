<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="availabilities-table">
            <thead>
            <tr>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Time Date</th>
                <th>Start Time</th>
                <th>End Time Date</th>
                <th>End Time</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($availabilities as $availability)
                <tr>
                    <td>{{ $availability->start_date }}</td>
                    <td>{{ $availability->end_date }}</td>
                    <td>{{ $availability->start_time_date }}</td>
                    <td>{{ $availability->start_time }}</td>
                    <td>{{ $availability->end_time_date }}</td>
                    <td>{{ $availability->end_time }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.availabilities.destroy', $availability->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.availabilities.show', [$availability->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.availabilities.edit', [$availability->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $availabilities])
        </div>
    </div>
</div>
