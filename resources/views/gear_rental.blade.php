@extends ('layouts.master')

@section ('content')
<div class="highlight-phone" style="background-color:rgb(255,255,255);padding-top:40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="font-family:Allerta, sans-serif;color:rgb(38,38,38);margin-bottom:20px;">Gear Rental</h2></div>
        </div>
    </div>
</div>
<div class="team-clean">
    <div class="container">
        <div class="row people" style="padding-bottom:20px;">
            <div class="col-md-4 col-sm-6 item">
                <a href="#tents" data-toggle="collapse" aria-expanded="false" aria-controls="tents"><img src="assets/img/tent-1.png"></a>
                <h3 class="name">Tents</h3>
                <p class="title">1 / 10 Avaiable</p>
            </div>
            <div class="col-md-4 col-sm-6 item">
                <a href="#cooking" class="toggle" data-toggle="collapse" aria-expanded="false" aria-controls="cooking"><img src="assets/img/gas.png"></a>
                <h3 class="name">Cooking Utensils</h3>
                <p class="title">1 / 10 Avaiable</p>
            </div>
            <div class="col-md-4 col-sm-6 item">
                <a href="#food" data-toggle="collapse" aria-expanded="false" aria-controls="food"><img src="assets/img/bonfire.png"></a>
                <h3 class="name">Food</h3>
                <p class="title">1 / 10 Avaiable</p>
            </div>
        </div>
        <!--Tents Section-->
        <div class="row people collapse" id="tents"  style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-nowrap name" style="color:rgb(249,250,251);margin-top:40px;height:30px;">Osprey Volt 75L </h3>
                <h3 class="text-nowrap name" style="color:rgb(255,255,255);margin-top:40px;height:30px;">Aether AG 80L</h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">Ariel AG 55L</span></h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">Atmos AG 65L</span></h3></div>
            <div class="col-md-4" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-center name" style="color:rgb(252,253,254);margin-top:40px;height:30px;">(mens) </h3>
                <h3 class="text-center name" style="color:rgb(250,252,254);margin-top:40px;height:30px;">(unisex) </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">(womans</span>)</h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">(mens</span>)</h3></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
            </div>
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
        </div>
        <!--Cooking Section-->
        <div class="row people collapse" id="cooking"  style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-nowrap name" style="color:rgb(249,250,251);margin-top:40px;height:30px;">Jetboil </h3>
                <h3 class="text-nowrap name" style="color:rgb(255,255,255);margin-top:40px;height:30px;">Jetboil </h3>
                <h3 class="text-nowrap name" style="color:rgb(252,254,255);margin-top:40px;height:30px;">MSR PocketRocket</h3>
                <h3 class="text-nowrap name" style="color:rgb(252,254,255);margin-top:40px;height:30px;">MSR PocketRocket</h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">MSR PocketRocket</span></h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">Jetboil</span> </h3></div>
            <div class="col-md-4" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-center name" style="color:rgb(252,253,254);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(250,252,254);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
            </div>
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
        </div>
        <!--Food Section-->
        <div class="row people collapse" id="food"  style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-nowrap name" style="color:rgb(249,250,251);margin-top:40px;height:30px;">Jetboil </h3>
                <h3 class="text-nowrap name" style="color:rgb(255,255,255);margin-top:40px;height:30px;">Jetboil </h3>
                <h3 class="text-nowrap name" style="color:rgb(252,254,255);margin-top:40px;height:30px;">MSR PocketRocket</h3>
                <h3 class="text-nowrap name" style="color:rgb(252,254,255);margin-top:40px;height:30px;">MSR PocketRocket</h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">MSR PocketRocket</span></h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">Jetboil</span> </h3></div>
            <div class="col-md-4" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-center name" style="color:rgb(252,253,254);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(250,252,254);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
            </div>
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
        </div>
        <div class="row people" style="padding-bottom:20px;">
            <div class="col-md-2 item"></div>
            <div class="col-md-4 col-sm-6 item">
                <a href="#other" class="toggle" data-toggle="collapse" aria-expanded="false" aria-controls="other"><img src="assets/img/swiss-army-knife.png"></a>
                <h3 class="name">Other Gear</h3>
                <p class="title">1 / 10 Avaiable</p>
            </div>
            <div class="col-md-4 col-sm-6 item">
                <a href="#expendable" data-toggle="collapse" aria-expanded="false" aria-controls="expendable"><img src="assets/img/rope.png"></a>
                <h3 class="name">Disposable</h3>
                <p class="title">1 / 10 Avaiable</p>
            </div>
            <div class="col-md-2 item"></div>
        </div>
        <!--Other Section-->
        <div class="row people collapse" id="other"  style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                @foreach ($tents as $tent)
                <h3 class="text-nowrap name" style="color:rgb(249,250,251);margin-top:40px;height:30px;">{{ $tent->name }}</h3>
                @endforeach
            </div>
            <div class="col-md-4" style="padding-right:0px;padding-left:0px;">
                @foreach ($tents as $tent)
                    <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3>
                @endforeach
            </div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                @foreach ($tents as $tent)
                    <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                @endforeach
            </div>
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
        </div>
        <!--Expendable Section-->
        <div class="row people collapse" id="expendable"  style="background-color:rgb(38,38,38);padding:25px;border-radius:10px;">
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-nowrap name" style="color:rgb(249,250,251);margin-top:40px;height:30px;">Jetboil </h3>
                <h3 class="text-nowrap name" style="color:rgb(255,255,255);margin-top:40px;height:30px;">Jetboil </h3>
                <h3 class="text-nowrap name" style="color:rgb(252,254,255);margin-top:40px;height:30px;">MSR PocketRocket</h3>
                <h3 class="text-nowrap name" style="color:rgb(252,254,255);margin-top:40px;height:30px;">MSR PocketRocket</h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">MSR PocketRocket</span></h3>
                <h3 class="text-nowrap name" style="color:rgb(125,130,133);margin-top:40px;height:30px;"><span style="text-decoration: line-through;">Jetboil</span> </h3></div>
            <div class="col-md-4" style="padding-right:0px;padding-left:0px;">
                <h3 class="text-center name" style="color:rgb(252,253,254);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(250,252,254);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3>
                <h3 class="text-center name" style="color:rgb(125,130,133);margin-top:20px;margin-bottom:20px;"> </h3></div>
            <div class="col-md-3" style="padding-right:0px;padding-left:0px;">
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
                <button class="btn btn-success outline btn-block" type="button" style="height:40px;padding-top:0px;padding-bottom:0px;margin-top:30px;">Request Gear</button>
            </div>
            <div class="col-md-1" style="padding-right:0px;padding-left:0px;"></div>
        </div>
    </div>
</div>
@endsection
