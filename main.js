/* ============================================
   COMPARTE MELILLA — JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

    /* ── Scroll suave para botones de ancla ── */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    /* ── Validación básica del formulario ── */
    const form = document.querySelector('#melillaForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const razonSocial = form.querySelector('[name="razon_social"]').value.trim();
            const terminos = form.querySelector('[name="terminos"]').checked;

            if (!razonSocial) {
                alert('Por favor completa el campo Razón social.');
                return;
            }

            if (!terminos) {
                alert('Debes aceptar los términos y condiciones.');
                return;
            }

            // Todo OK — aquí se puede hacer el submit real o llamada a API
            form.submit();
        });
    }

});