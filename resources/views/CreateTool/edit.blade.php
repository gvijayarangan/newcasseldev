@include('common.nav')
@extends('CreateTool')
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
    <h1>Update Tool Information</h1>
    {!! Form::model($tool, ['method' => 'PATCH','route'=>['tool.update', $tool->id]]) !!}
    <div class="form-group">
        {!! Form::label('tool_name', 'Tool Name:') !!}
        {!! Form::text('tool_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tool_comment', 'Tool Comment:') !!}
        {!! Form::text('tool_comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Information', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop