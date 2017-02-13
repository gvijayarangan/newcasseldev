<div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
    {!! Form::label('f_name', '*First Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('f_name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('f_name'))
            <span class="help-block">
                <strong>{{ $errors->first('f_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('m_name') ? ' has-error' : '' }}">
    {!! Form::label('m_name', 'Middle Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('m_name', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('m_name'))
            <span class="help-block">
                <strong>{{ $errors->middle('m_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('l_name') ? ' has-error' : '' }}">
    {!! Form::label('l_name', '*Last Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('l_name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('l_name'))
            <span class="help-block">
                <strong>{{ $errors->last('l_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', '*E-Mail Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">*Roles</label>
    <div class="col-md-6">{!! Form::select('rolelist[]', $list_role, null,
    ['id' => 'roles-select-id', 'class' => 'form-control roles cds-select', 'multiple', 'style' => 'width: 50%; margin-top: 10px;', 'required' => 'required']) !!}</div>
</div>

<div class="form-group{{ $errors->has('residentid') ? ' has-error' : '' }}">
    {!! Form::label('residentid', 'Resident ID:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('residentid', null, ['id' => 'resident-id', 'class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('residentid'))
            <span class="help-block">
                <strong>{{ $errors->first('residentid') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('residentrelationship') ? ' has-error' : '' }}">
    {!! Form::label('residentrelationship', '*Resident Relationship:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('residentrelationship', null, ['id' => 'resident-relationship', 'class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('residentrelationship'))
            <span class="help-block">
                <strong>{{ $errors->first('residentrelationship') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
    {!! Form::label('comment', 'Comment:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('comment', null, ['class' => 'col-md-6 form-control' ]) !!}
        @if ($errors->has('comment'))
            <span class="help-block">
                <strong>{{ $errors->first('comment') }}</strong>
            </span>
        @endif
    </div>
</div>

{{--
<div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
    {!! Form::label('cell', '*Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('cell', null, ['class' => 'col-md-4 form-control', 'required' => 'required']) !!}
        @if ($errors->has('cell'))
            <span class="help-block">
                <strong>{{ $errors->first('cell') }}</strong>
            </span>
        @endif
    </div>
</div>
--}}
<div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
    {!! Form::label('cell', '*Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('cell', null, ['class' => 'col-md-4 form-control', 'required' => 'required']) !!}
        @if ($errors->has('cell'))
            <span class="help-block">
                <strong>{{ $errors->first('cell') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::Label('active', '*Status:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::select('active', [
                        '0' => 'In Active',
                        '1' => 'Active'], old('active'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::Label('rec_email', '*Receive Emails:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {{ Form::select('rec_email', [
            '0' => 'No',
            '1' => 'Yes'], old('rec_email'), ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group" style="text-align: center">
    @if($CRUD_Action == 'Create')
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Register', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

        {!! Form::button('Reset', ['type' => 'reset', 'class' => 'btn btn-default']) !!}
    @else
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Register', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}

        {!! Form::button('Reset', ['type' => 'reset', 'class' => 'btn btn-default']) !!}
    @endif
</div>

<script>

    $("#roles-select-id").change(function (){

        if ($('#roles-select-id :selected').text() !='Contact') {
            $("#resident-id").prop( "disabled", true );
            $("#resident-relationship").prop( "disabled", true );
        } else {
            $("#resident-id").prop( "disabled", false );
            $("#resident-relationship").prop( "disabled", false );
        }
    });
</script>
