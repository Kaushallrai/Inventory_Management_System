function addSidebarClickListeners() {
  document.addEventListener("DOMContentLoaded", () => {
    const dashboardLink = document.getElementById("dashboard-link");
    const usersLink = document.querySelector(".users-container");
    const purchaseLink = document.querySelector(".purchase-container");
    const salesLink = document.querySelector(".sales-container");
    const invoiceLink = document.querySelector(".invoice-container");
    const billLink = document.querySelector(".bill-container");
    const stakeholdersLink = document.querySelector(".stakeholders-container");
    dashboardLink.addEventListener("click", () => {
      window.location.href = "../index.html";
    });
    usersLink.addEventListener("click", () => {
      window.location.href = "../php/users.html";
    });
    inventoryLink.addEventListener("click", () => {
      window.location.href = "../php/inventories.html";
    });

    purchaseLink.addEventListener("click", () => {
      window.location.href = "purchase.html";
    });

    salesLink.addEventListener("click", () => {
      window.location.href = "sales.html";
    });

    invoiceLink.addEventListener("click", () => {
      window.location.href = "invoice.html";
    });

    billLink.addEventListener("click", () => {
      window.location.href = "bill.html";
    });

    stakeholdersLink.addEventListener("click", () => {
      window.location.href = "stakeholders.html";
    });
  });
}

addSidebarClickListeners();
