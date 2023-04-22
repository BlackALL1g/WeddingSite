let menu = document.querySelector('#menu-btn')
let navbar = document.querySelector('.header .navbar')

menu.onclick = () => {
    menu.classList.toggle('fa-times')
    navbar.classList.toggle('active')
};

window.onscroll = () => {
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')
};

var swiper = new Swiper(".home-slider", {

    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    // mousewheel: true,
    // effect: "coverflow",

    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper = new Swiper(".service-slider", {

    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    grabCursor: true,
    mousewheel:true,
    
    autoplay:{
        delay:6500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".reviews-slider", {

    slidesPerView: 3,
    loop: true,
    spaceBetween: 30,
    grabCursor: true,
    mousewheel: true,

    autoplay:{
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});