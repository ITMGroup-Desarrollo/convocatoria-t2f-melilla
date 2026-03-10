<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Comparte Melilla</title>


    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: "#144bb8" },
                    fontFamily: {
                        heading: ["Montserrat", "sans-serif"],
                        body: ["Open Sans", "sans-serif"],
                    },
                },
            },
        }
    </script>


    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet" />

    <!-- Estilos propios -->
    <link rel="stylesheet" href="./styles.css" />
</head>

<body>

    <div class="page-wrapper">

        <!-- HERO COMPLETO -->
        <div class="hero">

            <img src="./imagenes/melilla_principal.jpg" alt="Melilla" onerror="this.style.display='none'" />
            <div class="hero-overlay">

                <!--badge dentro del hero -->
                <div class="hero-top">
                    <div class="badge">CONVOCATORIA ABIERTA</div>
                </div>

                <!-- Comparte Melilla -->
                <img src="./imagenes/logos/ComparteMelilla.svg" alt="Comparte Melilla" class="hero-logo-title" />

                <!-- Logos bajos -->
                <div class="hero-logos">
                    <img src="./imagenes/logos/TTF_Logo3.png" alt="Ticket to Fun" class="logo-ttf"
                        onerror="this.style.display='none'" />
                    <img src="./imagenes/logos/GeneraLogo.svg" alt="Fundación Genera ITM"
                        onerror="this.style.display='none'" />


                </div>

            </div>
        </div>

        <!-- ④ SECCIÓN BLANCA -->
        <div class="section-white">
            <p>
                Forma parte de la red de emprendedores que comparten las experiencias turísticas, culturales y
                gastronómicas que Melilla tiene para el mundo.
            </p><br>
            <a href="#formulario" class="btn-main">Descarga la convocatoria</a>
        </div>

        <!-- ⑤ SECCIÓN MORADA -->
        <div class="section-purple">
            <p>¿Eres un guía turístico con experiencia o tienes una tour operadora en funcionamiento?</p>
            <p>¿Te gustaría profesionalizar una actividad cultural, gastronómica, artesanal o de naturaleza?</p>
            <p>¿Te gustaría causar un impacto positivo en la comunidad y compartir con cruceristas las maravillas de
                tu
                ciudad?</p>
            <p class="title-oportunidad">¡Esta convocatoria<br>es tu oportunidad!</p>
            <a href="#formulario" class="btn-main">Participa</a>
        </div>

        <!--  CARDS -->
        <div class="cards-wrap">

            <div class="card">
                <!-- 📁 /images/cultura.jpg -->
                <img src="./imagenes/footer/melilla_baile.jpg" alt="Comparte cultura"
                    onerror="this.style.display='none'" />
                <span class="card-label">Comparte cultura</span>
            </div>

            <div class="card">
                <!-- 📁 /images/comunidad.jpg -->
                <img src="./imagenes/footer/te-moruno2.jpg" alt="Comparte comunidad"
                    onerror="this.style.display='none'" />
                <span class="card-label">Comparte comunidad</span>
            </div>

            <div class="card">
                <!-- 📁 /images/melilla-faro.jpg -->
                <img src="./imagenes/footer/faro_melilla.jpg" alt="Comparte Melilla"
                    onerror="this.style.display='none'" />
                <span class="card-label">Comparte Melilla</span>
            </div>

        </div>

        <!--  CÓMO PARTICIPAR -->
        <div class="section-how">
            <div class="section-how-inner">
                <h2>Como participar</h2>
                <ol>
                    <li>Conoce el proyecto, descarga y lee atentamente la convocatoria.</li>
                    <li>Regístrate e ingresa la información solicitada en el formulario correspondiente, donde
                        deberás
                        adjuntar la ficha de tu propuesta.</li>
                </ol>
                <p class="note">
                    Ticket to Fun y Fundación Genera ITM, revisarán todas las propuestas. Si la tuya es
                    preseleccionada,
                    te contactaremos para conocernos mejor y profundizar en los detalles.
                </p>
                <div class="btn-wrap">
                    <a href="#" class="btn-main">
                        Descarga la convocatoria
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                            stroke="#c8e600" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- ⑧ FOTO PAREJA -->
        <div class="photo-pareja">
            <!-- 📁 /images/pareja.jpg -->
            <img src="./imagenes/imagen-12.jpg" alt="Viajeros en Melilla" onerror="this.style.display='none'" />
        </div>

        <!-- ⑨ SOBRE NOSOTROS -->
        <div class="section-about">
            <div class="section-about-inner">
                <p>Somos <strong>Ticket to Fun</strong>, tour operadora con más de 20 años diseñando y operando
                    experiencias turísticas alrededor del mundo.</p>
                <p>Nuestra misión es unir fuerzas con las experiencias locales y las autoridades para que el destino
                    crezca de forma profesional y sostenible.</p>
                <p>Esta convocatoria, es en colaboración con <strong>Fundación Genera</strong>, una organización sin
                    fines de lucro que busca el desarrollo del turismo sostenible a través de la prosperidad
                    económica
                    de la comunidad de Melilla.</p>
                <p class="cta">No te quedes sin participar<br>en esta iniciativa</p>
            </div>
        </div>

        <!-- ⑩ FORMULARIO -->
        <div id="formulario" class="section-form">
            <div class="form-card">
                <h3>Registro de Aspirantes</h3>
                <p class="form-subtitle">Completa el formulario para iniciar tu proceso de inscripción.</p>

                <form id="melillaForm" method="POST" action="submit.php">

                    <div class="form-group">
                        <label>Razón social</label>
                        <input type="text" name="razon_social" placeholder="Value" />
                    </div>

                    <div class="form-group">
                        <label>¿Cuentas con guías certificados en España?</label>
                        <input type="text" name="guias_cert" placeholder="Value" />
                    </div>

                    <div class="form-group">
                        <label>Categoría de tours</label>
                        <input type="text" name="categoria_tours" placeholder="Value" />
                    </div>

                    <div class="form-group">
                        <label>Breve resumen empresa y datos relevantes</label>
                        <input type="text" name="resumen" placeholder="Value" />
                    </div>

                    <div class="form-group">
                        <label>Rango de precios y tipos de tours ofrecidos</label>
                        <input type="text" name="precios" placeholder="Value" />
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="terminos" name="terminos" required />
                        <label for="terminos">
                            Acepto los términos y condiciones<br>
                            <a href="#">Read our T&Cs</a>
                        </label>
                    </div>

                    <button type="submit" class="btn-enviar">Enviar</button>

                </form>
            </div>
        </div>

        <!-- ⑪ FOOTER -->
        <div class="footer">
            <img src="./imagenes/logos/ComparteMelilla.svg" alt="Comparte Melilla" class="footer-logo-title" />
            <p class="footer-copy">© 2026 Comparte Melilla. Todos los derechos reservados.</p>
            <div class="footer-logos">
                <img src="./imagenes/logos/TTF_Logo.svg" alt="Ticket to Fun" onerror="this.style.display='none'" />
                <img src="./imagenes/logos/GeneraLogo.svg" alt="Genera ITM" onerror="this.style.display='none'" />
            </div>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="./main.js"></script>

</body>

</html>