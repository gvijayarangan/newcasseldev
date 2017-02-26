@include('common.nav')
@extends('CreateComarea')
@section('content')
    <h1>Create New Common Area/System</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'commonarea']) !!}
    <div class="form-group">
        {!! Form::label('ca_name', '*Common Area/System name:') !!}
        {!! Form::text('ca_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ca_comments', '*Comments:') !!}
        {!! Form::text('ca_comments',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_id', 'Center ID:') !!}
        {!! Form::text('cntr_id',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop

