@include('common.nav')
@extends('CreateRes')
@section('content')
    <h1>Resident</h1>
    <a href="{{url('/resident/create')}}" class="btn btn-success">Create Resident</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Resident Id</th>
            <th>PCCID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Cellphone</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Status</th>
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
        @foreach ($createres as $createres)
            <tr>
                <td>{{ $createres-> id }}</td>
                <td>{{ $createres-> res_pccid }}</td>
                <td>{{ $createres-> res_fname }}</td>
                <td>{{ $createres-> res_mname }}</td>
                <td>{{ $createres-> res_lname }}</td>
                <td>{{ $createres-> res_gender }}</td>
                <td>{{ $createres-> res_phone }}</td>
                <td>{{ $createres-> res_cellphone }}</td>
                <td>{{ $createres-> res_email }}</td>
                <td>{{ $createres-> res_comment }}</td>
                <td>{{ $createres-> res_status }}</td>
                <td><a href="{{url('resident',$createres->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{url('resident/update',$createres->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['resident.destroy', $createres->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
