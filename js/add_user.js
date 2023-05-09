const addUserButton = document.querySelector(".add");
const popup = document.querySelector(".popup");
const closeButton = document.querySelector(".popup-close-button");
const overlay = document.querySelector(".overlay");

addUserButton.addEventListener("click", () => {
  popup.style.display = "block";
  overlay.style.display = "block";
});

closeButton.addEventListener("click", () => {
  popup.style.display = "none";
  overlay.style.display = "none";
});

const form = document.querySelector(".popup form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Hide the pop-up and overlay
  // popup.style.display = "none";
  // overlay.style.display = "none";

  // // Clear the form
  // form.reset();
  console.log("Form submitted");
});
