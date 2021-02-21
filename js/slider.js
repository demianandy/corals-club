$(document).ready(function(){
    $('.slider').slick({
        arrows: true,
        dots: true,
        adaptiveHeight: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        speed: 1000,
        easing: 'easeInOutElastic',
        autoplay: true,
        autoplaySpeed: 1500,
        pauseOnFocus: true,
        pauseOnHover: true,
        pauseOnDotsHover: true,
        draggable: false,
        touchThreshold: 10,
        waitForAnimate: true,
        centerMode: false,
    });
})