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
    <!-- The BFF necklace portion of the logo image was taken off of this site,
    https://www.flickr.com/photos/8488532@N08/4356077535/in/photolist-c6RhvA-7iTdLf-7yVNh2-b8pDgc-b8pymP-eeDUdG-bM4isH-5Bbeqv-6Jv8AC-9PwLBF-7z6AFb-7CW366-oudNJW-9JVuR2-fsBfi5-augdHp-sxxxB-eeau37-6nG8L9-76ZBQk
	and was posted by someone with the user ID of Texasbubba and was entitled "Bff."
	It has Creative Commons licensing.  No other identifying information was provided. -->
	<a href='/'><img id='my_logo' src='/images/dev_bff_logo_big.png' alt='Developer&#39;s BFF logo'></a>
	<br> 

    @yield('content')

    @yield('footer')

</body>
</html>