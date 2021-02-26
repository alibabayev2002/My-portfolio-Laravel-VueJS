@foreach($posts as $post)
<div class="post px-0 pr-1 col-12 col-sm-6 col-md-4">
    <div class="img-div img-thumbnail">
        <img src="{{asset('uploads/').'/'.$post->img}}" width="100%" height="100%" alt="">
    </div>
    
            <a style="word-break: break-all" href="{{route('view.post',$post->slug)}}" class="post-title text-left text-dark">
                {{Illuminate\Support\Str::limit(($post->content), 80, ' ...')}}
            </a>
        <div class="post-content text-muted" style="word-break: break-all">
            {{Illuminate\Support\Str::limit(($post->content), 150, ' dəvamı üçün klikləyin...')}}
        </div>
        <div class="text-muted w-100">
            {{$post->view}} <i class="fa fa-eye mr-2"></i>  {{$post->created_at->diffForHumans()}} <i class="far fa-clock"></i> 
    
        </div>
</div>
@endforeach