@extends('layouts.app')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Work Order Form</div>

                    <div class="panel-body" style="padding-left: 25%">
                        {!! Form::open(['url' => 'workorder', 'class' => 'form-vertical']) !!}

                        <form class="form-inline">
                            <br>
                            {!! Form::label('requester', 'Requester:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-2">
                                <input type="text" id="fname" value = "Robert Bosh" style="width: 100px">
                            </div.panel-heading>
                        </form>
                        </br> </br>{!! Form::label('centername', 'Center Name:', ['class' => 'col-md-3 control-label']) !!}

                        <div.panel-heading class="col-md-6">
                            <select name="centername" style="width: 95px;">
                                <option value="centername" >90th</option>

                            </select>
                        </div.panel-heading>
                        </br> </br>{!! Form::label('apartment no', 'Apartment No:', ['class' => 'col-md-3 control-label']) !!}

                        <div.panel-heading class="col-md-6">
                            <select name="Apartment No" style="width: 95px;">
                                <option value="apartment no">101</option>
                                <option value="apartment no">102</option>
                                <option value="apartment no">103</option>
                                <option value="apartment no">104</option>
                            </select>
                        </div.panel-heading>

                        </br> </br>{!! Form::label('created date', 'Created Date:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="datetime"/>
                            </div>
                        </div>

                        </br>{!! Form::label('floorno', 'Floor No:', ['class' => 'col-md-3 control-label']) !!}

                        <div class="col-md-2">
                            <input type="text" id="floorno" value = "1" style="width: 30px">
                        </div>

                        </br> </br>{!! Form::label('residentname', 'Resident Name:', ['class' => 'col-md-3 control-label']) !!}

                        <div.panel-heading class="col-md-2">
                            <input type="text" id="fname" value = "John Mathew" style="width: 100px">
                        </div.panel-heading>

                        </br> </br>{!! Form::label('commonarea', 'Common Area:', ['class' => 'col-md-3 control-label']) !!}

                        <div.panel-heading class="col-md-4">
                            <select name="commonarea">
                                <option value="commonarea">ClubHouse</option>
                                <option value="commonarea">Pool</option>
                                <option value="commonarea">Laundary Room</option>
                                <option value="commonarea">Meeting Rooms</option>
                            </select>
                        </div.panel-heading>

                        </br> </br>{!! Form::label('issuetype', 'Issue Type:', ['class' => 'col-md-3 control-label']) !!}

                        <div.panel-heading class="col-md-4">
                        <select name="issuetype">
                            <option value="issuetype">Water Leakage</option>
                            <option value="issuetype">Pumbling</option>
                            <option value="issuetype">Electrical Issue</option>
                            <option value="issuetype">AC/Heater Problem</option>
                        </select>
                        </div.panel-heading>

                        </br> </br>{!! Form::label('issuedescription', 'Issue Description:', ['class' => 'col-md-3 control-label']) !!}

                        <div.panel-heading class="col-md-2">
                            <input type="textarea" id="issuedescription" value = "Heater motor sound is loud" style="width: 200px">
                        </div.panel-heading>

                        </br> </br></br>



                    </div>

                    <div class="form-group" style="text-align: center">
                        {!! Form::button('<i class="fa fa-btn fa-save"></i>Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

                        {!! Form::button('Reset', ['type' => 'reset', 'class' => 'btn btn-default']) !!}

                    </div>
                    </br> </br></br>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).ready(function ($) {
            $('select').select2();
            $('#datetime').datepicker();

        })

        function validateOnSave() {
            var rc = true;
            if ($("select#sb_id").val() === "") {
                alert("Please select a Type");
                rc = false;
            } else if ($("input#x_number").val() === "") {
                alert("Please input a X-number");
                rc = false;
            }
            return rc;
        }
    </script>
@endsection
