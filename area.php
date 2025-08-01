<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parking Area Website</title>
    <link rel="stylesheet" href="assets/css/area.css" />
</head>
<style>
<?php include "headercss.php";
?>
</style>

<body>
    <?php
  include "header.php";
  ?>
    <header>
        <h1>Parking Area</h1>
    </header>

    <section>
        <h2>Hours of Operation</h2>
        <p>Monday to Friday: 8:00 AM - 6:00 PM</p>
        <p>Saturday and Sunday: 10:00 AM - 4:00 PM</p>

        <h2>Contact</h2>
        <p>Email: Spark@gmail.com</p>
        <p>Phone: +91 8956052185</p>

        <h2>Map</h2>
        <div id="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6024.847264954173!2d73.82244427883883!3d15.487407263835095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc096d952cdff%3A0xe24f24ea67b589d7!2sJoggers%20Park!5e0!3m2!1sen!2sin!4v1704726039946!5m2!1sen!2sin"
                width="800" height="600" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="location-marker location1" onclick="redirectToPage('reserve.php')">
                🚗
            </div>

            <div class="location-marker location2" onclick="redirectToPage('reserve.php')">
                🚗
            </div>

            <div class="location-marker location3" onclick="redirectToPage('reserve.php')">
                🚗
            </div>
        </div>
    </section>

    <script>
    function redirectToPage(page) {
        window.location.href = page;
    }
    </script>
</body>

</html>