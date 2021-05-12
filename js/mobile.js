const hamburger = document.querySelector('.hamburger--js');
const topNavigation = document.querySelector('.top-navigation--js')

hamburger.addEventListener('click', () => {
  topNavigation.classList.toggle('active');
})