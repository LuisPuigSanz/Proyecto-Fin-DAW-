 <!-- Insertamos barra nav -->
 <?php
    include_once("./php/nav.php");
    ?>


 <script>
     $(document).ready(function() {
         $("#loquieroDes").click(function() {
            $("#serviciosSeleccion option[value=1]").attr("selected",true);
         });
         $("#loquieroPub").click(function() {
            $("#serviciosSeleccion option[value=2]").attr("selected",true);
         });
         $("#loquieroRed").click(function() {
            $("#serviciosSeleccion option[value=3]").attr("selected",true);
         });
         $("#loquieroDis").click(function() {
            $("#serviciosSeleccion option[value=4]").attr("selected",true);
         });
         $("#loquieroSeo").click(function() {
            $("#serviciosSeleccion option[value=5]").attr("selected",true);
         });
         $("#loquieroFot").click(function() {
            $("#serviciosSeleccion option[value=6]").attr("selected",true);
         });

     });
 </script>

 <body>
     <!------------------ BANNER ------------------------------>
     <div class="hero vh-100 d-flex align-items-center" id="home">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 mx-auto text-center">
                     <h1 class="display-4 text-white">Crea tu web, sólida y fiable.</h1>
                     <p class="text-white my-3">Lleva tu negocio al siguiente nivel, te ayudamos a dar el paso hacia la digitalización.</p>
                     <a href="#servicios" class="btn me-2 btn-primary">Empezar</a>
                     <a href="#proyectos" class="btn btn-outline-light">Nuestros Proyectos</a>
                 </div>
             </div>
         </div>
     </div><!-- //BANNER -->

     <div class="aviso-cookies" id="aviso-cookies">
        <img class="galleta" src=".//img/cookie.svg" alt="Galleta">
        <h3 class="titulo-cookies">Cookies</h3>
        <p class="parrafo-cookies">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
        <button class="boton-cookies" id="boton-cookies">De acuerdo</button>
        <a href="../media/sabermas.php">Aviso de cookies</a>
     </div>

     <!------------------------------ SERVICIOS -------------------------------->
     <section id="servicios">
         <div class="container">
             <div class="row mb-5">
                 <div class="col-md-8 mx-auto text-center">
                     <h6 class="text-primary">SERVICIOS</h6>
                     <h1>Nuestros Servicios</h1>
                     <p>Solo te ofrecemos aquello en lo que somos expertos, tu satisfacción es lo más importante.</p>
                 </div>
             </div>
             <div class="row g-4">
                 <div class="col-lg-4 col-sm-6">
                     <div class="service card-effect bounceInUp">
                         <div class="iconbox">
                             <i class='bx bx-window-alt bx-flip-horizontal'></i>
                         </div>
                         <h5 class="mt-4 mb-2">Desarrollo Web</h5>
                         <p>Creamos la página web que tu negocio necesita. Además, todos nuestros desarrollos son Responsive Design (se adapta a todos los dispositivos móviles, tabletas y ordenadores). <br><br><br><br></p>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="service card-effect bounceInUp">
                         <div class="iconbox">
                             <i class='bx bx-image-alt'></i>
                         </div>
                         <h5 class="mt-4 mb-2">Publicidad Online</h5>
                         <p>
                             Optimizamos tus campañas para que no gastes más de lo necesario, y orientamos tus anuncios a los públicos que tu negocio necesita.
                             Para conseguirlo, trabajamos junto a tu empresa, diseñando la estrategia, los anuncios y la audiencia. <br><br><br>
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="service card-effect bounceInUp">
                         <div class="iconbox">
                             <i class='bx bxl-facebook'></i>
                         </div>
                         <h5 class="mt-4 mb-2">Redes Sociales</h5>
                         <p>

                             Con nuestros distintos niveles de gestión de redes, podemos ofrecerte un plan a medida para mejorar tus ventas, engagement, branding y rentabilizar las redes sociales en las que deseas tener presencia.

                             Dispondrás de un informe mensual para que puedas ver el crecimiento de tu negocio desde el minuto uno.
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="service card-effect bounceInUp">
                         <div class="iconbox">
                             <i class='bx bx-image'></i>
                         </div>
                         <h5 class="mt-4 mb-2">Diseño Gráfico</h5>
                         <p>Si buscas un diseño gráfico de calidad dentro de tu presupuesto entonces llegaste
                             al lugar indicado. Siempre nos aseguramos de realizar un trabajo de calidad hasta que el cliente esté satisfecho.</p>
                         <br>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="service card-effect bounceInUp">
                         <div class="iconbox">
                             <i class='bx bxl-google'></i>
                         </div>
                         <h5 class="mt-4 mb-2">SEO</h5>
                         <p>El enfoque principal de este servicio es conectar su sitio, con un amplio espectro de enlaces diversificados que muestran un interés natural y REAL de diferentes sitios a su sitio monetizado.</p>
                         <br>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="service card-effect bounceInUp">
                         <div class="iconbox">
                             <i class='bx bxs-camera'></i>
                         </div>
                         <h5 class="mt-4 mb-2">Fotografía de Productos</h5>
                         <p>
                             Ya sea que estés buscando imágenes para actualizar su Instagram o sitio web, o mejorar las fotos de su listado de Amazon, no dudes en contactarnos en cualquier momento y haremos todo lo posible para brindarte los mejores resultados posibles.
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- SERVICIOS -->




     <!------------------------- DESTACADOS ----------------------------->
     <section class="row w-100 py-0 bg-light" id="destacados">
         <div class="col-lg-6 col-img"></div>
         <div class="col-lg-6 py-5">
             <div class="container">
                 <div class="row">
                     <div class="col-md-10 offset-md-1">
                         <h6 class="text-primary">Por qué elegirnos</h6>
                         <h1>La mejor solución para tu empresa</h1>
                         <p>Estamos convencidos de que somos tu mejor opción
                             <i class='bx bx-wink-smile bx-tada' style='color:#efd92b'></i>
                         </p>

                         <div class="feature d-flex mt-5">
                             <div class="iconbox me-3">
                                 <i class='bx bxs-comment-edit'></i>
                             </div>
                             <div>
                                 <h5>Orientación al cliente</h5>
                                 <p>Escuchamos a nuestros clientes y mantenemos con ellos una relación cercana, ágil y resolutiva.</p>
                             </div>
                         </div>
                         <div class="feature d-flex">
                             <div class="iconbox me-3">
                                 <i class='bx bxs-user-circle'></i>
                             </div>
                             <div>
                                 <h5>Nuestra misión</h5>
                                 <p>Optimizamos tus campañas para que no gastes más de lo necesario, y orientamos tus anuncios a los públicos que tu negocio necesita. </p>
                             </div>
                         </div>
                         <div class="feature d-flex">
                             <div class="iconbox me-3">
                                 <i class='bx bxs-download'></i>
                             </div>
                             <div>
                                 <h5>Tenemos claro el enfoque</h5>
                                 <p>Si no te ayudamos a conseguir tus objetivos, no estamos haciendo bien nuestro trabajo.</p>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </section><!-- DESTACADOS -->



     <!--------------------------------------- PROYECTOS ----------------------------------------->
     <section id="proyectos">
         <div class="container-fluid">
             <div class="row mb-5">
                 <div class="col-md-8 mx-auto text-center">
                     <h6 class="text-primary">PROYECTOS</h6>
                     <h1>Nuestros proyectos más recientes</h1>
                     <p>Echa un vistazo a nuestros proyectos más recientes que hemos creado y colaborado.</p>
                 </div>
             </div>
             <div class="row g-3">
                 <div class="col-lg-4 col-sm-6">
                     <div class="project">
                         <img src="img/pro1.jpg" alt="">
                         <div class="overlay">
                             <div>
                                 <h4 class="text-white">Desarrollo de software</h4>
                                 <h6 class="text-white">En curso</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="project">
                         <img src="img/exclusivas.png" alt="">
                         <div class="overlay">
                             <div>
                                 <a href="https://www.exclusivasdelbebe.com/" target="_blank">
                                     <h4 class="text-white">Visita Exclusivas del bebé</h4>
                                 </a>
                                 <h6 class="text-white">Web Desarrollada</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="project">
                         <img src="img/infocosta.png" alt="">
                         <div class="overlay">
                             <div>
                                 <a href="https://www.infocostablanca.com/es/" target="_blank">
                                     <h4 class="text-white">InfoCostaBlanca.com</h4>
                                 </a>
                                 <h6 class="text-white">Diseño y desarrollo web</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="project">
                         <img src="img/pro4.jpg" alt="">
                         <div class="overlay">
                             <div>
                                 <h4 class="text-white">Community management</h4>
                                 <h6 class="text-white">Redes Sociales</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="project">
                         <img src="img/pro6.jpg" alt="">
                         <div class="overlay">
                             <div>
                                 <h4 class="text-white">Marketing Online</h4>
                                 <h6 class="text-white">Publicidad</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="project">
                         <img src="img/pro2.jpg" alt="">
                         <div class="overlay">
                             <div>
                                 <h4 class="text-white">Fotografía</h4>
                                 <h6 class="text-white">Fotografía de productos</h6>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- PROYECTO -->



     <!------------------------------ SLIDER IMAGENES -------------------------------- -->
     <section>
         <!-- estilos -->
         <style>
             .mySlides1,
             .mySlides2 {
                 display: none
             }

             img {
                 vertical-align: middle;
             }

             /* Slideshow container */
             .slideshow-container {
                 width: 80%;
                 max-width: 1000px;
                 position: relative;
                 margin: auto;
             }

             /* botones */
             .prev,
             .next {
                 cursor: pointer;
                 position: absolute;
                 top: 50%;
                 width: auto;
                 padding: 16px;
                 margin-top: -22px;
                 color: white;
                 font-weight: bold;
                 font-size: 18px;
                 transition: 0.6s ease;
                 border-radius: 0 3px 3px 0;
                 user-select: none;
             }

             /* posicion del botón next */
             .next {
                 right: 0;
                 border-radius: 3px 0 0 3px;
             }

             /* Hover para las flechitas */
             .prev:hover,
             .next:hover {
                 background-color: #f1f1f1;
                 color: black;
             }
         </style>


         <!-- Slideshow container -->

         <div>
             <div class="container-fluid">
                 <div class="col-md-8 mx-auto text-center">
                     <h1>Ultimos diseños de nuestro equipo</h1>
                     <p>Nuestros proyectos más destacado.</p>
                 </div>
                 <div class="slideshow-container row g-3">
                     <div class="mySlides1">
                         <img src="./img/p3.jpg" style="width:100%; max-height:500px;">
                     </div>

                     <div class="mySlides1">
                         <img src="./img/p2.jpg" style="width:100%; max-height:500px;">
                     </div>

                     <div class="mySlides1">
                         <img src="./img/pro2.jpg" style="width:100%; max-height:500px;">
                     </div>

                     <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                     <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>

                     <!-- script -->
                     <script>
                         let slideIndex = [1, 1];
                         let slideId = ["mySlides1", "mySlides2"]
                         showSlides(1, 0);
                         showSlides(1, 1);

                         function plusSlides(n, no) {
                             showSlides(slideIndex[no] += n, no);
                         }

                         function showSlides(n, no) {
                             let i;
                             let x = document.getElementsByClassName(slideId[no]);
                             if (n > x.length) {
                                 slideIndex[no] = 1
                             }
                             if (n < 1) {
                                 slideIndex[no] = x.length
                             }
                             for (i = 0; i < x.length; i++) {
                                 x[i].style.display = "none";
                             }
                             x[slideIndex[no] - 1].style.display = "block";
                         }
                     </script>
                 </div>
             </div>
         </div>



     </section>

     <!------------------------------------------------- PRECIOS ------------------------------------------->
     <section id="precios" class="bg-light">
         <div class="container">
             <div class="row mb-5">
                 <div class="col-md-8 mx-auto text-center">
                     <h6 class="text-primary">PRECIOS</h6>
                     <h1>Nuestro precio justo y simple</h1>
                     <p>Te ayudamos a conseguir, a través de la definición e implementación de una estrategia de marketing digital, el servicio que más se ajuste a las necesidades de tu negocio.</p>
                 </div>
             </div>
             <div class="row g-4">
                 <div class="col-lg-4 col-sm-6">
                     <div class="pricing card-effect text-center">
                         <h6>Desarrollo Web</h6>
                         <h1>399€</h1>
                         <hr>
                         <ul class="list-unstyled mb-4">
                             <li><i class='bx bxs-check-circle'></i>
                                 Soporte Premium </li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Diseño de tu web</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Catálogo landing page</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Tienda digital</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Responsive design</li>
                         </ul>
                         <a href="#contacto" id="loquieroDes"><button class="btn btn-primary ms-lg-3">Lo quiero</button></a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="pricing card-effect text-center">
                         <h6>Publicidad Online</h6>
                         <h1>199€</h1>
                         <hr>
                         <ul class="list-unstyled mb-4">
                             <li><i class='bx bxs-check-circle'></i>
                                 Soporte Premium </li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Estrategia de marketing</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Optimizamos tus campañas</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Investigación del público objetivo</li>
                             <li><i class='bx bxs-check-circle'></i>Creación de contenido</li>
                         </ul>
                         <a href="#contacto" id="loquieroPub"><button class="btn btn-primary ms-lg-3">Lo quiero</button></a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="pricing card-effect text-center">
                         <h6>Redes Sociales</h6>
                         <h1>249€</h1>
                         <hr>
                         <ul class="list-unstyled mb-4">
                             <li><i class='bx bxs-check-circle'></i>
                                 Soporte Premium </li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Personalización 100%</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Anuncios y afiliados</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Perfil usuario</li>
                             <li><i class='bx bxs-check-circle'></i>Administración del Dashboard</li>
                         </ul>
                         <a href="#contacto" id="loquieroRed"><button class="btn btn-primary ms-lg-3">Lo quiero</button></a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="pricing card-effect text-center">
                         <h6>Diseño Gráfico</h6>
                         <h1>20€/hora</h1>
                         <hr>
                         <ul class="list-unstyled mb-4">
                             <li><i class='bx bxs-check-circle'></i>
                                 Soporte Premium </li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Logo/Trazado Logo</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Vector tracing</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Productos Infográficos</li>
                             <li><i class='bx bxs-check-circle'></i>Banners</li>
                         </ul>
                         <a href="#contacto" id="loquieroDis"><button class="btn btn-primary ms-lg-3">Lo quiero</button></a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="pricing card-effect text-center">
                         <h6>SEO</h6>
                         <h1>74€</h1>
                         <hr>
                         <ul class="list-unstyled mb-4">
                             <li><i class='bx bxs-check-circle'></i>
                                 Soporte Premium </li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Estrategia fuera de página</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Análisis de retroenlaces</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Participación en 1 foro</li>
                             <li><i class='bx bxs-check-circle'></i>Análisis de retroenlaces</li>
                         </ul>
                         <a href="#contacto" id="loquieroSeo"><button class="btn btn-primary ms-lg-3">Lo quiero</button></a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-sm-6">
                     <div class="pricing card-effect text-center">
                         <h6>Fotografía de Productos</h6>
                         <h1>99€</h1>
                         <hr>
                         <ul class="list-unstyled mb-4">
                             <li><i class='bx bxs-check-circle'></i>
                                 Soporte Premium </li>
                             <li><i class='bx bxs-check-circle'></i>
                                 5 foto por producto</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 2 productos</li>
                             <li><i class='bx bxs-check-circle'></i>
                                 Puesta en escena de estilo de vida</li>
                             <li><i class='bx bxs-check-circle'></i>Preparación del producto</li>
                         </ul>
                         <a href="#contacto" id="loquieroFot"><button class="btn btn-primary ms-lg-3">Lo quiero</button></a>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- PRECIOS -->

     <!------------------------------------------- EQUIPO --------------------------------------------->
     <section id="equipo">
         <div class="container">
             <div class="row mb-5">
                 <div class="col-md-8 mx-auto text-center">
                     <h6 class="text-primary">EQUIPO</h6>
                     <h1>Conoce a nuestro equipo</h1>
                     <p>Contamos con un talento comprometido y emprendedor. Promovemos un entorno de trabajo basado en la igualdad de oportunidades, la diversidad y la inclusión, e impulsamos formas de trabajo que faciliten el equilibrio entre la vida personal y la profesional.</p>
                 </div>
             </div>


             <div class="row text-center g-4">
                 <!-- luis puig -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="team-member card-effect">
                         <img src="./img/equipo/luis.png" alt="">
                         <h5 class="mb-0 mt-4">Luis Puig</h5>
                         <p>Web Developer y creador de Kreatics</p>
                         <div class="social-icons">
                             <a href="#"><i class='bx bxl-facebook'></i></a>
                             <a href="#"><i class='bx bxl-twitter'></i></a>
                             <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                         </div>
                     </div>
                 </div>
                 <!-- María Pérez -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="team-member card-effect">
                         <img src="./img/equipo/maria2.jpg" alt="">
                         <h5 class="mb-0 mt-4">María Pérez</h5>
                         <p>Java Developer y Wordpress web manager</p>
                         <div class="social-icons">
                             <a href="#"><i class='bx bxl-facebook'></i></a>
                             <a href="#"><i class='bx bxl-twitter'></i></a>
                             <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                         </div>
                     </div>
                 </div>
                 <!-- Joaquín Sevilla -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="team-member card-effect">
                         <img src="./img/equipo/joa.jpeg" alt="">
                         <h5 class="mb-0 mt-4">Joaquín Sevilla</h5>
                         <p>SEO Developer y community manager</p>
                         <div class="social-icons">
                             <a href="#"><i class='bx bxl-facebook'></i></a>
                             <a href="#"><i class='bx bxl-twitter'></i></a>
                             <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                         </div>
                     </div>
                 </div>
                 <!-- Gloria Moreno -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="team-member card-effect">
                         <img src="./img/equipo/gloria.jpeg" alt="">
                         <h5 class="mb-0 mt-4">Gloria Moreno</h5>
                         <p>Fotografía de productos y Marketing Online</p>
                         <div class="social-icons">
                             <a href="#"><i class='bx bxl-facebook'></i></a>
                             <a href="#"><i class='bx bxl-twitter'></i></a>
                             <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- EQUIPO -->

     <!------------------------------------------- BLOG ------------------------------------------------->
     <section id="blog" class="bg-light">
         <div class="container">
             <div class="row mb-5">
                 <div class="col-md-8 mx-auto text-center">
                     <h6 class="text-primary">BLOG</h6>
                     <h1>Últimas novedades en nuestro Blog</h1>
                     <p>Visita nuestro blog y podrás enterarte de las últimas noticias de actualidad.</p>
                 </div>
             </div>
             <div class="row g-4">
                 <div class="col-md-4">
                     <div class="blog-post card-effect">
                         <img src="img/blog1.jpg" alt="">
                         <h5 class="mt-4"><a href="./media/tecnologia.php">Tecnología</a></h5>
                         <p>Entérate de los últimos avances están causando impacto en el mundo de la tecnología.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="blog-post card-effect">
                         <img src="img/blog2.jpg" alt="">
                         <h5 class="mt-4"><a href="./media/actualidad.php">Actualidad</a></h5>
                         <p>Últimas tendencias en las redes sociales y el mundo del "influencer". ¿Sabías esto? <br><br></p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="blog-post card-effect">
                         <img src="img/blog3.jpg" alt="">
                         <h5 class="mt-4"><a href="./media/negocio.php">Negocio</a></h5>
                         <p>¿Quieres saber cuales son los negocios en auge en España este año? Descubre los negocios que están triunfando en 2022.</p>
                     </div>
                 </div>
             </div>

         </div>
     </section><!-- BLOG -->

     <!--------------------------- CONTACTO --------------------------->
     <section id="contacto">
         <div class="container">

             <div class="row mb-5">
                 <div class="col-md-8 mx-auto text-center">
                     <h6 class="text-primary">CONTACTO</h6>
                     <h1>Contacta con nosotros</h1>
                     <p>No dudes en escribirnos para cualquier consulta. Nuestro equipo de profesionales se pondrá en contacto contigo respondiendo a tus necesidades, sin compromiso.</p>
                 </div>
             </div>

             <div class="col-md-5 mx-auto text-center tablaFormulario">


                 <!-- <table id="tablaFormulario ">
                     <tr>
                         <td><span class="subgrupoFormulario"><input type="checkbox" value="Desarrollo Web" id="campo1" name="campo1">&nbsp;&nbsp;&nbsp; <label for="campo1">Desarrollo Web</label></span>
                             <span class="subgrupoFormulario"><input type="checkbox" value="Publicidad Online" id="campo2" name="campo2">&nbsp;&nbsp;&nbsp; <label for="campo2">Publicidad Online</label></span>
                             <span class="subgrupoFormulario"><input type="checkbox" value="Redes Sociales" id="campo3" name="campo3"> &nbsp;&nbsp;&nbsp;<label for="campo3">Redes Sociales</label></span>
                         </td>
                         <td>
                             <span class="subgrupoFormulario"><input type="checkbox" value="Diseño Grafico" id="campo4" name="campo4">&nbsp;&nbsp;&nbsp; <label for="campo4">Diseño Gráfico</label></span>
                             <span class="subgrupoFormulario"><input type="checkbox" value="SEO" id="campo5" name="campo5">&nbsp;&nbsp;&nbsp; <label for="campo5">SEO </label></span>
                             <span class="subgrupoFormulario"><input type="checkbox" value="Fotografia de Productos" id="campo6" name="campo6"> &nbsp;&nbsp;&nbsp;<label for="campo6">Fotografia de Productos</label></span>
                         </td>
                     </tr>
                 </table> -->
                 <br><br>
             </div>


             <!----------------------- FORMULARIO CONTACTO ---------------------->
             <form method="post" action="./php/formularioContacto/contactForm.php" id="formularioContacto" class="row g-4 justify-content-center" onsubmit="">
                 <div class="col-md-0 ">
                     <h6 class="text-primary">Servicios</h6><br>
                     <label for="servicioSeleccion">Selecciona una categoría:</label><br>
                     <select name="serviciosSeleccion" id="serviciosSeleccion" style="width: 25%">
                         <option value="1" id="campo1">Desarrollo Web</option>
                         <option value="2" id="campo2">Publicidad Online</option>
                         <option value="3" id="campo3">Redes Sociales</option>
                         <option value="4" id="campo4">Diseño Gráfico</option>
                         <option value="5" id="campo5">SEO</option>
                         <option value="6" id="campo6">Fotografía de Productos</option>
                     </select><br>
                 </div>
                 <div class="col-md-5">
                     <input type="text" class="form-control" name="name" id="name" placeholder="Nombre completo" required>
                 </div>
                 <div class="col-md-5">
                     <input type="text" class="form-control" name="email" id="email" placeholder="Tu E-mail" required>
                 </div>
                 <div class="col-md-10">
                     <input type="text" class="form-control" name="subject" id="asunto" placeholder="Asunto" required>
                 </div>
                 <div class="col-md-10">
                     <textarea name="" id="" cols="30" rows="5" name="message" id="message" class="form-control" placeholder="Cuéntanos qué necesitas =)"></textarea>
                 </div>
                 <div class="col-md-10 d-grid">
                     <button class="btn btn-primary" id="botonSubmit" name="submit" type="submit">Enviar</button>
                 </div>
             </form>

         </div>
         <script>

         </script>

     </section><!-- CONTACTO -->

     <?php
        require_once("./php/footer.php");
        ?>