  const track = document.querySelector('.third-section__carousel__cards');
  const cards = track.querySelectorAll('.card');
  const prevBtn = document.querySelector('.third-section__carousel__button.prev');
  const nextBtn = document.querySelector('.third-section__carousel__button.next');

  let currentIndex = 0;

function updateCarousel() {
  const width = cards[0].clientWidth;
  track.style.transform = `translateX(-${currentIndex * width}px)`;
}

prevBtn.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = cards.length - 1;
  }
  updateCarousel();
});

nextBtn.addEventListener('click', () => {
  if (currentIndex < cards.length - 1) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  updateCarousel();
});

window.addEventListener('resize', updateCarousel);

// --- HOVER para PC: se mueve automáticamente mientras está el mouse encima ---
let hoverInterval;

const carousel = document.querySelector('.third-section__carousel');

carousel.addEventListener('mouseenter', () => {
  hoverInterval = setInterval(() => {
    currentIndex = (currentIndex + 1) % cards.length;
    updateCarousel();
  }, 2000);
});

carousel.addEventListener('mouseleave', () => {
  clearInterval(hoverInterval);
});

// --- SWIPE para móvil ---
let startX = 0;
let isDragging = false;

carousel.addEventListener('touchstart', e => {
  startX = e.touches[0].clientX;
  isDragging = true;
});

carousel.addEventListener('touchmove', e => {
  if (!isDragging) return;
  const currentX = e.touches[0].clientX;
  const diffX = startX - currentX;

  // Para evitar scroll vertical accidental, opcional:
  if (Math.abs(diffX) > 10) e.preventDefault();
});

carousel.addEventListener('touchend', e => {
  if (!isDragging) return;
  isDragging = false;
  const endX = e.changedTouches[0].clientX;
  const diffX = startX - endX;

  if (diffX > 50) {
    // Swipe izquierda - siguiente tarjeta
    if (currentIndex < cards.length - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
  } else if (diffX < -50) {
    // Swipe derecha - tarjeta anterior
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = cards.length - 1;
    }
  }
  updateCarousel();
});

// Inicializo la posición al cargar
updateCarousel();