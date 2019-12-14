

<!DOCTYPE html>
<html>
<head>
  <title>User Details Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
      body{
        background-color: #D6DD41;
      }
  </style>
</head>
<body>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h1 class="btn btn-primary" style="font-size: 50px">User Details Information</h1>
@include('error.errors')
<form class="form-group" method="POST" action="{{ route('data.store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name">
  </div>

  <div class="form-group">
    <label for="task">Description</label>
    <textarea name="task" class="form-control" id="task" placeholder="Write something about you"></textarea>
  </div>

  <div class="form-group">
    <label for="image"> Image</label>
    <input type="file" name="image" class="form-control" id="image" aria-describedby="image">
  </div>

  <table class="table">
  
  <tr>
    <td></td>
    <td style="float: right;"><input type="submit" name="submit" class="btn btn-primary" value="Save"></td>
  </tr>
</table>
  </form>

  <h3>Welcome <i>{{ $username }}</i>(<a href="{{ url('/logout') }}">logout</a>)</h3>

 @if(session('updateSuccess'))
    {{ session('updateSuccess') }}
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
      @forelse($allData as $data)
    <tr>
      <td>{{ $data->name }}</td>
      <td>{{ $data->task }}</td>
      <td>@if($data->image == null)
         <p>image not found</p>
        @else
        <img src="{{ asset('photos/'.$data->image) }}" alt="" width="200px">
        @endif</td>

      <td> 
        <a class="btn btn-primary" href="{{ route('data.edit.show',[$data->id]) }}">Edit</a>||<a class="btn btn-danger" onclick="return confirm('Really??')" href="{{ route('data.delete',[$data->id]) }}">Delete</a>
      </td>
    </tr>
    @empty
    <tr>
        <td colspan="4">nothing to show</td>
    </tr>
  </tbody>
  @endforelse
</table>


</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
