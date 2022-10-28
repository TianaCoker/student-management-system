<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="academics-table">
            <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($academics as $academic)
                <tr>
                    <td>{{ $academic->academic_year }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['academics.destroy', $academic->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('academics.show', [$academic->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('academics.edit', [$academic->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $academics])
        </div>
    </div>
</div>
