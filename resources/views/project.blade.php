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
    <a class="navbar-brand" href="{{ url('/home') }}">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
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

  <!-- Form -->
  <div class="container mt-5">
    <form  action="{{ route('create') }}" method="POST" >
    @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email" name="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
      </div>
      <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" id="country" name="country">
          <option value="Country id's form db">Countries name from db</option>
          <option value="pk" name="country"> Pk </option>  
          <option value="USA" name="country"> USA </option>  
        </select> 
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="accept-conditions">
        <label class="form-check-label" for="accept-conditions">I accept the terms and conditions</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="mt-5 bg-light">
    <div class="container">
      <p>&copy; My Website 2023</p>
    </div>
  </footer>

  <!-- Bootstrap
