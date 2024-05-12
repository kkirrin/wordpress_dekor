export const initSlider = () => {
    const item = document.querySelector('.main-item');
        let swiper;
        if (item) {
            swiper = new Swiper(item, {
                // loop: true,
                autoplay: {
                    // delay: 1000
                },
                speed: 2000,
                effect: "fade",
                direction: 'vertical',
                autoHeight: true,

                spaceBetween: 15,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                pagination: {
                  clickable: true,
                  el: `swiper-pagination`,
               },breakpoints: { 480: { enabled: false, }
              }
            });
        }
        const newItems = document.querySelector('.new-items');
        let swiper1;
        if (newItems) {
          swiper1 = new Swiper(newItems, {
            speed: 900,
            spaceBetween: 15,
            slidesPerView: 4,
            equalHeight: true,
            breakpoints: {
              320: {
                slidesPerView: 1,
                spaceBetween: 20,
              },
              375: {
                slidesPerView: 2,
                spaceBetween: 20,
              },
              480: {
                slidesPerView: 2,
                spaceBetween: 20,
              },
              767: {
                slidesPerView: 2,
              },
              1023: {
                slidesPerView: 4,
                spaceBetween: 30,
              },
            },
            navigation: {
              nextEl: '.new__items__next',
              prevEl: '.new__items__prev',
            },
          });
        }
        
        let swiper5 = new Swiper(".mini-gallery", {
          navigation: {
            nextEl: '.custom-bullet--new-next',
            prevEl: '.custom-bullet--new--prev',
          },
        });
        
    const bestItems = document.querySelector('.best-items');
        let swiper2
        if (bestItems) {
            swiper2 = new Swiper(bestItems, {
                speed: 900,
                autoHeight: true,

                spaceBetween: 15,
                slidesPerView: 4,
                equalHeight: true,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    375: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    1023: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },

                // If we need pagination
                pagination: {
                  clickable: true,
                  el: `swiper-pagination`,
               },
               navigation: {
                nextEl: '.best__items__next',
                prevEl: '.best__items__prev',
            },
    
            });
        }
}