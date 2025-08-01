function validateRegistrationForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    // Add your other validation logic here...

    // Check if email is already taken
    if (!checkEmailAvailability(email)) {
        alert("Email ID already exists. Please use a different email.");
        return false;
    }

    return true;
}

function checkEmailAvailability(email) {
    // You may implement an AJAX request to check email availability on the server
    // For simplicity, I'm returning true (assuming email is available).
    return true;
}
