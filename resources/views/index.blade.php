@extends ('layouts.master')

@section ('content')
<img class="img-responsive" src="assets/img/logo3.jpg" style="padding-top:50px;padding-right:350px;padding-bottom:20px;padding-left:350px;">
<div class="highlight-phone" style="background-color:rgb(255,255,255);">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
                <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(255,255,255);">About Us</h2>
                <p class="lead text-center">Outdoor Adventure Club is designed to bring together people who love alternative sports, outdoors, and adventure. Our vision is to be able to host and plan trips and activities involving the outdoors and nature. Whether you have never
                    tried any of the latter, are looking to improve skills, or are a pro looking for some people on campus with similar interests. We'd love to have you come check us out! The group will be meeting bi-weekly to take trips, hangout
                    (eat or games), watch movies, or have guests come to speak. All meetings will be based on the interest of the majority, means and provisions and of course weather/season. </p>
            </div>
        </div>
    </div>
</div>
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(38,38,38);">New Members </h2>
        </div>
        <div class="row people">
        @foreach ($members as $member)
            <div class="col-md-2 col-sm-6 item"><img class="img-circle" src="{{ asset('/storage/' . substr($member->image_url, 7)) }}" style="width:100px;height:100px;object-fit:cover;overflow:hidden;">
                <h3 class="name">{{ explode(' ', $member->name)[0] }} </h3>
                <p class="title">{{ $member->title }} @if ($member->has_paid) <i class="fa fa-check-square-o" style="font-size:1em;color:#00cc00"></i> @endif </p>
                <p class="description">{{ $member->date_joined }}</p>
            </div>
        @endforeach
        </div>
    </div>
</div>
@if ($trip != null)
@include ('trips.trip')
@endif
<div style="height:40px"></div>
@endsection
