<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<div id="app">
    @include('layouts.partials.nav')

    <main class="py-4">
        <div class="container">
            <div class="row" id="main-content">
                <div class="col-md-3" id="sidebar-left">
                    @include('layouts.partials.leftbar')
                </div>
                <div class="col-md-6" id="content">
                    @yield('content')
                </div>
                <div class="col-md-3" id="sidebar-right">
                    @include('layouts.partials.rightbar')
                </div>
            </div>
        </div>
    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('vue-scripts')
<script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
{{--<script src="{{ asset('plugins/sticky-sidebar/dist/jquery.sticky-sidebar.min.js') }}"></script>--}}
<script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/daemonite-material/js/material.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@yield('scripts')
</body>
</html>
