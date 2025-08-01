function validateForm() {
  var name = document.myForm.car_num.value.trim();

  if (car_num === "") {
    alert("Car Registration Number must be filled out");
    return false;
  }

  window.location.href = "home.php";
  return false;
}
