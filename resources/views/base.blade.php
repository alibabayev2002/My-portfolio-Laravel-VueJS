<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
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
  <div class="black row mx-0 px-0 tess">
    </div>
    <div class="loader">
        <div class="back"></div>
        <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;opacity:1 !important;" role="status">
            <span class="sr-only">Loading...</span>
        </div>

    </div>

    <div class="sidebar">
      
        <div>
            <a class="typing logo">./port<span>folyo</span></a>
            <a class=" logo typed-cursor">|</a>
            <a class=" logo text-muted">v1</a>
            <br><br><br><br><br><br><br>
        </div>
        <div class="sidebar-close">
            <i style="font-size: 35px;color:white;" class="fas fa-arrow-circle-left"></i>
        </div>
        <div class="sidebar-items">
            @foreach ($pages as $page)
                @if($page->status)
                <a href="{{route(strtolower($page->route_name))}}" class="sidebar-item w-100"><i class="{{$page->icon}} float-left px-3"></i> <span
                    class=" float-right px-2">{{$page->name}}</span></a>
                @endif  
            @endforeach
        </div>
    </div>

    <div class="flex">
        <header>
            <div class="w-100">
                <div class="row w-100 mx-0 px-3 ">
                    <div class="col-xl-4 col-10  px-0">
                        <a class="typing logo">./port<span>folyo</span></a>
                        <a class=" logo typed-cursor">|</a>
                        <a class=" logo text-muted">v1</a>
                    </div>
                    <div class="col-2 text-white sidebar-icon row mx-0 justify-content-end align-items-center">
                        <button class="sidebar-button btn text-white"><i style="font-size:20px;"
                                class="fas fa-bars float-right"></i></button>
                    </div>
                    <div class=" col-xl-8 pages mx-0 px-0 row justify-content-end align-items-center">
                        @foreach ($pages as $page)
                        @if($page->status)
                            <a href="{{route(strtolower($page->route_name))}}" class="page-item row mx-0 align-items-center"><i class="{{$page->icon}} mr-1 "></i> <span>{{$page->name}}</span></a>
                          @endif  
                        @endforeach
                    </div>
                </div>

            </div>
        </header>


        <main>
            @yield('content')
        </main>

        <footer>Created by Babayev | © Bütün hüqüqlar qorunur.</footer>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
    <script>
        setTimeout(function () {
            $('.loader').fadeOut();
            let i = 1;
            setInterval(() => {
                if(i>0.4){
                    i -= 0.02;
                    $('.black').css('opacity',i);
                }
                console.log($('.black').css('opacity'));
                // console.log(test);
        }, 100);
        }, 500);
        
        $('.sidebar-button').on('click', function () {
            $('.sidebar').css('transform', 'translate(0%)');
        });
        $('.sidebar-close').on('click', function () {
            $('.sidebar').css('transform', 'translate(-100%)');
        });
        
        

    </script>
    @yield('script')
</body>

</html>

