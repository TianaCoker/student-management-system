<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee_id', 'Fee Id:') !!}
    {!! Form::number('fee_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Paid Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_id', 'Paid Id:') !!}
    {!! Form::number('paid_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Transaction Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    {!! Form::text('transaction_date', null, ['class' => 'form-control','id'=>'transaction_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#transaction_date').datepicker()
    </script>
@endpush

<!-- Remark Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('remark', 'Remark:') !!}
    {!! Form::textarea('remark', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
</div>