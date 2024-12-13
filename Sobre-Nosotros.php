<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="./CSS/estilos-sn.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/estilos_nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar">
        <a href="./index.php">
            <img src="./assets/Logo-Nav.png" alt="Logo" class="logo"> 
        </a>
        <!-- Botón burger que aparecerá cuando la pantalla sea menor a 1200px -->
        <div class="burger-container">
            <div class="burger-menu-icon">
                <span class="burger-icon">☰</span> Menú
            </div>
        </div>

        <div class="nav-links-container">
            <ul class="nav-links">
                <li>
                <a href="sections.php?id_categoria=2">Diseño <span class="triangle"></span></a>
                    <ul class="dropdown">
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=1">Sillas de Diseño</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=6">Mesas de Diseño</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=2">Taburetes</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=7">Sillones</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=3">Sillas Wood</a></li>
                    </ul>
                </li>
                <li>
                <a href="sections.php?id_categoria=1">Oficina <span class="triangle"></span></a>
                    <ul class="dropdown">
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=8">Sillas Neumaticas</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=9">Espacios Comunes</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=10">Sillas Operativas</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=11">Sillas Ejecutivas</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=12">Sillas Gerenciales</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=5">Tandems</a></li>
                    </ul>
                <li>
                    <a href="./index.php" style="font-size: 30px;">Inicio</span></a>
                </li>
                </li>
                <li>
                <a href="productos.php?id_categoria=3&id_sub_categoria=13">Autopartes <span class="triangle"></span></a>
                    <ul class="dropdown">
                        
                    </ul>
                </li>
                <li>
                    <a href="./Sobre-Nosotros.php">Sobre Nosotros</span></a>
                </li>
                </li>
            </ul>
        </div>
        <a href="./busqueda.php" class="busqueda">
            <img src="./assets/lupa.png" alt="">
            <p>Buscar Producto</p>
        </a>
    </div>
    <!-- Menú burger que aparecerá cuando el botón sea clicado -->
    <div class="burger-nav-links-container" id="burger-nav-links-container">
        <ul class="burger-nav-links">
            <li>
                <a href="#diseño">Diseño <span class="triangle"></span></a>
                <ul class="sub-menu">
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=1">Sillas de Diseño</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=6">Mesas de Diseño</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=2">Taburetes</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=7">Sillones</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=3">Sillas Wood</a></li>
                </ul>
            </li>
            <li>
                <a href="#oficina">Oficina <span class="triangle"></span></a>
                <ul class="sub-menu">
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=8">Sillas Neumaticas</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=9">Espacios Comunes</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=10">Sillas Operativas</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=11">Sillas Ejecutivas</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=12">Sillas Gerenciales</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=5">Tandems</a></li>
                </ul>
            </li>
            <li>
                <a href="./index.php">Inicio </span></a>
            </li>
            <li>
                <a href="#cocinas">Autopartes <span class="triangle"></span></a>
                <ul class="sub-menu">
                    
                </ul>
            </li>
            <li>
                <a href="./Sobre-Nosotros.php">Sobre Nosotros </span></a>
            </li>
        </ul>
    </div>

    <script>
        const burgerMenuIcon = document.querySelector('.burger-menu-icon');
        const burgerNavLinksContainer = document.getElementById('burger-nav-links-container');
    
        // Mostrar/Ocultar el menú burger al hacer clic en el ícono
        burgerMenuIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Evita que el clic en el ícono cierre el menú inmediatamente
            burgerNavLinksContainer.classList.toggle('active');
        });
    
        // Mostrar/Ocultar submenú al hacer clic en un enlace del menú burger
        document.querySelectorAll('.burger-nav-links > li > a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.stopPropagation(); // Evita que el clic en el enlace cierre el menú inmediatamente
                const subMenu = link.nextElementSibling;
                if (subMenu && subMenu.classList.contains('sub-menu')) {
                    subMenu.classList.toggle('active');
                }
            });
        });
    
        // Cierra el menú burger si se hace clic fuera de él
        document.addEventListener('click', (e) => {
            if (!burgerNavLinksContainer.contains(e.target) && !burgerMenuIcon.contains(e.target)) {
                burgerNavLinksContainer.classList.remove('active');
            }
        });
    
        // Previene que el clic en el menú burger o en sus submenús cierren el menú
        burgerNavLinksContainer.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- Header con barra de busqueda y rutas -->
    <header>
        <li style="padding-left: 40px;"><a href="./index.php">Inicio > Sobre Nosotros</a> > </li>
    </header>
    <section class="about-section">
    <div class="container">
        <h1 class="about-title">Sobre Nosotros</h1>
        <p class="about-text">Somos una empresa con 30 años de experiencia en equipamientos para oficinas, ofreciendo muebles y diseños ejecutivos de alta calidad. Además de fabricar nuestros propios modelos, representamos otras líneas destacadas y ofrecemos todos los componentes necesarios.<br /><br />
            <strong>Utilizamos mano de obra sanjuanina para añadir valor a nuestros productos.<br /><br /></strong>
            Le invitamos a visitar nuestro salón de exposición para conocer nuestros productos y recibir asesoramiento personalizado.<br />
            <br />Atendemos desde las 9:30AM hasta las 8PM 
        </p>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <h2 class="services-title">Nuestros Servicios</h2>
        <div class="services">
            <div class="service">
                <h3 class="service-title">Venta</h3>
                <p class="service-text">Ofrecemos una amplia gama de sillas, sillones y muebles para oficinas, adaptados a tus necesidades y preferencias. Encuentra productos de alta calidad y diseño.</p>
            </div>
            <div class="service">
                <h3 class="service-title">Reparación</h3>
                <p class="service-text">Realizamos reparación y mantenimiento de sillas, sillones y muebles para asegurar que tus equipamientos permanezcan en óptimas condiciones y prolongar su vida útil.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <h2 class="contact-title">Contacto</h2>
        <div class="contact-links">
            <ul>
                <li><a href="mailto:mapolmetdb@gmail.com">Correo Electrónico</a></li>
                <li><a href="https://wa.me/542645267038?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank">WhatsApp: +54 2645267038</a></li>
                <li><a href="https://wa.me/542644392445?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank">WhatsApp: +54 2644392445</a></li>
                <li><a href="https://wa.me/54264154218697?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank">WhatsApp: +54 264218697</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100094507230448" target="_blank">Facebook</a></li>
                <li><a href="https://www.instagram.com/mapolmetequipamientos/" target="_blank">Instagram</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="image-gallery">
    <div class="container">
        <h2 class="gallery-title">Nuestras Imágenes</h2>
        <div class="gallery">
            <img src="assets/SobreNosotros/antes-despues.PNG" alt="Imagen 1">
            <img src="assets/SobreNosotros/before_after.jpg" alt="Imagen 2">
            <img src="assets/SobreNosotros/presentacion_1.jpg" alt="Imagen 3">
        </div>
    </div>
