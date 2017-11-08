<div class="highlight-phone" style="background-color:rgb(255,255,255);">
    <div class="container">
        <div class="row" style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-7"><img class="img-rounded img-responsive" src="{{ asset('/storage/' . substr($trip->image_url, 7)) }}" style="height:400px;object-fit:cover;overflow:hidden;"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4" style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
                <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(255,255,255);">{{ $trip->name }}</h2>
                <p class="lead text-center" style="margin-bottom:30px;"><strong>Date(s):</strong> @if ($trip->start_date == $trip->end_date) {{ $trip->start_date }} @else {{ $trip->start_date }} - {{ $trip->end_date }} @endif</p>
                <p class="lead text-center"><strong>Where:</strong> {{ $trip->location }}</p>
                <p class="lead text-center" style="margin-bottom:30px;"><strong>Price:</strong> ${{ $trip->price }}</p>
                <p class="lead text-center" style="margin-bottom:30px;"><strong>Spots Left: </strong> {{ $trip->remaining_spots }} / {{ $trip->total_spots }}</p>
                @if (auth()->check() && $trip->remaining_spots > 0)
                    @if (!$user_trips->contains('trip_id', $trip->id))
                    <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
                        <button class="btn btn-success outline btn-block" type="submit">Register</button>
                    </a>
                    @else
                    <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
                        <button class="btn btn-success btn-block" type="button" disabled>Registered</button>
                    </a>
                    @endif
                @else
                    @if (!auth()->check())
                    <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
                        <button class="btn btn-success outline btn-block" type="submit" disabled>Login To Register</button>
                    </a>
                    @else
                    <a href="{{ action("TripController@register_trip", ['id' => $trip->id]) }}">
                        <button class="btn btn-success outline btn-block" type="submit" disabled>Trip Full</button>
                    </a>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
