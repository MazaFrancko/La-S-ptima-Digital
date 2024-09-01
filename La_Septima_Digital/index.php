<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Noticias</title>
    <link rel="stylesheet" href="../La_Septima_Digital/Archivos-css/estilos.css">
    <link rel="stylesheet" href="../La_Septima_Digital/Archivos-css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav>
        <button id="menu-toggle" class="menu-toggle"><i class="bi bi-list"></i></button>
        <div id="side-menu" class="side-menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#about">Sobre Nosotros</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#portfolio">Portafolio</a></li>
                <div class="search">
                    <input type="text" class="search__input" placeholder="Type your text">
                    <button class="search__button">
                        <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                </li>
            </ul> 
        </div>
        </div>
        <div class="logo-container">
            <img src="Archivos-css/Img/Iconos/La_Septima_Digital-removebg.png" alt="Logo del sitio" class="logo">
        </div>
        <div class="weather-time">
            <div class="weather" id="weather">Cargando clima...</div>
            <div class="time" id="time">Cargando hora...</div>
            <div class="live-container">
                <img src="Archivos-css/Img/Iconos/mic.png" alt="Icon" class="live-image">
                <span class="live-text">En Vivo</span>
            </div>
        </div>
        <div class="side-menu" id="side-menu">
            <ul>
                <li><a href="#">Ejemplo</a></li>
            </ul>
        </div>
    </nav>
<!-- Menu -->
<ul class="menu-horizontal">
            <li><a href="../La_Septima_Digital\Archivos-php\Paginas-php\Acciones_Administrador.php">Inicio</a></li>
            <li>
                <a href="#">Cursos</a>
                <ul class="menu-vertical">
                    <li><a href="#">Html</a></li>
                    <li><a href="#">Css</a></li>
                    <li><a href="#">Javascript</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Inscripción</a>
                <ul class="menu-vertical">
                    <li><a href="#">Anual</a></li>
                    <li><a href="#">Mensual</a></li>
                </ul>
            </li>
            <li><a href="#">Contacto</a></li>
            <form class="form">
                <label for="search">
                    <input required="" autocomplete="off" placeholder="Buscar Noticia..." id="search" type="text">
                    <div class="icon">
                        <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-on">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-off">
                            <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <button type="reset" class="close-btn">
                        <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </label>
            </form>
        </ul>

    <main>
 
    <?php
        include("../La_Septima_Digital\Archivos-php\Conexiones\conexion.php");
        $query = "SELECT * FROM noticias_principales";
        $resultado = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {
    ?>
   
        <main class="contenedor-principal">
        <!-- Bloque General -->
        <section class="bloque-general">
             <!-- Tarjeta de Noticias Principal -->
             <div class="tarjeta-principal">
                <a href="#" class="enlace-noticia">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="Imagen de la noticia">
                <h2><?php echo $row["Titulo"]; ?></h2>
                    <div class="imagen-principal"></div>
                    <p><?php echo $row["Resumen"]; ?></p>
                </a>
            </div>
<?php } ?>

    </main>

    <footer>
        <p>&copy; 2024 CineGuía360. Todos los derechos reservados.</p>
        <p><a href="#">Política de Privacidad</a> | <a href="#">Términos de Uso</a></p>
    </footer>
</body>
</html>
