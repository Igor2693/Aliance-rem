const nav = document.querySelector('.nav');
const logo = document.querySelector('.logo-svg use');

window.addEventListener('scroll', () => {
  if (this.scrollY > 1) {
    nav.classList.add("nav-light");
    logo.href.baseVal = "/img/sprite.svg#logo-dark";
  } else {
    nav.classList.remove("nav-light");
    logo.href.baseVal = "/img/sprite.svg#logo-light";
  }
})