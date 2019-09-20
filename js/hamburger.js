
// Navigation
const Hamburger = document.querySelector('.hamburger');

const toggleNavlinks = e => {
  const Navbar = document.querySelector('.navbar');
  Navbar.classList.toggle('show-navlinks');
}
Hamburger.addEventListener('click', toggleNavlinks, false);