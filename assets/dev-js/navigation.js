const header = document.querySelector('.header');
const nav = document.querySelector('.main__navigation');
const navOpen = document.querySelector('.navigation__open');
const navClose = document.querySelector('.navigation__close');

// Open Main Navigation
if (navOpen) {
  navOpen.addEventListener(
    'click',
    () => {
      nav.classList.add('active');
      header.classList.add('nav-active');
      freeze();
    },
    false
  );
}

// Close Main Navigation
if (navClose) {
  navClose.addEventListener(
    'click',
    () => {
      nav.classList.remove('active');
      header.classList.remove('nav-active');
      unFreeze();
    },
    false
  );
}
