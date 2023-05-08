const addProductsButton = document.querySelector("#add-products-button");
const popup = document.querySelector(".popup");
const closeButton = document.querySelector(".popup-close-button");
const overlay = document.querySelector(".overlay");

addProductsButton.addEventListener("click", () => {
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

  const supplierName = document.querySelector("#supplier-name").value;
  const photo = document.querySelector("#photo").value;
  const number = document.querySelector("#number").value;
  const productId = document.querySelector("#product-id").value;
  const productName = document.querySelector("#product-name").value;
  const quantity = document.querySelector("#quantity").value;
  const price = document.querySelector("#price").value;
  const inventoryName = document.querySelector("#inventory-name").value;
  const description = document.querySelector("#description").value;

  // Do something with the product data, such as adding it to a list or sending it to a server using AJAX

  // Hide the pop-up and overlay
  popup.style.display = "none";
  overlay.style.display = "none";

  // Clear the form
  form.reset();
});
