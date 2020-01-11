@extends('/layouts/app')

@section('content')

    <div class='container'>
    

<div class="card bg-light mb-3 mt-5 w-75">
  <div class="card-header">User info</div>
  <div class="card-body">
    <h5 class="card-title">Name : </h5>
    <p class="card-text">{{$posts->name}}</p>
    <h5 class="card-title">Email : </h5>
    <p class="card-text">{{$posts->email}}</p>
    <h5 class="card-title">National_id : </h5>
    <p class="card-text">{{$posts->national_id}}</p>
    <h5 class="card-title">Avatar_img : </h5>
    <p class="card-text">{{$posts->avatar_img}}</p>
  </div>
</div>


@endsection
