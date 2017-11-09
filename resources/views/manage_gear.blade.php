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
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="total_spots" placeholder="Total Spots">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon">Will you be attending?</div>
                              <input type="text" name="is_attending" class="form-control" placeholder="Yes / No">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="location" placeholder="Location">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon">$</div>
                              <input type="text" name="price" class="form-control" id="inlineFormInputGroupUsername" placeholder="Price">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName">Trip Picture</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div>
                                <input type="file" name="image" id="chooseFile">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control datepicker" name="start_date" placeholder="Start Date">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control datepicker" name="end_date" placeholder="End Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block outline">Add Gear</button>
                    </div>
                    @include ('layouts.errors')
                </form>
            </div>
            <!--Edit Trips-->
            <div class="col-md-6 item">
                <h3 class="name">Edit Gear</h3>
                <form method="POST" action="/trips" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group">
                            <select class="form-control" name="trip_selector">

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="New Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="total_spots" placeholder="New Total Spots">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="location" placeholder="New Location">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon">$</div>
                              <input type="text" name="price" class="form-control" id="inlineFormInputGroupUsername" placeholder="New Price">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="file-upload2">
                              <div class="file-select2">
                                <div class="file-select-button2" id="fileName2">New Trip Picture</div>
                                <div class="file-select-name2" id="noFile2">No file chosen...</div>
                                <input type="file" name="image" id="chooseFile2">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control datepicker" name="start_date" placeholder="New Start Date">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control datepicker" name="end_date" placeholder="New End Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block outline">Edit Gear</button>
                    </div>
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
