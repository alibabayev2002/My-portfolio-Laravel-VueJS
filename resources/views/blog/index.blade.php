@extends('base')
@section('content')
    <div class="blog row mx-0">
        <div class="blog-content">
            @if($first_post)
        <div class="blog-head row mx-0 w-100 px-3">
    
            <div class="col-12 px-0 col-lg-4 row mx-0 justify-content-lg-start justify-content-center">
                <div class="img-div img-thumbnail">
                    <img src="{{asset('uploads').'/'.$first_post->img}}" width="100%" height="100%" class="" alt="">
                </div>
            </div>
            
            <div class=" px-0 pl-md-3  col row mx-0 justify-content-between">
                <div class="col-12 px-0">
                    <a href="{{route('view.post',$first_post->slug)}}" class="title-text text-dark">{{$first_post->title}}</a>
                    <div style="font-weight: bold" class="col-12 text-danger p-0">
                        {{$first_post->category->name}} <span class="text-dark">kateqoriyasından</span>
                    </div>
                    <div style="word-break: break-all" class="content-text">{{Illuminate\Support\Str::limit(($first_post->content), 300, ' dəvamı üçün klikləyin...')}}</div>
                </div>
                
                <div class="col-12 px-0 row mx-0 align-items-end">
                    <div class="text-muted">
                        {{$first_post->views}} <i class="fa fa-eye mr-2"></i>  {{$first_post->created_at->diffForHumans()}} <i class="far fa-clock"></i> 
                    </div>
                </div>
    @endif
            </div>
        </div>
        <div class="blog-body row mx-0 w-100 justify-content-between px-3">
            
        </div>
    <div class="px-3 py-3">
        {{$posts->links('paginator')}}
    
    </div>
        </div>
    </div>

@endsection
@section('script')
<script>
    let url ="/posts?page=";
    let page = 1;
    fetch_data(page);
    $(document).on('click', '.pagination a', function(event){
            event.preventDefault(); 
            page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
            $('.page-link.active').removeClass('active');
            $(this).addClass('active');
    });
    function fetch_data(page){
    $.get(url+page,function(data){
            // alert('sa');
            $('.blog-body').html(data);
    });
    }

    </script>
@endsection
@section('css')
<style>
    *{
        word-break: break-all;
    }
</style>
    
@endsection

@section('title','Blog')