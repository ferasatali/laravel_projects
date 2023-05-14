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
          <a class="nav-link" href="{{ url('/page?page=Home') }}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/page?page=About') }}">About</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Form -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Pump Details</h3> <br>
            <div class="col-sm-6">
              <h5 class="card-subtitle mb-2 text-muted ">
                About Our Pumps: <br>

                At PSO Pumps, we are dedicated to delivering top-quality pumps for a wide range of industrial and commercial applications. Our pumps are designed with precision and built to meet the highest standards of performance, efficiency, and durability. <br>

                Key Features: <br>
                <br>
                - Robust construction for reliable and long-lasting operation<br>
                - High-efficiency motor for optimal energy usage<br>
                - Precision-engineered impellers for efficient fluid transfer<br>
                - Advanced control systems for seamless operation and monitoring<br>
                - Wide range of pump sizes and configurations to suit various applications<br>
                - Comprehensive warranty and after-sales support<br>
                <br>
                Our team of experienced engineers and technicians ensures that every pump we produce adheres to strict quality standards. We utilize the latest technologies and manufacturing processes to deliver pumps that excel in performance and meet the unique requirements of our customers.<br>
                <br>
                Whether you need pumps for water supply, irrigation, HVAC systems, industrial processes, or any other application, you can rely on PSO Pumps for exceptional quality and reliability.<br>
                <br>
                Contact us today to learn more about our pump solutions and how we can meet your specific needs.<br>

              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-5 bg-light">
    <div class="container">
      <p>&copy; My Website 2023</p>
    </div>
  </footer>
