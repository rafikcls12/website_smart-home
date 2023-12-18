function updateDateTime() {
  var now = new Date();
  var datetimeElement = document.getElementById("datetime");

  var options = {
    year: "numeric",
    month: "long",
    day: "numeric",
    hour: "numeric",
    minute: "numeric",
  };
  datetimeElement.textContent = now.toLocaleDateString("en-US", options);

  setTimeout(updateDateTime, 1000); // Perbarui setiap 1 detik
}

document.addEventListener("DOMContentLoaded", function () {
  updateDateTime(); // Panggil fungsi untuk pertama kali
});
