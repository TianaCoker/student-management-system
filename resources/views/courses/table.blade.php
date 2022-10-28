<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="courses-table">
            <thead>
            <tr>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Description</th>
                <th>Course Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_description }}</td>
                    <td>{{ $course->course_status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('courses.show', [$course->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('courses.edit', [$course->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $courses])
        </div>
    </div>
</div>
