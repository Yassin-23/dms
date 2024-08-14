<?php
  include('connection.php');
  session_start();
  if (!isset($_SESSION['id'])) {
}
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #card{
            margin-top: 2000px;
        }
    </style>
</head>
<body>
    <br><br><br><br>
<div class="card mx-lg-auto mt-lg-auto" id="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">login</h5>
    <form action="backend.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">login</button><br>
  <label class="form-check-label" for="exampleCheck1">No account register?<a href="register.php" class=" text-body-primary text-decoration-none" >here</a></label>
</form>
  </div>
</div>
</body>
</html>