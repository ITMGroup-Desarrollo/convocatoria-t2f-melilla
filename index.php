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
                    <img src="./imagenes/logos/TTF_Logo2.svg" alt="Ticket to Fun" class="logo-ttf"
                        onerror="this.style.display='none'" />
                    <img src="./imagenes/logos/GeneraLogo2.svg" alt="Fundación Genera ITM"
                        onerror="this.style.display='none'" />


                </div>

            </div>
        </div>

        <!-- ④ SECCIÓN BLANCA -->
        <div class="section-white">
            <p>
                Forma parte de la red de emprendedores que comparten las experiencias turísticas, culturales y
                gastronómicas que Melilla tiene para compartir.
            </p><br>
            <a href="#formulario" class="btn-main">Registra tu proyecto</a>
        </div>

        <!-- ⑤ SECCIÓN MORADA -->
        <div class="section-purple">
            <p>¿Eres un guía turístico con experiencia o tienes una tour operadora en funcionamiento?</p>
            <p>¿Te gustaría profesionalizar una actividad cultural, gastronómica, artesanal o de naturaleza?</p>
            <p>¿Te gustaría causar un impacto positivo en la comunidad y compartir con cruceristas las maravillas de
                tu
                ciudad?</p>
            <p class="title-oportunidad">¡Esta convocatoria <br>es tu oportunidad!</p>
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
                <p class="note text-center">
                    Ticket to Fun y Fundación Genera ITM, revisarán todas las propuestas. Si la tuya es
                    preseleccionada,
                    te contactaremos para conocernos mejor y profundizar en los detalles.
                </p>
                <div class="btn-wrap">
                    <a href="prueba.pdf" class = "btn-main" target="_blank" download>
                        Descarga la convocatoria
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                            stroke="#93d500" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- ⑧ FOTO PAREJA -->
        <div class="photo-pareja">
            <!-- 📁 /images/pareja.jpg -->
            <img src="./imagenes/imagen-12b.jpg" alt="Viajeros en Melilla" onerror="this.style.display='none'" />
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
                <p class="cta">No te quedes sin participar en esta iniciativa</p>
            </div>
        </div>

        <!-- ⑩ FORMULARIO -->
        <div id="formulario" class="section-form">
            <div class="form-card">
                <h3>Registro de Aspirantes</h3>
                <p class="form-subtitle">Completa el formulario para iniciar tu proceso de inscripción.</p>

                <form id="melillaForm" method="POST" action="submit.php" class="space-y-6">
                        <!-- 0 Emprendedor/empresa -->
                        <div class="flex flex-col gap-3">
                            <label class="text-sm font-semibold  ">
                                Are you an entrepreneur or a company?  / ¿Eres un emprendedor o una empresa?
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="entity" class="focus:ring-[#93d500]" value="emprendedor">
                                <span class=" ">Entrepreneur / Emprendedor</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="entity" class="focus:ring-[#93d500]" value="empresa">
                                <span class="">Company / Empresa</span>
                            </label>

                        </div>
                        <!-- 1 Company Name -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Company Name / Razón Social
                            </label>
                            <input type="text" name="company" placeholder="Company name"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 2 Main Contact -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Main Contact Name / Contacto Principal
                            </label>
                            <input type="text" name="contact_name" placeholder="Contact name"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 3 Tax ID -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Tax ID / CIF-NIF
                            </label>
                            <input type="text" name="tax_id" placeholder="Tax ID"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 4 Address -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Address in Spain / Dirección en España
                            </label>
                            <input type="text" name="address" placeholder="Address"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 5 Email -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Email
                            </label>
                            <input type="email" name="email" placeholder="email@company.com"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 6 Website -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Company Website / Website de la empresa
                            </label>
                            <input type="url" name="website" placeholder="https://"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 7 phone -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Phone / teléfono
                            </label>
                            <input type="tel" name="phone" placeholder="+34..."
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 8 Social Media -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Social Media / Redes Sociales
                            </label>
                            <input type="text" name="social" placeholder="Instagram, Facebook, LinkedIn..."
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 9 Years of experience -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Years of experience in tours / Años experiencia tours
                            </label>
                            <input type="number" name="years_exp" placeholder="Years"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none ">
                        </div>


                        <!-- 10 Experience in Melilla -->
                        <div class="flex flex-col gap-3">
                            <label class="text-sm font-semibold  ">
                                Do you have experience operating tours in Melilla? / ¿Tienen experiencia operando tours
                                en Melilla?
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="melilla" class="focus:ring-[#93d500]" value="yes">
                                <span class="">Yes / Si</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="melilla" class="focus:ring-[#93d500]" value="no">
                                <span class="">No</span>
                            </label>

                        </div>


                        <!-- 11 Tour Details -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                If yes, include details / Incluye detalles
                            </label>
                            <textarea name="melilla_details" rows="4"
                                placeholder="Describe tours conducted in Melilla..."
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none "></textarea>
                        </div>


                        <!-- 12 Certified guides -->
                        <div class="flex flex-col gap-3">
                            <label class="text-sm font-semibold  ">
                                Do you have certified guides registered in Spain? / ¿Cuentas con guías certificados en
                                España?
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="guides" class="focus:ring-[#93d500]" value="yes">
                                <span class="">Yes / Si</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="guides" class="focus:ring-[#93d500]" value="no">
                                <span class="">No</span>
                            </label>

                        </div>


                        <!-- 13 Tour Categories -->
                        <div class="flex flex-col gap-3">
                            <label class="text-sm font-semibold  ">
                                Select Tour Categories
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_categories[]" class="focus:ring-[#93d500]" value="Urban Tours">
                                <span class="">Urban Tours (2-3h)</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_categories[]" class="focus:ring-[#93d500]" value="Food Tours">
                                <span class="">Food Tours (3-4h)</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_categories[]" class="focus:ring-[#93d500]" value="Adventure Tours">
                                <span class="">Adventure Tours (3-5h)</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_categories[]" class="focus:ring-[#93d500]" value="Premium Private">
                                <span class="">Premium / Private (2-5h)</span>
                            </label>
                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_categories[]" class="focus:ring-[#93d500]" value="Thematic Tours">
                                <span class="">Thematic Tours</span>
                            </label>

                        </div>


                        <!-- 14 Tour Capacity -->
                        <div class="flex flex-col gap-3">
                            <label class="text-sm font-semibold  ">
                                Tour Capacity you can work with / Capacidad por Tour
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_capacity[]" class="focus:ring-[#93d500]" value="Up to 10 pax">
                                <span class="">Up to 10 pax</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_capacity[]" class="focus:ring-[#93d500]" value="Up to 25 pax">
                                <span class="">Up to 25 pax</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_capacity[]" class="focus:ring-[#93d500]" value="Up to 50 pax">
                                <span class="">Up to 50 pax</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_capacity[]" class="focus:ring-[#93d500]" value="Up to 100 pax">
                                <span class="">Up to 100 pax</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="checkbox" name="tour_capacity[]" class="focus:ring-[#93d500]" value="More than 100 pax">
                                <span class="">More than 100 pax</span>
                            </label>

                        </div>


                        <!-- 15 Company Summary -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Brief Company Summary & Key Info / Breve resumen empresa y datos relevantes
                            </label>
                            <textarea name="company_summary" rows="4"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none "></textarea>
                        </div>


                        <!-- 16 Bring guides -->
                        <div class="flex flex-col gap-3">
                            <label class="text-sm font-semibold  ">
                                Do you have the ability to bring your own guides to Melilla? / ¿Tienen capacidad de
                                llevar sus guías a Melilla?
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="bring_guides" class="focus:ring-[#93d500]" value="yes">
                                <span class="">Yes / Si</span>
                            </label>

                            <label class="flex gap-2">
                                <input type="radio" name="bring_guides" class="focus:ring-[#93d500]" value="no">
                                <span class="">No</span>
                            </label>

                        </div>


                        <!-- 17 Price Range -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold  ">
                                Price Range & Tour Types Offered / Rango de precios y tipos de tours ofrecidos
                            </label>
                            <textarea name="price_range" rows="4"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300  bg-transparent focus:ring-2 focus:ring-primary outline-none "></textarea>
                        </div>


                        <!-- Submit -->
                        
                        <button
                            class="btn-main block mx-auto"
                            type="submit">

                            <span>Send / Enviar</span>
                            <span class="material-symbols-outlined"></span>

                        </button>
                </form>
            </div>
        </div>

        <!-- ⑪ FOOTER -->
        <div class="footer">
            <img src="./imagenes/logos/ComparteMelilla.svg" alt="Comparte Melilla" class="footer-logo-title" />
            <p class="footer-copy">© 2026 Comparte Melilla. Todos los derechos reservados.</p>
            <div class="footer-logos">
                <a href="https://www.instagram.com/tickettofun_" target="_blank">
                    <img src="./imagenes/logos/TTF_Logo-blanco.svg" alt="Ticket to Fun"
                        onerror="this.style.display='none'" />
                </a>
                <img src="./imagenes/logos/GeneraLogo2.svg" alt="Genera ITM" onerror="this.style.display='none'" />
            </div>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="./main.js"></script>

</body>

</html>