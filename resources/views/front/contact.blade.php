@extends('base')
@section('content')
    <div class="section row mx-0 px-5">
        <div class="section-content row justify-content-center align-items-center py-5">
            <h1 class="title">Əlaqə</h1>
            <div class="font-1 text-danger">
                --
            </div>
            <div class="col-12 row mx-0">
                    <div class="col-md-6 col-12 row mx-0 font-2">
                        <table>
                            <tr>
                                <td><i class="fas fa-user text-danger"></i></td>
                                <td>Babayev Əli</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-address-card text-danger"></i></td>
                                <td>Bakı , Azərbaycan</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope text-danger"></i></i></td>
                                <td>ali.babayev.655.19@gmail.com</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-github text-danger"></i></i></td>
                                <td>alibabayev2002</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-instagram text-danger"></i></td>
                                <td>bhabhayef</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-whatsapp text-danger"></i></td>
                                <td>+994 (50) 872 85 90</td>
                            </tr>
                        </table>
                    </div>
                <div class="col-md-6 col-12 row mx-0 justify-content-md-end justify-content-start mt-md-0 mt-5 align-items-center">

                    <table class="w-50">
                        <tr>
                            <td class="font-2">Bizə mesaj göndər</td>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="text" placeholder="Email"></td>
                        </tr>
                        <tr><td><textarea class="form-control" placeholder="Mesajınız"></textarea></td></tr>
                        <tr>
                            <td><button class="btn btn-danger">GONDER</button></td>
                        </tr>
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