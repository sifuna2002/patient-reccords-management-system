<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="MartDevelopers">
  <meta name="generator" content="Jekyll v3.8.5">
  <link rel="shortcut icon" href="Admin/assets/img/1bcb7e8893204665b86670bad53fd246-removebg-preview.png">
  <title>Patient Records Management System </title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    .app{
      text-align: center;
    }
    .container,.p-3{
      background-color: transparent;
    }
    body{
      background-image: url("assets/annie-spratt-nNQP1LXMA0g-unsplash.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    body::-webkit-scrollbar {
      width: 12px;               /* width of the entire scrollbar */
    }
    body::-webkit-scrollbar-track {
      background: #D5D1CE;        /* color of the tracking area */
    }
    body::-webkit-scrollbar-thumb {
      background-color: #D5D1CE;    /* color of the scroll thumb */
      border-radius: 20px;       /* roundness of the scroll thumb */
      border: 3px solid transparent;  /* creates padding around scroll thumb */
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles -->
  <link href="assets/css/pricing.css" rel="stylesheet">
</head>

<body>
<div class="container">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2>Patient Records Management System</h2>
    <p class="lead">Please login to your respective department module.</p>
  </div>

  
    <div class="card-deck mb-1 text-center">
      <div class="card mb-1 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Registration Desk</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"></h1>
          <a href="RegistrationDesk/employee_login.php" class="btn btn-lg btn-block btn-outline-primary">Login</a>
        </div>
      </div>
    </div>
    <div class="card-deck mb-1 text-center">
      <div class="card mb-1 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Laboratory </h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"></small></h1>
          <a href="Laboratory/employee_login.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Login</a>
        </div>
      </div>
      <div class="card mb-1 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pharmacy</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"></h1>
          <a href="Pharmacy/employee_login.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Login</a>
        </div>
      </div>
      <div class="card mb-1 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Departmental Heads</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"></h1>
          <a href="DepartmentHead/dept_head_login.php" class="btn btn-lg btn-block btn-outline-primary">Login</a>
        </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Administrator </h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"></h1>
          <a href="Admin/ohcms_admin_login.php" class="btn btn-lg btn-block btn-outline-primary">Login</a>
        </div>
      </div>
    </div>


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md app">
          <small class="d-block mb-3 text-muted">&copy; All Rights Reserved Patient Records Management System <?php echo date('Y'); ?>. Crafted With Love by <a href="https://github.com/sifuna2002" target="_blank">Sifuna</a>.</small>
        </div>
    </footer>
  </div>
</body>

</html>