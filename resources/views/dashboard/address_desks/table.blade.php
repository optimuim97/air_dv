<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="address-desks-table">
            <thead>
            <tr>
                <th>Lat</th>
                <th>Lon</th>
                <th>Adresse Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($addressDesks as $addressDesk)
                <tr>
                    <td>{{ $addressDesk->lat }}</td>
                    <td>{{ $addressDesk->lon }}</td>
                    <td>{{ $addressDesk->adresse_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.addressDesks.destroy', $addressDesk->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.addressDesks.show', [$addressDesk->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.addressDesks.edit', [$addressDesk->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $addressDesks])
        </div>
    </div>
</div>
