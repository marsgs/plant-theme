$(document).ready(() => {
    $('#slideshow .container .slick').slick({
        fade: true,
        autoplaySpeed:2000,
        dots: true,
        prevArrow: $(".left-arrow"),
        nextArrow: $(".right-arrow"),
        appendDots:$(".new-dot"),
    });
});