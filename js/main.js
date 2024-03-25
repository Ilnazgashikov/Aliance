const navbar = document.querySelector(".nav-bar");
const logo = document.querySelector(".logo-image use");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const swiper = new Swiper('.swiper', {
    speed: 400,
    autoHeight: false,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
          slidesPerView: 2,

        },
        // when window width is >= 480px
        768: {
          slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
          },
    }
  });
const lightMod = (event) => {
    navbar.classList.add("nav-bar-light");
    logo.href.baseVal = "img/sprites.svg#logo-black";
} 
const blackMod = (event) => {
    navbar.classList.remove("nav-bar-light");
    logo.href.baseVal = "img/sprites.svg#logo";
} 
const openMenu = (event) => {
    menu.classList.add("is-open");
    menuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden";
    lightMod();
}
const closeMenu = (event) => {
    menu.classList.remove("is-open");
    menuToggle.classList.remove("close-menu");
    document.body.style.overflow = "";
    blackMod();
}
window.addEventListener('scroll', ()=>{
    this.scrollY > 1? lightMod() : blackMod();
});
    menuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

