<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="assets/css/home.css" />
</head>
<style>
<?php include "homepageheadercss.php";
?>
</style>

<body>
    <?php
  include "homepageheader.php";
  ?>
    <header>
        <h1>User Dashboard</h1>
    </header>

    <section>
        <h2>Welcome, User!</h2>
        <ul class="user-options">
            <li><a href="add_vehicle.php">Add Vehicle</a></li>
            <li><a href="area.php">Parking Area</a></li>
            <li><a href="reserve.php">Make Reservation</a></li>
            <li><a href="wallet.php">Wallet</a></li>
            <li><a href="incident.php">File an Incident</a></li>
        </ul>
    </section>
</body>

</html>