</section>


<section class="map-section">
    <div class="container">
        <h2 class="map-title">Ubicación</h2>
        <div class="map-container">
            <!-- Inserta el código del mapa de Google Maps aquí -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.5654408929727!2d-68.5471062742568!3d-31.53609325649879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96816a830db56bc9%3A0xdd779b5c5e893521!2sMaPolMet%20Equipamientos!5e0!3m2!1ses-419!2sar!4v1726521632079!5m2!1ses-419!2sar" width="100%" height="100%" style="border-radius:15px" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>


        <footer>
        <section class="contenedor-informacion">
            <div class="columna-1">
                <a href="./index.php" class="logo-empresa">
                    <img src="./assets/Logo-footer.png" alt="">
                </a>
                <p>Transformamos cada espacio en un lugar especial con muebles diseñados para brindar comodidad, estilo y durabilidad. Porque cada silla y cada mueble cuenta una historia de elegancia y confort que perdura.</p>
            </div>
            <div class="columna-2">
                <a href="https://www.facebook.com/profile.php?id=100094507230448" target="_blank" class="fila-redes">
                    <img src="./assets/facebook.png" alt="icono-facebook" class="icono-1">
                    <p>Mapolmet equipamientos</p>
                </a>
                <a href="https://www.instagram.com/mapolmetequipamientos/" target="_blank" class="fila-redes">
                    <img src="./assets/instagram.png" alt="" class="icono-2">
                    <p>MaPolMet</p>
                </a>
                <a href="https://wa.me/54264154218697?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank" class="fila-redes">
                    <img src="./assets/WhatsApp_icon.png" alt="" class="icono-whatsapp">
                    <p>264154218697</p>
                </a>
                <a href="https://wa.me/542644392445?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank" class="fila-redes">
                    <img src="./assets/WhatsApp_icon.png" alt="" class="icono-whatsapp">
                    <p>2644392445</p>
                </a>
                <a href="https://wa.me/542645267038?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank" class="fila-redes">
                    <img src="./assets/WhatsApp_icon.png" alt="" class="icono-whatsapp">
                    <p>2645267038</p>
                </a>
                <a href="https://www.google.com/maps?ll=-31.536025,-68.545443&z=15&t=h&hl=es&gl=AR&mapclient=embed&cid=15958394625635988769" target="_blank" class="fila-redes direccion">
                    <img src="./assets/marcador.png" alt="" class="icono-direccion">
                    <p>B. Rivadavia Oeste 1298</p> 
                </a>
            </div>
            <div class="columna-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.2345774780074!2d-68.54801822505067!3d-31.536020102043707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96816a830db56bc9%3A0xdd779b5c5e893521!2sMaPolMet%20Equipamientos!5e1!3m2!1ses!2sar!4v1726669512154!5m2!1ses!2sar" style="border:3;border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="contenedor-footer">
            <div class="copyright">
                &copy; 2024 Mapolmet - Todos los Derechos Reservados
            </div>
            <div class="copyright">
                Imagenes proveidas por: &copy;Rossi diseño + Oficina
            </div>
            <div class="informacion">
                <a href="./index.php">Inicio</a> | <a href="./Sobre-Nosotros.php">Quienes Somos</a>
            </div>
        </section>
    </footer>
</body>
</html>
