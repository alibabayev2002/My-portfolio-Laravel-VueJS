@extends('base')
@section('content')

<div class="skills-content section row mx-0  ">
    <div class="section-content bg-white py-1">
        <h1 class="title font-3 text-primary mb-4">Bacarıqlarım</h1>
        <div class="content row mx-0 w-100">
            <div class="col-md-7 col-12 row mx-0  align-items-center mb-5">
                <div class="col-12">
                    <b class="text-danger font-2"> Bacarıqlarım haqqında</b><br>
                    Portfolyomda ve githubda olan işlərim ilə müəyyən qədər təcrübəyə malikəm. Daim yeni şeylər öyrənməyə çalışıram və bu gördüyünüz biliklər üzrə özümü inkişaf etdirməyə təcrübə sahibi olmağa çalışıram..
                </div>
            </div>
            <div class="col-md-5 col-12 row mx-0 justify-content-center font-2">
                @foreach ($skills as $skill)
                <div class="text-dark col-12 row mx-0 text-center row mx-0 justify-content-between align-items-center">
                    <div>
                        - {{$skill->name}}
                    </div>
                    <div class="progress w-100 p-0 m-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$skill->level}}%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$skill->level}}%</div>
                    </div>
                </div>

                @endforeach




                {{-- <div class="text-danger col-12 text-center"><i class="fab fa-css3-alt"></i> CSS(SASS,BOOTSTRAP)</div>
                     <div class="color-main col-12 text-center"><i class=" text-warning fab fa-js"></i> JAVASCRIPT(JQUERY,AJAX,VUEJS)</div>
                     <div class="col-12 text-center"><i class="fab fa-php"></i> PHP(LARAVEL)</div>
                     <div class="col-12 text-primary text-center"><i class="fab fa-python"></i> PYTHON(DJANGO)</div>
                     <div class="col-12 text-success text-center"><i class="fas fa-database"></i> MYSQL,POSTGRESQL,FIREBASE ,...</div>
                     <div><i class="fas fa-code-branch"></i> GIT(VERSION CONTROL)</div> --}}
            </div>
        </div>
    </div>

</div>
@endsection

