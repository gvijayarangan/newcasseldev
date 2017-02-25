@include('common.nav')
@extends('CreateRescon')
@section('content')

    <h1>Create Resident Contact Information</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'rescontact']) !!}
    <div class="form-group">
        {!! Form::label('con_fname', 'Contact First Name*') !!}
        {!! Form::text('con_fname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_mname', 'Contact Middle Name') !!}
        {!! Form::text('con_mname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_lname', 'Contact Last Name*') !!}
        {!! Form::text('con_lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_relationship', 'Relationship*') !!}
        {!! Form::text('con_relationship',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_cellphone', 'Cellphone*') !!}
        {!! Form::text('con_cellphone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_email', 'Email*') !!}
        {!! Form::text('con_email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_comment', 'Comment') !!}
        {!! Form::text('con_comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('con_gender', 'Gender*') !!}
        {{ Form::select('con_gender', [
            'Female' => 'Female',
            'Male' => 'Male'], old('con_gender'), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {!!Form::label('con_res_name', 'Resident Name:') !!}
        {{ Form::select('id', $residents) }}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop