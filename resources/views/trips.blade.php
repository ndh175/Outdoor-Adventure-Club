@extends ('layouts.master')

@section('content')
@foreach ($future_trips as $trip)
    @include ('trips.trip')
@endforeach
@foreach ($past_trips as $trip)
    @include ('past_trips.trip')
@endforeach
<div style="height:40px"></div>
@endsection
