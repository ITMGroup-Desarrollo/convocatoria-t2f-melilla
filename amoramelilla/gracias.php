<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gracias — Amora Melilla</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@400;600;700;800;900&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="./styles.css?v=4.1">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .page-wrapper {
            width: 100%;
            min-height: 100vh;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
        }

        .card-gracias {
            text-align: center;
            max-width: 480px;
            width: 100%;
            margin: 0 auto;
        }

        .logo-heart {
            width: 130px;
            height: auto;
            margin: 0 auto 28px auto;
            display: block;
        }

        .title-gracias {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #E4257D;
            line-height: 1.15;
            margin-bottom: 28px;
        }

        .title-gracias .line-1,
        .title-gracias .line-2 {
            display: block;
            font-size: 28px;
            font-weight: 700;
        }

        .title-gracias .line-melilla {
            display: block;
            font-family: 'Playfair Display', Georgia, serif;
            font-weight: 900;
            font-size: 44px;
            margin-top: 2px;
        }

        .subtitle-gracias {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
            margin-bottom: 32px;
        }

        .btn-volver-pink {
            background: #E4257D;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 18px;
            border-radius: 9999px;
            padding: 12px 48px;
            display: inline-block;
            text-decoration: none;
            transition: transform 0.15s ease, opacity 0.15s ease;
            box-shadow: 0 4px 14px rgba(228, 37, 125, 0.25);
        }

        .btn-volver-pink:hover {
            opacity: 0.92;
            transform: translateY(-1px);
        }

        @media (min-width: 768px) {
            .logo-heart {
                width: 140px;
                margin-bottom: 32px;
            }

            .title-gracias .line-1,
            .title-gracias .line-2 {
                font-size: 32px;
            }

            .title-gracias .line-melilla {
                font-size: 48px;
            }

            .subtitle-gracias {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="card-gracias">

            <!-- Logo Corazón Naranja -->
            <img src="imagenes/Logo Amora Melilla.svg" alt="Amora Melilla" class="logo-heart" />

            <!-- Título -->
            <h1 class="title-gracias">
                <span class="line-1">Gracias</span>
                <span class="line-2">por compartir</span>
                <span class="line-melilla">Melilla</span>
            </h1>

            <!-- Subtítulo -->
            <p class="subtitle-gracias">
                La información ya está en tu correo<br>
                **No olvides revisar tu carpeta de spam o no deseados**<br>
                ¡Escucharás noticias de nosotros pronto!
            </p>

            <!-- Botón Volver -->
            <a href="./index.php" class="btn-volver-pink">Volver</a>

        </div>
    </div>
</body>

</html>
