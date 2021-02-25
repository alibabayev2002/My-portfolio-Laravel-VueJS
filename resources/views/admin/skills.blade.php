@extends('admin.base')
@section('content')
    <div class="row mx-0 px-3 justify-content-center">
        <div class="w-25 row mx-0">
            <input type="text" placeholder="name" class="form-control my-2 name">
            <input type="text" placeholder="level" class="form-control mb-2 level">
            <button onclick="addSkill($('.name').val(),$('.level').val())" class="btn btn-success form-control mb-2">Add skill</button>
        </div>
        <table id="table_id" class="display w-100">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>level</th>
                    <th>gates</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr class="{{$skill->id}} page">
                    <td>{{$skill->id}}</td>
                    <td>{{$skill->name}}</td>
                    <td>{{$skill->level}} %</td>
                    <td><button class="btn btn-danger" onclick="deleteSkill({{$skill->id}})">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
<script>
    $('#table_id').DataTable();
    const addSkill = (name,level) =>{
        $.post('{{route("add.skill")}}', {
            _token: '{{csrf_token()}}',
            name: name,
            level: level
        }, function (data) {
            if (data) {
                $('tbody').append(`
                <tr class="${data}">
                    <td>${data}</td>
                    <td>${name}</td>
                    <td>${level}%</td>
                    <td><button class="btn btn-danger" onclick="deleteSkill(${data})">Delete</button></td>
                </tr>
                `)
            }
        });
    }
    const deleteSkill = (id) =>{
        $.post('{{route("delete.skill")}}', {
            _token: '{{csrf_token()}}',
            id: id,
        }, function (data) {
            if (data) {
                $(`tr.${id}`).html('');
            }
        });
    }
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