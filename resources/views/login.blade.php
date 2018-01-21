@extends ('layouts.master')

@section ('content')
  <body class="app flex-row align-items-center mt-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <form action="/login" method="POST">
                  {{ csrf_field() }}
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <div class="input-group mb-3 form-group">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="input-group mb-4 form-group">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="row">
                    <div class="col-6 form-group">
                      <button type="button" class="btn btn-primary px-4" type="submit">Login</button>
                    </div>
                    <div class="form-group col-6 text-right">
                      <button type="button" class="btn btn-link px-0">Forgot password?</button>
                    </div>
                  </div>
                  @include ('layouts.errors')
                </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="\register"><button type="button" class="btn btn-primary active mt-3">Register Now!</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
