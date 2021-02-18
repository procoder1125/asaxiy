var fixed = document.querySelector('.fixed');

fixed.onclick = function() {
    fixed.style.display = 'none';
    body.style.transition = '5000ms';
}

var swiper = new Swiper('.swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});



var swiper = new Swiper('.swiper-container1', {
    slidesPerView: 10,
    // centeredSlides: true,
    spaceBetween: 1,
    freeMode: true,
    grabCursor: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});