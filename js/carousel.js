document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.third-section__carousel');
  if (!carousel) return;

  const track = carousel.querySelector('.third-section__carousel__cards');
  const slides = Array.from(track.children);
  const prevBtn = carousel.querySelector('.third-section__carousel__button.prev');
  const nextBtn = carousel.querySelector('.third-section__carousel__button.next');

  let currentIndex = 0;

  const isMobile = () => window.matchMedia('(max-width: 768px)').matches;

  function getStepWidth() {
    const first = slides[0];
    if (!first) return 0;
    const gap = parseFloat(getComputedStyle(track).gap) || 0;
    const w = first.getBoundingClientRect().width; // ancho del flex item real
    return w + gap;
  }

  function update() {
    if (!isMobile()) {
      currentIndex = 0;
      track.style.transform = 'translate3d(0,0,0)';
      return;
    }
    const offset = Math.round(currentIndex * getStepWidth());
    track.style.transform = `translate3d(-${offset}px,0,0)`;
  }

  prevBtn?.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    update();
  });

  nextBtn?.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % slides.length;
    update();
  });

  // Swipe táctil
  let startX = 0, dragging = false;
  carousel.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
    dragging = true;
  }, { passive: true });

  carousel.addEventListener('touchmove', e => {
    if (!dragging) return;
    const diffX = startX - e.touches[0].clientX;
    if (Math.abs(diffX) > 10) e.preventDefault(); // evita scroll vertical accidental
  }, { passive: false });

  carousel.addEventListener('touchend', e => {
    if (!dragging) return;
    dragging = false;
    const diffX = startX - e.changedTouches[0].clientX;

    if (diffX > 50) currentIndex = (currentIndex + 1) % slides.length;
    else if (diffX < -50) currentIndex = (currentIndex - 1 + slides.length) % slides.length;

    update();
  });

  // Recalcular al cargar todo (imágenes) y en resize
  window.addEventListener('load', update);
  window.addEventListener('resize', update);
  update();
});
