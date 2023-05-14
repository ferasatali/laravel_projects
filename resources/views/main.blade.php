<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/page?page=Home') }}">Petrol Pump</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/page?page=Home') }}">DashBoard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/page?page=About') }}"> About </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/page?page=Contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <br> <br>
  
  <div class="card col-sm-6">
  <div class="card-body">
    Customer Information <div class ="text-right"><a href="{{ url('/customer')}}" class="btn btn-primary">Go to Customer</a> </div>
  </div>
  <div class="card-body">
    Employee Information <div class ="text-right"><a href="{{ url('/employee')}}" class="btn btn-primary">Go to Employee</a> </div>
  </div>
  <div class="card-body">
    Fuel Information <div class ="text-right"><a href="{{ url('/fuel')}}" class="btn btn-primary">Check Fuel Information</a> </div>
  </div>
</div>
  <!-- Footer -->
  <footer class="mt-5 bg-light">
  <div class="mx-auto" style="width: 200px;">
       <p>&copy; Petrol Pump System 2023</p>
    </div>
  </footer>

  <!-- Bootstrap
