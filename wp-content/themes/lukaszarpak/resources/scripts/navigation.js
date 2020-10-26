const hamburger = $('.mobile-nav-toggle');
const asideMenu = $('.mobile-menu-wrappper');
const overlay = $('.overlay');

hamburger.click(toggleMenu);

function toggleMenu() {
	if (!asideMenu.hasClass('close') && !asideMenu.hasClass('open')) {
		asideMenu.addClass('open');
	} else if (asideMenu.hasClass('close')) {
		asideMenu.addClass('open');
		asideMenu.removeClass('close');
	} else {
		console.log('close');
		asideMenu.removeClass('open');
		asideMenu.addClass('close');
	}
}
