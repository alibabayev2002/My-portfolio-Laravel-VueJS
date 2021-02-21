@extends('base')
@section('content')

<div class="home-content section page-content row mx-0  ">

    <div class="row mx-0 px-5 w-100 h-100 align-items-center">
        <div class=" col-12">
            <div class="text-1 w-100">
                Salam , mənim adım
            </div>
            <div class="text-2 w-100">
                Əli Babayev!
            </div>
            <div class="text-3 w-100 mb-4">
                Mən
                <span class="typing-2 "></span>
            </div>
            <div class="text-4 w-100">
                <a href="{{asset('files/CV.pdf')}}" download class="hover-button btn btn-danger px-4 mr-2" data-hover="YÜKLƏ!">
                    <div><i class="fa fa-download text-white"></i> CV</div>
                </a>
                <a class="hover-button btn btn-success px-4" data-hover="KEÇ!">
                    <div><i class="fas fa-phone-square-alt"></i> ƏLAQƏ</div>
                </a>
            </div>
        </div>


    </div>

</div>
@endsection
