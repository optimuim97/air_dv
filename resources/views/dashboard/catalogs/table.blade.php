<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="catalogs-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($catalogs as $catalog)
                <tr>
                    <td>{{ $catalog->name }}</td>
                    <td>{{ $catalog->description }}</td>
                    <td>{{ $catalog->image }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.catalogs.destroy', $catalog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.catalogs.show', [$catalog->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.catalogs.edit', [$catalog->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $catalogs])
        </div>
    </div>
</div>
