<!DOCTYPE html>
<html>

<head>
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="assets/css/add_vehicle.css" />
    <script src="assets/js/add_vehicle.js"></script>
</head>
<style>
<?php include "headercss.php";
?>
</style>

<body style="background-color: #31424d">
    <?php
    include "header.php";
    ?>

    <section>
        <form onsubmit="return validateForm()" name="myForm">
            <center><img src="assets/images/logo.png" class="logo" /></center>
            <h1>ADD YOUR VEHICLE</h1>
            <div>
                <label for="car_num">Enter your Car Registration Number:</label>
                <input type="text" id="car_num" name="car_num" class="box" />
            </div>

            <button onclick="validateForm()">Add Vehicle</button>
        </form>
    </section>
</body>

</html>