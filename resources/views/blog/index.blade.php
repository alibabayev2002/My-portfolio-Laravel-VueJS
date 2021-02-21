@extends('blog.base')
@section('content')
<div class="blog row mx-0">
    <div class="blog-head row mx-0 w-100">
        <div class="col-12 col-lg-5 row mx-0 justify-content-lg-start justify-content-center">

            <div class="img-div">
                <img src="{{asset('uploads').'/'.$posts[0]->img}}" width="100%" height="100%" alt="">
            </div>
        </div>
        
        <div class="px-0 px-md-0  col row mx-0 justify-content-between">
            <div class="col-12 px-0">
                <a href="{{route('view.post',$posts[0]->slug)}}" class="title-text text-dark">{{$posts[0]->title}}</a>
                <div style="word-break: break-all" class="content-text">{{$posts[0]->content}}{{$posts[0]->content}}</div>
            </div>
            <div class="col-12 px-0 row mx-0 align-items-end">
                <div class="text-muted">
                    199 <i class="fa fa-eye mr-2"></i>  2020-12-15 15:20 <i class="far fa-clock"></i> 

                </div>
            </div>

        </div>
    </div>
    <div class="blog-body row mx-0 w-100 justify-content-between">
        @foreach($posts as $post)
        <div class="post px-0 col-12 col-sm-6 col-md-4 row mx-0 justify-centent-center">
            <div class="img-div col-12">
                <img src="{{asset('img/back.png')}}" width="100%" height="100%" alt="">
            </div>
            <a href="{{route('view.post',$post->slug)}}" class="col-12 post-title text-dark">
                {{$post->title}}
            </a>
            <div class="col-12 post-content text-muted" style="word-break: break-all">
                {{$post->content}}
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection