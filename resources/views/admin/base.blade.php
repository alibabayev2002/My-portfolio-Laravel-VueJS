<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    @yield('css')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h3 class="text-center text-success mb-5 mt-2"><b>./adminpanel <span class="text-muted">v1</span></b></h3>
            <div class="sidebar-items">
                <a href="{{route('admin.home')}}" class="sidebar-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> dashboard
                </a>
            </div>
            <div class="sidebar-items">
                <a href="{{route('pages')}}" class="sidebar-item  {{ (request()->is('admin/pages')) ? 'active' : '' }}">
                    <i class="fas fa-pager"></i> pages
                </a>
            </div>
            <div class="sidebar-items">
                <a href="{{route('fonts')}}" class="sidebar-item  {{ (request()->is('admin/fonts')) ? 'active' : '' }}">
                    <i class="fab fa-font-awesome"></i> fonts
                </a>
            </div>
            <div class="sidebar-items">
                <a href="{{route('categories')}}" class="sidebar-item {{ (request()->is('admin/categories')) ? 'active' : '' }}">
                    <i class="fas fa-layer-group"></i> categories
                </a>
            </div>
            <div class="sidebar-items">
                <a href="{{route('posts')}}" class="sidebar-item  {{ (request()->is('admin/posts')) ? 'active' : '' }}">
                    <i class="fas fa-blog"></i> posts
                </a>
            </div>
            <div class="sidebar-items">
                <a href="{{route('admin.skills')}}" class="sidebar-item  {{ (request()->is('admin/skills')) ? 'active' : '' }}">
                    <i class="fas fa-award"></i> skills
                </a>
            </div>

            <div class="sidebar-items">
                <a class="sidebar-item  {{ (request()->is('admin/configs')) ? 'active' : '' }}">
                    <i class="fas fa-cog"></i> configs
                </a>
            </div>
            <div class="sidebar-items">
                <a href="{{route('logout')}}" class="sidebar-item text-danger">
                    <i class="fas fa-sign-out-alt"></i> logout
                </a>
            </div>
        </div>
        <main class="w-100">
            @yield('content')
        </main>

    </div>

    @yield('script')
</body>

</html>
