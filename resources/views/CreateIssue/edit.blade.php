@include('common.nav')
@extends('CreateIssue')
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
    <h1>Update Issue Information</h1>
    {!! Form::model($issue, ['method' => 'PATCH','route'=>['issuetype.update', $issue->id]]) !!}
    <div class="form-group">
        {!! Form::label('issue_typename', 'Issue Type Name:') !!}
        {!! Form::text('issue_typename',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('issue_comment', 'Issue Comment:') !!}
        {!! Form::text('issue_comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Information', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop