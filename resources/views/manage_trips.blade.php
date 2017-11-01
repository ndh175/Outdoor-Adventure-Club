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
                    <h2 class="text-center" style="padding-top:20px;margin-bottom:20px;">Manage Trips</h2></div>
                <div class="col-md-1">
                    <p> </p>
                </div>
            </div>
        </div>
        <div class="row people">
            <div class="col-md-6 item">
                <h3 class="name">Add Trip</h3>
                <form method="POST" action="/trips" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="location" placeholder="Location">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon">$</div>
                              <input type="text" name="price" class="form-control" id="inlineFormInputGroupUsername" placeholder="Price">
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
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="total_spots" placeholder="Total Spots">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="file" name="image" style="color:#111111">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block outline">Add Trip</button>
                    </div>
                    @include ('layouts.errors')
                </form>
            </div>
            <div class="col-md-6 item">
                <h3 class="name">Edit Trip</h3>
                <form method="POST" action="/trips" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group">
                            <select class="form-control" name="trip_selector">
                              @foreach ($trips as $trip)
                                  <option>{{ $trip->name }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
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
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control datepicker" name="start_date" placeholder="New Start Date">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control datepicker" name="end_date" placeholder="New End Date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="total_spots" placeholder="New Total Spots">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="file" name="image" style="color:#111111">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block outline">Edit Trip</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row people">
            <div class="col-md-6 item">
                <h3 class="name">Remove Trips</h3>
                @foreach ($trips as $trip)
                <form method="POST" action="/trips/{{ $trip->id }}">
                    <input name="_method" type="hidden" value="DELETE">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="{{ $trip->name }}" readonly>
                                <span class="input-group-btn">
                                  <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#confirm{{ $trip->id }}">Delete Trip</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="confirm{{ $trip->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete:</h5>
                          </div>
                          <div class="modal-body">
                            {{ $trip->name }}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
                @endforeach
            </div>
            <div class="col-md-6 item">
                <h3 class="name">Attendees</h3>
                @foreach ($trips as $trip)
                <form>
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ $trip->name }}" readonly>
                                @if ($trip->members()->count() != 0)
                                @foreach ($trip->members() as $member)
                                <span class="input-group-addon">{{ App\Member::find($member->member_id)->name }}</span>
                                @endforeach
                                @else
                                <span class="input-group-addon"><strong>No Trip Attendees</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
