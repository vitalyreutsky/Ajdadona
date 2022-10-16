import Swiper, {
  EffectFade,
  Keyboard,
  Navigation,
  Pagination,
  Scrollbar,
  Thumbs,
} from "swiper";

//certificates-swiper
Swiper.use([Navigation, Pagination, Keyboard]);
const certificatesSwiper = new Swiper(".certificates__swiper", {
  slidesPerView: 5,
  slidesPerGroup: 1,
  spaceBetween: 40,
  loop: true,
  centeredSlides: true,
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },

  speed: 1000,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
    375: {
      slidesPerView: 2.5,
      slidesPerGroup: 1,
    },
    768: {
      slidesPerView: 5,
      slidesPerGroup: 1,
    },
  },
});

//offers-swiper
Swiper.use([Navigation, Pagination, Keyboard]);
const offersSwiper = new Swiper(".offers__swiper", {
  spaceBetween: 20,
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },

  speed: 1000,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: false,
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      centeredSlides: true,
    },
    375: {
      slidesPerView: 1.8,
      slidesPerGroup: 1,
      loop: true,
      centeredSlides: true,
    },
    768: {
      slidesPerView: 3.1,
      slidesPerGroup: 1,
      loop: false,
      centeredSlides: false,
    },
  },
});
