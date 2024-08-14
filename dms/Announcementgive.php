<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="" alt="logo">
                    <h2>The <span class="success">Admin</span></h2>
                </div>
            </div>
            <div class="sidebar">
                <a href="dashboard.php" class="text-decoration-none">
                    <h3>Dashboard</h3>
                </a>
                <a href="tracking.php" class=" text-decoration-none">
                    <h3>track</h3>
                </a>
                <a href="Announcementgive.php" class="active text-decoration-none">
                    <h3>Anouncements</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="#" class="text-decoration-none">
                    <h3>Deliveries Adding</h3>
                </a>
                <a href="#" class="text-decoration-none">
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <div class="card mb-auto mt-3" id="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Announce something</h5>
    <form action="backend.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Anouncements</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="anouncement" aria-describedby="emailHelp" placeholder=" name">
  </div>
  <button type="submit" class="btn btn-primary" name="Anouncement">register</button><br>
</form>
  </div>
</div>
</div>
</body>

</html>