const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "/img/sprite.svg#logo-black";
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "/img/sprite.svg#logo-light";
};


const openMenu = (event) => { // Функция открыванию меню
  menu.classList.add("is-open"); // вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрещает прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => { // Функция закрытия меню
  menu.classList.remove("is-open"); // убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //возвращает прокрутку сайта под меню
  lightModeOff(); 
};

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiper = new Swiper('.swiper', {
  speed: 400,
  loop: true,
  autoHeight: true,
  slidesPerView: 5,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});


  