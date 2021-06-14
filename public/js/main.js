$(document).ready(function () {
    $('.news_wrap').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        nextArrow: '.next',
        prevArrow: '.prev',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

function showBurger() {
    let menu = document.getElementById('menu')
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }
}

function scrollDCW(block) {
    document.getElementById('menu').style.display = "none";

    document.querySelector(block).scrollIntoView({
        behavior: 'smooth'
    });
}