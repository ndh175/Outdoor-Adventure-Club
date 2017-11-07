<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php ($url_parts = explode('/', url()->current()))
    @php ($page = end($url_parts))
    @if ($page == 'oac.dev') <title>Home</title> @endif
    @if ($page == 'trips') <title>Trips</title> @endif
    @if ($page == 'members') <title>Members</title> @endif
    @if ($page == 'gear_rental') <title>Gear Rental</title> @endif
    @if ($page == 'faqs') <title>FAQs</title> @endif
    @if ($page == 'manage_trips') <title>Manage Trips</title> @endif
    @if ($page == 'manage_members') <title>Manage Members</title> @endif
    @if ($page == 'manage_gear') <title>Manage Gear</title> @endif
    @if ($page == 'manage_eboard') <title>Manage E-Board</title> @endif
    @if ($page == 'login') <title>Login</title> @endif
    @if ($page == 'register') <title>Register</title> @endif
    @if ($page == 'settings') <title>Settings</title> @endif
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barrio">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="{{ asset("assets/fonts/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Article-Cards.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Central-Aligned-Clear-Nav.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Features-Boxed.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Header-Dark.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Highlight-Phone.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset("assets/css/nav-sticky-top.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Navigation-Clean1.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/PUSH---Bootstrap-Button-Pack.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Simple-Slider.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Team-Clean.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Registration-Form-with-Photo.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Search-Field-With-Icon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/Login-Form-Clean.css") }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>
    @include ('layouts.nav')
    @yield ('content')
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{ asset("assets/js/Simple-Slider.js") }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset("assets/js/collapsecustom.js") }}"></script>
    <script>
    $( function() {
      $( ".datepicker" ).datepicker();
    } );
    </script>
</body>
</html>
