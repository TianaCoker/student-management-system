<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::number('shift_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_id', 'Classroom Id:') !!}
    {!! Form::number('classroom_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('batch_id', 'Batch Id:') !!}
    {!! Form::number('batch_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Day Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_id', 'Day Id:') !!}
    {!! Form::number('day_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_id', 'Time Id:') !!}
    {!! Form::number('time_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    {!! Form::number('teacher_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Semester Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_id', 'Semester Id:') !!}
    {!! Form::number('semester_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Schedule Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('schedule_status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('schedule_status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('schedule_status', 'Schedule Status', ['class' => 'form-check-label']) !!}
    </div>
</div>