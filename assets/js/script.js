// Sticky Navbar
window.addEventListener("scroll", function() {
  document.querySelector(".navbar").classList.toggle("sticky", window.scrollY > 0);
});

// Simple form alert
function submitForm() {
  alert("Form submitted successfully");
}


