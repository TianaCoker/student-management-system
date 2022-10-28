<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Course Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_code', 'Course Code:') !!}
    {!! Form::text('course_code', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Course Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('course_description', 'Course Description:') !!}
    {!! Form::textarea('course_description', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Course Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('course_status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('course_status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('course_status', 'Course Status', ['class' => 'form-check-label']) !!}
    </div>
</div>