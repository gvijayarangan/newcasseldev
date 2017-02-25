@include('common.nav')
@extends('CreateRescon')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Update Resident Contact Information</h1>
    {!! Form::model($createrescons, ['method' => 'PATCH','route'=>['rescontact.update', $createrescons->id]]) !!}
    <div class="form-group">
        {!! Form::label('con_fname', 'First Name:') !!}
        {!! Form::text('con_fname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_mname', 'Middle Name:') !!}
        {!! Form::text('con_mname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_lname', 'Last Name:') !!}
        {!! Form::text('con_lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_relationship', 'Relationship:') !!}
        {!! Form::text('con_relationship',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_cellphone', 'Cellphone:') !!}
        {!! Form::text('con_cellphone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_email', 'Email:') !!}
        {!! Form::text('con_email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_comment', 'Comments:') !!}
        {!! Form::text('con_comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('con_gender', 'Gender:') !!}
        {!! Form::text('con_gender',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!Form::label('con_res_name', 'Resident Name:') !!}
        {{ Form::select('id', $residents) }}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Information', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop