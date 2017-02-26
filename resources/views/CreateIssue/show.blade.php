@include('common.nav')
@extends('CreateIssue')
@section('content')
    <h3>New Cassel Retirement Center Issue Information </h3>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Issue ID:</td>
                <td><?php echo ($post['id']); ?></td>
            </tr>
            <tr>
                <td>Issue Type Name:</td>
                <td><?php echo ($post['issue_typename']); ?></td>
            </tr>
            <tr>
                <td>Issue Comments:</td>
                <td><?php echo ($post['issue_comment']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop