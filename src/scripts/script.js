/* global tippy, AOS */

tippy('[data-tippy-content]', {
  placement: 'right',
  allowHTML: true,
  maxWidth: 200,
  theme: 'cifrodent',
});

AOS.init({
  once: true,
  offset: 200,
});

window.addEventListener('load', () => {
  quicklink.listen();
});
