// Mobile Navigation Menu

const menuButton = document.querySelector(".mobile-btn");
const mobileNav = document.querySelector('.mobile-nav');

menuButton.addEventListener('click', function() {
    mobileNav.classList.toggle('is-active');
});
