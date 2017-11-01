@extends ('layouts.master')

@section ('content')
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h2 class="text-center" style="padding-top:20px">Register For Trip</h2>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="row people">
                <div class="col-md-3"></div>
                <div class="col-md-6 item">
                    <form method="POST" action="/register_trip/{{ $trip->id }}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="name" placeholder="{{ $trip->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="location" placeholder="{{ $trip->location }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group mb-2 mb-sm-0">
                                  <div class="input-group-addon">$</div>
                                  <input type="text" name="price" class="form-control" id="inlineFormInputGroupUsername" placeholder="{{ $trip->price }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control datepicker" name="start_date" placeholder="{{ $trip->start_date }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control datepicker" name="end_date" placeholder="{{ $trip->end_date }}" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="name" placeholder="{{ auth()->user()->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block outline">Register</button>
                        </div>
                        @include ('layouts.errors')
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection
