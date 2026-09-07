<?php
session_start();
$_SESSION['form_time'] = time();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z2VZW040HN"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-Z2VZW040HN');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amor a Melilla — AMORA</title>

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
    <link rel="stylesheet" href="./styles.css?v=2.0">
    <!-- reCAPTCHA v2 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <div class="page-wrapper">

        <!-- HERO -->
        <div class="hero">
            <img src="../imagenes/melilla_principal.jpg" alt="Melilla" onerror="this.style.display='none'" />
            <div class="hero-overlay">
                <div class="hero-top">
                    <div class="badge">CONVOCATORIA ABIERTA</div>
                </div>
                <img src="../imagenes/logos/ComparteMelilla.svg" alt="Comparte Melilla" class="hero-logo-title" />
                <div class="hero-logos">
                    <img src="../imagenes/logos/TTF_Logo2.svg" alt="Ticket to Fun" class="logo-ttf" onerror="this.style.display='none'" />
                    <img src="../imagenes/logos/GeneraLogo2.svg" alt="Fundación Genera ITM" onerror="this.style.display='none'" />
                </div>
            </div>
        </div>

        <!-- SECCIÓN BLANCA -->
        <div class="section-white">
            <p>
                Forma parte de la red de emprendedores que
                comparten las experiencias turísticas, culturales y
                gastronómicas que Melilla tiene&nbsp;para&nbsp;compartir.
            </p><br>
            <a href="#formulario" class="btn-main">Registra tu proyecto</a>
        </div>

        <!-- SECCIÓN MORADA -->
        <div class="section-purple">
            <p>¿Eres un guía turístico con experiencia o tienes una tour&nbsp;operadora&nbsp;en&nbsp;funcionamiento?</p>
            <p>¿Te gustaría profesionalizar una actividad cultural, gastronómica,&nbsp;artesanal&nbsp;o&nbsp;de&nbsp;naturaleza?</p>
            <p>¿Te gustaría causar un impacto positivo en la comunidad y compartir con cruceristas las&nbsp;maravillas&nbsp;de&nbsp;tu&nbsp;ciudad?</p>
            <p class="title-oportunidad">¡Esta convocatoria <br>es tu oportunidad!</p>
            <a href="#formulario" class="btn-main">Participa</a>
        </div>

        <!-- CARDS -->
        <div class="cards-wrap">
            <div class="card">
                <img src="../imagenes/footer/melilla_baile.jpg" alt="Comparte cultura" onerror="this.style.display='none'" />
                <span class="card-label">Comparte cultura</span>
            </div>
            <div class="card">
                <img src="../imagenes/footer/te-moruno2.jpg" alt="Comparte comunidad" onerror="this.style.display='none'" />
                <span class="card-label">Comparte comunidad</span>
            </div>
            <div class="card">
                <img src="../imagenes/footer/faro_melilla.jpg" alt="Comparte Melilla" onerror="this.style.display='none'" />
                <span class="card-label">Comparte Melilla</span>
            </div>
        </div>

        <!-- CÓMO PARTICIPAR -->
        <div class="section-how">
            <div class="section-how-inner">
                <h2>Como participar</h2>
                <ol class="list-none" style="list-style-type: none !important;">
                    <li>1. Conoce el proyecto, descarga y lee atentamente&nbsp;la&nbsp;convocatoria.</li>
                    <li>2. Regístrate e ingresa la información solicitada en el formulario&nbsp;correspondiente.</li>
                </ol>
                <p class="note text-center">
                    Ticket to Fun y Fundación Genera ITM, revisarán todas las propuestas. Si la tuya es
                    preseleccionada, te contactaremos para conocernos mejor y profundizar en los detalles.
                </p>
                <div class="btn-wrap">
                    <a href="../convocatoriaComparteMelilla.pdf" class="btn-main" target="_blank" download>
                        Descarga la convocatoria
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#93d500" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- FOTO PAREJA -->
        <div class="photo-pareja">
            <img src="../imagenes/imagen-12b.jpg" alt="Viajeros en Melilla" onerror="this.style.display='none'" />
        </div>

        <!-- SOBRE NOSOTROS -->
        <div class="section-about">
            <div class="section-about-inner">
                <p>Somos <strong>Ticket to Fun</strong>, comercializadora de tours con más de 20 años diseñando y operando experiencias turísticas alrededor del mundo.</p>
                <p>Nuestra misión es unir fuerzas con las experiencias locales y las autoridades para que el destino crezca de forma profesional y sostenible.</p>
                <p>Esta convocatoria, es en colaboración con <strong>Fundación Genera ITM</strong>, una organización sin fines de lucro que busca el desarrollo del turismo sostenible a través de la prosperidad económica de la comunidad de Melilla.</p>
                <p class="cta">¡No te quedes sin participar en esta iniciativa!</p>
            </div>
        </div>

        <!-- FORMULARIO AMORA -->
        <div id="formulario" class="section-form">
            <div class="form-card">
                <h3>Registro de persona proveedora AMORA</h3>
                <p class="form-subtitle">Completa el formulario para iniciar tu proceso de inscripción.</p>

                <form id="amoraForm" method="POST" action="submit.php" enctype="multipart/form-data" class="space-y-6">

                    <!-- ══ 1. DATOS GENERALES ══ -->
                    <div class="form-section-title">1. Datos generales de persona artesana</div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Modalidad <span class="text-red-400">*</span></label>
                        <div class="flex flex-wrap gap-3">
                            <label class="flex gap-2 items-center"><input type="radio" name="modalidad" class="focus:ring-[#93d500]" value="Individual" required><span>Individual</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="modalidad" class="focus:ring-[#93d500]" value="Colectivo"><span>Colectivo</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="modalidad" class="focus:ring-[#93d500]" value="Taller familiar"><span>Taller familiar</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="modalidad" class="focus:ring-[#93d500]" value="Cooperativa"><span>Cooperativa</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="modalidad" class="focus:ring-[#93d500]" value="Organización"><span>Organización</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Nombre completo <span class="text-red-400">*</span></label>
                        <input type="text" name="nombre_completo" placeholder="Nombre completo" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Nombre del grupo</label>
                        <input type="text" name="nombre_grupo" placeholder="Nombre del grupo (si aplica)" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Teléfono <span class="text-red-400">*</span></label>
                        <input type="tel" name="telefono" placeholder="Teléfono" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Correo electrónico <span class="text-red-400">*</span></label>
                        <input type="email" name="email" placeholder="correo@ejemplo.com" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Contacto preferido</label>
                        <div class="flex flex-wrap gap-3">
                            <label class="flex gap-2 items-center"><input type="radio" name="contacto_preferido" class="focus:ring-[#93d500]" value="Llamada"><span>Llamada</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="contacto_preferido" class="focus:ring-[#93d500]" value="WhatsApp"><span>WhatsApp</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="contacto_preferido" class="focus:ring-[#93d500]" value="Correo"><span>Correo</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Ciudad <span class="text-red-400">*</span></label>
                        <input type="text" name="ciudad" placeholder="Ciudad" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Localidad / comunidad</label>
                        <input type="text" name="localidad" placeholder="Localidad o comunidad" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Domicilio / referencia</label>
                        <input type="text" name="domicilio" placeholder="Domicilio o referencia" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Número de personas que participan en la elaboración de las piezas artesanales</label>
                        <input type="text" name="num_personas" placeholder="Ej: 3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">¿Quiénes participan y qué actividades realizan?</label>
                        <textarea name="quienes_participan" rows="4" placeholder="Describe quiénes participan y sus actividades..." class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <!-- ══ 2. PERFIL ARTESANAL ══ -->
                    <div class="form-section-title">2. Perfil artesanal</div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Años realizando la actividad artesanal</label>
                        <input type="text" name="anos_actividad" placeholder="Ej: 10 años" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Principales técnicas artesanales</label>
                        <textarea name="tecnicas" rows="3" placeholder="Describe las técnicas artesanales que utilizas..." class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Tipos de productos que elabora</label>
                        <textarea name="tipos_productos" rows="4" placeholder="Describe los productos que elaboras..." class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">¿Dónde elabora los productos artesanales?</label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="lugar_elaboracion[]" class="focus:ring-[#93d500]" value="Elabora en casa"><span>Elabora en casa</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="lugar_elaboracion[]" class="focus:ring-[#93d500]" value="Cuenta con taller propio"><span>Cuenta con taller propio</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="lugar_elaboracion[]" class="focus:ring-[#93d500]" value="Utiliza taller comunitario o colectivo"><span>Utiliza taller comunitario o colectivo</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="lugar_elaboracion[]" class="focus:ring-[#93d500]" value="Utiliza instalaciones de una organización"><span>Utiliza instalaciones de una organización</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="lugar_elaboracion[]" class="focus:ring-[#93d500]" value="Otro espacio"><span>Otro espacio</span></label>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Describe el proceso de elaboración</label>
                        <textarea name="proceso_elaboracion" rows="4" placeholder="Describe cómo elaboras tus productos..." class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">¿Qué partes del proceso se realizan principalmente a mano?</label>
                        <textarea name="partes_mano" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Herramientas, maquinaria auxiliar o apoyos externos que utiliza</label>
                        <textarea name="herramientas" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Relación de las artesanías con la comunidad o territorio de origen</label>
                        <textarea name="relacion_comunidad" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <!-- ══ 3. MATERIALES Y PROCESOS RESPONSABLES ══ -->
                    <div class="form-section-title">3. Materiales y procesos responsables</div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Principales materiales utilizados</label>
                        <textarea name="materiales" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Describe el origen de los materiales</label>
                        <textarea name="origen_materiales" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Tipo de materiales</label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="tipo_materiales[]" class="focus:ring-[#93d500]" value="Materiales locales"><span>Utiliza materiales locales</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="tipo_materiales[]" class="focus:ring-[#93d500]" value="Materiales reciclados o reutilizados"><span>Utiliza materiales reciclados o reutilizados</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="tipo_materiales[]" class="focus:ring-[#93d500]" value="Materiales naturales"><span>Utiliza materiales naturales</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="tipo_materiales[]" class="focus:ring-[#93d500]" value="Materiales comerciales nuevos"><span>Utiliza materiales comerciales nuevos</span></label>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Especies silvestres</label>
                        <div class="flex gap-4 flex-wrap">
                            <label class="flex gap-2 items-center"><input type="radio" name="especies_silvestres" class="focus:ring-[#93d500]" value="No"><span>No</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="especies_silvestres" class="focus:ring-[#93d500]" value="Sí"><span>Sí</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="especies_silvestres" class="focus:ring-[#93d500]" value="No sabe"><span>No sabe</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Sustancias especiales</label>
                        <div class="flex gap-4 flex-wrap">
                            <label class="flex gap-2 items-center"><input type="radio" name="sustancias_especiales" class="focus:ring-[#93d500]" value="No"><span>No</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="sustancias_especiales" class="focus:ring-[#93d500]" value="Sí"><span>Sí</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="sustancias_especiales" class="focus:ring-[#93d500]" value="No sabe"><span>No sabe</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Plástico de un solo uso</label>
                        <div class="flex gap-4 flex-wrap">
                            <label class="flex gap-2 items-center"><input type="radio" name="plastico_uso_unico" class="focus:ring-[#93d500]" value="No"><span>No</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="plastico_uso_unico" class="focus:ring-[#93d500]" value="Producto"><span>Producto</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="plastico_uso_unico" class="focus:ring-[#93d500]" value="Empaque"><span>Empaque</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="plastico_uso_unico" class="focus:ring-[#93d500]" value="Ambos"><span>Ambos</span></label>
                        </div>
                    </div>

                    <!-- ══ 4. PRESENTACIÓN DE PRODUCTOS ══ -->
                    <div class="form-section-title">4. Presentación de productos</div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Catálogo / fotografías</label>
                        <div class="flex flex-wrap gap-3">
                            <label class="flex gap-2 items-center"><input type="radio" name="catalogo" class="focus:ring-[#93d500]" value="Anexo"><span>Anexo</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="catalogo" class="focus:ring-[#93d500]" value="Enlace"><span>Enlace</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="catalogo" class="focus:ring-[#93d500]" value="Entrega posterior"><span>Entrega posterior</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="catalogo" class="focus:ring-[#93d500]" value="Requiere apoyo"><span>Requiere apoyo</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Enlace o referencia del catálogo</label>
                        <input type="text" name="enlace_catalogo" placeholder="https://... o descripción" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <!-- Catálogo PDF Upload -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Catálogo en PDF <span class="text-slate-400 font-normal">(opcional · máx. 8 MB)</span></label>
                        <div class="dropzone" id="pdfDropzone">
                            <input type="file" name="catalogo_pdf" id="catalogoPdf" accept=".pdf,application/pdf" class="dropzone-input">
                            <div class="dropzone-idle" id="dropzoneIdle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke="#b98fd4" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16v-8m0 0-3 3m3-3 3 3M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1" />
                                </svg>
                                <p class="dropzone-text">Arrastra tu PDF aquí</p>
                                <p class="dropzone-sub">o <span class="dropzone-link">haz clic para seleccionar</span></p>
                            </div>
                            <div class="dropzone-selected" id="dropzoneSelected">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#b98fd4" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span class="dropzone-filename" id="dropzoneFileName">archivo.pdf</span>
                                <button type="button" class="dropzone-clear" id="dropzoneClear" title="Quitar archivo">✕</button>
                            </div>
                        </div>
                        <p class="dropzone-error text-red-500 text-xs" id="dropzoneError" style="display:none">Solo se aceptan archivos PDF de hasta 8 MB.</p>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Rango de precios (Euros)</label>
                        <div class="flex flex-wrap gap-3">
                            <label class="flex gap-2 items-center"><input type="radio" name="rango_precios" class="focus:ring-[#93d500]" value="10 o menos"><span>≤ €10</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="rango_precios" class="focus:ring-[#93d500]" value="11-16"><span>€11 – €16</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="rango_precios" class="focus:ring-[#93d500]" value="17-25"><span>€17 – €25</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="rango_precios" class="focus:ring-[#93d500]" value="26-50"><span>€26 – €50</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="rango_precios" class="focus:ring-[#93d500]" value="Mas de 50"><span>> €50</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Capacidad mensual</label>
                        <input type="text" name="capacidad_mensual" placeholder="Ej: 50 piezas/mes" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Tiempo de pedido</label>
                        <input type="text" name="tiempo_pedido" placeholder="Ej: 2 semanas" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Producción estacional</label>
                        <div class="flex gap-4 flex-wrap">
                            <label class="flex gap-2 items-center"><input type="radio" name="produccion_estacional" class="focus:ring-[#93d500]" value="No"><span>No</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="produccion_estacional" class="focus:ring-[#93d500]" value="Sí"><span>Sí</span></label>
                        </div>
                        <input type="text" name="estacional_cuando" placeholder="¿Cuándo? (si aplica)" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Empaque</label>
                        <div class="flex flex-wrap gap-3">
                            <label class="flex gap-2 items-center"><input type="radio" name="empaque" class="focus:ring-[#93d500]" value="Sin plástico"><span>Sin plástico</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="empaque" class="focus:ring-[#93d500]" value="Con plástico"><span>Con plástico</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="empaque" class="focus:ring-[#93d500]" value="Parcial"><span>Parcial</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="empaque" class="focus:ring-[#93d500]" value="No tiene"><span>No tiene</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">¿Cómo calcula actualmente sus precios?</label>
                        <textarea name="calculo_precios" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Limitaciones o condiciones de producción que AMORA debe considerar</label>
                        <textarea name="limitaciones_produccion" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none"></textarea>
                    </div>

                    <!-- ══ 6. EXPERIENCIA COMERCIAL Y FORTALECIMIENTO ══ -->
                    <div class="form-section-title">6. Experiencia comercial y fortalecimiento</div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Canales actuales de venta</label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Venta directa"><span>Venta directa</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Mercados o bazares"><span>Mercados o bazares</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Tiendas físicas"><span>Tiendas físicas</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Redes sociales"><span>Redes sociales</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Tienda en línea"><span>Tienda en línea</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Mayoreo"><span>Mayoreo</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="canales_venta[]" class="focus:ring-[#93d500]" value="Actualmente no vende"><span>Actualmente no vende</span></label>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">¿Puede emitir factura?</label>
                        <div class="flex flex-wrap gap-3">
                            <label class="flex gap-2 items-center"><input type="radio" name="factura" class="focus:ring-[#93d500]" value="Sí"><span>Sí</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="factura" class="focus:ring-[#93d500]" value="No"><span>No</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="factura" class="focus:ring-[#93d500]" value="En proceso"><span>En proceso</span></label>
                            <label class="flex gap-2 items-center"><input type="radio" name="factura" class="focus:ring-[#93d500]" value="Requiere orientación"><span>Requiere orientación</span></label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label class="text-sm font-semibold">Temas de fortalecimiento de interés</label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Costos y precios"><span>Costos y precios</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Calidad y acabados"><span>Calidad y acabados</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Desarrollo de productos"><span>Desarrollo de productos</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Empaque y presentación"><span>Empaque y presentación</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Organización de la producción"><span>Organización de la producción</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Ventas y atención a clientes"><span>Ventas y atención a clientes</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Fotografía y catálogo"><span>Fotografía y catálogo</span></label>
                        <label class="flex gap-2 items-center"><input type="checkbox" name="fortalecimiento[]" class="focus:ring-[#93d500]" value="Facturación y administración"><span>Facturación y administración</span></label>
                    </div>

                    <!-- ══ 5. DECLARACIONES Y AUTORIZACIÓN ══ -->
                    <div class="form-section-title">5. Declaraciones y autorización</div>

                    <div class="flex flex-col gap-4">
                        <label class="flex gap-3 items-start">
                            <input type="checkbox" name="declaracion_1" class="focus:ring-[#93d500] mt-1 flex-shrink-0" value="1" required>
                            <span class="text-sm leading-relaxed">Declaro que la información proporcionada es verdadera y que puedo acreditar la autoría y el proceso de elaboración de los productos presentados.</span>
                        </label>
                        <label class="flex gap-3 items-start">
                            <input type="checkbox" name="declaracion_2" class="focus:ring-[#93d500] mt-1 flex-shrink-0" value="1" required>
                            <span class="text-sm leading-relaxed">Reconozco que el registro y la aprobación no garantizan una compra inmediata ni una cantidad mínima de pedidos.</span>
                        </label>
                        <label class="flex gap-3 items-start">
                            <input type="checkbox" name="declaracion_3" class="focus:ring-[#93d500] mt-1 flex-shrink-0" value="1" required>
                            <span class="text-sm leading-relaxed">Autorizo a AMORA a utilizar mis datos para contactarme, evaluar mi posible incorporación, dar seguimiento y comunicar oportunidades relacionadas con el programa.</span>
                        </label>
                        <label class="flex gap-3 items-start">
                            <input type="checkbox" name="declaracion_4" class="focus:ring-[#93d500] mt-1 flex-shrink-0" value="1" required>
                            <span class="text-sm leading-relaxed">Acepto participar en el proceso de fortalecimiento de AMORA si soy dado de alta como persona proveedora.</span>
                        </label>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Nombre completo (firma) <span class="text-red-400">*</span></label>
                        <input type="text" name="firma_nombre" placeholder="Nombre completo como firma" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Fecha <span class="text-red-400">*</span></label>
                        <input type="date" name="fecha_firma" required class="w-full px-4 py-3 rounded-lg border border-slate-300 bg-transparent focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <!-- Honeypot anti-bot -->
                    <input type="text" name="website_hp" style="display:none">

                    <?php if (isset($_GET['error']) && $_GET['error'] === 'captcha'): ?>
                        <div class="text-red-500 text-sm text-center mb-4">
                            Por favor, completa el captcha antes de enviar.
                        </div>
                    <?php endif; ?>

                    <div class="flex justify-center">
                        <div class="g-recaptcha" data-sitekey="6LdkO5AsAAAAAJpYBhTpZXZZn2ZcRuG3mvJ64kyc"></div>
                    </div>

                    <button class="btn-main block mx-auto" type="submit">
                        <span>Enviar registro</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <img src="../imagenes/logos/ComparteMelilla.svg" alt="Comparte Melilla" class="footer-logo-title" />
            <p class="footer-copy">© 2026 Amor a Melilla. Todos los derechos reservados.</p>
            <div class="footer-logos">
                <a href="https://www.instagram.com/tickettofun_" target="_blank">
                    <img src="../imagenes/logos/TTF_Logo-blanco.svg" alt="Ticket to Fun" onerror="this.style.display='none'" />
                </a>
                <img src="../imagenes/logos/GeneraLogo2.svg" alt="Genera ITM" onerror="this.style.display='none'" />
            </div>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="./main.js"></script>

</body>

</html>
