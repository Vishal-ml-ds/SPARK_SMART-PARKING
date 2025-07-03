<?php
$conn = new mysqli("localhost", "root", "e3n2003", "sparkdb");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

echo("Connected Successfully!");

if(isset($_POST["username"], $_POST["email"], $_POST["password"])) {
    $usernm = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM customername WHERE Email_id='$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        echo "Email not registered. Redirecting to signup form...";
        echo "<script>setTimeout(function(){ window.location.href = 'index.html#signup-form'; }, 3000);</script>";
        exit();
    } else {
        // If email is unique, proceed with the registration
        $sql = "INSERT INTO customername(CustomerName, Email_id, Password) VALUES ('$usernm', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully!";
            // Redirect or perform any other action after successful registration
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Email not registered. Redirecting to signup form...";
    echo "<script>setTimeout(function(){ window.location.href = 'loginpage.php#signup-form'; }, 3000);</script>";
    exit();
}

$conn->close();
?>