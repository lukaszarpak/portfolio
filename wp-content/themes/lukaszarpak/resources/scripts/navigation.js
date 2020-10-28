const hamburger = $('.mobile-nav-toggle');
const asideMenu = $('.mobile-menu-wrappper');
const overlay = $('.overlay');
const menuItems = $('#menu-main-menu li');
const logo = $('.header-content > .custom-logo-link');

hamburger.click(toggleMenu);
menuItems.click(toggleMenu);

function toggleMenu() {
	if (!asideMenu.hasClass('close') && !asideMenu.hasClass('open')) {
		asideMenu.addClass('open');
		logo.addClass('hide');
	} else if (asideMenu.hasClass('close')) {
		asideMenu.addClass('open');
		asideMenu.removeClass('close');
		logo.addClass('hide');
		logo.removeClass('show');
	} else {
		asideMenu.addClass('close');
		asideMenu.removeClass('open');
		logo.addClass('show');
		logo.removeClass('hide');
	}
}
