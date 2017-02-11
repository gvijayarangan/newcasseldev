@extends('CreateApt')
@section('content')
    <h1>Create Apartment Information</h1>
    {!! Form::open(['url' => 'apartment']) !!}
    <div class="form-group">
        {!! Form::label('apt_floornumber', 'Apartment Floor Number:') !!}
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
