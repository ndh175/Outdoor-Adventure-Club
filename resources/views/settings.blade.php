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
                    <h2 class="text-center" style="padding-top:20px;margin-bottom:20px;">Settings</h2></div>
                <div class="col-md-1">
                    <p> </p>
                </div>
            </div>
        </div>
        <div class="row people">
            <div class="col-md-3 item"></div>
            <div class="col-md-6 item">
                <form method="POST" action="/members/{{ auth()->user()->id }}" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon">Display Name</div>
                                <input type="text" class="form-control" name="name" placeholder="New Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon">Password</div>
                                <input type="text" class="form-control" name="password" placeholder="New Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="file-upload2">
                              <div class="file-select2">
                                <div class="file-select-button2" id="fileName2">New Profile Picture</div>
                                <div class="file-select-name2" id="noFile2">No file chosen...</div>
                                <input type="file" name="image" id="chooseFile2">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block outline">Update Settings</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 item"></div>
        </div>
    </div>
</div>
@endsection
