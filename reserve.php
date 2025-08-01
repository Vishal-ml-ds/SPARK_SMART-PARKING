<!DOCTYPE html>
<html>

<head>
    <title>Reserve Your Slot</title>
    <link rel="stylesheet" href="assets/css/reserve.css" />
    <script src="assets/js/reserve.js"></script>
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
            <center><img src="assets/images/logo.png" class="car" /></center>
            <h1>BOOK NOW!</h1>
            <div>
                <label for="name">Enter your name:</label>
                <input type="text" id="name" name="name" class="box" />
            </div>
            <div>
                <label for="entry date and time">Entry date and time:</label>
                <input type="datetime-local" id="entry_dttm" name="entry_dttm" class="box" required />
            </div>
            <br />
            <div>
                <label for="exit date and time">Exit date and time:</label>
                <input type="datetime-local" id="exit_dttm" name="exit_dttm" class="box" required />
            </div>

            <button onclick="validateForm()">Select Slot</button>
        </form>
    </section>
</body>

</html>