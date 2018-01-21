<header class="app-header navbar navbar-dark bg-dark border-dark ml-0">
  <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-brand bg-dark border-dark"></div>

  <ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'www.outdooradventureclubatou.com') active @endif" href="\">Home</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'trips') active @endif" href="/trips">Trips</a>
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
