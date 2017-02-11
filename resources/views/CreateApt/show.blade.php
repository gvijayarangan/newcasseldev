@extends('CreateApt')
@section('content')
    <h1>New Cassel Retirement Center Apartment Information </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>apt_id:</td>
                <td><?php echo ($post['id']); ?></td>
            </tr>
            <tr>
                <td>apt_floornumber:</td>
                <td><?php echo ($post['apt_floornumber']); ?></td>
            </tr>
            <tr>
                <td>apt_number:</td>
                <td><?php echo ($post['apt_number']); ?></td>
            </tr>
            <tr>
                <td>apt_comments:</td>
                <td><?php echo ($post['apt_comments']); ?></td>
            </tr>
            <tr>
                <td>cntr_id:</td>
                <td><?php echo ($post['cntr_id']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop
