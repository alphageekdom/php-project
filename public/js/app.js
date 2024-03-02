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
});
