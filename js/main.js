const navbar = document.querySelector(".nav-bar");
const logo = document.querySelector(".logo-image use");
const menutogle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

window.addEventListener('scroll', ()=>{
    if (this.scrollY > 1) {
        navbar.classList.add("nav-bar-light");
        logo.href.baseVal = "img/sprites.svg#logo-black";
    }
    else {
        navbar.classList.remove("nav-bar-light");
        logo.href.baseVal = "img/sprites.svg#logo";
    }
});
menutogle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.toggle("is-open");

});

