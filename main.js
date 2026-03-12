/* ============================================
   COMPARTE MELILLA — JavaScript
   ============================================ */

document.addEventListener("DOMContentLoaded", function () {
  /* ── Scroll suave para botones de ancla ── */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth" });
      }
    });
  });
});
