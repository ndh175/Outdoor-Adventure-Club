<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  @php ($url_parts = explode('/', url()->current()))
  @php ($page = end($url_parts))
  @if ($page == 'www.outdooradventureclubatou.com') <title>Home</title> @endif
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
    
  <!-- Icons -->
  <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

</head>

<!--
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
    <script src="{{ asset("js/file_picker.js") }}"></script>
    <script>
    $( function() {
      $( ".datepicker" ).datepicker();
    } );
    </script>
</body>
</html>
-->
