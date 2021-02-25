@extends('base')
@section('content')

<div class="projects section row mx-0 justify-content-center align-items-center h-100">
    <div class="section-content bg-white">
        <h1 class="title mt-3 mb-0">İşlərim</h1><br>
        <div id="carouselExampleIndicators" class="carousel slide w-100 mt-0 mb-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators " data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
            </ol>
            <div class="carousel-inner w-100">
                <div class="carousel-item active py-2">
                    <div class="row mx-0 justify-content-center mb-5 mt-5 align-items-center">
                        <div class="col-12 text-center"><b>BLOG</b></div>
                        <div style="width: 100px;height:100px;">
                            <img src="{{asset('img/blog.png')}}" width="100%" alt="">
                        </div>
                        <div style="font-size: 15px" class="text-center col-12">
                            Bu portfolio saytini yazarkən düşündüm ki əlavə olaraq back-end biliklərimi bir qədər subut etmək üçün simple blog yazım.
                            <a href="{{route('blog')}}">Blog</a> 'a keçid etmək istəyirsənizsə tıklayın.
                        </div>
                    </div>
                </div>

                <div class="carousel-item text-center  px-5 py-2">
                    <div class="row mx-0 justify-content-center mb-5 mt-5 align-items-center">
                        <div class="col-12 text-center"><b>Front end</b></div>
                        <div style="width: 100px;height:100px;">
                            <img src="{{asset('img/front.png')}}" width="100%" alt="">
                        </div>
                        <div style="font-size: 15px" class="text-center col-12">
                            Front endə aid bir neçə tasklar yerinə yetirib bu modula yerləşdirəcəm.Hələki bu hissə tam hazır deil.Hazır olduqda sayta yüklənəcəkdir.
                        </div>
                    </div>
                </div>

                <div class="carousel-item text-center  px-5 py-2">
                    <div class="row mx-0 justify-content-center mb-5 mt-5 align-items-center">
                        <div class="col-12 text-center"><b>Github</b></div>
                        <div style="width: 100px;height:100px;">
                            <img src="{{asset('img/github.png')}}" width="100%" alt="">
                        </div>
                        <div style="font-size: 15px" class="text-center col-12">
                            Bir qədər etdiyim işləri(taskları) github hesabıma yükləmişəm(həmçinin bu saytıda).Bacarıqlarımı dahada incələmək üçün <a href="">Github</a> hesabıma bax bilərsiniz
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded p-3" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded p-3" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h3 class="text-center">Portfolyo saytinin admin paneli hakkinda</h3>
    </div>
</div>

@endsection

