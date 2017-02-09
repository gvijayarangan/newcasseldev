es (182 sloc)  7.61 KB
<div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
    {!! Form::label('f_name', 'First Name:', ['class' => 'col-md-4 control-label']) !!}
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
    {!! Form::label('l_name', 'Last Name:', ['class' => 'col-md-4 control-label']) !!}
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
    {!! Form::label('email', 'E-Mail Address:', ['class' => 'col-md-4 control-label']) !!}
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
    <label class="col-md-4 control-label">Roles</label>
    <div class="col-md-6">{!! Form::select('rolelist[]', $list_role, null,
    ['class' => 'form-control roles cds-select', 'multiple', 'style' => 'width: 50%; margin-top: 10px;', 'required' => 'required']) !!}</div>
</div>

<div class="form-group{{ $errors->has('residentid') ? ' has-error' : '' }}">
    {!! Form::label('residentid', 'Resident ID:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('residentid', null, ['class' => 'col-md-6 form-control']) !!}
        @if ($errors->has('residentid'))
            <span class="help-block">
                <strong>{{ $errors->first('residentid') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('residentrelationship') ? ' has-error' : '' }}">
    {!! Form::label('residentrelationship', 'Resident Relationship:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('residentrelationship', null, ['class' => 'col-md-6 form-control']) !!}
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

<div class="form-group{{ $errors->has('homephone') ? ' has-error' : '' }}">
    {!! Form::label('homephone', 'Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('homephone', null, ['class' => 'col-md-2 form-control', 'required' => 'required']) !!}
        @if ($errors->has('homephone'))
            <span class="help-block">
                <strong>{{ $errors->first('homephone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                {{ Form::hidden('active', false) }}{{ Form::checkbox('active', true, old('active')) }} Active
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                {{ Form::hidden('active', false) }}{{ Form::checkbox('active', true, old('active')) }} Receive Email Updates
            </label>
        </div>
    </div>
</div>

@if($CRUD_Action == 'Create')
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="password" id='p' readonly><br/><input type='button' value ='generate password' onclick='document.getElementById("p").value = Password.generate(16)'>
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
            @if ($errors->has('password_confirmation'))
                <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
            @endif
        </div>
    </div>
@endif

<div class="form-group" style="text-align: center">
    @if($CRUD_Action == 'Create')
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Mail Password Reset Link', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

        {!! Form::button('Cancel', ['type' => 'reset', 'class' => 'btn btn-default']) !!}
    @else
         {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}

         {!! Form::button('Cancel', ['type' => 'reset', 'class' => 'btn btn-default']) !!}
    @endif
 </div>

<script>
    var Password = {
        _pattern : /[a-zA-Z0-9_\-\+\.]/,
        _getRandomByte : function()
        {
// http://caniuse.com/#feat=getrandomvalues
            if(window.crypto && window.crypto.getRandomValues)
            {
                var result = new Uint8Array(1);
                window.crypto.getRandomValues(result);
                return result[0];
            }
            else if(window.msCrypto && window.msCrypto.getRandomValues)
            {
                var result = new Uint8Array(1);
                window.msCrypto.getRandomValues(result);
                return result[0];
            }
            else
            {
                return Math.floor(Math.random() * 256);
            }
        },
        generate : function(length)
        {
            return Array.apply(null, {'length': length})
                .map(function()
                {
                    var result;
                    while(true)
                    {
                        result = String.fromCharCode(this._getRandomByte());
                        if(this._pattern.test(result))
                        {
                            return result;
                        }
                    }
                }, this)
                .join('');
        }
    };
</script>