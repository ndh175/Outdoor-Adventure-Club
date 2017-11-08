<div class="highlight-phone" style="background-color:rgb(255,255,255);">
    <div class="container">
        <div class="row" style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-7"><img class="img-rounded img-responsive" src="{{ asset('/storage/' . substr($trip->image_url, 7)) }}" style="height:400px;object-fit:cover;overflow:hidden;"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4" style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
                <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(255,255,255);"><del>{{ $trip->name }}</del></h2>
                <p class="lead text-center" style="margin-bottom:30px;"><del><strong>Date(s):</strong> @if ($trip->start_date == $trip->end_date) {{ $trip->start_date }} @else {{ $trip->start_date }} - {{ $trip->end_date }} @endif</del></p>
                <p class="lead text-center"><del><strong>Where:</strong> {{ $trip->location }}</del></p>
                <p class="lead text-center" style="margin-bottom:30px;"><del><strong>Price:</strong> ${{ $trip->price }}</del></p>
                <p class="lead text-center" style="margin-bottom:30px;"><del><strong>Spots Left: </strong> {{ $trip->remaining_spots }} / {{ $trip->total_spots }}</del></p>
            </div>
        </div>
    </div>
</div>
