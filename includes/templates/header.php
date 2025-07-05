<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Resume</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <header>
            <a href="#" class="logo">LF</a>
            <div class="header-right">
                <nav>
                    <a href="index.php" class="active">Inicio</a>
                    <a href="about.php">Sobre Mí</a>
                    <a href="proyects.php">Portfolio</a>
                    <a href="contact.php">Contacto</a>
                </nav>

                <div class="dark-mode">
                    <div class="circle">
                        <ion-icon class="sun" name="sunny"></ion-icon>
                        <ion-icon class="moon" name="moon"></ion-icon>
                        <script src="./js/tema.js"></script>
                    </div>
                </div>

                <div class="language-selector">
                    <button id="lang-es" aria-label="Cambiar a Español" class="active">
                        <img src="img/espana.png" alt="Español" />
                    </button>
                    <button id="lang-en" aria-label="Switch to English">
                        <img src="img/reino-unido.png" alt="English" />
                    </button>
                    <script src="./js/idioma.js"></script>
                </div>
            </div>
        </header>