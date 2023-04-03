@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <h1>News</h1>

                <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a href="https://www.educastudio.com/event" class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Event</a>
      <a href="https://www.educastudio.com/promo" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Promo & Diskon</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
