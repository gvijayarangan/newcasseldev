@include('layouts.app')
@extends('CreateTool')
@section('content')
    <link href="{!! asset('css/all.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" > Create Tool Information</div>
                    <div class="panel-body">

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
                            {!! Form::label('tool_name', '*Tool Name:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('tool_name',null,['class' => 'col-md-4 form-control','required' => 'required']) !!}
                            </div>
                        </div>
                        </br> </br>

                        <div class="form-group">
                            {!! Form::label('tool_comment', 'Tool Description:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::textarea('tool_comment',null,['class'=>'col-md-4 form-control']) !!}
                            </div>
                        </div>
                        </br> </br>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
@stop