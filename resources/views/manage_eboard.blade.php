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
                    <h2 class="text-center" style="padding-top:20px;margin-bottom:20px;">Manage E-Board</h2></div>
                <div class="col-md-1">
                    <p> </p>
                </div>
            </div>
        </div>
        <div class="row people">
            <div class="col-md-8 item">
                @foreach ($members as $member)
                <form method="POST" action="/manage_members/rank/{{ $member->id }}">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="{{ $member->name }} " readonly>
                                <span class="input-group-btn">
                                    @if ($member->rank == 'user')
                                    <button type="submit" class="btn btn-success btn-sm" type="button">Add Privileges</button>
                                    @else
                                    <button type="submit" class="btn btn-danger btn-sm" type="button">Remove Privileges</button>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
            <div class="col-md-4 item">
                @foreach ($members as $member)
                <form method="POST" action="/manage_members/title/{{ $member->id }}">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="title" placeholder="{{ $member->title }} ">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-sm" type="button">Update Title</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
