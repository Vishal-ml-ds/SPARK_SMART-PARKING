// Show Profile Options
let profileDetails = document.querySelector(".profile-details");
let profileOptions = document.querySelector(".profile-options");

// Add a click event listener to the profile details container
profileDetails.addEventListener("click", function () {
  // Toggle the 'show' class on the profile options menu
  profileOptions.classList.toggle("show");
});

// Hide profile options when clicking outside
document.addEventListener("click", function (event) {
  if (!profileDetails.contains(event.target)) {
    profileOptions.classList.remove("show");
  }
});
