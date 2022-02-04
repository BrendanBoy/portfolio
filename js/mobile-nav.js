// Mobile Navigation Menu

const menuButton = document.querySelector(".mobile-btn");
const mobileNav = document.querySelector('.mobile-nav');

menuButton.addEventListener('click', function() {
    mobileNav.classList.toggle('is-active');
});

mobileNav.addEventListener('click', function() {
    mobileNav.classList.toggle('is-active');
});

const debounce = (func, wait, immediate) => {
	var timeout;
	return function() {
		const context = this, args = arguments;
		const later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		const callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

var screenCheck = debounce(function() {
    if (screen.width >= 768) {
        mobileNav.classList.remove('is-active');
    }
}, 250);

window.addEventListener('resize', screenCheck);