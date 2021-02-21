@extends('admin.base')
@section('content')
    <div class="row mx-0 justify-content-center">
        <div class="w-50 row mx-0 text-center">
            <form action="{{route('configs.save')}}" class="w-100" method="post">
                @csrf
                <h2 class="text-center w-100">CONFIGS</h2>
                <input type="text" value="{{$configs['full_name']}}" name="full_name" placeholder="Full name" class="full_name form-control my-2 text-center">
                <input type="text" value="{{$configs['email']}}" name="email" placeholder="Email" class="full_name form-control my-2 text-center">
                <input type="text" value="{{$configs['address']}}" name="address" placeholder="Adress" class="full_name form-control my-2 text-center">
                <input type="text" value="{{$configs['github']}}" name="github" placeholder="Github" class="full_name form-control my-2 text-center">
                <input type="text" value="{{$configs['instagram']}}" name="instagram" placeholder="İnstagram" class="full_name form-control my-2 text-center">
                <input type="text" value="{{$configs['whatsapp']}}" name="whatsapp" placeholder="Whatsapp" class="full_name form-control my-2 text-center">
                <textarea style="resize: none" class="form-control my-2 text-center" name="about" rows="15" placeholder="About">{{$configs['about']}}</textarea>
                <input type="submit" class="btn btn-success form-control" value="SAVE">
            </form>
        </div>
    </div>
@endsection