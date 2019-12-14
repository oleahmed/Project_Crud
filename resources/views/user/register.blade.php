<html>
<body>

@include('error.errors')
{{-- <form action="{{ route('user.register') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ old('name') }}"><br>
    <input type="email" name="email" value="{{ old('email') }}"><br>
    <input type="password" name="password"><br>
    <input type="password" name="password_confirmation"><br>
    <input type="submit" name="submit" value="Register"><br>
</form> --}}

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
    body{
      background-color: lightgreen;
    }
  </style>
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<h1 class="btn btn-info" style="font-size: 50px">Registration Form</h1>
<form class="form-group" method="POST" action="{{ route('user.register') }}">
	 {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name" value="{{ old('name') }}">
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="number" name="number" class="form-control" id="number" placeholder="Enter your number" value="{{ old('number') }}">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="Password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="Password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit" class="btn btn-info" value="Register">
  <div style="float: right;"><a class="btn btn-primary" href="{{ route('user.login.show') }}">Login</a></div>
</form>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>