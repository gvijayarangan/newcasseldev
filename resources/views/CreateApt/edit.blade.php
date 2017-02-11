@include('common.nav')
@extends('CreateApt')
@section('content')
    <h1>Update Apartment Information</h1>
    {!! Form::model($createapts, ['method' => 'PATCH','route'=>['apartment.update', $createapts->id]]) !!}

    <div class="form-group">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apt_floornumber', 'Apartment FloorNumber:') !!}
        {!! Form::text('apt_floornumber',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apt_number', 'Apartment Number:') !!}
        {!! Form::text('apt_number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apt_comments', 'Apartment Comments:') !!}
        {!! Form::text('apt_comments',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Information', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop