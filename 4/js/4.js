var swiper = new Swiper('.swiper-container', {
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