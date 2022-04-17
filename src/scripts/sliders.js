/* eslint-disable no-unused-vars */
/* global Swiper */

if (window.matchMedia('(max-width: 991px)').matches) {
  const gallery = new Swiper('.slider-gallery', {
    slidesPerView: 1,
    spaceBetween: 30,

    navigation: {
      nextEl: '.slider-gallery .swiper-button-next',
      prevEl: '.slider-gallery .swiper-button-prev',
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
  });
}

const team = new Swiper('.slider-team', {
  slidesPerView: 1,
  spaceBetween: 20,

  navigation: {
    nextEl: '.team .swiper-button-next',
    prevEl: '.team .swiper-button-prev',
  },

  breakpoints: {
    575: {
      slidesPerView: 2,
    },

    991: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});


const equipmentSliders = document.querySelectorAll('.slider-equipment');
if (equipmentSliders.length >= 2) {
  equipmentSliders.forEach((slider, index) => {
    slider.parentNode.classList.add(`equipment--${index}`);

    new Swiper(`.equipment--${index} .slider-equipment`, {
      slidesPerView: 1,
      spaceBetween: 20,

      navigation: {
        nextEl: `.equipment--${index} .swiper-button-next`,
        prevEl: `.equipment--${index} .swiper-button-prev`,
      },

      breakpoints: {
        991: {
          slidesPerView: 2,
        },
        1300: {
          spaceBetween: 40,
          slidesPerView: 3,
        },
      },
    });
  });
}

else {
  const equipment = new Swiper('.slider-equipment', {
    slidesPerView: 1,
    spaceBetween: 20,

    navigation: {
      nextEl: '.equipment .swiper-button-next',
      prevEl: '.equipment .swiper-button-prev',
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
      },

      991: {
        slidesPerView: 3,
      },
      1300: {
        spaceBetween: 40,
        slidesPerView: 4,
      },
    },
  });
}

const certificates = new Swiper('.slider-certificates', {
  slidesPerView: 1,
  spaceBetween: 20,

  navigation: {
    nextEl: '.certificates .swiper-button-next',
    prevEl: '.certificates .swiper-button-prev',
  },

  breakpoints: {
    575: {
      slidesPerView: 2,
    },

    991: {
      slidesPerView: 3,
    },

    1300: {
      spaceBetween: 40,
      slidesPerView: 4,
    },
  },
});

const priceList = [];
const price = new Swiper('.slider-price', {
  slidesPerView: 1,
  spaceBetween: 20,
  allowTouchMove: false,

  pagination: {
    el: '.slider-price-pagination',
    clickable: true,
    draggable: false,

    renderBullet(index, className) {
      return `<span class="${className}">${priceList[index]}</span>`;
    },
  },

  on: {
    init() {
      const wrapper = document.querySelector('.slider-price');
      const slides = wrapper.querySelectorAll('.swiper-slide');
      slides.forEach((slide) => {
        priceList.push(slide.getAttribute('data-title'));
      });
    },
  },
});
