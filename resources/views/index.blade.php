@extends ('layouts.master')

@section ('content')
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
          <div class="d-flex justify-content-center">
            <img class="d-block img-fluid" style="width:50vw;height:50vh;object-fit:contain;overflow:hidden;position:absolute;top:10vh" src="img/oac_white.png" alt="First slide">
          </div>
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
        <a href="/register" class="btn btn-lg btn-primary">Sign Up</a>
      </div>
    </div>

    
  </div>
</div>
@endsection
