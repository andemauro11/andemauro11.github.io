<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "login/index.php";
            </script>
        ';
        session_destroy();
        die();
        
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imagenes/logo.jpg">
    <title>Indexp</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>

    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">Streaming</a>

            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="indexp.html">Inicio</a></li>
                        <li><a href="#">Acerca de</a>
                          <ul>
                            <li><a href="pagina1.html">Que es?</a></li>
                            <li><a href="pagina2.html">Ventajas</a></li>
                            <li><a href="pagina3.html">Impacto</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Contenido</a>
                          <ul>
                            <li><a href="pagina4.html">Series y Peliculas</a></li>
                            <li><a href="pagina5.html">Musica</a></li>
                            <li><a href="pagina6.html">Deportes</a></li>
                            <li><a href="pagina7.html">Live</a></li>
                            <li><a href="pagina8.html">Anime</a></li>
                            <li><a href="pagina9.html">Educacion</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Info</a>
                          <ul>
                            <li><a href="pagina10.html">Consejos</a></li>
                            <li><a href="pagina11.html">Compatibilidad</a></li>
                            <li><a href="pagina12.html">Novedades</a></li>
                            <li><a href="pagina13.html">Encuesta</a></li>
                            <li><a href="pagina14.html">Contactenos</a></li>
                          </ul>
                        
                        </li>
                          <li><a href="#">Planes</a>
                            <ul>
                                <li><a href="planes1.html">Series y Peliculas</a></li>
                                <li><a href="planes2.html">Musica</a></li>
                                <li><a href="planes3.html">Deportes</a></li>
                                <li><a href="planes4.html">Live</a></li>
                                <li><a href="planes5.html">Anime</a></li>
                                <li><a href="planes6.html">Educacion</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Dispositivos</a>
                            <ul>
                              <li><a href="dispositivos1.html">Celulares</a></li>
                              <li><a href="dispositivos2.html">Tablets</a></li>
                              <li><a href="dispositivos3.html">Computadores</a></li>
                              <li><a href="dispositivos4.html">TV</a></li>
                              <li><a href="dispositivos5.html">Chromecast</a></li>
                              <li><a href="dispositivos6.html">Video Beams</a></li>
                            </ul>
                          </li>
                        <li><a href="#">Java Script</a>
                            <ul>
                                <li><a href="ejercicio1.html">Ejercicio1</a></li>
                                <li><a href="ejercicio2.html">Ejercicio2</a></li>
                                <li><a href="ejercicio3.html">Ejercicio3</a></li>
                                <li><a href="ejercicio4.html">Ejercicio4</a></li>
                                <li><a href="ejercicio5.html">Ejercicio5</a></li>
                                <li><a href="ejercicio6.html">Ejercicio6</a></li>
                                <li><a href="ejercicio7.html">Ejercicio7</a></li>
                                <li><a href="ejercicio8.html">Ejercicio8</a></li>
                                <li><a href="ejercicio9.html">Ejercicio9</a></li>
                                <li><a href="ejercicio10.html">Ejercicio10</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="imagenes/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="login">
                    <a href="login/php/cerrar_sesion.php"><img src="imagenes/cerrar.png"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-img">
                <img src="imagenes/right.png" alt="">
            </div>
            <div class="header-txt">
                <h1>Ofertas Especiales</h1>
                <p>estrena los mejores planes de Streaming</p>
            </div>

        </div>


    </header>

   <br><br>

    <section class="blog container">

        <div class="blog-1">
            <img src="imagenes/blog1.jpg" alt="">
            <h3>Mejores Servicios de Streaming en 2023</h3>
            <p>En 2023, servicios de streaming como Netflix, 
                Disney+ y HBO Max liderarán la industria. 
                Netflix se destaca por su amplio catálogo y 
                contenido original. Disney+ ofrece franquicias 
                icónicas y HBO Max brinda contenido de alta calidad. 
                Cada uno tiene sus propias ventajas, como la calidad 
                4K y precios competitivos.</p>
        </div>

        <div class="blog-1">
            <img src="imagenes/blog2.jpg" alt="">
            <h3>Mejorar la Calidad de Transmisión en Streaming?</h3>
            <p>Para una experiencia de streaming sin problemas, 
                verifica tu velocidad de internet y utiliza una 
                conexión por cable si es posible. Opta por 
                dispositivos actualizados y mantén tus aplicaciones 
                al día. Si experimenta problemas, cierre otras aplicaciones 
                y dispositivos en la red.</p>
        </div>

        <div class="blog-1">
            <img src="imagenes/blog3.jpg" alt="">
            <h3>Tendencias de Streaming para el Futuro</h3>
            <p> streaming en 2023 trae emocionantes tendencias, 
                como la tecnología 8K para imágenes nítidas, 
                experiencias interactivas y más contenido en 
                vivo. Las plataformas se adaptan para ofrecer 
                experiencias aún más envolventes en el futuro.
            </p>
        </div>

    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="codetheworld-io">
                <br>
                <br>
                <a href="https://twitter.com" style="--color: #00acee">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://instagram.com" style="--color: #E1306C">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://tiktok.com" style="--color: #FF0050">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="https://facebook.com" style="--color: #3b5998">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://whatsapp.com" style="--color: #25D366">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="https://youtube.com" style="--color: #c4302b">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>

            <div class="link">
                <h3>Ayuda</h3>
                <ul>
                    <li><a href="pagina14.html">Info</a></li>
                    <li><a href="pagina10.html">Consejos</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Politica</h3>
                <ul>
                    <li><a href="https://protecciondatos-lopd.com/empresas/politica-de-privacidad-web/#:~:text=La%20pol%C3%ADtica%20de%20privacidad%20de%20una%20p%C3%A1gina%20web%20es%20un,se%20realizar%C3%A1%20de%20los%20mismos.">Privacidad</a></li>
                    <li><a href="https://vpnoverview.com/es/desbloquear/el-streaming/mejores-servicios-de-streaming/">Servios</a></li>
                </ul>
            </div>

        </div>
    </footer>


    <script src="scrip.js"></script>
</body>
</html>