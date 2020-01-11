
@extends('/layouts/app')

@section('content')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


<div class='container mt-5'>

<form method='post' action='/home'>
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1" class='font-weight-bold'>Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput2" class='font-weight-bold'>Password</label>
    <input type="password" name="password" class="form-control" id="exampleFormControlInput2" placeholder="Your Password">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput3" class='font-weight-bold'>Email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput3" placeholder="Your email">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4" class='font-weight-bold'>National_id</label>
    <input type="text" name="national_id" class="form-control" id="exampleFormControlInput4" placeholder="Your national_id">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput5" class='font-weight-bold'>Avatar_img</label>
    <input type="text" name="avatar_img" class="form-control" id="exampleFormControlInput5" >
  </div>


  <button type="submit" class="btn btn-success">Create</button>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</form>

  </div>

@endsection
