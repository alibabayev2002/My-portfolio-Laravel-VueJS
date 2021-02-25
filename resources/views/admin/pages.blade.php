@extends('admin.base')
@section('content')
<div class="row mx-0 justify-content-center">
    <div class="row mx-0 w-25">
        <input type="text " placeholder="PAGE" class="pl-3 mb-3 page form-control" name="" id="">
        <input type="text " placeholder="PAGE ROUTE" class="pl-3 mb-3 page-route form-control" name="" id="">
        <button class="btn btn-success mb-3 form-control" onclick="addPage($('.page').val(),$('.page-route').val())">Add
            page</button>
    </div>
    <table id="table_id test-table" class="display w-100">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>font</th>
                <th>route</th>
                <th>status</th>
                <th>gates</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
            <tr class="{{$page->id}} page">
                <td>{{$page->id}}</td>
                <td>{{$page->name}}</td>
                <td class="">
                    <div class="row mx-0 align-items-center justify-content-center w-100 h-100">
                        <i class="font mr-2"></i>
                        <select name="" class="select select-{{$page->id}}" onchange="selectFont({{$page->id}},this.value,this)" id="">
                            @foreach ($page->fonts as $font)
                            @if($page->icon=="null") <option value="">-</option> @endif
                            <option @if($page->icon == $font->name) selected @endif value="{{$font->name}}">{{$font->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
                <td>{{$page->route_name}}</td>

                <td><input type="checkbox" onchange="editPage('{{$page->id}}')" name=""
                        {{$page->status ? 'checked' : ''}} id=""></td>
                <td><button class="btn btn-danger" onclick="deletePage({{$page->id}})">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('script')
<script>

    $('#table_id').DataTable();
    $(".font").each(function (index) {
        $(this).addClass('selected-'+index);
        let icon = $('.selected-'+index).next('.select').val();
        $('.selected-'+index).addClass(icon);
    });


    const addPage = (name, route) => {
        $.post('{{route("add.page")}}', {
            _token: '{{csrf_token()}}',
            name: name,
            route: route
        }, function (data) {
            if (data) {
                $('tbody').append(`
                <tr class="${data['id']}">
                    <td>${data['id']}</td>
                    <td>${name}</td>
                    <td><select><option></option></select></td>
                    <td>${data['route']}</td>
                    <td><input type="checkbox" onchange="editPage(${data['id']})" name=""
                        {{$page->status ? 'checked' : ''}} id=""></td>
                    <td><button class="btn btn-danger" onclick="deletePage(${data['id']})">Delete</button></td>
                    </tr>
                `)
            }
        });
    }
    const editPage = (id) => {
        $.post('{{route("edit.page")}}', {
            _token: '{{csrf_token()}}',
            id: id
        }, function (data) {
            // alert('okey');
        });
    }

    const deletePage = (id) => {
        $.get('{{route("delete.page")}}', {
            _token: '{{csrf_token()}}',
            id: id
        }, function (data) {
            $(`.${id}`).html('');
            $('#table_id').DataTable();
        });
    }

    const selectFont = (id,val,data) => {

        $(data).attr('class', 'font mr-2 ' + val);
        
        $.get('{{route("select.font")}}', {
            _token: '{{csrf_token()}}',
            id: id,
            font: val
        }, function (data) {
            console.log(data)
        })
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
