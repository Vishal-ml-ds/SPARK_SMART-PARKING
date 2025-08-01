document.addEventListener("DOMContentLoaded", function () {
  createSlotMap();
});

function createSlotMap() {
  var slotMap = document.getElementById("slotMap");
  var numRows = 1;
  var numCols = 5;

  for (var row = 1; row <= numRows; row++) {
    for (var col = 1; col <= numCols; col++) {
      var slotNumber = (row - 1) * numCols + col;
      var slotElement = document.createElement("div");
      slotElement.className = "slot";
      slotElement.textContent = slotNumber;
      slotElement.setAttribute("data-slot-number", slotNumber);
      slotElement.addEventListener("click", toggleSlotSelection);
      slotMap.appendChild(slotElement);
    }
  }
}

function toggleSlotSelection(event) {
  var selectedSlot = event.target;
  selectedSlot.classList.toggle("selected");
  updateSelectedSlots();
}

function updateSelectedSlots() {
  var selectedSlots = document.querySelectorAll(".slot.selected");
  var selectedSlotsContainer = document.getElementById("selectedSlots");

  var selectedSlotNumbers = Array.from(selectedSlots).map(function (slot) {
    return slot.getAttribute("data-slot-number");
  });

  selectedSlotsContainer.textContent =
    "Selected Slots: " + selectedSlotNumbers.join(", ");
}

function bookSlots() {
  var selectedSlots = document.querySelectorAll(".slot.selected");

  if (selectedSlots.length > 0) {
    alert("Slots booked successfully!");
  } else {
    alert("Please select at least one slot.");
  }
}
