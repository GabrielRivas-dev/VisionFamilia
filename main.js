const enlace = document.getElementById("ministerios-link");
    const miDiv = document.getElementById("dropdown-content");

    // Mostrar el div al hacer clic en el enlace
    enlace.addEventListener("click", function(e) {
      e.preventDefault(); // Evita el comportamiento predeterminado del enlace
      miDiv.style.display = "block";
    });

    // Ocultar el div al hacer clic fuera
    document.addEventListener("click", function(e) {
      if (e.target !== miDiv && e.target !== enlace) {
        miDiv.style.display = "none";
      }
    });

    
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.querySelector('.menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');

  // Abrir/cerrar menú móvil
  menuToggle.addEventListener('click', function () {
    this.classList.toggle('active');
    mobileNav.classList.toggle('active');

    // Bloquear scroll del body cuando el menú está abierto
    if (mobileNav.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = '';
    }
  });

  // Cerrar menú al hacer clic en un enlace
  const navLinks = document.querySelectorAll('.mobile-nav a');
  navLinks.forEach(link => {
    link.addEventListener('click', function () {
      menuToggle.classList.remove('active');
      mobileNav.classList.remove('active');
      document.body.style.overflow = '';
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {
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
    if (!isDown) return;
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
  }, { passive: false });

  scrollContainer.addEventListener('touchend', () => {
    isDown = false;
    carrusel.style.animationPlayState = 'running';
  });

  scrollContainer.addEventListener('touchmove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.touches[0].pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2;
    scrollContainer.scrollLeft = scrollLeft - walk;
  }, { passive: false });

  // Reiniciar posición cuando la animación completa un ciclo
  carrusel.addEventListener('animationiteration', () => {
    if (carrusel.offsetLeft >= 0) {
      carrusel.style.animation = 'none';
      setTimeout(() => {
        carrusel.style.animation = 'scroll 30s linear infinite';
      }, 10);
    }
  });
});
// Efecto de aparición al hacer scroll
document.addEventListener('DOMContentLoaded', function () {
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
document.addEventListener('DOMContentLoaded', function () {
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

document.addEventListener('DOMContentLoaded', function () {
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

document.addEventListener('DOMContentLoaded', function () {
  const cards = document.querySelectorAll('.secciones-card');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
      }
    });
  }, { threshold: 0.1 });

  cards.forEach(card => observer.observe(card));
});

// Datos de las doctrinas (descripciones extendidas)
const doctrinas = {
  1: {
    title: "Sagradas Escrituras",
    description: "La Biblia cuenta con 66 libros, 39 del Antiguo Testamento y 27 del Nuevo Testamento. Escrita por aproximadamente 40 autores en un período de 1500 años",
    verse: "2 Timoteo 3:16-17"
  },
  2: {
    title: "Trinidad",
    description: "La Trinidad es la base de la nuestra fe. Creemos en Dios Padre, el Hijo Jesucristo y el Espíritu Santo. Los tres forman una perfecta unidad que los hace un solo Dios por sobre todas las cosas. Aunque sea un concepto difícil de entender por la mente humana, Dios es uno, pero son 3 los que dan Testimonio en el Cielo, el Padre, el Verbo y el Espíritu Santo. No son 3 dioses, son 3 divinidades que forman una unidad perfecta. El Padre se encuentra en su trono, el Hijo sentado a su Diestra, y su Espíritu Santo está en la Tierra para guiar a cada uno de los creyentes en el camino del evangelio",
    verse: "1 Juan 5:7"
  },
  3: {
    title: "Evangelio de Salvación",
    description: "Creemos que el Evangelio es la buena noticia de salvación a través de Jesucristo. La salvación es un regalo de Dios, no por obras, sino por gracia mediante la fe.",
    verse: "Juan 3:16"
  },
  4: {
    title: "Familia de la Fe",
    description: "La Familia de la Fe es una verdad espiritual fundamental del cristianismo: quienes reciben a Jesucristo y creen en Su nombre no solo son perdonados, sino que son adoptados como hijos de Dios. Esta adopción no es una metáfora simbólica, sino una realidad espiritual con implicaciones profundas en la identidad, la comunidad y la herencia del creyente.",
    verse: "Juan 1:12"
  },
  5: {
    title: "Cuerpo de Cristo",
    description: "La Iglesia es descrita por el apóstol Pablo como el Cuerpo de Cristo. Esta metáfora enseña la profunda unidad espiritual entre todos los creyentes en Jesús. No importa la nacionalidad, condición social, género o trasfondo; todos los que han sido bautizados en el Espíritu Santo al creer en Cristo forman parte de un solo cuerpo espiritual cuyo cabeza es Cristo mismo (Efesios 1:22-23).",
    verse: "1 Corintios 12:13"
  },
  6: {
    title: "Bautismo",
    description: "El bautismo es un acto simbólico que representa la muerte al pecado y la resurrección a una nueva vida en Cristo. Es un paso importante en la vida del creyente, simbolizando su identificación con la muerte, sepultura y resurrección de Jesucristo.",
    verse: "Romanos 6:4"
  },
  7: {
    title: "Regreso de Cristo",
    description: "Creemos en el regreso literal de Jesucristo para arrebatar a su Iglesia (el Arrebatamiento) y establecer su reino eterno.",
    verse: "1 Tesalonicenses 4:16-17"
  }
};

// Elementos del DOM
const modal = document.getElementById("doctrinaModal");
const modalTitle = document.getElementById("modal-title");
const modalDesc = document.getElementById("modal-description");
const modalVerse = document.getElementById("modal-verse");
const closeBtn = document.querySelector(".close-modal");

// Abrir modal al hacer clic en una tarjeta
document.querySelectorAll(".doctrina-card").forEach((card, index) => {
  card.addEventListener("click", () => {
    const data = doctrinas[index + 1]; // +1 porque el índice empieza en 0
    modalTitle.textContent = data.title;
    modalDesc.textContent = data.description;
    modalVerse.textContent = data.verse;
    modal.style.display = "flex";
  });
});

// Cerrar modal
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

// Cerrar al hacer clic fuera del contenido
window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});

// Cerrar modal con tecla ESC
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && modal.style.display === "flex") {
    modal.style.display = "none";
  }
});
