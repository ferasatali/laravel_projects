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
          <a class="nav-link" href="{{ url('/page?page=Home') }}">Dashboard </a>
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
      <h4> Update Customer </h4>
      <div class="col-sm-12">
      <form action=" {{ route('update-customer',$data[0]->id) }}" method="GET">
          @csrf
          <div class="mb-3">  
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$data[0]->customer_name}}">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Name</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{$data[0]->phone}}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$data[0]->email}}">
          </div>
          <div class="mb-3">
            <label for="carname" class="form-label">Car Name</label>
            <input type="text" class="form-control" id="carname" name="carname" value="{{$data[0]->car_name}}">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Update Customer </button>
          </div>
        </form>
      </div>
      
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>