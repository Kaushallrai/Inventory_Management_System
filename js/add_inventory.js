const addInventoryButton = document.querySelector(".add");
const popup = document.querySelector(".popup");
const closeButton = document.querySelector(".popup-close-button");
const overlay = document.querySelector(".overlay");

addInventoryButton.addEventListener("click", () => {
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

  const inventoryId = document.querySelector("#inventory-id").value;
  const inventoryName = document.querySelector("#inventory-name").value;
  const location = document.querySelector("#location").value;
  const photo = document.querySelector("#photo").value;

  // Do something with the inventory data, such as adding it to a database or displaying it on the screen

  // Hide the pop-up and overlay
  popup.style.display = "none";
  overlay.style.display = "none";

  // Clear the form
  form.reset();
});
