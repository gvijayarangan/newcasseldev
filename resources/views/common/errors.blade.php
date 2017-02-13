<!-- resources/views/common/errors.blade.php -->
{{--
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif--}}

@if(Session::has('error_message'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ Session::get('error_message') }}
    </div>
@endif