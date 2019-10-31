var swiper = new Swiper('.swiper-container', {
  breakpoints: {
    400: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    600:{
      slidesPerView: 2,
      spaceBetween: 50,
    },
    999: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


