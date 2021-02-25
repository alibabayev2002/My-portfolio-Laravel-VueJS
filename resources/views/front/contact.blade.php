@extends('base')
@section('content')
    <div class="section row mx-0 px-md-5">
        <div class="section-content row justify-content-center align-items-center py-5">
            <h1 class="title">Əlaqə</h1>
            <div class="font-1 text-danger">
                --
            </div>
            <div style="overflow-x:hidden; " class="col-12 row mx-0">
                    <div class="col-md-6 col-12 px-0 px-md-3 row mx-0 font-2">
                        <table>
                            <tr>
                                <td><i class="fas fa-user text-danger"></i></td>
                                <td>{{$configs['full_name']}}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-address-card text-danger"></i></td>
                                <td>{{$configs['address']}}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope text-danger"></i></i></td>
                                <td>{{$configs['email']}}</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-github text-danger"></i></i></td>
                                <td>{{$configs['github']}}</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-instagram text-danger"></i></td>
                                <td>{{$configs['instagram']}}</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-whatsapp text-danger"></i></td>
                                <td>{{$configs['whatsapp']}}</td>
                            </tr>
                        </table>
                    </div>
                <div class="col-md-6 col-12 px-0 px-md-3  row mx-0">
                    <form action="{{route('send.message')}}" method="post" class="row mx-0 justify-content-md-end justify-content-center mt-md-0 mt-5 align-items-center w-100">
@csrf
                    <table class="w-50">
                        <tr>
                            <td class="font-2">Bizə mesaj göndər</td>
                        </tr>
                        <tr>
                            <td><input class="form-control" name="email" type="text" placeholder="Email"></td>
                        </tr>
                        <tr><td><textarea class="form-control" name="message" placeholder="Mesajınız"></textarea></td></tr>
                        <tr>
                            <td><button type="submit" class="btn btn-danger">GONDER</button></td>
                        </tr>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
<style>
    td{
        padding: 5px 10px;
    }
</style>
@endsection