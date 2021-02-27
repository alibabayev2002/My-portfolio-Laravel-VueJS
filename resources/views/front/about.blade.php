@extends('base')
@section('content')

<div class="about section row mx-0">
    <div class="about-content section-content py-4">
        <div class="sec-title mx-3 mb-4">
            <span class="hashtag mr-1">#</span> <span>Haqqımda</span>
        </div>
        <div class="content row mx-0 w-100 aling-items-center mb-4">
            {{-- <div class="col-12 col-lg-4 row mx-0 align-items-center">
                <img src="{{asset('img/profile.jpg')}}" class="w-100" alt="">
            </div> --}}
            <div class="col-12 col-12 order-lg-1 order-2 py-3  col-lg-6 row mx-0 align-items-center">
                <span class="about-text">
                    {!!$configs['about']!!}
                </span> <br>
                <div class="col-12 row mx-0 justify-content-center justify-content-lg-start">
                <button class="btn btn-main mt-4 px-3">CV YÜKLƏ!</button>

                </div>
            </div>
            <div class="col-12 order-ld-2 order-1 col-lg-6 row mx-0 align-items-center py-0 px-2">
                
                <div class="col-6 px-0 h-100 row mx-0 align-items-center">
                    <div class="text-main font-2 col-12 px-0">Doğum günü</div>
                    <div class="text-main font-2 col-12 px-0">Yaş</div>
                    <div class="text-main font-2 col-12 px-0">Telefon</div>
                    <div class="text-main font-2 col-12 px-0">Websayt</div>
                    <div class="text-main font-2 col-12 px-0">Blog</div>
                </div>
                <div class="col-6 px-0 h-100 row mx-0 align-items-center justfiy-content-end text-right">
                    <div class="text-dark font-2 col-12 px-0">02.08.2002</div>
                    <div class="text-dark font-2 col-12 px-0">18</div>
                    <div class="text-dark font-2 col-12 px-0">+994 (50) 872 85 90</div>
                    <div class="text-dark font-2 col-12 px-0">www.alibabayev.site</div>
                    <div class="text-dark font-2 col-12 px-0">www.alibabayev.ru</div>
                </div>
            </div>


        </div>
    </div>

</div>
@endsection
@section('title','Hakkımda - Babayev Əli')