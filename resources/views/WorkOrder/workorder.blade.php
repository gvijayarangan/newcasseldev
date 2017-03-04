@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    {!! Form::open(['url' => '/workorder/storeData']) !!}
                    <div class="panel-heading"> Work Order Form</div>

                    <div class="panel-body" style="padding-left: 15%">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input type="hidden" name="supplyData" id="supplyData" value="">

                        <div class="form-group{{ $errors->has('requester') ? ' has-error' : '' }}">
                            {!! Form::label('requester', 'Requester:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-sm-4">
                                {!! Form::text('requester',null,['class'=>'form-control input-sm'], array('id' => 'requestername')) !!}
                                @if ($errors->has('requester'))
                                    <span class="help-block">
                <strong>{{ $errors->first('requester') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('centername') ? ' has-error' : '' }}">
                            {!! Form::label('centername', 'Center Name:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-8">
                                <div class="form-group">
                                    {{ Form::select('cntr_name', array_merge([0 => 'Please Select']) + $centers, 'default',
                                     array('id' => 'center_dropdown', 'class' => 'col-md-4')) }}
                                    @if ($errors->has('centername'))
                                        <span class="help-block">
                <strong>{{ $errors->first('centername') }}</strong>
            </span>
                                    @endif
                                </div>
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('apartment no') ? ' has-error' : '' }}">
                            {!! Form::label('apartment no', 'Apartment No:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-8">
                                {{ Form::select('apt_id', array_merge([0 => 'Please Select']), 'default',
                                array('id' => 'apartment_dropdown', 'class' => 'col-md-4')) }}
                                @if ($errors->has('apartment no'))
                                    <span class="help-block">
                <strong>{{ $errors->first('apartment no') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('residentname') ? ' has-error' : '' }}">
                            {!! Form::label('residentname', 'Resident Name:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-8">
                                {{ Form::select('residentname', array_merge([0 => 'Please Select']),
                                'default', array('id' => 'residentname_dropdown', 'class' => 'col-md-4')) }}
                                @if ($errors->has('residentname'))
                                    <span class="help-block">
                <strong>{{ $errors->first('residentname') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('resident_comments') ? ' has-error' : '' }}">
                            {!! Form::label('res_comments', 'Resident Comments:' ,['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-6">
                                {!! Form::text('resident_comments',null,['class'=>'form-control'], array('id' => 'res_comments','class' => 'col-md-6')) !!}
                                @if ($errors->has('resident_comments'))
                                    <span class="help-block">
                <strong>{{ $errors->first('resident_comments') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('order_status') ? ' has-error' : '' }}">
                            {!! Form::label('status', 'Status:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-6">
                                {!! Form::select('order_status', ['Please Select' => 'Please Select','Open' => 'Open','In Progress' => 'In Progress',
                                   'Wait for third party vendor' => 'Wait for third party vendor','Complete' => 'Complete', 'Close' => 'Close'],
                                  'default', array('class' => 'col-md-6')) !!}
                                @if ($errors->has('order_status'))
                                    <span class="help-block">
                <strong>{{ $errors->first('order_status') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            {!! Form::label('priority', 'Priority:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-8">
                                {!! Form::select('order_priority', ['Please Select' => 'Please Select', 'Low' => 'Low', 'Moderate' => 'Moderate', 'High' => 'High'],
                                'default', array('class' => 'col-md-4')) !!}
                                @if ($errors->has('priority'))
                                    <span class="help-block">
                <strong>{{ $errors->first('priority') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>


                        </br> </br>

                        <div class="form-group{{ $errors->has('commonarea') ? ' has-error' : '' }}">
                            {!! Form::label('commonarea', 'Common Area:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-8">
                                {{ Form::select('ca_id', array_merge([0 => 'Please Select']), 'default',
                                array('id' => 'commonarea_dropdown', 'class' => 'col-md-4')) }}
                                @if ($errors->has('commonarea'))
                                    <span class="help-block">
                <strong>{{ $errors->first('commonarea') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>


                        </br> </br>

                        <div class="form-group{{ $errors->has('issuetype') ? ' has-error' : '' }}">
                            {!! Form::label('issuetype', 'Issue Type:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-4">
                                {{ Form::select('issuetype', array_merge([0 => 'Please Select']) + $issuetypes, 'default', array('id' => 'issuetype_dropdown')) }}
                                @if ($errors->has('issuetype'))
                                    <span class="help-block">
                <strong>{{ $errors->first('issuetype') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('issuedescription') ? ' has-error' : '' }}">
                            {!! Form::label('issuedescription', 'Issue Description:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-2">
                                {!! Form::text('issuedescription',null, array('id' => 'issuedescription', 'readonly' => true)) !!}
                                @if ($errors->has('issuedescription'))
                                    <span class="help-block">
                <strong>{{ $errors->first('issuedescription') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('wodescription') ? ' has-error' : '' }}">
                            {!! Form::label('wodescription', 'Work Order Description:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-8">
                                {!! Form::text('order_description',null,['class'=>'form-control']) !!}
                                @if ($errors->has('wodescription'))
                                    <span class="help-block">
                <strong>{{ $errors->first('wodescription') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('assigntype') ? ' has-error' : '' }}">
                            {!! Form::label('assigntype', 'Assign To:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-6">
                                {{ Form::select('assign_user_id', array_merge([0 => 'Please Select']) + $workers, 'default', array('id' => 'assigntype_dropdown')) }}
                                @if ($errors->has('assigntype'))
                                    <span class="help-block">
                <strong>{{ $errors->first('assigntype') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('toolsused') ? ' has-error' : '' }}">
                            {!! Form::label('toolsused', 'Tools used:', ['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading style="padding-left: 15px">
                                {{ Form::select('toolsused_id[]', $toolsdata,
                                  'default', array('id' => 'tools_data', 'multiple'=>'multiple', 'style' =>'width:75%')) }}
                                @if ($errors->has('toolsused'))
                                    <span class="help-block">
                <strong>{{ $errors->first('toolsused') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>

                        </br> </br>

                        <div class="form-group{{ $errors->has('supervisor_comments') ? ' has-error' : '' }}">
                            {!! Form::label('supervisor_comments', 'Comments:' ,['class' => 'col-md-3 control-label']) !!}
                            <div.panel-heading class="col-md-6">
                                {!! Form::text('supervisor_comments',null,['class'=>'form-control'], array('id' => 'supervisor_comments','class' => 'col-md-6')) !!}
                                @if ($errors->has('supervisor_comments'))
                                    <span class="help-block">
                <strong>{{ $errors->first('supervisor_comments') }}</strong>
            </span>
                                @endif
                            </div.panel-heading>
                        </div>
                        </br> </br>
                    </div>

                    <div class="row">
                        <!-- panel preview -->
                        <div class="col-sm-4" style="padding-left: 100px">
                            <h4 class="text-info" style="padding-left: 25px">Supply Information:</h4>
                            <div class="panel panel-default">
                                <div class="panel-body form-horizontal payment-form">

                                    <div class="form-group{{ $errors->has('supply') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <label for="concept" class="col-sm-3 control-label">Supply Name</label>
                                            <div class="col-sm-8">
                                                {{ Form::select('supply', array_merge([0 => 'Please Select']) + $suppliesdata,
                                               'default', array('id' => 'supply_dropdown')) }}
                                                @if ($errors->has('supply'))
                                                    <span class="help-block">
                <strong>{{ $errors->first('supply') }}</strong>
            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('unitprice') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <label for="amount" class="col-sm-3 control-label">Unit Price</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="unitprice" name="unitprice"
                                                       readonly>
                                                @if ($errors->has('unitprice'))
                                                    <span class="help-block">
                <strong>{{ $errors->first('unitprice') }}</strong>
            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <label for="description" class="col-sm-3 control-label">Unit</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="unit" name="unit" disabled>
                                                @if ($errors->has('unit'))
                                                    <span class="help-block">
                <strong>{{ $errors->first('unit') }}</strong>
            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <label for="status" class="col-sm-3 control-label">Total</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="total" name="total"
                                                       readonly>
                                                @if ($errors->has('total'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('total') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-12 text-left">
                                            <button id="addDetails" type="button"
                                                    class="btn btn-default preview-add-button">
                                                <span class="glyphicon glyphicon-plus"></span> Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-7">
                            <h4 class="text-info">Supply Summary:</h4>
                            <div class="row">
                                <div class="col-xs-12 panel panel-default">
                                    <div class="table-responsive">
                                        <table id="dataSupplyTable" class="table preview-table">
                                            <thead>
                                            <tr>
                                                <th>Supply Name</th>
                                                <th>Unit</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <br><br><br><br>
                                    {!! Form::label('totalOrderAmountLabel', 'Work Order Total Cost:' ,['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-sm-4">
                                        {!! Form::text('order_total_cost',null, array('id' => 'totalOrderAmount', 'readonly' =>true)) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group" style="text-align: center">
                        {{ Form::submit('Save', array('class' => 'btn btn-success')) }}
                        {!! Form::button('Reset', ['type' => 'reset', 'class' => 'btn btn-default']) !!}
                    </div>

                </div>
            </div>
        </div>

    </div>

    {!! Form::close() !!}
@endsection

@section('footer')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function ($) {
            $('select').select2();
            $('#datetime').datepicker();

            $("#tools_data").select2({
                placeholder: "Please Select",
                tags: true
            })
            $("#commonarea_dropdown").attr('disabled', true);

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

        $('#center_dropdown').change(function () {
            // var selectedCenterIndex;
            data = {option: $(this).val()};
            selectedCenterIndex = data;
            //Apartment fetch
            $.get("/getAptDetails", data, function (data) {
                var apartment_data = $('#apartment_dropdown');
                $("#apartment_dropdown").empty();

                apartment_data.append($("<option></option>")
                    .attr("value", 0)
                    .text("Please Select"));

                $.each(data, function (key, value) {
                    apartment_data.append($("<option></option>")
                        .attr("value", key)
                        .text(value));
                });
                $('#apartment_dropdown').val(0).change();

            });
            // data = null;
            // data = selectedCenterIndex;
            //Common area fetch
            $.get("/getComAreaDetails", data, function (data) {
                var commonarea_data = $('#commonarea_dropdown');
                $("#commonarea_dropdown").empty();

                commonarea_data.append($("<option></option>")
                    .attr("value", 0)
                    .text("Please Select"));

                $.each(data, function (key, value) {
                    commonarea_data.append($("<option></option>")
                        .attr("value", key)
                        .text(value));
                });
                $('#commonarea_dropdown').val(0).change();

            });


        });

        $('#apartment_dropdown').change(function () {
            if ($("#apartment_dropdown").val() != 0) {
                data = {option: $(this).val()};
                $.get("/getResidentName", data, function (data) {
                    //Check if data is empty, then no need to store/display users, also clear any old values
                    var resident_data = $('#residentname_dropdown');
                    $("#residentname_dropdown").empty();
                    if (data.length != 0) {
                        $.each(data, function (key, value) {
                            resident_data.append($("<option></option>")
                                .attr("value", key)
                                .text(value));
                        });
                        //Show the first index upon change
                        $('#residentname_dropdown').val(Object.entries(data)[0][0]).change();
                    } else {
                        resident_data.append($("<option></option>")
                            .attr("value", 0)
                            .text("Resident not occupied"));

                        $('#residentname_dropdown').val(0).change();
                    }

                });
            }
        });

        $('#issuetype_dropdown').change(function () {
            data = {option: $(this).val()};

            $.get("/getIssueDesc", data, function (data) {
                $("#issuedescription").val(data);
            });
        });

        $('#supply_dropdown').change(function () {
            data = {option: $(this).val()};


            $.get("/getUnitPrice", data, function (data) {
                $("#unitprice").val(data);
            });
            var selectedIndex = $('#supply_dropdown option:selected').val();
            if (selectedIndex == 0) {
                $("#unit").attr("disabled", true);
            } else {
                $("#unit").attr("disabled", false);
            }
        });


        //Commonarea condition
        $('#commonarea_dropdown').change(function () {
            var selectedIndex = $("#commonarea_dropdown option:selected").val();
            if (selectedIndex != 0) {
                $("#apartment_dropdown").attr("disabled", true);
                $('#residentname_dropdown').attr("disabled", true);
                $('#res_comments').attr("disabled", true);
                $('#res_comments').val("");
                $("#apartment_dropdown option:eq(0)").prop("selected", true).change();
                $("#residentname_dropdown option:eq(0)").prop("selected", true).change();

            } else {
                $("#apartment_dropdown").attr("disabled", false);
                $('#residentname_dropdown').attr("disabled", false);
                $('#res_comments').attr("disabled", false);
            }
        });


        $('#addDetails').click(function () {
            if ($("#supply_dropdown option:selected").val() != 0) {

                var order_data = {};
                order_data["SupplyName"] = $("#supply_dropdown option:selected").text();
                order_data["unit"] = $("#unit").val();
                order_data["unitPrice"] = $("#unitprice").val();
                order_data["total"] = $("#total").val();
                order_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';

                var row = $('<tr></tr>');
                $.each(order_data, function (type, value) {
                    $('<td name =' + type + ' class="input-' + type + '"></td>').html(value).appendTo(row);
                });
                $('.preview-table > tbody:last').append(row);

                calculateTotalAmount();

                //Clear the supply information
                $('#total').val("");
                $('#unit').val("");
                $('#unitprice').val("");
                $("#unit").attr("disabled", true);
                $("#supply_dropdown option:eq(0)").prop("selected", true).change();


                var tableData = $.param($('#dataSupplyTable td').map(function () {
                    return {
                        name: $(this).attr('name'),
                        value: $(this).text().trim()
                    };
                }));

                $("#supplyData").val("" + tableData + "");
                console.log(tableData);
            }
        });

        $('#unit').change(function () {
            var totalAmount = $('#unit').val() * $('#unitprice').val();
            $('#total').val(totalAmount);

        });

        $(document).on('click', '.input-remove-row', function () {
            var tr = $(this).closest('tr');
            tr.remove();
            calculateTotalAmount();
            var tableData = $.param($('#dataSupplyTable td').map(function () {
                return {
                    name: $(this).attr('name'),
                    value: $(this).text().trim()
                };
            }));

            $("#supplyData").val("" + tableData + "");
            console.log(tableData);
        });

        function calculateTotalAmount() {
            var totalSum = 0;
            $('.input-total').each(function () {
                totalSum += parseFloat($(this).text());
            });
            $("#totalOrderAmount").val(totalSum);
        }
    </script>
@endsection