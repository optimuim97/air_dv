<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="currencies-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Country Code</th>
                <th>Dial Code</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($currencies as $currency)
                <tr>
                    <td>{{ $currency->name }}</td>
                    <td>{{ $currency->country_code }}</td>
                    <td>{{ $currency->dial_code }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.currencies.destroy', $currency->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.currencies.show', [$currency->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.currencies.edit', [$currency->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $currencies])
        </div>
    </div>
</div>
