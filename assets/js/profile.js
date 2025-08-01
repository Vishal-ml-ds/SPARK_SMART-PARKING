function validateForm() {
  var x = document.myForm.fname.value;
  if (x == null || x == "") {
    alert(" name must be filled out");
    return false;
  }

  let d = document.getElementById("dd").value;
  if (d == "gender") {
    alert("select gender");
    return false;
  }

  if (
    document.myForm.tel.value == "" ||
    isNaN(document.myForm.tel.value) ||
    document.myForm.tel.value.length != 10
  ) {
    alert("please provide a phone in the format ##########");
    document.myForm.tel.focus();
    return false;
  }
  var emailID = document.myForm.email.value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
  if (atpos < 1 || dotpos - atpos < 2) {
    alert("Please enter correct email ID");
    document.myForm.email.focus();
    return false;
  }
  var pw = document.getElementById("pswd").value;
  //check empty password field
  if (pw == "") {
    document.getElementById("message").innerHTML =
      "**Fill the password please!";
    return false;
  }

  //minimum password length validation
  if (pw.length < 8) {
    document.getElementById("message").innerHTML =
      "**Password length must be atleast 8 characters";
    return false;
  }

  //maximum length of password validation
  if (pw.length > 15) {
    document.getElementById("message").innerHTML =
      "**Password length must not exceed 15 characters";
    return false;
  }

  var pw = document.getElementById("repswd").value;
  //check empty password field
  if (pw == "") {
    document.getElementById("message").innerHTML =
      "**re enter the password please!";
    return false;
  }

  //minimum password length validation
  if (pw.length < 8) {
    document.getElementById("message").innerHTML =
      "**Password length must be atleast 8 characters";
    return false;
  }

  //maximum length of password validation
  if (pw.length > 15) {
    document.getElementById("message").innerHTML =
      "**Password length must not exceed 15 characters";
    return false;
  } else {
    alert("Password is correct");
  }
  var selectedFile = document.getElementById("fileInput").files[0];
  var allowedTypes = ["image/jpeg", "image/png", "application/pdf"];

  if (!allowedTypes.includes(selectedFile.type)) {
    alert("Invalid file type. Please upload a JPEG, PNG, or PDF file.");
    document.getElementById("fileInput").value = "";
  }
}
