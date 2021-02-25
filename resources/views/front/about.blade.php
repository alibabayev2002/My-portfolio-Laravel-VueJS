@extends('base')
@section('content')

<div class="about section row mx-0">
    <div class="about-content section-content py-3">
        <h1 class="title">Haqqımda</h1>
        <h3 class="text-danger"><b><i class="fas fa-long-arrow-alt-right"></i> Mən <i
                    class="fas fa-long-arrow-alt-left"></i></b></h3>
        <div class="content row mx-0 w-100 aling-items-center mb-4">
            <div class="col-12 col-lg-4 row mx-0 align-items-center">
                <img src="{{asset('img/profile.jpg')}}" class="w-100" alt="">
            </div>
            <div class="col-12 col-lg-8">
                <span class="font-3 mr-2"><b>Babayev Əli </b></span>
                <span class="typing-2 font-3"></span>
                <br>
                <span class="font-2">
                    {!!$configs['about']!!}
                </span> <br>
                <div class="col-12 row mx-0 justify-content-center justify-content-lg-start">
                <button class="btn btn-success mt-4 px-3">CV YÜKLƏ!</button>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
<script>

</script>
@endsection

