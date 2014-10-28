<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Developer&#39;s BFF')</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='{{ asset('css/developersbff.css') }}'>
    <!-- <link rel='stylesheet' href='' type='text/css'> -->
    <!-- <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon' /> -->

    @yield('head')

</head>
<body>

    @yield('content')

    @yield('footer')

</body>
</html>