@include('common.nav')
@extends('CreateCntr')
@section('content')
    <h1>NCRC Center Information </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Center ID</td>
                <td><?php echo ($post['id']); ?></td>
            </tr>
            <tr>
                <td>Center Name*</td>
                <td><?php echo ($post['cntr_name']); ?></td>
            </tr>
            <tr>
                <td>Address Line 1* </td>
                <td><?php echo ($post['cntr_add1']); ?></td>
            </tr>
            <tr>
                <td>Address Line 2 </td>
                <td><?php echo ($post['cntr_add2']); ?></td>
            </tr>
            <tr>
                <td>City*</td>
                <td><?php echo ($post['cntr_city']); ?></td>
            </tr>
            <tr>
                <td>State*</td>
                <td><?php echo ($post['cntr_state']); ?></td>
            </tr>
            <tr>
                <td>Zip Code*</td>
                <td><?php echo ($post['cntr_zip']); ?></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><?php echo ($post['cntr_phone']); ?></td>
            </tr>
            <tr>
                <td>Fax Number</td>
                <td><?php echo ($post['cntr_fax']); ?></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td><?php echo ($post['cntr_comments']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
