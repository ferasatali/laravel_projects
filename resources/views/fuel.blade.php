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
      <div class="col-sm-6">
        @if(session()->has('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
        <h4> Fuel Information </h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Types</th>
              <th scope="col">Price</th>
              <th scope="col">Tax Rate</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($fuel as $list)
            <tr>
              <th>{{$list->id}}</th>
              <td>{{$list->fuel_type}}</td>
              <td>{{$list->fuel_price}}</td>
              <td>{{$list->tax_rate}}</td>
              <td>
                <!-- <a href="{{url('/edit',$list->id)}}" class="btn btn-info btn-sm">Edit</a> -->
                <a href="{{url('/delete?table=fuel',$list->id)}}" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>  
      <div class="col-sm-6 ">
        @if(session()->has('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
        <h4> Fuel Consumption Information </h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Fuel Lists</th>
              <th scope="col">Availabe Fuel</th>
              <th scope="col">Total Fuel</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($fuelConsumption as $list)
            <tr>
              <th>{{$list->id}}</th>
              <td>{{$list->fuel_id}}</td>
              <td>{{$list->fuel_available}}</td>
              <td>{{$list->total_fuel}}</td>
              <td>
                <!-- <a href="{{url('/edit',$list->id)}}" class="btn btn-info btn-sm">Edit</a> -->
                <a href="{{url('/delete?table=fuel_consumption',$list->id)}}" class="btn btn-danger btn-sm">Delete</a>
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