@extends('blog.base')
@section('content')

<div class="row mx-0 post-view justify-content-start w-100">
    <div class="col-12 row mx-0 justify-content-center py-2 px-0">
        
        <div class="div-img">
            <img src="{{asset('uploads').'/'.$post->img}}" width="100%" height="100%" alt="">
        </div>
    </div>
    <div style="font-weight: bold" class="col-12 text-danger p-0">
        {{$post->category->name}} <span class="text-dark">kateqoriyasından</span>
    </div>
    <div class="post-title mb-3 w-100">{{$post->title}}</div>
    <div class="post-content w-100">{{$post->content}}{{$post->content}}</div>
    <div class="post-content mb-3 w-100">{{$post->content}}{{$post->content}}</div>
    <div class="text-muted w-100">
        {{$post->view}} <i class="fa fa-eye mr-2"></i>  {{$post->created_at->diffForHumans()}} <i class="far fa-clock"></i> 

    </div>
    <div class="col-12 pt-3 row border-top text-dark justify-content-between py-2 mx-0 my-3 px-0">
    
        <div class="col-md-4 col-12 px-0">
            <h3>Şərh yazın..</h3> 
            <input type="text" placeholder="Ad soyad" class="form-control mb-2">
            <textarea class="w-100 form-control" rows="10" name="" placeholder="şərh yazın....."></textarea>
            <input type="submit" value="YAZ" class="btn btn-success mt-2 form-control">
        </div>

        <div class="col-md-6 col-12 px-0">
            <div class="col-12 px-0">
                <h2>Şərhlər</h2><br>
                <h6 class="text-muted">şərh bölməsi hələlik bağlıdır...</h6>
            </div>
        </div>
    </div>
    <hr>

</div>
    
@endsection
@section('title',$post->title)