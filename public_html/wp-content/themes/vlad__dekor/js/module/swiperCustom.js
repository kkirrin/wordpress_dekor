export const initSwiperCustom = () => {
    const sliders = document.querySelectorAll('.slider-container__inner__inner');
    sliders.forEach((slider) => {
      let slideIndex = 0;
      const imgs = slider.querySelectorAll('img');
      const slides = Array.from(imgs);
      const slideCount = slides.length;
      const prevButton = slider.querySelector('.custom-bullet--prev');
      const nextButton = slider.querySelector('.custom-bullet--next');

      let startX, endX;

      slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
      });

      slider.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;

        if (endX - startX > 100) {
          slideIndex = (slideIndex - 1 + slideCount) % slideCount;
          showSlide(slideIndex);
        } else if (startX - endX > 100) {
          slideIndex = (slideIndex + 1) % slideCount;
          showSlide(slideIndex);
        }
      });

      prevButton.addEventListener('click', () => {
        slideIndex = (slideIndex - 1 + slideCount) % slideCount;
        showSlide(slideIndex);
      });

      nextButton.addEventListener('click', () => {
        slideIndex = (slideIndex + 1) % slideCount;
        showSlide(slideIndex);
      });

      function showSlide(index) {
        slides.forEach((slide, slideIndex) => {
          if (index === slideIndex) {
            slide.style.display = 'block';
          } else {
            slide.style.display = 'none';
          }
        });
      }

      showSlide(slideIndex);
    });
};
