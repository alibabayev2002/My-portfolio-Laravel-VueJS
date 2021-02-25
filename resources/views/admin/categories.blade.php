@extends('admin.base')
@section('content')
<div class="categories-section row mx-0 w-100 px-3">
    <div class="row mx-0 w-100  mb-5 align-items-center justify-content-end">
    Category add : 
    <input type="text" name="" placeholder="NAME" class="mx-2 h-100 addCategoryName px-2" style="width: 300px;" id="">
    <button onclick="addCategory($('.addCategoryName').val())" class="btn btn-success px-3">+</button>
    </div>
    <table id="table_id" class="display w-100">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>Post count</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="{{$category->id}}">
                <td class="one">{{$category->id}}</td>
                <td class="two">{{$category->name}}</td>
                <td class="three">{{$category->count()}}</td>
                <td class="four row mx-0 justify-content-center"><button data-toggle="modal" onclick="editCategoryModal({{$category->id}},'{{$category->name}}')" data-target="#categoryModal" class="btn btn-success mr-1" href=""><i
                            class="fas fa-pencil-alt"></i></button><button {{$category->id==1 ? 'disabled' : ''}} onclick="deleteCategory({{$category->id}})" class="btn btn-danger {{$category->id==1 ? 'disabled' : ''}}" href=""><i
                            class="fas fa-trash"></i></button></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

</div>
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Category edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="text" placeholder="category name" class="form-control my-3">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="editCategory($('.modal-body input').val())" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    let categoryId = null;
    $(document).ready(function () {
        $('#table_id').DataTable();
    });

    const deleteCategory = (id) => {
        $.post("{{route('delete.category')}}",{_token:'{{csrf_token()}}',id:id},function(data){
            // alert("Silindi!");
            $(`tr.${id}`).html('');
        });
    }
    const addCategory = (name) => {
        $.get("{{route('add.category')}}",{_token:'{{csrf_token()}}',name:name},function(data){
            $('tbody').append(`
            <tr class="${data['id']}">
                <td>${data['id']}</td>
                <td>${name}</td>
                <td>0</td>
                <td class="four row mx-0 justify-content-center"><button data-toggle="modal" onclick="editCategoryModal(${data['id']},${name})" data-target="#categoryModal" class="btn btn-success mr-1" href=""><i
                            class="fas fa-pencil-alt"></i></button><button onclick="deleteCategory(${data['id']})" class="btn btn-danger href=""><i
                            class="fas fa-trash"></i></button></td>
            </tr>
            `)
        });
    }
    const editCategoryModal = (id,name) => {
        $('.modal-body input').val(name);
        categoryId = id;
    }
    const editCategory = (name) =>{
        $.post("{{route('edit.category')}}" , {_token:'{{csrf_token()}}',id:categoryId,name:name} , function (data) {
            $(`.${categoryId} .two`).html(name);
            $('#categoryModal').removeClass('show');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').removeClass('show');
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
