@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="container">
    <h3>Work Order View </h3>
    </br></br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Requester</th>
            <th>Apartment#</th>
            <th>CommonArea</th>
            <th>WO Description</th>
            <th>WO Date Created</th>
            <th>WO Status Changed</th>
            <th>WO Priority</th>
            <th>WO Status</th>
            <th>WO Status ChangedBy</th>
            <th>Read</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Robert Bosh</td>
            <td>101</td>
            <td>NA</td>
            <td>Meeting room light not working</td>
            <td>2/10/2017 11:29:18</td>
            <td>2/10/2017 11:29:18</td>
            <td>Moderate</td>
            <td>In-Progress</td>
            <td>Admin</td>
            <td><a class="btn btn-primary">Read</a></td>
            <td><a class="btn btn-warning">Update</a></td>
            <td>
                <a class="btn btn-warning">Delete</a>
            </td>

        </tr>
        <tr>
            <td>Joe Mathew</td>
            <td>NA</td>
            <td>Pool</td>
            <td>Water not clean</td>
            <td>2/20/2017 15:04:56</td>
            <td>2/20/2017 15:04:56</td>
            <td>High</td>
            <td>Open</td>
            <td>Admin</td>
            <td><a class="btn btn-primary">Read</a></td>
            <td><a class="btn btn-warning">Update</a></td>
            <td>
                <a class="btn btn-warning">Delete</a>
            </td>

        </tr>
        <tr>
            <td>Mary Kris</td>
            <td>103</td>
            <td>NA</td>
            <td>Stains on the carpet</td>
            <td>2/15/2017 07:45:20</td>
            <td>2/15/2017 07:45:20</td>
            <td>Moderate</td>
            <td>In-Progress</td>
            <td>Admin</td>
            <td><a class="btn btn-primary">Read</a></td>
            <td><a class="btn btn-warning">Update</a></td>
            <td>
                <a class="btn btn-warning">Delete</a>
            </td>

        </tr>
        </tbody>
    </table>
</div>
@endsection