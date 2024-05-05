const navbar = document.querySelector(".nav-bar");
const logo = document.querySelector(".logo-image use");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const headerNav = document.querySelector(".header-nav");
const isFront = document.body.classList.contains("front-page");
const navBarToggle = document.body.querySelector(".nav-bar-toggle");
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
        850: {
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
  const swiperSteps = new Swiper (".steps-slider", {
    speed:400,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: ".steps-button-next",
      prevEl: ".steps-button-prev",
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
  })
  const swiperFeatures = new Swiper('.features-sliders', {
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
        850: {
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
  const swiperImg = new Swiper('.img-slider', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: '.img-button-next',
      prevEl: '.img-button-prev',
    },
    breakpoints: {
      850: {
        slidesPerView: 2,
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
} 
const blackMod = (event) => {
    navbar.classList.remove("nav-bar-light");
} 
const changeNavHeight = (height) => {
  navbar.style.height = height;
};
const openMenu = (event) => {
    menu.classList.add("is-open");
    menuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden";
    if (isFront) {
    lightMod();
    }
}
const closeMenu = (event) => {
    menu.classList.remove("is-open");
    menuToggle.classList.remove("close-menu");
    document.body.style.overflow = "";
    if (isFront) {
    blackMod();
    }
}
window.addEventListener(`resize`, event => {
	changeNavHeight("5.875rem")
}, false);
window.addEventListener('scroll', ()=>{
  if (window.innerWidth > 1060) {
    this.scrollY > 1? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  }
  else {
    changeNavHeight("5.875rem")
  }

  if (isFront) {
    this.scrollY > 1? lightMod() : blackMod();
  }
});
menuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

let currentModal;
let modalDialog;
let alertModal = document.querySelector("#alert-modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");

const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    console.log(currentModal);
    currentModal.classList.toggle("modal-is-open");
    modalDialog= currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", event => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("modal-is-open");
      }
    });
  });
});
document.body.addEventListener('keydown', function(e) {
  if (e.key == "Escape") {
    currentModal.classList.remove("modal-is-open");
    document.body.style.overflow = "";
  }
});

const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
  });
  validation
  .addField('[name=user_name]', [
    {
      rule: 'required',
      errorMessage: "Укажите имя",
    },
    {
      rule: 'maxLength',
      value: 30,
      errorMessage: "Максимально 30 символов",
    },
  ])
  .addField('[name=user_phone]', [
    {
      rule: 'required',
      errorMessage: 'Укажите телефон',
    },
    {
      rule: 'minLength',
      value: 18,
      errorMessage: 'Некорректный номер',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then ((response) => {
        if (response.ok) {
          thisForm.reset();
          if (currentModal != null) {
            currentModal.classList.remove("modal-is-open");
          }
          alertModal.classList.add("modal-is-open");
          currentModal = alertModal;
          modalDialog= currentModal.querySelector(".modal-dialog");
          currentModal.addEventListener("click", event => {
            if (!event.composedPath().includes(modalDialog)) {
              currentModal.classList.remove("modal-is-open");
            }
          });
        }
        else {
          alert(response.textContent)
        }
      });
    }
    ajaxSend(formData);
  });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});