@extends ('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="animated fadeIn">
    @foreach ($trips as $trip)
        @include ('trips.trip')
    @endforeach
  </div>
</div>
@endsection
