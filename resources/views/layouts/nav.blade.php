<div style="margin-top:50px;">
    <nav class="navbar navbar-default navbar-fixed-top nav-main-wrapper" style="background-color:rgb(38,38,38);">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand hidden navbar-link" href="#">Amazing Nav</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse navbar-center" id="navcol-1">
                <ul class="nav navbar-nav navbar-center">
                    @php ($url_parts = explode('/', url()->current()))
                    @php ($page = end($url_parts))
                    <li @if ($page == 'oac.dev') class="active" @endif role="presentation"><a href="/" style="font-family:Allerta, sans-serif;">Home </a></li>
                    <li @if ($page == 'trips') class="active" @endif role="presentation"><a href="/trips" style="font-family:Allerta, sans-serif;">Trips </a></li>
                    <li @if ($page == 'members') class="active" @endif role="presentation"><a href="/members" style="font-family:Allerta, sans-serif;">Members </a></li>
                    <!--<li @if ($page == 'gallery') class="active" @endif role="presentation"><a href="/gallery" style="font-family:Allerta, sans-serif;">Gallery </a></li>-->
                    <li @if ($page == 'gear_rental') class="active" @endif role="presentation"><a href="/gear_rental" style="font-family:Allerta, sans-serif;">Gear Rental</a></li>
                    <li @if ($page == 'faqs') class="active" @endif role="presentation"><a href="/faqs" style="font-family:Allerta, sans-serif;">FAQ's </a></li>
                    <!-- IF ADMIN -->
                    @if (auth()->check() && auth()->user()->isModerator())
                    <li @if ($page == 'manage_trips') class="active" @endif role="presentation"><a href="/manage_trips" style="font-family:Allerta, sans-serif;">Manage Trips</a></li>
                    <li @if ($page == 'manage_members') class="active" @endif role="presentation"><a href="/manage_members" style="font-family:Allerta, sans-serif;">Manage Members</a></li>
                    <li @if ($page == 'manage_gear') class="active" @endif role="presentation"><a href="/manage_gear" style="font-family:Allerta, sans-serif;">Manage Gear</a></li>
                    @endif
                    @if (auth()->check() && auth()->user()->isAdmin())
                    <li @if ($page == 'manage_eboard') class="active" @endif role="presentation"><a href="/manage_eboard" style="font-family:Allerta, sans-serif;">Manage E-Board</a></li>
                    @endif


                </ul>
                @if (auth()->check())
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" style="color:rgb(255,255,255);">
                        Welcome {{ auth()->user()->name }}!
                    </li>
                    <li role="presentation" @if ($page == 'settings') class="active" @endif>
                        <a href="/settings" style="font-family:Allerta, sans-serif;">Settings</a>
                    </li>
                    <li role="presentation">
                        <a href="/logout" style="font-family:Allerta, sans-serif;">Logout</a>
                    </li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" @if ($page == 'login') class="active" @endif>
                        <a href="/login" style="font-family:Allerta, sans-serif;">Login</a>
                    </li>
                    <li role="presentation" @if ($page == 'register') class="active" @endif>
                        <a href="/register" style="font-family:Allerta, sans-serif;">Register</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>
</div>
