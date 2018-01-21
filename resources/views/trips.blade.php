@extends ('layouts.master')

@section('content')
<div class="app-body">

  <!-- Main content -->
  <main class="main">

    <div class="container-fluid">

      <div class="animated fadeIn">

        <div class="card-group mb-4 mt-4" style="font-size:18px">
          <div class="card text-white bg-dark ">
            <img class="card-img-top" src="img/dunes.jpg" alt="Card image cap">
          </div>
          <div class="card text-white bg-dark ">
            <div class="card-header">
              <h4 class="card-title m-0">Nordhouse Dunes</h4>
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

        <div class="card-group mb-4 mt-4" style="font-size:18px">
          <div class="card text-white bg-dark ">
            <img class="card-img-top" src="img/dunes.jpg" alt="Card image cap">
          </div>
          <div class="card text-white bg-dark ">
            <div class="card-header">
              <h4 class="card-title m-0">Nordhouse Dunes</h4>
            </div>
            <div class="card-body">
              <p class="card-text"><del><strong>Date(s):</strong> 12/01/2017 - 12/03/2017</del></p>
              <p class="card-text"><del><strong>Location:</strong> Marquette, MI</del></p>
              <p class="card-text"><del><strong>Price:</strong> $25</del></p>
              <p class="card-text"><del><strong>Spots Remaining:</strong> 15 / 18</del></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<!--
@foreach ($future_trips as $trip)
    @include ('trips.trip')
@endforeach
@foreach ($past_trips as $trip)
    @include ('trips.past_trip')
@endforeach
<div style="height:40px"></div>
@endsection
-->
