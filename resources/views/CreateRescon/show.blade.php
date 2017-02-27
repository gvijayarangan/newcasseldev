@include('common.nav')
@extends('CreateRescon')
@section('content')
    <h3>New Cassel Retirement Center Resident Contact Information </h3>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Contact ID:</td>
                <td><?php echo ($post['id']); ?></td>
            </tr>
            <tr>
                <td>Contact First Name:</td>
                <td><?php echo ($post['con_fname']); ?></td>
            </tr>
            <tr>
                <td>Contact Middle Name:</td>
                <td><?php echo ($post['con_mname']); ?></td>
            </tr>
            <tr>
                <td>Contact Last Name:</td>
                <td><?php echo ($post['con_lname']); ?></td>
            </tr>
            <tr>
                <td>Relationship:</td>
                <td><?php echo ($post['con_relationship']); ?></td>
            </tr>
            <tr>
                <td>Cellphone:</td>
                <td><?php echo ($post['con_cellphone']); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo ($post['con_email']); ?></td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td><?php echo ($post['con_comment']); ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo ($post['con_gender']); ?></td>
            </tr>
            <tr>
                <td>Resident ID:</td>
                <td><?php echo ($post['con_res_fullname']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop