@extends ('layouts.master')

@section ('content')
    <div class="register-photo" style="background-color:rgb(255,255,255);">
        <div class="form-container" style="background-color:rgb(38,38,38);border-radius:10px">
            <form action="/register" method="POST" style="background-color:rgb(38,38,38);border-radius:10px" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h2 class="text-center" style="color:rgb(255,255,255);font-family:Raleway, sans-serif;"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name" style="background-color:rgb(38,38,38);color:#FFF">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Email" style="background-color:rgb(38,38,38);color:#FFF">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" style="background-color:rgb(38,38,38);color:#FFF">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" style="background-color:rgb(38,38,38);color:#FFF">
                </div>
                <div class="form-group" style="color:#111111">
                    <div class="file-upload">
                      <div class="file-select">
                        <div class="file-select-button" id="fileName">Choose Profile Pic</div>
                        <div class="file-select-name" id="noFile">No file chosen...</div>
                        <input type="file" name="image" id="chooseFile">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success outline btn-block" type="submit">Register</button>
                </div>
                <div class="form-group">
                    <a href="login" class="already">Already have an account? Login here.</a>
                </div>
                <div class="form-group">
                    @include ('layouts.errors')
                </div>
                </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
