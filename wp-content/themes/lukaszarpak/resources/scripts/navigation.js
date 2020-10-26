const hamburger = $('.mobile-nav-toggle');
const asideMenu = $('.mobile-menu-wrappper');
const overlay = $('.overlay');
const menuItems = $('#menu-main-menu li');

hamburger.click(toggleMenu);
menuItems.click(toggleMenu);

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
