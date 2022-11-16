<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="adresse-homes-table">
            <thead>
            <tr>
                <th>Lat</th>
                <th>Lon</th>
                <th>Adresse Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($adresseHomes as $adresseHome)
                <tr>
                    <td>{{ $adresseHome->lat }}</td>
                    <td>{{ $adresseHome->lon }}</td>
                    <td>{{ $adresseHome->adresse_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.adresseHomes.destroy', $adresseHome->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.adresseHomes.show', [$adresseHome->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.adresseHomes.edit', [$adresseHome->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $adresseHomes])
        </div>
    </div>
</div>
