// import Chart from "./node_modules/chart.js/auto";

const ctx = document.getElementById("chart").getContext("2d");

let chartType = "line";

// Generate random data for sales and purchase
const salesData = Array.from(
  { length: 12 },
  () => Math.floor(Math.random() * 50) + 50
);
const purchaseData = Array.from(
  { length: 12 },
  () => Math.floor(Math.random() * 50) + 40
);

let myChart = new Chart(ctx, {
  type: chartType,
  data: {
    labels: [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ],
    datasets: [
      {
        label: "Sales",
        data: salesData,
        borderColor: "rgb(255, 159, 64)",
        fill: false,
      },
      {
        label: "Purchase",
        data: purchaseData,
        borderColor: "rgb(75, 192, 192)",
        fill: false,
      },
    ],
  },
  options: {},
});

const flipChartButton = document.getElementById("flip-chart");

flipChartButton.addEventListener("click", () => {
  if (chartType === "line") {
    chartType = "bar";
    flipChartButton.textContent = "Line Chart";

    myChart.destroy();
    myChart = new Chart(ctx, {
      type: chartType,
      data: {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ],
        datasets: [
          {
            label: "Sales",
            data: salesData,
            backgroundColor: "rgb(255, 159, 64)",
            borderColor: "rgb(255, 159, 64)",
            borderWidth: 1,
            fill: false,
          },
          {
            label: "Purchase",
            data: purchaseData,
            backgroundColor: "rgb(75, 192, 192)",
            borderColor: "rgb(75, 192, 192)",
            borderWidth: 1,
            fill: false,
          },
        ],
      },
      options: {},
    });
  } else {
    chartType = "line";
    flipChartButton.textContent = "Bar Chart";

    myChart.destroy();
    myChart = new Chart(ctx, {
      type: chartType,
      data: {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ],
        datasets: [
          {
            label: "Sales",
            data: salesData,
            borderColor: "rgb(255, 159, 64)",
            fill: false,
          },
          {
            label: "Purchase",
            data: purchaseData,
            borderColor: "rgb(75, 192, 192)",
            fill: false,
          },
        ],
      },
      options: {},
    });
  }
});
