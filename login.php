<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Perpus Online Login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      /* Ensures form stays centered vertically */
      background-color: #f5f5f5;
      /* Light background */
    }

    .login-form {
      width: 400px;
      padding: 30px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      /* Subtle shadow */
    }

    .login-form h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      /* Darker text for better legibility */
    }

    .form-control {
      margin-bottom: 15px;
    }

    .btn-success {
      width: 100%;
      /* Full-width button */
      background-color: #28a745;
      /* Custom green color */
      border: none;
    }

    .btn-success:hover {
      background-color: #207F30;
      /* Darker green on hover */
    }
  </style>
</head>

<body>
  <div class="login-form">
    <h3>SELAMAT DATANG DI PERPUSTAKAAN</h3>
    <form action="proses_login.php" method="post">
      <input type="text" name="username" value="" class="form-control" placeholder="Username">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>

</html>