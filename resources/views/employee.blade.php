<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud Query Builder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/page?page=Home') }}">Petrol Pump</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/page?page=Home') }}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/page?page=About') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/page?page=Contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">

      <div class="col-sm-12">
        <form action=" {{ route('create-employee') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary">
          </div>
          <div class="mb-3">
            <label for="time" class="form-label">Working Hours</label>
            <input type="text" class="form-control" id="time" name="time">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Create Employee </button>
          </div>
        </form>
      </div>
      <div class="col-sm-10 text-center">
        @if(session()->has('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
        <table class="table table-hover text-center">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Employee Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Email</th>
              <th scope="col">Salary</th>
              <th scope="col">Working Hour</th>
              <th scope="col">Address</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employee as $list)
            <tr>
              <th>{{$list->id}}</th>
              <td>{{$list->name}}</td>
              <td>{{$list->phone}}</td>
              <td>{{$list->email}}</td>
              <td>{{$list->salary}}</td>
              <td>{{$list->time }}</td>
              <td>{{$list->address}}</td>
              <td>
                <!-- <a href="{{url('/edit',$list->id)}}" class="btn btn-info btn-sm">Edit</a> -->
                <a href="{{url('/delete?table=employee',$list->id)}}" class="btn btn-danger btn-sm">Delete</a>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>