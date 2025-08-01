function validateForm() {
  var entry_dttm = document.myForm.entry_dttm.value;

  let d = document.getElementById("dd").value;
  if (d == "area.") {
    alert("select area");
    return false;
  }

  if (entry_dttm === "") {
    alert("Entry date and time must be filled out");
    return false;
  }

  window.location.href = "slot.html";
  return false;
}
