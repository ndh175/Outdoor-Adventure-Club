@extends ('layouts.master')

@section ('content')
<div class="app-body">

  <!-- Main content -->
  <main class="main">

    <div class="container-fluid">

      <div class="animated fadeIn">

        <div class="card-deck mb-4 mt-4">
          @foreach ($members as $member)
          <div class="card text-white bg-dark">
            <img class="card-img-top" src="{{ asset('/storage/' . substr($member->image_url, 7)) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title m-0">{{ $member->name }} @if ($member->has_paid)<i class="fa fa-check text-primary"></i>@endif</h5>
              <p class="card-text m-0"><small class="text-muted">{{ $member->title }}</small></p>
              <p class="card-text"><small class="text-muted">{{ $member->joined_date }}</small></p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
