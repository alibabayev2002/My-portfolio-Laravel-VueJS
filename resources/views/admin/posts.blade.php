@extends('admin.base')
@section('content')
<div class="post-section row justify-content-center mx-0">
    <button class="btn btn-success mb-4" data-toggle="modal" data-target="#postModal">Add post</button>
    <table id="table_id" class="display w-100">
        <thead>
            <tr>
                <th>id</th>
                <th>image</th>
                <th>title</th>
                <th>category</th>
                <th>gates</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr class="{{$post->id}}">
                <td>{{$post->id}}</td>
                <td>{{$post->img}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->category->name}}</td>
                <td>
                    <button data-toggle="modal" data-target="#postModal" onclick="editPost({{$post->id}},'{{$post->title}}','{{$post->img}}','{{$post->content}}','{{$post->category->id}}','{{$post->status}}')" class="btn btn-success"><i class="fas fa-pencil-alt"></i></button>
                    <button onclick="deletePost({{$post->id}})" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('post')}}" method="post" enctype="multipart/form-data">

            <div class="modal-body">
                    @csrf
                    <input type="text" class="one d-none" name="id">
                    <input type="text" name="title"  placeholder="Post title" class="form-control two my-3">
                    <img src="" class="blog-img" width="" alt="">
                    <input type="file" name="img" placeholder="Post image" class="form-control my-3">
                    POST STATUS : <input name="status" type="checkbox" class="four" name="" id="">
                    <br>
                    <select name="category_id" class="form-control five" id="">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <textarea class="w-100 text-center six" name="content" placeholder="Content" name="" id="" cols="50" rows="15"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save
                    changes</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
    const editPost = (id,title,img,content,category,status) => {
        $(".one").val(id);
        $('.two').val(title);
        $('.five').val(category);
        $('.blog-img').attr('src','{{asset('uploads/').'/'}} {{isset($post) ? $post->img : ''}}');
        $('.six').val(content);
    }
    const deletePost = (id) =>{
        $.post('{{route("delete.post")}}',{_token:'{{csrf_token()}}',id:id},function (data) {
            $(`.${id}`).html('');
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
