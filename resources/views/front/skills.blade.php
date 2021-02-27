@extends('base')
@section('content')

<div class="skills-content section row mx-0  ">
    <div class="section-content bg-white py-1">
        {{-- <h1 class="title font-3 text-primary mb-4">Bacarıqlarım</h1> --}}
        <div class="w-100 px-0">
            <div class="sec-title">
                <span class="hashtag mr-1">#</span> <span>Vəzifələrim</span>
            </div>
            <div class="positions row mx-0 w-100 p-0 justify-content-start">
                <div class="col-md-4 col-12 p-2">
                    <div class="position">
                            <div class="title">
                                <span>Front end developer</span>
                            </div>
                            <div class="position-logo w-100">
                                <i class="fab fa-black-tie"></i>
                            </div>
                            <div class="position-content">
                                <span>
                                   Dillər : JavaScript(VueJS,Ajax),HTML,CSS(SASS,BOOTSTRAP)
                                </span>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 p-2">
                    <div class="position">
                            <div class="title">
                                <span>Back end developer</span>
                            </div>
                            <div class="position-logo w-100">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="position-content">
                                <span>
                                   Dillər : PHP(LARAVEL) , SQL , MYSQL , POSTGRESQL , Firebase 
                                </span>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 p-2">
                    <div class="position">
                            <div class="title">
                                <span>Web designer</span>
                            </div>
                            <div class="position-logo w-100">
                                <i class="fas fa-tape"></i>
                            </div>
                            <div class="position-content">
                                <span>
                                   Photoshop , Coreldraw zad dagid
                                </span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 px-0">
            <div class="sec-title">
                <span class="hashtag mr-1">#</span> <span>Bacarıqlarım</span>
            </div>
        </div>
        <div class="content row mx-0 w-100">
            <div class="col-12 px-0 row mx-0  align-items-center mb-5 mb-md-0">
                <div class="col-12 px-0">
                    <b class="text-main font-2"> Bacarıqlarım haqqında</b><br>
                    Portfolyomda ve githubda olan işlərim ilə müəyyən qədər təcrübəyə malikəm. Daim yeni şeylər öyrənməyə çalışıram və bu gördüyünüz biliklər üzrə özümü inkişaf etdirməyə təcrübə sahibi olmağa çalışıram..
                </div>
            </div>
            <div class="col-12 px-0 row mx-0 justify-content-center font-2">
                @foreach ($skills as $skill)
                <div class="text-dark col-12 px-0 row mx-0 text-center row mx-0 justify-content-between align-items-center">
                    <div>
                        - {{$skill->name}}
                    </div>
                    <div class="progress w-100 p-0 m-0">
                        <div class="progress-bar bg-main" role="progressbar" style="width: {{$skill->level}}%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$skill->level}}%</div>
                    </div>
                </div>

                @endforeach

            </div>
           
        </div>
    </div>

</div>
@endsection
@section('title','Bacarıqlarım - Babayev Əli')
