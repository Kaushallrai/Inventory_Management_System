class IHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<div class="header">
        <div class="left-section">
          <i class="fa fa-search" aria-hidden="true"></i>
          <input type="text" placeholder="Search" />
        </div>
        <div class="right-section">
          <div class="refresh-button-container">
            <i class="fa fa-refresh" aria-hidden="true"></i>
            <button class="refresh">Refresh</button>
          </div>

          <div class="notifications-icon-container" current-count="8">
            <i class="fa-regular fa-bell"></i>
          </div>

          <div class="date-icon-container">
            <i class="fa-regular fa-calendar-check"></i>
          </div>
          <div class="settings-icon-container">
            <span class="material-symbols-outlined"> settings </span>
          </div>
        </div>
      </div>`;
  }
}
customElements.define("i-header", IHeader);

class ISidebar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<div class="sidebar">
        <div class="logo-container">
          <h1><img src="./icons/inventory.png" />Inventario</h1>
        </div>
        <div class="top-header"><p>Menu</p></div>

        <div class="sidebar-section-container">
          <div class="upper-section">
            <div class="dashboard-container" tabindex="0" id="dashboard-link">
              <span class="material-symbols-outlined"> home </span>
              <p>Dashboard</p>
            </div>

            <div class="users-container" tabindex="0">
              <i class="fa-regular fa-user"></i>
              <p>Users</p>
            </div>
          </div>

          <div class="middle-section">
            <div class="mid-header"><p>Market</p></div>
            <div class="inventory-container" tabindex="0">
              <span class="material-symbols-outlined"> deployed_code </span>
              <p>Inventory</p>
            </div>

            <div class="purchase-container" tabindex="0">
              <i class="fa-solid fa-cart-shopping"></i>
              <p>Purchase</p>
            </div>

            <div class="sales-container" tabindex="0">
              <i class="fa-solid fa-money-bill-trend-up"></i>
              <p>Sales</p>
            </div>

            <div class="invoice-container" tabindex="0">
              <i class="fa-solid fa-file-invoice"></i>
              <p>Invoice</p>
            </div>

            <div class="bill-container" tabindex="0">
              <i class="fa-solid fa-receipt"></i>
              <p>Bill</p>
            </div>

            <div class="stakeholders-container" tabindex="0">
              <span class="material-symbols-outlined"> groups </span>
              <p>Stakeholders</p>
            </div>
          </div>
          <div class="lower-section">
            <div class="profile-pic">
              <img src="./profile/kaushal.jpg" alt="" />
            </div>
            <div class="profile-info">
              <h4>Kaushal Rai</h4>
              <p>Admin</p>
            </div>
            <div class="profile-settings">
              <i
                class="fa-solid fa-ellipsis-vertical"
                style="cursor: pointer"
              ></i>
            </div>
          </div>
        </div>
      </div>`;
  }
}
customElements.define("i-sidebar", ISidebar);

const dashboardLink = document.querySelector("#dashboard-link");
dashboardLink.classList.add("is-focused");
