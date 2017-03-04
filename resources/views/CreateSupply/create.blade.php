@include('layouts.app')
@extends('CreateSupply')
@section('content')
    <link href="{!! asset('css/all.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" > Create Supplies</div>
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

                        {!! Form::open(['url' => 'Supply']) !!}
                        <div class="form-group">
                            {!! Form::label('sup_name', '*Enter Name:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('sup_name',null,['class' => 'col-md-4 form-control','required' => 'required']) !!}
                            </div>
                        </div>
                        </br> </br>

                        <div class="form-group">
                            {!! Form::label('sup_unitprice', '*Enter Unit Price:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('sup_unitprice',null,['class'=>'col-md-4 form-control','required' => 'required']) !!}
                            </div>
                        </div>
                        </br> </br>

                        <div class="form-group">
                            {!! Form::label('sup_comment', 'Enter Comments:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('sup_comment',null,['class'=>'col-md-4 form-control']) !!}
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