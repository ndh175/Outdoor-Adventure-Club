@extends ('layouts.master')

@section ('content')
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 class="text-center" style="padding-top:20px;padding-bottom:20px;margin-bottom:20px;">E-Board </h2></div>
                <div class="col-md-1" style="padding-top:40px;"><a href="#positions" data-toggle="collapse" aria-expanded="false" aria-controls="positions"><i class="glyphicon glyphicon-info-sign" data-toggle="collapse"></i></a></div>
            </div>
        </div>
        @include ('layouts.eboard_info')
        <div class="row people" style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;color:rgb(255,255,255)">
            <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/2.jpg" style="width:150px;height:150px;object-fit:cover;overflow:hidden;">
                <h3 class="name"> Jacquelyn Tindall </h3>
                <p class="title"> Vice President </p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
            <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/luis.jpg" style="width:150px;height:150px;object-fit:cover;overflow:hidden;">
                <h3 class="name"> Luis Cervantes </h3>
                <p class="title"> President </p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
            <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/micheal.jpg" style="width:150px;height:150px;object-fit:cover;overflow:hidden;">
                <h3 class="name"> Michael Cloutier </h3>
                <p class="title"> Treasurer </p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </div>
</div>
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(38,38,38);margin-bottom:20px;padding-top:20px;">Members </h2>
        </div>
        <div class="row people" style="margin-bottom:30px;padding-bottom:20px;">
        @foreach ($members as $member)
            <div class="col-md-2 col-sm-6 item" style="padding-top:25px;">
                <img class="img-circle" src="{{ substr($member->image_url, 7) }}" style="width:100px;height:100px;object-fit:cover;overflow:hidden;">
                <h3 class="name">{{ explode(' ', $member->name)[0] }} </h3>
                <p class="title">{{ $member->title }}  @if ($member->has_paid) <i class="fa fa-check-square-o" style="font-size:1em;color:#00cc00"></i> @endif </p>
                <p class="description">{{ $member->joined_date }}</p>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
