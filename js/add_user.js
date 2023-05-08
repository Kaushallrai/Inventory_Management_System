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

  const userId = document.querySelector("#user-id").value;
  const userName = document.querySelector("#user-name").value;
  const email = document.querySelector("#email-address").value;
  const phone = document.querySelector("#phone-number").value;
  const address = document.querySelector("#address").value;
  const photo = document.querySelector("#photo").value;
  const role = document.querySelector("#user-role").value;

  // Do something with the user data, such as adding it to a database or displaying it on the screen

  // Hide the pop-up and overlay
  popup.style.display = "none";
  overlay.style.display = "none";

  // Clear the form
  form.reset();
});
