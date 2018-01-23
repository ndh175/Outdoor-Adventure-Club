@extends ('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="animated fadeIn">
    @foreach ($future_trips as $trip)
        @include ('trips.trip')
    @endforeach
    @foreach ($past_trips as $trip)
        @include ('trips.trip')
    @endforeach
  </div>
</div>
@endsection
