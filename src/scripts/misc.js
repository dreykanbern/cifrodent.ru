const map = document.getElementById('map-container');

if (map) {
  const script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2ee8c0203e8011213a31527b420f11402ed2094b98b1d44e5451baad578b10f3&width=100%25&;height=100%&lang=ru_RU&scroll=true';

  window.addEventListener('scroll', () => {
    if (window.pageYOffset >= map.offsetTop - 2000) map.append(script);
  });
}
