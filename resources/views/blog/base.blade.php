<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    @yield('css')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    {{-- <div class="loader">
        <div class="back"></div>
        <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;opacity:1 !important;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}


    <div class="wrapper">
        <header>
            <div class="w-100">
                <div class="row w-100 mx-0 px-3 ">
                    <div class="col-12 row mx-0 justify-content-center px-0">
                        <a class="typing text-dark logo">./blog</a>
                        <a class=" logo typed-cursor text-danger ml-2 mr-2"> |</a>
                        <a class=" logo text-muted">v1</a>
                    </div>
                    <div class=" col-12 pages mx-0 px-0 row justify-content-center align-items-center">
                        <a href="{{route('home')}}" class="page-item text-danger"><i class="fas fa-caret-left"></i> Portfolyo</a>
                        <a href="{{route('blog')}}" class="page-item active">Blog</a>
                        {{-- <a href="{{route('about')}}" class="page-item">Hakkımda</a>
                        <a href="{{route('projects')}}" class="page-item">İşlərim</a>
                        <a href="{{route('skills')}}" class="page-item">Bacarıqlarım</a> --}}
                        <a href="{{route('contact')}}" class="page-item">Əlaqə</a> 
                    </div>
                </div>

            </div>
        </header>
        <main>
            @yield('content')
        </main>

        <footer>Created by Babayev | © Bütün hüqüqlar qorunur.</footer>

    </div>
    <script>
        setTimeout(function () {
            $('.loader').fadeOut();
            // var typed = new Typed(".typing-2", {
            //     strings: ["Junior Web Developer'em"],
            //     typeSpeed: 80,
            //     backSpeed: 60,
            //     loop: true
            // });
        }, 500);

        // $('.sidebar-button').on('click', function () {
        //     $('.sidebar').css('transform', 'translate(0%)');
        // });
        // $('.sidebar-close').on('click', function () {
        //     $('.sidebar').css('transform', 'translate(-100%)');
        // })

    </script>
    @yield('script')
</body>

</html>
