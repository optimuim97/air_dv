<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="rates-table">
            <thead>
            <tr>
                <th>Service Id</th>
                <th>Prix</th>
                <th>Currency Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rates as $rate)
                <tr>
                    <td>{{ $rate->service_id }}</td>
                    <td>{{ $rate->prix }}</td>
                    <td>{{ $rate->currency_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.rates.destroy', $rate->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.rates.show', [$rate->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.rates.edit', [$rate->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $rates])
        </div>
    </div>
</div>
