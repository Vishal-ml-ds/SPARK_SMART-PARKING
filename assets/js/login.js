function toggleForm() {
  var loginForm = document.getElementById("login-form");
  var signupForm = document.getElementById("signup-form");

  loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
  signupForm.style.display = signupForm.style.display === "none" ? "block" : "none";

  document.getElementById("form-title").innerText = loginForm.style.display === "block" ? "Login" : "Sign Up";
}

function validateLoginForm() {
  var email = document.getElementById("login-email").value;
  var password = document.getElementById("password").value;

  if (email.trim() == "" || password.trim() == "") {
      alert("Email and password are required!");
      return false;
  }

  return true;
}

function validateSignupForm() {
  var username = document.getElementById("new-username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("new-password").value;
  var confirmPassword = document.getElementById("confirm-password").value;

  if (username.trim() == "" || !isNaN(username)) {
      alert("Enter a valid username!");
      return false;
  }

  var emailRegex = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-zA-Z]{2,20})(.[a-zA-Z]{2,8})$/;
  if (!emailRegex.test(email.trim())) {
      alert("Enter a valid email!");
      return false;
  }

  if (password.trim() == "") {
      alert("Password field is empty!");
      return false;
  }

  if (confirmPassword.trim() !== password.trim()) {
      alert("Passwords don't match!");
      return false;
  }

  return true;
}
