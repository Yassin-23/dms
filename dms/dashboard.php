<?php
include('connection.php');
session_start();
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
                    <img src="GamesXboxHubGameBar.png" alt="logo">
                    <h2>The <span class="success">Admin</span></h2>
                </div>
            </div>
            <div class="sidebar">
                <a href="#" class=" active text-decoration-none">
                    <h3>Dashboard</h3>
                </a>
                <a href="tracking.php" class="text-decoration-none">
                    <h3>trackers</h3>
                </a>
                <a href="#" class="text-decoration-none">
                    <h3>Anouncements</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="deliveries.php" class="text-decoration-none">
                    <h3>Deliveries Adding</h3>
                </a>
                <a href="logout.php" class="text-decoration-none">
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <div class="card h-25 mt-5 shadow" id="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">deliveries</h2>

            </div>
        </div>
        <div class="card h-25 mt-5 shadow" id="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">Deliverers available</h2>
            </div>
        </div>

    </div>
</body>

</html>