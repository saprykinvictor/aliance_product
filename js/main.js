const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logo = document.querySelector('.logo');
const mobMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');
const isFront = document.body.classList.contains('front-page');

const lightModeOn = (event) => {
  navbar.classList.add('navbar-light');
};

const lightModeOff = (event) => {
  navbar.classList.remove('navbar-light');
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
}

const openMenu = (event) => {
  menu.classList.add('is-open');
  mobMenuToggle.classList.add('close-menu');
  document.body.style.overflow = 'hidden';
  lightModeOn();
};

const closeMenu = (event) => {
  menu.classList.remove('is-open');
  mobMenuToggle.classList.remove('close-menu');
  document.body.style.overflow = '';
  lightModeOff();
};

window.addEventListener('scroll', () => {
  this.scrollY > 5 ? changeNavHeight('74px') : changeNavHeight('94px');
  if (isFront) {
    this.scrollY > 5 ? lightModeOn() : lightModeOff();
  }
});

mobMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper('.steps-slider', {
  speed: 700,
  loop: true,
  slidesPerView: 1,

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
  },

  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
  },
});

const swiperExperts = new Swiper('.experts-slider', {
  speed: 700,
  loop: true,
  // slidesPerView: 1,

  // breakpoints: {
  //   576: {
  //     slidesPerView: 2,
  //   },
  //   768: {
  //     slidesPerView: 3,
  //   },
  //   1024: {
  //     slidesPerView: 5,
  //   },
  // },

  navigation: {
    nextEl: '.experts-button-next',
    prevEl: '.experts-button-prev',
  },
});

const swiperCenter = new Swiper('.center-slider', {
  speed: 700,
  loop: true,
  spaceBetween: 30,
  

  // breakpoints: {
  //   991: {
  //     slidesPerView: 3,
  //   },
  // },

  navigation: {
    nextEl: '.center-button-next',
    prevEl: '.center-button-prev',
  },
});



const swiper = new Swiper('.advantages-slider', {
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
    },
  },

  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
});

const swiperBlog = new Swiper('.blog-slider', {
  speed: 700,
  loop: true,
  slidesPerView: 1,
  spaceBetween: 40,

  breakpoints: {
    991: {
      slidesPerView: 2,
    },
  },

  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
});


// Modal

const closeBtn = document.querySelector('.modal__close');

const modalInput = document.querySelectorAll('.modal-input');

closeBtn.addEventListener('click', () => {
  console.log(modalInput.values);
  
  modalInput.values = '';
})

