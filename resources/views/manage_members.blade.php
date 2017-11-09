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
                    <h2 class="text-center" style="padding-top:20px;margin-bottom:20px;">Manage Members</h2></div>
                <div class="col-md-1">
                    <p> </p>
                </div>
            </div>
        </div>
        <div class="row people">
            <div class="col-md-12 item">
                @foreach ($members as $member)
                <form method="POST" action="/members/has_paid/{{ $member->id }}">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group form-check col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="{{ $member->name }}" readonly>
                                @if ($member->has_paid)
                                <span class="input-group-addon">Due paying member</span>
                                <span class="input-group-addon"> <i class="fa fa-check-square-o" style="font-size:1em;color:#00cc00"></i> </span>
                                @endif
                                <span class="input-group-btn">
                                    @if (!$member->has_paid)
                                    <button type="submit" class="btn btn-success btn-sm" type="button">Pay Dues</button>
                                    @else
                                    <button type="submit" class="btn btn-danger btn-sm" type="button">Remove Dues</button>
                                    @endif
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
