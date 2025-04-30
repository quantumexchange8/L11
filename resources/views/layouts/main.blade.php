<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title')
    </title>
    @include('layouts.partials._head')
</head>

<div id="preloader"></div>
<body>
    @include('layouts.partials._header')

    @yield('content')

    <footer class="light">

        @include('layouts.partials._footer')
        
    </footer>

    @include('layouts.partials._scripts')

</body>
</html>