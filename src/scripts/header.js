/* Логика для выпадающего списка */
const headerDropdown = document.querySelectorAll('#header .header__nav .dropdown');
headerDropdown.forEach((dropdown) => {
  let dropdownTimer = null;

  if (window.matchMedia('(min-width: 1200px)').matches) {
    dropdown.addEventListener('mouseenter', (e) => {
      // Если был быстро выбран другой список
      if (e.target === dropdown) headerDropdown.forEach((item) => item.classList.remove('dropdown--show'));
      dropdown.classList.add('dropdown--show');
      clearTimeout(dropdownTimer);
    });

    dropdown.addEventListener('mouseleave', () => {
      dropdownTimer = window.setTimeout(() => dropdown.classList.remove('dropdown--show'), 300);
    });
  }

  else {
    dropdown.addEventListener('click', () => {
      dropdown.classList.toggle('dropdown--show');
    });

    window.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('dropdown--show');
      }
    });
  }
});

/* Логика для мобильного меню */
const headerMobile = document.querySelector('.header .header__mobile');
const mobileMenuButton = headerMobile.querySelector('.hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const mobileOverlay = mobileMenu.querySelector('.mobile-menu__overlay');

mobileMenuButton.addEventListener('click', () => {
  mobileMenuButton.classList.toggle('is-active');
  mobileMenu.classList.toggle('mobile-menu--open');
});

mobileOverlay.addEventListener('click', () => {
  mobileMenuButton.classList.remove('is-active');
  mobileMenu.classList.remove('mobile-menu--open');
});
