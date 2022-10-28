<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="levels-table">
            <thead>
            <tr>
                <th>Level</th>
                <th>Level Description</th>
                <th>Course Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($levels as $level)
                <tr>
                    <td>{{ $level->level }}</td>
                    <td>{{ $level->level_description }}</td>
                    <td>{{ $level->course_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['levels.destroy', $level->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('levels.show', [$level->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('levels.edit', [$level->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $levels])
        </div>
    </div>
</div>
