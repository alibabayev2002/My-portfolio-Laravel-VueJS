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
    <div class="wrapper">
        <header>

              <div class="col-4 px-0 row mx-0">
                <a href="{{route('blog')}}" class="  logo"> <i class="fas fa-cubes"></i> BLOG </a>

              </div>
<div class="col-4 text-center">
    <i class="fas fa-theater-masks"></i> header
</div>
                        <div class="col-4 row mx-0 justify-content-end align-items-center">
                            <button class="sidebar-btn btn text-white float-right">
                                <i class="fas fa-bars"></i>
        
                                </button>
                                <i class="fas fa-dolly test" style="font-size: 20px"></i>
                        </div>
        </header>
        <div class="sidebar">
            <div class="w-100 pages mx-0 px-0 row justify-content-center align-items-center">
                <button class="previous-btn btn text-white"><i class="fas fa-arrow-circle-left mr-2"></i> geri</button>
                <a href="{{route('home')}}" class="sidebar-item"><i class="fas fa-briefcase"></i> Portfolyo</a>
                <a href="{{route('blog')}}" class="sidebar-item active"><i class="fas fa-blog"></i>Blog</a>

                <a href="{{route('about')}}" class="sidebar-item"><i class="fas fa-address-card"></i>Hakkımda</a>
                <a href="{{route('projects')}}" class="sidebar-item"><i class="fas fa-umbrella-beach"></i> İşlərim</a>
                <a href="{{route('skills')}}" class="sidebar-item"><i class="fas fa-fill-drip"></i> Bacarıqlarım</a>
                <a href="{{route('contact')}}" class="sidebar-item"><i class="fas fa-address-card"></i>Əlaqə</a> 
            </div>
        </div>
        <main>
            @yield('content')
        </main>

        {{-- <footer>Created by Babayev | © Bütün hüqüqlar qorunur.</footer> --}}

    </div>
    @yield('script')

    <script>
        setTimeout(function () {
            $('.loader').fadeOut();
            // var typed = new Typed(".typing-2", {
            //     strings: ["Junior Web Developer'em"],
            //     typeSpeed: 80,
            //     backSpeed: 60,
            //     loop: true
            // });
            $('.sidebar-btn').click(function () {
                $('.sidebar').css('transform','translatex(0%)');
            });
            $('.previous-btn').click(function () {
                $('.sidebar').css('transform','translatex(-100%)');
            });
        }, 500);

        // $('.sidebar-button').on('click', function () {
        //     $('.sidebar').css('transform', 'translate(0%)');
        // });
        // $('.sidebar-close').on('click', function () {
        //     $('.sidebar').css('transform', 'translate(-100%)');
        // })

    </script>
</body>

</html>
