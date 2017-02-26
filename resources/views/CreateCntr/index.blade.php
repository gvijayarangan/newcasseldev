@include('common.nav')
@extends('CreateCntr')
@section('content')
    <h1>Center</h1>
    <a href="{{url('/center/create')}}" class="btn btn-success">Create Center</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Center Id</th>
            <th>Center Name</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Phone</th>
            <th>Fax</th>
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
        @foreach ($createcntr as $createcntr)
            <tr>
                <td>{{ $createcntr-> id }}</td>
                <td>{{ $createcntr-> cntr_name }}</td>
                <td>{{ $createcntr-> cntr_add1 }}</td>
                <td>{{ $createcntr-> cntr_add2 }}</td>
                <td>{{ $createcntr-> cntr_city }}</td>
                <td>{{ $createcntr-> cntr_state }}</td>
                <td>{{ $createcntr-> cntr_zip }}</td>
                <td>{{ $createcntr-> cntr_phone }}</td>
                <td>{{ $createcntr-> cntr_fax }}</td>
                <td><a href="{{url('center',$createcntr->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{url('center/update',$createcntr->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['center.destroy', $createcntr->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
