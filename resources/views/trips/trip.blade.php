<div class="card-group mb-4 mt-4" style="font-size:18px">
  <div class="card text-white bg-dark ">
    <img class="card-img-top" src="{{ asset('/storage/' . substr($trip->image_url, 7)) }}" alt="Card image cap">
  </div>
  <div class="card text-white bg-dark ">
    <div class="card-header">
      <h4 class="card-title m-0">{{ $trip->name }}</h4>
    </div>
    <div class="card-body">
      <p class="card-text"><strong>Date(s):</strong> @if ($trip->start_date == $trip->end_date) {{ $trip->start_date }} @else {{ $trip->start_date }} - {{ $trip->end_date }} @endif</p>
      <p class="card-text"><strong>Location:</strong> {{ $trip->location }}</p>
      <p class="card-text"><strong>Price:</strong> ${{ $trip->price }}</p>
      <p class="card-text"><strong>Spots Remaining:</strong> {{ $trip->remaining_spots }} / {{ $trip->total_spots }}</p>
      @if (auth()->check() && $trip->remaining_spots > 0)
          @if (!$user_trips->contains('trip_id', $trip->id))
          <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
              <button type="button" class="btn btn-lg btn-primary">Register</button>
          </a>
          @else
          <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
              <button type="button" class="btn btn-lg btn-primary" disabled>Registered</button>
          </a>
          @endif
      @else
          @if (!auth()->check())
          <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
              <button type="button" class="btn btn-lg btn-primary" disabled>Login To Register</button>
          </a>
          @else
          <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
              <button type="button" class="btn btn-lg btn-primary" disabled>Trip Full</button>
          </a>
          @endif
      @endif
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
