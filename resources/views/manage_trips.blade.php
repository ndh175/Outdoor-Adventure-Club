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
            <!--Add Trips-->
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
                                <div class="file-select-button" id="fileName">Choose File</div>
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
                        <button type="submit" class="btn btn-success btn-block outline">Add Trip</button>
                    </div>
                    @include ('layouts.errors')
                </form>
            </div>
            <!--Edit Trips-->
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
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName">Choose File</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div>
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
                        <button type="submit" class="btn btn-success btn-block outline">Edit Trip</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row people">
            <!--Remove Trips-->
            <div class="col-md-6 item">
                <h3 class="name">Remove Trips</h3>
                @foreach ($trips as $trip)
                <form method="POST" action="/trips/{{ $trip->id }}">
                    <input name="_method" type="hidden" value="DELETE">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control"placeholder="{{ $trip->name }}" readonly>
                                <span class="input-group-btn">
                                  <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#confirm{{ $trip->id }}">Delete Trip</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="confirm{{ $trip->id }}" tabindex="-1" role="dialog" aria-labelledby="modal_label{{ $trip->id }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modal_label{{ $trip->id }}">Are you sure you want to delete:</h5>
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
            <!--Show Trip Attendees-->
            <div class="col-md-6 item">
                <h3 class="name">Attendees</h3>
                @foreach ($trips as $trip)
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ $trip->name }}" readonly>
                                @if ($trip->members()->count() != 0)
                                <span class="input-group-btn">
                                  <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#attendees{{ $trip->id }}">View Attendees</button>
                                </span>
                                @else
                                <span class="input-group-addon"><strong>No Trip Attendees</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="attendees{{ $trip->id }}" tabindex="-1" role="dialog" aria-labelledby="attendees_modal_label{{ $trip->id }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="attendees_modal_label{{ $trip->id }}">{{ $trip->name}} Attendees ({{ $trip->total_spots - $trip->remaining_spots }} / {{ $trip->total_spots }}):</h5>
                          </div>
                          <div class="modal-body">
                              @foreach ($trip->members() as $member)
                                  <form method="POST" action="/register_trip/{{ $trip->id }}/{{ $member->member_id }}">
                                      <input name="_method" type="hidden" value="DELETE">
                                      {{ csrf_field() }}
                                      <div class="form-group">
                                          <div class="input-group">
                                              <input type="text" class="form-control" placeholder="{{ App\Member::find($member->member_id)->name }}" readonly>
                                              <span class="input-group-btn">
                                                <button class="btn btn-danger btn-sm" type="submit" data-toggle="modal" data-target="#attendees{{ $trip->id }}">Kick</button>
                                              </span>
                                          </div>
                                      </div>
                                  </form>
                              @endforeach
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
