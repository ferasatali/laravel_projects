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
    <a class="navbar-brand" href="{{ url('/home') }}">Petrol Pump</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}">DashBoard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <br> <br>
  <h3> Customer Information </h3>
  <div class="col-sm-8">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email</th>
                  <th scope="col">Car Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($customer as $list)
                <tr>
                  <th>{{$list->id}}</th>
                  <td>{{$list->customer_name}}</td>
                  <td>{{$list->phone}}</td>
                  <td>{{$list->email}}</td>
                  <td>{{$list->car_name}}</td>
                  <td>
                    <!-- <a href="{{url('/edit',$list->id)}}" class="btn btn-info btn-sm">Edit</a> -->
                    <a href="{{url('/delete',$list->id)}}" class="btn btn-danger btn-sm">Delete</a>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
  <!-- Footer -->
  <footer class="mt-5 bg-light">
  <div class="mx-auto" style="width: 200px;">
       <p>&copy; Petrol Pump Management System 2023</p>
    </div>
  </footer>

  <!-- Bootstrap
