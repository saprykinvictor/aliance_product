const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logo = document.querySelector('.logo');
const mobMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');

const lightModeOn = (event) => {
  navbar.classList.add('navbar-light');
  logo.style.display = 'block';
  logoLight.style.display = 'none';
}

const lightModeOff = (event) => {
  navbar.classList.remove('navbar-light');
  logo.style.display = 'none';
  logoLight.style.display = 'block';
}

const openMenu = (event) => {
  menu.classList.add('is-open');
  mobMenuToggle.classList.add('close-menu');
  document.body.style.overflow = 'hidden';
  lightModeOn();
}

const closeMenu = (event) => {
  menu.classList.remove('is-open');
  mobMenuToggle.classList.remove('close-menu');
  document.body.style.overflow = '';
  lightModeOff();
 
}


window.addEventListener('scroll', () => {
  this.scrollY > 5 ? lightModeOn() : lightModeOff();
});

mobMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});


const swiper = new Swiper('.swiper', {
  speed: 700,
  slidesPerView: 1,
  loop: true,
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

    1300: {
      slidesPerView: 5,
    }
  },

  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
});
