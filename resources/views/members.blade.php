@extends ('layouts.master')

@section ('content')
@include ('layouts.eboard')
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(38,38,38);margin-bottom:20px;padding-top:20px;">Members </h2>
        </div>
        <div class="row people" style="margin-bottom:30px;padding-bottom:20px;">
        @foreach ($members as $member)
            <div class="col-md-2 col-sm-6 item" style="padding-top:25px;">
                <img class="img-circle" src="{{ asset('/storage/' . substr($member->image_url, 7)) }}" style="width:100px;height:100px;object-fit:cover;overflow:hidden;">
                <h3 class="name">{{ explode(' ', $member->name)[0] }} </h3>
                <p class="title">{{ $member->title }}  @if ($member->has_paid) <i class="fa fa-check-square-o" style="font-size:1em;color:#00cc00"></i> @endif </p>
                <p class="description">{{ $member->joined_date }}</p>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
