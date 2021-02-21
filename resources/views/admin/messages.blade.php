@extends('admin.base')
@section('content')
<div class="row mx-0 justify-content-center">
    <table id="table_id" class="display w-100">
        <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>message</th>
                <th>gates</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr class="{{$message->id}} page">
                <td>{{$message->id}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('script')
<script>
    $('#table_id').DataTable();
</script>
@endsection
@section('css')
<style>
    #table_id_wrapper {
        width: 100%;
    }

    th {
        text-align: center
    }

    td {
        text-align: center
    }

</style>
@endsection
