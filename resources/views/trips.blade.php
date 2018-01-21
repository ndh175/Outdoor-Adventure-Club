@extends ('layouts.master')

@section('content')
<div class="app-body">

  <!-- Main content -->
  <main class="main">

    <div class="container-fluid">

      <div class="animated fadeIn">

        @foreach ($future_trips as $trip)
            @include ('trips.trip')
        @endforeach

      </div>
    </div>
  </main>
</div>
