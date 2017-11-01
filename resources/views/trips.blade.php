@extends ('layouts.master')

@section('content')
@foreach ($trips as $trip)
    @include ('trips.trip')
@endforeach
<div style="height:40px"></div>
@endsection
