@include('common.nav')
@extends('CreateRes')
@section('content')
    <h1>Create New Resident</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => 'resident']) !!}
    <div class="form-group">
        {!! Form::label('res_pccid', '*PCCID:') !!}
        {!! Form::text('res_pccid',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('res_fname', '*First Name:') !!}
        {!! Form::text('res_fname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('res_mname', 'Middle Name:') !!}
        {!! Form::text('res_mname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('res_lname', '*Last Name:') !!}
        {!! Form::text('res_lname',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('res_gender', '*Gender:') !!}
        {{ Form::select('res_gender', [
            'Female' => 'Female',
            'Male' => 'Male'], old('res_gender'), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {!! Form::label('res_phone', 'Phone:') !!}
        {!! Form::text('res_phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('res_cellphone', 'Cellphone:') !!}
        {!! Form::text('res_cellphone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('res_email', 'Email:') !!}
        {!! Form::text('res_email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('res_comment', 'Comment:') !!}
        {!! Form::text('res_comment',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('res_status', '*Status') !!}
        {!! Form::select('res_status', [
                    'Inactive' => 'Inactive',
                    'Active' => 'Active'], old('res_status'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!!Form::label('apt_number', 'Apartment Number:',['class' => 'col-md-4 control-label']) !!}
        {{ Form::select('apt_number', $apartments) }}
    </div>
    </br> </br>



    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop

