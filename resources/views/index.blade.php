@extends ('layouts.master')

<body class="app header-fixed sidebar-hidden aside-menu-fixed aside-menu-hidden" style="font-family: 'Cabin', sans-serif">
  <header class="app-header navbar navbar-dark bg-dark border-dark ml-0">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-brand bg-dark border-dark"></div>

    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="trips.html">Trips</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="members.html">Members</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="gallery.html">Gallery</a>
      </li>
      <li class="nav-item px-3 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">E-Board</a>
        <div class="dropdown-menu" aria-labelledby="adminDropdown">
          <a class="dropdown-item" href="eboard.html">Current E-Board</a>
          <a class="dropdown-item" href="eboard_positions.html">E-Board Positions</a>
        </div>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="faqs.html">FAQ's</a>
      </li>
      <li class="nav-item px-3 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="adminDropdown">
          <a class="dropdown-item" href="manage_trips.html">Manage Trips</a>
          <a class="dropdown-item" href="manage_members.html">Manage Members</a>
          <a class="dropdown-item" href="#">Manage E-Board</a>
          <a class="dropdown-item" href="#">Manage Gear</a>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto mr-3">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-list"></i></a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/avatars/nick.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>

  <div class="app-body">

    <!-- Main content -->
    <main class="main">

      <div class="container-fluid p-0">

        <div class="animated fadeIn">

      <div id="carouselExampleIndicators" class="carousel slide m-0" data-interval="5000" data-ride="carousel" style="font-weight:bold;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block img-fluid" style="width:100vw;height:50vh;object-fit:contain;overflow:hidden;position:absolute;top:10vh" src="img/oac_white.png" alt="First slide">
            <img class="d-block img-fluid" style="width:100vw;height:75vh;object-fit:cover;overflow:hidden;" src="img/trips/lake.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <h3>Nordhouse Dunes</h3>
              <p>This is a test description about this trip.</p>
            </div>
            <img class="d-block img-fluid" style="width:100vw;height:75vh;object-fit:cover;overflow:hidden;" src="img/trips/beach2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <h3>Nordhouse Dunes</h3>
              <p>This was also taken at Nordhouse Dunes.</p>
            </div>
            <img class="d-block img-fluid" style="width:100vw;height:75vh;object-fit:cover;overflow:hidden;" src="img/dunes.jpg" alt="First slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="card text-center text-white bg-dark m-4">
        <h3 class="card-header">About Us</h3>
        <div class="card-body">
          <p class="card-text">Outdoor Adventure Club is designed to bring together people who love alternative sports, outdoors, and adventure. Our vision is to be able to host and plan trips and activities involving the outdoors and nature. Whether you have never tried any of the latter, are looking to improve skills, or are a pro looking for some people on campus with similar interests. We'd love to have you come check us out! The group will be meeting bi-weekly to take trips, hangout (eat or games), watch movies, or have guests come to speak. All meetings will be based on the interest of the majority, means and provisions and of course weather/season.</p>
          <a href="#" class="btn btn-lg btn-primary">Sign Up</a>
        </div>
      </div>

      <div class="card-group m-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="img/dunes.jpg" alt="Card image cap">
        </div>
        <div class="card text-white bg-dark">
          <div class="card-header">
            <h3 class="card-title m-0">Nordhouse Dunes</h3>
          </div>
          <div class="card-body">
            <p class="card-text"><strong>Date(s):</strong> 12/01/2017 - 12/03/2017</p>
            <p class="card-text"><strong>Location:</strong> Marquette, MI</p>
            <p class="card-text"><strong>Price:</strong> $25</p>
            <p class="card-text"><strong>Spots Remaining:</strong> 15 / 18</p>
            <button type="button" class="btn btn-lg btn-primary">Register</button>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

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
