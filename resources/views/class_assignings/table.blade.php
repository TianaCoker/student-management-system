<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="class-assignings-table">
            <thead>
            <tr>
                <th>Course Id</th>
                <th>Level Id</th>
                <th>Shift Id</th>
                <th>Classroom Id</th>
                <th>Batch Id</th>
                <th>Day Id</th>
                <th>Time Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classAssignings as $classAssigning)
                <tr>
                    <td>{{ $classAssigning->course_id }}</td>
                    <td>{{ $classAssigning->level_id }}</td>
                    <td>{{ $classAssigning->shift_id }}</td>
                    <td>{{ $classAssigning->classroom_id }}</td>
                    <td>{{ $classAssigning->batch_id }}</td>
                    <td>{{ $classAssigning->day_id }}</td>
                    <td>{{ $classAssigning->time_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['class-assignings.destroy', $classAssigning->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('class-assignings.show', [$classAssigning->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('class-assignings.edit', [$classAssigning->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $classAssignings])
        </div>
    </div>
</div>
