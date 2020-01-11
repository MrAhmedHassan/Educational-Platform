@extends('layouts/app')
@section('content')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->


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

<!-- <script src="https://code.jquery.com/jquery-3.4.1.slimbootstrap.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com//4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

@endsection
