<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visión de Familia</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <header class="main-header">
  <div class="header-container">
    <!-- Logo -->
    <div class="logo">
      <a href="">
        <img src="imagenes/logo.png" alt="Logo de la Iglesia">
      </a>
    </div>
    <div class="portada-header">
    <div class="h3"><h3>MINISTERIO APOSTÓLICO Y PROFÉTICO</h3></div>
    <div class="h2"><h2>VISIÓN FAMILIA</h2></div>
    <div class=links>
      <nav class="main-nav">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Ministerios</a></li>
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
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Ministerios</a></li>
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Donaciones</a></li>
      </ul>
    </nav>
  </div>
</header>
<section class="vision-mision-paralela">
  <div class="vm-container">
    <!-- Tarjeta de Misión -->
    <div class="vm-card mision-card">
      <div class="vm-icon">
        <svg viewBox="0 0 24 24">
          <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/>
          <path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"/>
          <circle cx="12" cy="12" r="2"/>
        </svg>
      </div>
      <h3>Nuestra Misión</h3>
      <div class="vm-content">
        <p>Facilitar al creyente el descubrimiento, desarrollo y fortalecimiento de sus dones y talentos en Dios, con el propósito de alcanzar la plenitud del hombre perfecto y contribuir a la edificación de la iglesia de Jesucristo.</p>
      </div>
      <div class="vm-reference">Efesios 4:12-13</div>
    </div>

    <!-- Tarjeta de Visión -->
    <div class="vm-card vision-card">
      <div class="vm-icon">
        <svg viewBox="0 0 24 24">
          <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/>
          <path d="M15 12a3 3 0 1 1-3-3 3 3 0 0 1 3 3z"/>
        </svg>
      </div>
      <h3>Nuestra Visión</h3>
      <div class="vm-content">
        <p>Que cada persona ganada para el reino de Dios no solo reconozca su amor, sino que también aprenda a cultivar una relación profunda con Él.</p>
        <p>Anhelamos que cada individuo se comprometa a vivir conforme a Su Palabra, reflejando así Su gloria en todas sus acciones y decisiones.</p>
      </div>
      <div class="vm-reference">Proverbios 29:18</div>
    </div>
  </div>
</section>
<section class="fundadores-container">
  <div class="fundadores">
    <div class="fundadores-info">
      <h2 class="fundadores-titulo">Nuestros Fundadores</h2>
      <h3 class="fundadores-nombres">Juan Mata y Yenny De Mata</h3>
      <p class="fundadores-descripcion">Líderes espirituales y visionarios que han dedicado sus vidas al servicio en la obra del Señor</p>
    </div>
    <div class="fundadores-imagen">
      <img src="imagenes/Apóstol Juan Mata y Profeta Yenny De Mata.jpg" 
          alt="Apóstol Juan Mata y Profeta Yenny De Mata" 
          class="retrato-fundadores">
      <div class="decoracion"></div>
    </div>
  </div>
</section>
<script src="main.js"></script>
</body>

</html>
