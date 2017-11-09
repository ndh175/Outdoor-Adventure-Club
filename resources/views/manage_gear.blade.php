@extends ('layouts.master')

@section ('content')
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <div class="row">
                <div class="col-md-1">
                    <p> </p>
                </div>
                <div class="col-md-10">
                    <h2 class="text-center" style="padding-top:20px;margin-bottom:20px;">Manage Gear</h2></div>
                <div class="col-md-1">
                    <p> </p>
                </div>
            </div>
        </div>
        <div class="row people">
            <!--Add Trips-->
            <div class="col-md-6 item">
                <h3 class="name">Add Gear</h3>
                <form method="POST" action="/trips" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="item" placeholder="Item">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select class="form-control" name="category">
                                <option>Cooking Utensils</option>
                                <option>Expendable</option>
                                <option>Food</option>
                                <option>Other Gear</option>
                                <option>Tents</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block outline">Add Gear</button>
                    </div>
                    @include ('layouts.errors')
                </form>
            </div>
        </div>
        <div class="row people">
            <!--Remove Trips-->
            <div class="col-md-6 item">
                <h3 class="name">Remove Gear</h3>

            </div>
            <!--Show Trip Attendees-->
            <div class="col-md-6 item">
                <h3 class="name">Gear Status</h3>

            </div>
        </div>
    </div>
</div>
@endsection
