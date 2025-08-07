  const track = document.querySelector('.carousel-track');
  const cards = document.querySelectorAll('.card');
  const prevBtn = document.querySelector('.carousel-button.prev');
  const nextBtn = document.querySelector('.carousel-button.next');

  let currentIndex = 0;

  function updateCarousel() {
    const width = cards[0].clientWidth;
    track.style.transform = `translateX(-${currentIndex * width}px)`;
  }

  nextBtn.addEventListener('click', () => {
    if (currentIndex < cards.length - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = cards.length - 1;
    }
    updateCarousel();
  });

  window.addEventListener('resize', updateCarousel);

