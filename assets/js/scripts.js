document.addEventListener("keydown", function (e) {
  if (e.ctrlKey || e.metaKey) {
    e.preventDefault();
  }
});
let currentDate = new Date();
let currentYear = currentDate.getFullYear();
currentYearEl = document.getElementById("current-year")
currentYearEl.textContent = currentYear
