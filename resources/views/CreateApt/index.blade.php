@include('common.nav')
@extends('CreateApt')
@section('content')
    <h1>New Cassel Apartment Information </h1>
    <a href="{{url('/apartment/create')}}" class="btn btn-success">Create Apartment</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Apt ID</th>
            <th>Apt FloorNumber</th>
            <th>Apt Number</th>
            <th>Apt Comments</th>
            <th>Center Id</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        <script>
            function ConfirmDelete()
            {
                var x = confirm("Are you sure you want to delete? Click OK to continue");
                if (x)
                    return true;
                else
                    return false;
            }
        </script>
        @foreach ($createapts as $createapt)
            <tr>
                <td>{{ $createapt->id}}</td>
                <td>{{ $createapt->apt_floornumber}}</td>
                <td>{{ $createapt->apt_number}}</td>
                <td>{{ $createapt->apt_comments}}</td>
                <td>{{ $createapt->cntr_id}}</td>
                <td><a href="{{url('apartment',$createapt->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{url('apartment/update', $createapt->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['apartment.destroy', $createapt->id],'onsubmit' => 'return ConfirmDelete()']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection