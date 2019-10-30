var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});