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
        <a class="nav-link" href="{{ url('/page?page=Home') }}">Home <span class="sr-only">(current)</span></a>
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

  <!-- Form -->
  <div class="container mt-5">
        <h5> {{ $page }}</h5>
  </div>

  <!-- Footer -->
  <footer class="mt-5 bg-light">
    <div class="container">
      <p>&copy; My Website 2023</p>
    </div>
  </footer>

  <!-- Bootstrap
