@include('common.nav')
@extends('CreateIssue')
@section('content')

    <h1>Create Issuetype Information</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'issuetype']) !!}
    <div class="form-group">
        {!! Form::label('issue_typename', 'Issue Type Name:') !!}
        {!! Form::text('issue_typename',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('issue_comment', 'Issue Comment :') !!}
        {!! Form::text('issue_comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop