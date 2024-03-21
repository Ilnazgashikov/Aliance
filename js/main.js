const navbar = document.querySelector(".nav-bar");
window.addEventListener('scroll', ()=>{
    if (this.scrollY > 1) {
        navbar.classList.add("nav-bar-light");
        document.getElementById("logo-image").src="../img/logo-black.svg";
        
    }
    else {
        navbar.classList.remove("nav-bar-light");
        document.getElementById("logo-image").src="../img/logo.svg";
    }
})