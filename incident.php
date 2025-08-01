<!DOCTYPE html>
<html>

<head>
    <title>Incident Report</title>
    <link rel="stylesheet" href="assets/css/incident.css">
</head>
<style>
<?php include "headercss.php";
?>
</style>

<body>
    <?php
  include "header.php";
  ?>
    <script src="assets/js/incident.js"></script>
    <header>
        <h1>File An Incident</h1>
    </header>
    <form onsubmit="return validateForm()" name="myForm">
        <div class="textarea-container">
            <textarea id="incidentDescription" name="incidentDescription" rows="4"
                placeholder="Enter description here..."></textarea>
        </div>

        <div><br>
            <select id="slot" class="box">
                <option value="Select Slot" selected> Select Slot</option>
                <option> Slot 1 </option>
                <option> Slot 2</option>
                <option> Slot 3</option>
                <option> Slot 4</option>
                <option> Slot 5</option>
            </select>
        </div>
        <div class="time">
            <br>
            <label for="entry_date_time" class="datetime">Entry date and time</label>
            <input type="datetime-local" id="entry_dttm" name="entry_dttm" class="box" />
            <label for="exit_date_time" class="datetime">Exit date and time</label>
            <input type="datetime-local" id="exit_dttm" name="entry_dttm" class="box" />
        </div>
        <div class="submit">
            <button id="submitbtn" onclick="validateForm()">Submit
            </button>
        </div>

    </form>
    </section>
</body>