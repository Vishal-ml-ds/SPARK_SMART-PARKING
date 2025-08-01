function validateForm() {
  var name = document.myForm.name.value.trim();
  var entry_dttm = document.myForm.entry_dttm.value;
  var exit_dttm = document.myForm.exit_dttm.value;

  if (name === "") {
    alert("Name must be filled out");
    return false;
  }

  if (entry_dttm === "") {
    alert("Entry date and time must be filled out");
    return false;
  }

  if (exit_dttm === "") {
    alert("Exit date and time must be filled out");
    return false;
  }
  window.location.href = "slot.php";
  return false;
}
