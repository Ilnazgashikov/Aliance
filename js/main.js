const navbar = document.querySelector(".nav-bar");
const logo = document.querySelector(".logo-image use");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const swiper = new Swiper('.features-sliders', {
    speed: 400,
    autoHeight: false,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
        1260: {
            slidesPerView: 5,
          },
    }
  });

  const swiperSteps = new Swiper('.steps-slider', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: '.steps-button-next',
      prevEl: '.steps-button-prev',
    },
    breakpoints: {
      480: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      850: {
        slidesPerView: 3,
      },
      1060: {
        slidesPerView: 4,
      },
    }
});
const swiperblog = new Swiper('.blog-slider', {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    850: {
      slidesPerView: 2,
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

const modalDialog = document.querySelector(".modal-dialog");
const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");
modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault;
    console.log("click");
    modal.classList.add("modal-is-open");
    document.body.style.overflow = "hidden";
  });
});
modal.addEventListener("click", (event) => {
  if (this.event.target === modal) {
    modal.classList.remove("modal-is-open");
    document.body.style.overflow = "";
  }
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  document.body.style.overflow = "";
  modal.classList.remove("modal-is-open");
});

document.body.addEventListener('keydown', function(e) {
  if (e.key == "Escape") {
    modal.classList.remove("modal-is-open");
    document.body.style.overflow = "";
  }
});
