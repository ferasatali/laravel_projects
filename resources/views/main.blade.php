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
        <div class="card">
          <div class="card-body">
            Customer Information <div align= right class=""><a href="{{ url('/customer')}}" class="btn btn-primary">Go to Customer</a> </div>
          </div>
          <div class="card-body">
            Employee Information <div align= right  ><a href="{{ url('/employee')}}" class="btn btn-primary">Go to Employee</a> </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            Fuel Information <div align= right  ><a href="{{ url('/fuel')}}" class="btn btn-primary">Check Fuel Information</a> </div>
          </div>
          <div class="card-body">
            Discounts Codes Available <div align= right ><a href="{{ url('/discounts')}}" class="btn btn-primary">Go to Discounts</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>


<footer class="mt-5 bg-light">
  <div class="mx-auto" style="width: 200px;">
    <p>&copy; Petrol Pump System 2023</p>
  </div>
</footer>

</html>