@include('common.nav')
@extends('CreateTool')
@section('content')
    <h3>New Cassel Retirement Center Tool Information </h3>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Tool ID:</td>
                <td><?php echo ($post['id']); ?></td>
            </tr>
            <tr>
                <td>Tool Name:</td>
                <td><?php echo ($post['tool_name']); ?></td>
            </tr>
            <tr>
                <td>Tool Comments:</td>
                <td><?php echo ($post['tool_comment']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop