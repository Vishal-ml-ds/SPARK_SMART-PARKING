<!DOCTYPE html>
<html>

<head>
    <title>USER PROFILE</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<style>
<?php include "headercss.php";
?>
</style>

<body>
    <?php
  include "header.php";
  ?>
    <script src="assets/js/profile.js"></script>
    </head>

    <form onsubmit="return validateForm()" name="myForm">
        <div class="profile-container">
            <div class="profile-picture">
                <img src="profile-image.jpg" alt="Profile Picture">
            </div>

            <div class="user-details">
            </div>

            <form action="#" method="post">
                <h1>RESERVE YOUR SPOT FOR LONG-TERM & VALET PARKING</h1>
                <div>
                    <label for="fname">Full Name:</label>
                    <input type="text" id="fname">
                </div>
                <br>


                <div>
                    <select id="dd" name="gender">
                        <label for="gender">Gender:</label>

                        <option value="gender" selected> select gender</option>
                        <option value="male">Male </option>
                        <option value="female">Female</option>
                    </select>

                    <br>
                </div>
                <div>
                    <label for="tel"> phone: </label>
                    <input type="text" name="tel">
                </div>
                <br>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" id="email">
                </div>
                <br>
                <div>
                    <label for="Password">Password: </label>
                    <input type="password" id="pswd" value="">
                    <span id="message" style="color:red"> </span> <br><br>
                </div>
                <br>
                <div>
                    <label for="reset Password">reset Password: </label>
                    <input type="password" id="repswd" value="">
                    <span id="message" style="color:red"> </span> <br><br>
                </div>
                <div>
                    <label for="file">Profile Image:</label>
                    <input type="file" id="fileInput" onchange="validateForm()">
                </div>
                <input type="submit" value="Update Profile">
            </form>
        </div>

</body>

</html>