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
});

//offers-swiper
Swiper.use([Navigation, Pagination, Keyboard]);
const offersSwiper = new Swiper(".offers__swiper", {
  slidesPerView: 3.1,
  slidesPerGroup: 1,
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
});
