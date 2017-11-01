@extends ('layouts.master')

@section ('content')
    <div></div>
    <div class="login-clean" style="background-color:rgb(255,255,255);">
        <form action="/login" method="POST" style="background-color:rgb(38,38,38);border-radius:10px">
            {{ csrf_field() }}
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration" style="color:rgb(82,94,100);"><img class="img-rounded" src="assets/img/logo4.jpg" height="150"></div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email" style="background-color:rgb(38,38,38);color:#FFF">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" style="background-color:rgb(38,38,38);color:#FFF">
            </div>
            <!--<a href="#" class="forgot">Forgot your email or password?</a>-->
            <div class="form-group">
                <button class="btn btn-success btn-block outline" type="submit" style="margin-top:15px;">Log In</button>
            </div>
            <div class="form-group">
                <a href="register" class="forgot">Don't have an account? Register here</a>
            </div>
            @include ('layouts.errors')
            </form>
    </div>
@endsection
