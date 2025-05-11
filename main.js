document.addEventListener('DOMContentLoaded', function() {
    const carrusel = document.querySelector('.responsables');
    const sections = document.querySelectorAll('.section');
    const carruselContainer = document.querySelector('.carrusel-container');
    
    // Duplicar las secciones para crear el efecto infinito
    carrusel.innerHTML += carrusel.innerHTML;
    
    // Configurar la animación
    let animation;
    let requestId;
    let speed = 1; // Velocidad del desplazamiento (píxeles por frame)
    let position = 0;
    let isPaused = false;
    
    function animate() {
      if (!isPaused) {
        position -= speed;
        
        // Cuando llegamos al final del carrusel duplicado, reiniciamos la posición
        if (position <= -carrusel.scrollWidth / 2) {
          position = 0;
        }
        
        carrusel.style.transform = `translateX(${position}px)`;
      }
      
      requestId = requestAnimationFrame(animate);
    }
    
    // Iniciar animación
    animate();
    
    // Pausar al hacer hover en el contenedor o secciones
    carruselContainer.addEventListener('mouseenter', () => {
      isPaused = true;
    });
    
    carruselContainer.addEventListener('mouseleave', () => {
      isPaused = false;
    });
    
    // Limpiar animación al salir de la página
    window.addEventListener('beforeunload', () => {
      cancelAnimationFrame(requestId);
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