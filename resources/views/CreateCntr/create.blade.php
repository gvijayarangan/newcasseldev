@include('common.nav')
@extends('CreateCntr')
@section('content')
    <h1>Create New Center</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'center']) !!}
    <div class="form-group">
        {!! Form::label('cntr_name', '*Center Name:') !!}
        {!! Form::text('cntr_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_add1', '*Address Line 1:') !!}
        {!! Form::text('cntr_add1',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_add2', 'Address Line 2:') !!}
        {!! Form::text('cntr_add2',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_city', '*City:') !!}
        {!! Form::text('cntr_city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('cntr_state', '*State:') !!}
        {!!Form::text('cntr_state',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('cntr_zip', '*Zip:') !!}
        {!!Form::text('cntr_zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_phone', '*Phone Number:') !!}
        {!! Form::text('cntr_phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_fax', 'Fax Number:') !!}
        {!! Form::text('cntr_fax',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cntr_comments', 'Comments:') !!}
        {!! Form::text('cntr_comments',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop

