document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  
  // Abrir/cerrar menú móvil
  menuToggle.addEventListener('click', function() {
    this.classList.toggle('active');
    mobileNav.classList.toggle('active');
    
    // Bloquear scroll del body cuando el menú está abierto
    if(mobileNav.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = '';
    }
  });
  
  // Cerrar menú al hacer clic en un enlace
  const navLinks = document.querySelectorAll('.mobile-nav a');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      menuToggle.classList.remove('active');
      mobileNav.classList.remove('active');
      document.body.style.overflow = '';
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const carrusel = document.querySelector('.responsables');
  const scrollContainer = document.querySelector('.carrusel-scroll');
  const secciones = document.querySelectorAll('.section');
  
  // Duplicar elementos para efecto infinito
  carrusel.innerHTML += carrusel.innerHTML;
  
  // Pausar animación al hacer hover o interactuar
  carrusel.addEventListener('mouseenter', () => {
    carrusel.style.animationPlayState = 'paused';
  });
  
  carrusel.addEventListener('mouseleave', () => {
    carrusel.style.animationPlayState = 'running';
  });
  
  // Scroll manual
  let isDown = false;
  let startX;
  let scrollLeft;
  
  scrollContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
    carrusel.style.animationPlayState = 'paused';
    scrollContainer.style.cursor = 'grabbing';
  });
  
  scrollContainer.addEventListener('mouseleave', () => {
    isDown = false;
    carrusel.style.animationPlayState = 'running';
    scrollContainer.style.cursor = 'grab';
  });
  
  scrollContainer.addEventListener('mouseup', () => {
    isDown = false;
    carrusel.style.animationPlayState = 'running';
    scrollContainer.style.cursor = 'grab';
  });
  
  scrollContainer.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2;
    scrollContainer.scrollLeft = scrollLeft - walk;
  });
  
  // Touch events para móviles
  scrollContainer.addEventListener('touchstart', (e) => {
    isDown = true;
    startX = e.touches[0].pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
    carrusel.style.animationPlayState = 'paused';
  }, {passive: false});
  
  scrollContainer.addEventListener('touchend', () => {
    isDown = false;
    carrusel.style.animationPlayState = 'running';
  });
  
  scrollContainer.addEventListener('touchmove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.touches[0].pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2;
    scrollContainer.scrollLeft = scrollLeft - walk;
  }, {passive: false});
  
  // Reiniciar posición cuando la animación completa un ciclo
  carrusel.addEventListener('animationiteration', () => {
    if(carrusel.offsetLeft >= 0) {
      carrusel.style.animation = 'none';
      setTimeout(() => {
        carrusel.style.animation = 'scroll 30s linear infinite';
      }, 10);
    }
  });
});
  // Efecto de aparición al hacer scroll
document.addEventListener('DOMContentLoaded', function() {
    const fundadores = document.querySelector('.fundadores');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 });
    
    // Añadir estilos iniciales
    fundadores.style.opacity = 0;
    fundadores.style.transform = 'translateY(20px)';
    fundadores.style.transition = 'all 0.6s ease-out';
    
    // Observar el elemento
    observer.observe(fundadores);
  });

  
  // Animación al hacer scroll para Quiénes Somos
  document.addEventListener('DOMContentLoaded', function() {
    const elementos = document.querySelectorAll('.columna, .section-header, .texto-destacado');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 });
    
    elementos.forEach(el => {
      el.style.opacity = 0;
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'all 0.6s ease-out';
      observer.observe(el);
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
    const slideInterval = 5000; // 5 segundos
    
    function nextSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }
    
    // Iniciar el carrusel automático
    let carruselInterval = setInterval(nextSlide, slideInterval);
    
    // Opcional: Pausar al hacer hover
    const heroSection = document.querySelector('.hero-portada');
    heroSection.addEventListener('mouseenter', () => {
      clearInterval(carruselInterval);
    });
    
    heroSection.addEventListener('mouseleave', () => {
      carruselInterval = setInterval(nextSlide, slideInterval);
    });
  });
