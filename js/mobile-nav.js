// Mobile Navigation Menu

const menuButton = document.querySelector(".mobile-btn");
const mobileNav = document.querySelector('.mobile-nav');
const overlay = document.getElementById('overlay');
const mainPage = document.querySelector('html');

// menuButton.addEventListener('click', function() {
//     mobileNav.classList.toggle('is-active');
// });

mobileNav.addEventListener('click', function() {
    // mobileNav.classList.toggle('is-active');
    closeNav();
});

function openNav() {
    mobileNav.classList.add('is-active');
    overlay.style.display = "block";
    mainPage.style.overflow = "hidden";
}

function closeNav() {
    mobileNav.classList.remove('is-active');
    overlay.style.display = "none";
    mainPage.style.overflow = "auto";
}

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
    if (window.innerWidth >= 768) {
        closeNav();
    }
}, 250);

window.addEventListener('resize', screenCheck);