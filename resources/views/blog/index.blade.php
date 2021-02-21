@extends('blog.base')
@section('content')
<div class="blog row mx-0">
    <div class="blog-head row mx-0 w-100">
        <div class="col-12 col-lg-5 row mx-0 justify-content-lg-start justify-content-center">
            <div class="img-div">
                <img src="{{asset('img/back.png')}}" width="100%" height="100%" alt="">
            </div>
        </div>
        
        <div class="px-0 px-md-0  col row mx-0 justify-content-between">
            <div class="col-12 px-0">
                <div class="title-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum amet pariatur minus nostrum natus debitis fuga perspiciatis ex quas! Corporis amet sapiente cum illo unde sit, perspiciatis qui voluptate aliquam.</div>
                <div class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, excepturi voluptatibus ea, similique deserunt nesciunt, quaerat omnis aliquid iusto illum libero! Tenetur necessitatibus aliquid voluptas alias rem, eos sunt nulla. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus est quisquam magni. Cum nemo aliquam iure nam itaque est quos, rem possimus ad? Nostrum suscipit voluptates natus eligendi optio qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquid nihil ad totam. Architecto atque, eum neque voluptatem natus saepe aliquid cum facilis quas veniam? Officiis vel harum cumque molestias.</div>
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
            <div class="col-12 post-title">
                {{$post->title}}
            </div>
            <div class="col-12 post-content text-muted">
                {{$post->content}}
            </div>
        </div>
        @endforeach
        <div class="post px-0 col-12 col-sm-6 col-md-4 row mx-0 justify-centent-center">
            <div class="img-div col-12">
                <img src="{{asset('img/back.png')}}" width="100%" height="100%" alt="">
            </div>
            <div class="col-12 post-title">
                Lorem ipsum dolor consectetur adipisicing elit. Aliquam, fugiat illum illo eligendi nostruaklmsm akmlsklmsa amlks akmskasmet
            </div>
            <div class="col-12 post-content text-muted">
                Lorem ipsum dolor consectetur adipisicing elit. Aliquam, fugiat illum illo eligendi nostruaklmsm akmlsklmsa amlks akmskasmet
            </div>
        </div>
        <div class="post px-0 col-12 col-sm-6 col-md-4 row mx-0 justify-centent-center">
            <div class="img-div col-12">
                <img src="{{asset('img/back.png')}}" width="100%" height="100%" alt="">
            </div>
            <div class="col-12 post-title">
                Lorem ipsum dolor consectetur adipisicing elit. Aliquam, fugiat illum illo eliam,snkagendi nostrum quo amet
            </div>
            <div class="col-12 post-content text-muted">
                Lorem ipsum dolor consectetur adipisicing elit. Aliquam, fugiat illum illo eligendi nostruaklmsm akmlsklmsa amlks akmskasmet
            </div>
        </div>
        <div class="post px-0 col-12 col-sm-6 col-md-4 row mx-0 justify-centent-center">
            <div class="img-div col-12">
                <img src="{{asset('img/back.png')}}" width="100%" height="100%" alt="">
            </div>
            <div class="col-12 post-title">
                Lorem ipsum doloasnkjnsr consectetur adipisicing elit. Aliquam, fugiat illum illo eligendi nostrum quo amet skjanklsjla
            </div>
            <div class="col-12 post-content text-muted">
                Lorem ipsum dolor consectetur adipisicing elit. Aliquam, fugiat illum illo eligendi nostruaklmsm akmlsklmsa amlks akmskasmet
            </div>
        </div>
    </div>
</div>

@endsection