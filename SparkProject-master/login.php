<?php
$conn = new mysqli("localhost", "root", "e3n2003", "sparkdb");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

echo("Connected Successfully!");

$email = $_POST["login-email"];
$password = $_POST["password"];

// Check if the email exists in the database
$checkEmailQuery = "SELECT * FROM customername WHERE Email_id='$email'";
$checkResult = $conn->query($checkEmailQuery);

if ($checkResult->num_rows > 0) {
    // Email exists, now check for password
    $sql = "SELECT * FROM customername WHERE Email_id='$email' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to home.php
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid password. Please try again.";
    }
} else {
    // Email doesn't exist, show a message
    echo "Email not registered. Redirecting to signup form...";
    echo "<script>setTimeout(function(){ window.location.href = 'index.html#signup-form'; }, 3000);</script>";
}

$conn->close();
?>
