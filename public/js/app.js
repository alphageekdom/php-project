document.addEventListener('DOMContentLoaded', function () {
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  mobileMenuBtn.addEventListener('click', function () {
    mobileMenu.classList.toggle('show');
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth <= 600) {
      mobileMenu.classList.remove('show');
    }
  });

  window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    if (window.scrollY > header.offsetTop) {
      header.classList.add('sticky-nav');
    } else {
      header.classList.remove('sticky-nav');
    }
  });
});
