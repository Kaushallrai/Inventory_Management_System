function showLoading() {
  document.getElementById("overlay").style.display = "block";
  setTimeout(function () {
    document.getElementById("overlay").style.display = "none";
  }, 2000);
}
