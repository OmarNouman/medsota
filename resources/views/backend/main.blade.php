<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @stack('styles')
    @include('backend.includes.styles')
    @livewireStyles
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header fixed-footer">
        @include('backend.partials.header')
        <div class="app-main">
            @include('backend.partials.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">

                    @yield('content')
                    @include('backend.partials.footer')
                </div>
            </div>
        </div>
        @include('backend.includes.scripts')
</body>
@stack('scripts')
@livewireScripts

</html>

