<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ $site_title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/admin/app.css') }}">

        @livewireStyles
        @yield('css')
    </head>
    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                @include('admin.layouts.partials.header')
                @include('admin.layouts.partials.sidebar')

                <!-- Main Content -->
                @yield('content')
                <footer class="main-footer">
                    <div class="footer-left">
                        <x-copyright />
                    </div>
                    <div class="footer-right">

                    </div>
                </footer>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')

        <!-- Scripts -->
        <script src="{{ mix('js/admin/app.js') }}"></script>

        @stack('scripts-after')

        @yield('js')
    </body>
</html>