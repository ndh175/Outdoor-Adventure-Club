<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Nick Holbrook">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  @php ($url_parts = explode('/', url()->current()))
  @php ($page = end($url_parts))
  @if ($page == 'www.outdooradventureclubatou.com') <title>OAC - Home</title> @endif
  @if ($page == 'trips') <title>OAC - Trips</title> @endif
  @if ($page == 'members') <title>OAC - Members</title> @endif
  @if ($page == 'gear_rental') <title>OAC - Gear Rental</title> @endif
  @if ($page == 'faqs') <title>OAC - FAQs</title> @endif
  @if ($page == 'manage_trips') <title>OAC - Manage Trips</title> @endif
  @if ($page == 'manage_members') <title>OAC - Manage Members</title> @endif
  @if ($page == 'manage_gear') <title>OAC - Manage Gear</title> @endif
  @if ($page == 'manage_eboard') <title>OAC - Manage E-Board</title> @endif
  @if ($page == 'login') <title>OAC - Login</title> @endif
  @if ($page == 'register') <title>OAC - Register</title> @endif
  @if ($page == 'settings') <title>OAC - Settings</title> @endif

  <!-- Icons -->
  <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-hidden aside-menu-hidden" style="font-family: 'Cabin', sans-serif">
    @include ('layouts.nav')
    <div class="app-body">
      <main class="main">
        <div class="sidebar">
          <nav class="sidebar-nav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="main.html"><i class="icon-speedometer"></i> Home <span class="badge badge-primary">NEW</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Trips</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Gallery</a>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> E-Board</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Current E-Board</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> E-Board Positions</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> FAQ's</a>
              </li>

              <li class="nav-title">
                Other
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Admin</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Manage Members</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Manage Trips</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Manage E-Board</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Manage Gear</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        @yield ('content')
      </div>
    </main>
    <!-- Bootstrap and necessary plugins -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>

    <!-- CoreUI main scripts -->

    <script src="js/app.js"></script>

    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>
</body>
</html>
