var swiper = new Swiper('.swiper-container', {
    breakpoints: {
        400: {
            slidesPerView: 1,
            spaceBetween: 50,
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        999: {
            slidesPerView: 5,
            spaceBetween: 30,
        }
    },
    slidesPerView: 4,
    spaceBetween: 10,
    loop: true,
    zoom: {
        maxRatio: 1,
    },
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});