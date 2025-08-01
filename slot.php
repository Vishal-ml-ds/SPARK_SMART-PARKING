<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parking Slot Booking</title>
    <link rel="stylesheet" href="assets/css/slot.css" />
</head>
<style>
<?php include "headercss.php";
?>
</style>

<body>
    <?php
  include "header.php";
  ?>
    <h1>Book Your Slot</h1>

    <div id="slotMap"></div>

    <div id="selectedSlots"></div>

    <button type="button" onclick="bookSlots()">Book Selected Slots</button>

    <script src="assets/js/slot.js"></script>
</body>

</html>