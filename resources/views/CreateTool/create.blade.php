@include('layouts.app')
@extends('CreateTool')
@section('content')

    <h1>Create Tool Information</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'tool']) !!}
    <div class="form-group">
        {!! Form::label('tool_name', 'Tool Name:') !!}
        {!! Form::text('tool_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tool_comment', 'Tool Comment :') !!}
        {!! Form::text('tool_comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop