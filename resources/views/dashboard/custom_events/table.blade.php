<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="custom-events-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customEvents as $customEvent)
                <tr>
                    <td>{{ $customEvent->title }}</td>
                    <td>{{ $customEvent->description }}</td>
                    <td>{{ $customEvent->image }}</td>
                    <td>{{ $customEvent->date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dashboard.customEvents.destroy', $customEvent->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dashboard.customEvents.show', [$customEvent->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.customEvents.edit', [$customEvent->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $customEvents])
        </div>
    </div>
</div>
