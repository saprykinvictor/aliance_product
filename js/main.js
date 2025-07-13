const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
window.addEventListener('scroll', () => {
  if (this.scrollY > 5) {
    navbar.classList.add('navbar-light');
    logo.href.baseVal = "img/sprite.svg#logo-dark";
    
  } else {
    
      navbar.classList.remove('navbar-light');
    logo.href.baseVal = "img/sprite.svg#logo-light";
  }
});




