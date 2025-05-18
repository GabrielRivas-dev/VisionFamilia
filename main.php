<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visión de Familia</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="animations.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <header class="main-header">
    <div class="header-container">
      <!-- Logo -->
      <div class="logo">
        <a href="main.php">
          <img src="imagenes/logo.png" alt="Logo de la Iglesia">
        </a>
      </div>
      <div class="portada-header">
        <div class="h3">
          <h3>MINISTERIO APOSTÓLICO Y PROFÉTICO</h3>
        </div>
        <div class="h2">
          <h2>VISIÓN FAMILIA</h2>
        </div>
        <div class=links>
          <nav class="main-nav">
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="nosotros.php">Nosotros</a></li>
              <li><a href="#" id="ministerios-link">Ministerios</a>
            <div class="dropdown-content" id="dropdown-content">
        <a href="#">Adoración</a>
        <a href="#">Amor y Misericordia</a>
        <a href="#">Diseño y Ambiente</a>
        <a href="#">Danza</a>
        <a href="#">Intercesión</a>
        <a href="#">Operaciones</a>
        <a href="#">Protocolo</a>
        <a href="#">Registro y Seguimiento</a>
        <a href="#">UMAV</a>
        <a href="#">VDF KIDS</a>
        <a href="#">Escuela de la Visión</a>
        <a href="#">Evangelismo</a>
      </div>
            </li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- Menú principal (visible en desktop) 
     <nav class="main-nav">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Ministerios</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>-->

      <!-- Botón de menú móvil -->
      <button class="menu-toggle" aria-label="Abrir menú">
        <span class="hamburger"></span>
        <span class="hamburger"></span>
        <span class="hamburger"></span>
      </button>

      <!-- Menú móvil (oculto por defecto) -->
      <nav class="mobile-nav">
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="#">Ministerios</a></li>
          <li><a href="#">Eventos</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">Donaciones</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="redes">
    <a href="https://www.facebook.com/share/16Ua86KBUe/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://www.instagram.com/viisiondefamilia?igsh=MWIxNzZkZW83cjllaw==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a href=""><i class="fa-brands fa-youtube" target="_blank"></i></a>
    <a href="https://wa.me/584145064924" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
  </div>

  <!-- Portada hero con carrusel de imágenes -->
  <section class="hero-portada">
    <div class="hero-slideshow">
      <div class="slide active" style="background-image: url('imagenes/Principal1.jpg');"></div>
      <div class="slide" style="background-image: url('imagenes/Portada.jpg');"></div>
      <div class="slide" style="background-image: url('imagenes/Portada1.jpg');"></div>
      <div class="slide" style="background-image: url('imagenes/Portada2.jpg');"></div>
      <div class="slide" style="background-image: url('imagenes/Portada3.jpg');"></div>
      <div class="slide" style="background-image: url('imagenes/Portada4.jpg');"></div>
      <div class="slide" style="background-image: url('imagenes/Portada6.jpg');"></div>
    </div>

    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1 class="hero-titulo">DIOS TE TRAJO AL MEJOR</h1>
      <p class="hero-subtitulo">Somos un ministerio apostólico y profetico fundamentado en la doctrina de los apostoles,guiado por el espiritu santo y comprometido con la expansion el reino de dios en la tierra</p>
      <div class="botones">
        <a href="nosotros.php">
          <button>Conócenos</button>
        </a>

        <button>Contactar</button>
      </div>
    </div>
  </section>
  <div class="secciones">
    <div class="secciones-card">
      <div class="doctrina-icon">🕊️</div>
      <h3>Presencia de Dios</h3>
      <span>Buscamos una relacion intima con el espiritu santo</span>
    </div>
    <div class="secciones-card">
      <div class="doctrina-icon">📖</div>
      <h3>Palabra viva</h3>
      <span>La biblia es nuestro fundamento y guía</span>
    </div>
    <div class="secciones-card">
      <div class="doctrina-icon">💟</div>
      <h3>Servicio con amor</h3>
      <span>Servimos al projimo con el amor de dios</span>
    </div>
    <div class="secciones-card">
      <div class="doctrina-icon">🏠</div>
      <h3>Familias restauradas</h3>
      <span>Trabajamos en la unidad y sanidad familiar</span>
    </div>
    <div class="secciones-card">
      <div class="doctrina-icon">👑</div>
      <h3>Gran Comision</h3>
      <span>Evangelizamos y disputamos para multiplicar el reino</span>
    </div>
  </div>
  <!-- Sección Quiénes Somos con diseño moderno -->
  <section class="quienes-somos" id="quienes-somos">
    <div class="section-header">
      <h2 class="section-title" style="color:#F9F5F0;">¿Quiénes somos?</h2>
    </div>
    <div class="texto-destacado">
      <p>Somos un ministerio apostólico y profético que emerge del corazón de Dios con el propósito de transformar familias, siguiendo el principio establecido por Dios a Abraham en su palabra: "Y en ti serán benditas todas las naciones de la tierra" (Génesis 12:3). Estamos fundamentados en la doctrina de los apóstoles y en la predicación del evangelio, bajo la dirección del Apóstol Juan Carlo Mata y la Profeta Yenny de Mata, junto a un equipo de pastores y líderes comprometidos.</p>
    </div>
  </section>
  <div class="carrusel-container">
    <div class="carrusel-scroll">
      <div class="responsables">
        <div class="section">
          <h2>Adoración</h2>
          <img src="imagenes/Adoración.jpg" alt="">
        </div>
        <div class="section">
          <h2>Amor y Misericordia</h2>
          <img src="imagenes/Amor y Misericordia .jpg" alt="">
        </div>
        <div class="section">
          <h2>Diseño y ambiente</h2>
          <img src="imagenes/Diseño y Ambiente.jpg" alt="">
        </div>
        <div class="section">
          <h2>Danza</h2>
          <img src="imagenes/Danza.jpg" alt="">
        </div>
        <div class="section">
          <h2>Intercesión</h2>
          <img src="imagenes/Intercesión.jpg" alt="">
        </div>
        <div class="section">
          <h2>Operaciones</h2>
          <img src="imagenes/Operaciones.jpg" alt="">
        </div>
        <div class="section">
          <h2>Protocolo</h2>
          <img src="imagenes/Protocolo.jpg" alt="">
        </div>
        <div class="section">
          <h2>Registro y seguimiento</h2>
          <img src="imagenes/Registro y Seguimiento.jpg" alt="">
        </div>
        <div class="section">
          <h2>UMAV</h2>
          <img src="imagenes/UMAV.jpg" alt="">
        </div>
        <div class="section">
          <h2>VDF KIDS</h2>
          <img src="imagenes/VDF KIDS.jpg" alt="">
        </div>
        <div class="section">
          <h2>Escuela de la Visión</h2>
          <img src="imagenes/Escuela de la Visión.jpg" alt="">
        </div>
      </div>
    </div>
    <section class="objetivos-section">
      <h2 class="section-title">Nuestros objetivos</h2>
      <div class="objetivos-grid">
        <!-- Objetivo 1 -->
        <div class="objetivo-card">
          <div class="objetivo-icon">1</div>
          <div class="objetivo-text">
            <p>Que las personas conozcan el evangelio de Jesucristo</p>
          </div>
        </div>

        <!-- Objetivo 2 -->
        <div class="objetivo-card">
          <div class="objetivo-icon">2</div>
          <div class="objetivo-text">
            <p>Guiar a las personas al camino de la salvación</p>
          </div>
        </div>

        <!-- Objetivo 3 -->
        <div class="objetivo-card">
          <div class="objetivo-icon">3</div>
          <div class="objetivo-text">
            <p>Consolidar a las personas para que permanezcan y sirvan en la obra de Dios</p>
          </div>
        </div>
      </div>
    </section>
    <section class="doctrina-ministerial">
      <div class="section-header">
        <h2 class="section-title">Nuestra Doctrina</h2>
      </div>

      <div class="doctrina-grid-container">
        <div class="doctrina-grid">
          <!-- Item 1 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">📖</div>
            <h3>Sagradas Escrituras</h3>
            <p class="doctrina-text">Fundamento de nuestra fe y práctica ministerial</p>
            <p class="bible-verse">2 Timoteo 3:16-17</p>
          </div>

          <!-- Item 2 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">✝️</div>
            <h3>Un solo Dios</h3>
            <p class="doctrina-text">Padre, Hijo y Espíritu Santo</p>
            <p class="bible-verse">1 Juan 5:7</p>
          </div>

          <!-- Item 3 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">🕊️</div>
            <h3>Evangelio de salvación</h3>
            <p class="doctrina-text">Cristo como único camino de redención</p>
            <p class="bible-verse">Juan 3:16</p>
          </div>

          <!-- Item 4 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">👨‍👩‍👧‍👦</div>
            <h3>Familia de la fe</h3>
            <p class="doctrina-text">Hijos de Dios por la fe en Cristo</p>
            <p class="bible-verse">Juan 1:12</p>
          </div>

          <!-- Item 5 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">🏛️</div>
            <h3>Cuerpo de Cristo</h3>
            <p class="doctrina-text">Unidad en la diversidad de miembros</p>
            <p class="bible-verse">1 Corintios 12:13</p>
          </div>

          <!-- Item 6 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">🎁</div>
            <h3>Un Bautismo</h3>
            <p class="doctrina-text">Nuevo nacimiento en Cristo Jesús</p>
            <p class="bible-verse">Efesios 4:6</p>
          </div>

          <!-- Item 7 -->
          <div class="doctrina-card">
            <div class="doctrina-icon">🎁</div>
            <h3>Regreso de Cristo</h3>
            <p class="doctrina-text">Volverá para llevar a su iglesia y presentarla ante Dios</p>
            <p class="bible-verse">1 Tesalonicenses 4:16,17</p>
          </div>
        </div>
      </div>

      <!-- Modal (estructura base) -->
      <div id="doctrinaModal" class="modal">
        <div class="modal-content">
          <span class="close-modal">&times;</span>
          <h2 id="modal-title">Título</h2>
          <p id="modal-description">Descripción detallada aquí...</p>
          <p class="bible-verse" id="modal-verse">Versículo bíblico</p>
        </div>
      </div>
    </section>
    <section class="proyecto-vida">
      <div class="proyecto-container">
        <div class="proyecto-foto-principal"><img src="imagenes/pastor y profeta1.jpg" alt=""> </div>
        <div class="proyecto-foto-secundarias">
          <div class="fotos-secundarias"> <img src="imagenes/profeta1.jpg" alt=""></div>
          <div class="fotos-secundarias"> <img src="imagenes/pastor1.jpg" alt=""></div>
          <div class="fotos-secundarias"> <img src="imagenes/canto1.jpg" alt=""></div>
        </div>
        <div class="proyecto-texto">
          <h3>Participa en nuestro</h3>
          <h2>Proyecto de vida</h2>
          <h3>Alcanzando generaciones</h3>
          <br>
          <h3>Evangelismos</h3>
          <ul>
            <li>Hogar Cristiano Multiplicador</li>
            <li>Cafe con Jesus</li>
            <li>Cine en familia</li>
            <li>Obras sociales</li>
            <li>Actividades deportivas</li>
            <li>Adoracion publica</li>
            <li>Nacimiento del nuevo ser</li>
            <li>Seminarios</li>
            <li>Ayunos</li>
            <li>Vigilias</li>
            <li>Matutinos</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="camino-vision">
      <h2 class="section-title">ACOMPÁÑANOS AL <span>CAMINO DE LA VISIÓN</span></h2>

      <div class="pasos-container">
        <!-- Paso 1 -->
        <div class="paso-card">
          <div class="paso-imagen">
            <img src="imagenes/Visionario.jpg" alt="Proyecto Visionario">
          </div>
          <div class="paso-contenido">
            <div class="paso-numero">1</div>
            <h3>Proyecto Visionario</h3>
          </div>
        </div>

        <!-- Paso 2 -->
        <div class="paso-card">
          <div class="paso-imagen">
            <img src="imagenes/Bautismo.jpg" alt="Bautismo">
          </div>
          <div class="paso-contenido">
            <div class="paso-numero">2</div>
            <h3>Bautismo</h3>
          </div>
        </div>

        <!-- Paso 3 -->
        <div class="paso-card">
          <div class="paso-imagen">
            <img src="imagenes/Escuela.jpg" alt="Escuela de la Visión">
          </div>
          <div class="paso-contenido">
            <div class="paso-numero">3</div>
            <h3>Escuela de la Visión</h3>
          </div>
        </div>

        <!-- Paso 4 -->
        <div class="paso-card">
          <div class="paso-imagen">
            <img src="imagenes/Servicio.jpg" alt="Servicio en la obra">
          </div>
          <div class="paso-contenido">
            <div class="paso-numero">4</div>
            <h3>Servicio en la obra</h3>
          </div>
        </div>

        <!-- Paso 5 -->
        <div class="paso-card">
          <div class="paso-imagen">
            <img src="imagenes/Liderazgo.jpg" alt="Liderazgo Ministerial">
          </div>
          <div class="paso-contenido">
            <div class="paso-numero">5</div>
            <h3>Liderazgo Ministerial</h3>
          </div>
        </div>
      </div>
    </section>
    <section class="departamentos">
      <div class="titulo">
        <h2>DEPARTAMENTOS</h2>
      </div>
      <a href="url_de_la_pagina_registro" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoREGISTRO.png" alt="Registro y seguimiento">
        </article>
      </a>

      <a href="url_de_la_pagina_medios" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoAUDIOVISUALES.PNG " alt="Unidad de medios audiovisuales">
        </article>
      </a>

      <a href="url_de_la_pagina_protocolo" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoPROTOCOLO.png " alt="Protocolo">
        </article>
      </a>


      <a href="url_de_la_pagina_kids" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoVFKIDS.PNG " alt="VDG Kid's">
        </article>
      </a>

      <a href="url_de_la_pagina_danza" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoDANZA.png " alt="Danza">
        </article>
      </a>

      <a href="url_de_la_pagina_visionarios" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoLIDERES.png" alt="Visionarios">
        </article>
      </a>

      <a href="url_de_la_pagina_adoracion" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoADORACION.PNG " alt="Adoración">
        </article>
      </a>

      <a href="url_de_la_pagina_escuela" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoESCUELA.png " alt="Escuela de la visión">
        </article>
      </a>

      <a href="url_de_la_pagina_diseño_ambiente" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoDISEÑOyAMBIENTE.png " alt="Diseño y Ambiente">
        </article>
      </a>

      <a href="url_de_la_pagina_operaciones" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoOPERACIONES.png " alt="Operaciones">
        </article>
      </a>

       <a href="url_de_la_pagina_intercesion" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoINTERSICION.png " alt="intercesion">
        </article>
      </a>

       <a href="url_de_la_pagina_amor_y_misericordia" class="depto-img">
        <article>
          <img src="imagenes_departamentos/logoAMOR.png " alt="amor y misericordia">
        </article>
      </a>

    </section>
    <div class="footer-cta">
      <h3>¿Listo para dar el siguiente paso en tu vida espiritual?</h3>
      <a href="#" class="contact-btn">CONTÁCTANOS</a>
    </div>
    <footer class="site-footer">
      <div class="footer-container">
        <!-- Sección de llamado a acción -->


        <!-- Sección de información -->
        <div class="footer-info">
          <!-- Columna de ubicación -->
          <div class="footer-column">
            <div class="logo">
              <a href="main.php">
                <img src="imagenes/logo.png" alt="Logo de la Iglesia">
              </a>
            </div>
          </div>
          <div class="footer-column">
            <address>
              <h4>UBICACIÓN</h4>
              Av. 23 de Enero con Av. Las Samanes<br>
              Edificio Autocentro<br>
              Barinas, Sector La Federación<br>
              Barinas, Venezuela
            </address>
          </div>
          <div class="footer-column">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.123456789!2d-70.2251667!3d8.6229444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMzcnMjIuNiJOIDcwwrAxMyczMC42Ilc!5e0!3m2!1ses!2sve!4v1620000000000!5m2!1ses!2sve"
              width="300"
              height="auto"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              aria-label="Mapa de ubicación de la iglesia">
            </iframe>
            <a href="https://www.google.com/maps/place/8%C2%B037'22.6%22N+70%C2%B013'30.6%22W/@8.6229444,-70.2251667,17z/data=!3m1!4b1!4m4!3m3!8m2!3d8.6229444!4d-70.2251667"
              target="_blank"
              class="mapa-boton">
              <i class="fas fa-directions"></i> Abrir en Google Maps
            </a>
          </div>
          <!-- Columna de donaciones -->
          <div class="footer-column">
            <h4>DONACIONES</h4>
            <p>Dios provee tanto la semilla para sembrar como el pan para come</p>

          </div>

        </div>
        <!-- Derechos de autor -->
        <div class="footer-bottom">
          <p>&copy; 2023 Visión de Familia. Todos los derechos reservados.</p>
        </div>
      </div>
    </footer>
    <script src="main.js"></script>

</body>

</html>
