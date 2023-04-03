const overlay = document.getElementById("overlay");
const confirmBtn = document.getElementById("confirm");
const cancelBtn = document.getElementById("cancel");

// Show the overlay when user clicks the back button
window.addEventListener("popstate", () => {
  overlay.style.display = "block";
});

// Hide the overlay when user clicks "No"
cancelBtn.addEventListener("click", () => {
  overlay.style.display = "none";
});

// Log out and go back when user clicks "Yes"
confirmBtn.addEventListener("click", () => {
  window.location.replace("./html/index.php");
});
