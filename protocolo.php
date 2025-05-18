<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ministerio de Protocolo</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="protocolo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Scroll suave -->
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>

  <header class="main-header">
    <div class="header-container">
      <!-- Logo -->
      <a class="logo" href="main.php">
        <img src="imagenes/logo.jpg" alt="Logo de la Iglesia">
        <h2>Visión de Familia</h2>
      </a>

      <!-- Menú principal (visible en desktop) -->
      <nav class="main-nav">
        <ul>
          <li><a href="main.php">Inicio</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Ministerios</a></li>
          <li><a href="#">Eventos</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>

      <!-- Botón de menú móvil -->
      <button class="menu-toggle" aria-label="Abrir menú">
        <span class="hamburger"></span>
        <span class="hamburger"></span>
        <span class="hamburger"></span>
      </button>
    </div>
  </header>
  <!-- Menú móvil (oculto por defecto) -->
  <nav class="mobile-nav">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Ministerios</a></li>
      <li><a href="#">Eventos</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="#">Donaciones</a></li>
    </ul>
  </nav>

  <!-- Portada hero con carrusel de imágenes -->
  <section class="hero-portada protocolo-hero">
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
      <h1 class="hero-titulo">Ministerio de Protocolo</h1>
      <p class="hero-subtitulo">Construyendo familias según el corazón de Dios</p>
      <a href="#contenido-protocolo" class="btn-vermas">Ver más</a>
    </div>
  </section>


  <!-- CONTENIDO DEL MINISTERIO DE PROTOCOLO -->
  <section class="ministerio-protocolo" id="contenido-protocolo">
    <div class="contenido-container">
      <h2 class="titulo-seccion">Ministerio de Servicios y Protocolo</h2>

      <p>
        El Ministerio de Servicios y Protocolo está compuesto por hombres y mujeres comprometidos y agradecidos por el Reino de Jesucristo, con un corazón dispuesto a servir según Sus propósitos. Su función principal es garantizar el orden y la presentación en reuniones, eventos y servicios de la iglesia.
      </p>

      <p>
        En esencia, este ministerio tiene como objetivo honrar a Dios y servir a las personas a través de la excelencia en la atención y la organización. Sus principales objetivos son:
      </p>

      <ul class="lista-objetivos">
        <li>Recibir y guiar a los asistentes para que se sientan bienvenidos y cómodos.</li>
        <li>Organizar y preparar los espacios antes, durante y después de las actividades.</li>
        <li>Mantener el orden y la disciplina de manera amable y discreta.</li>
        <li>Atender las necesidades de los asistentes ofreciendo ayuda y orientación oportuna.</li>
      </ul>

      <div class="cita-biblica">
        <p class="verso">“Así como el Hijo del Hombre no vino para ser servido, sino para servir y para dar su vida en rescate por muchos.”</p>
        <p class="referencia"><strong>Mateo 20:28</strong></p>
      </div>
    </div>
  </section>


  <footer class="footer">
    <div class="footer-cta">
      <p>¿Listo para dar el siguiente paso en tu vida espiritual?</p>
      <a href="#contacto" class="btn-contacto">CONTÁCTANOS</a>
    </div>

    <div class="footer-info">
      <div class="footer-col">
        <h4>UBICACIÓN</h4>
        <hr>
        <p>Av. 23 de Enero con Av. Las Samanes<br>
          Edificio Autocontrol<br>
          Barquisimeto, Sector La Federación<br>
          Barquisimeto, Venezuela</p>
      </div>

      <div class="footer-col">
        <h4>DONACIONES</h4>
        <hr>
        <p>2 Corintios 9:10</p>
        <p>Métodos de pago:</p>
        <div class="icons">
          💳 🏦 🏢
        </div>
      </div>

      <div class="footer-col">
        <h4>CONTACTO</h4>
        <hr>
        <p>📞 +58 123 456 7890</p>
        <p>✉ contacto@visiondefamilia.com</p>
        <div class="social-icons">.
          <a href="https://www.facebook.com/share/16Ua86KBUe/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/viisiondefamilia?igsh=MWIxNzZkZW83cjllaw=="><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-copy">
      <p>© 2023 Visión de Familia. Todos los derechos reservados.</p>
    </div>
  </footer>
  <script src="main.js"></script>

</body>

</html>