jQuery(document).ready(function ($) {
  setTimeout(() => {
    $('#load').addClass('opacity-0 !-z-50');
  }, 500);
});

document.addEventListener('DOMContentLoaded', function () {
  /* Responsive Navigation Toggling */
  const navSlide = () => {
    const burger = document.querySelector('.all-lines');
    const nav = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
      nav.classList.toggle('nav-active');

      // Burger Animation
      burger.classList.toggle('toggle');
    });
  };
  navSlide();

  /* use window.scrollY */
  var scrollpos = window.scrollY;
  var header = document.getElementById('main-nav');

  function add_class_on_scroll() {
    header.classList.add('header-sticky');
  }

  function remove_class_on_scroll() {
    header.classList.remove('header-sticky');
  }

  window.addEventListener('scroll', function () {
    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if (scrollpos > 10) {
      add_class_on_scroll();
    } else {
      remove_class_on_scroll();
    }
  });
});
