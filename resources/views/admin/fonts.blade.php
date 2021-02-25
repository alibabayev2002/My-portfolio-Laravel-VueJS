@extends('admin.base')
@section('content')
<div class="row mx-0 justify-content-center px-3">
    <div class="row w-25 mx-0">
        <input type="text " placeholder="Font awesome" class="pl-3 mb-3 font form-control" name="" id="">
        <select name="page" class="page form-control mb-3" id="">
            @foreach ($pages as $page)
                            <option class="h-100" value="{{$page->id}}">{{$page->name}}</option>    
            @endforeach
        </select>
        <button class="btn btn-success mb-3 form-control" onclick="addFont($('.font').val(),$('.page').val())">Add font</button>
    </div>
<table id="table_id" class="display w-100">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>page</th>
            <th>gates</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fonts as $font)
        <tr class="{{$font->id}}">
            <td>{{$font->id}}</td>
            <td>{{$font->name}}</td>
            <td class="text-danger">{{$font->page->name}}</td>
            <td><button class="btn btn-danger" onclick="deleteFont({{$font->id}})">Delete</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
    const addFont = (name,id) => {
        $.post('{{route("add.font")}}',{_token:'{{csrf_token()}}',name:name,id:id},function (data) {
            $('tbody').append(`
            <tr class="${data['id']}">
                <td>${data['id']}</td>
                <td>${name}</td>
                <td class="text-danger">

${data['page_name']}

</td>
<td><button class="btn btn-danger" onclick="deleteFont(${data['id']})">Delete</button></td>
            </tr>
            `)
        });
    }
    const deleteFont = (id) => {
        $.get('{{route("delete.font")}}',{_token:'{{csrf_token()}}',id:id},function (data) {
            // alert(data);
            $(`.${id}`).html('')
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