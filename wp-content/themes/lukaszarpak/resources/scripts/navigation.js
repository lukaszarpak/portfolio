const hamburger = $('.mobile-nav-toggle');
const asideMenu = $('.mobile-menu-wrappper');
const overlay = $('.overlay');

hamburger.click(openMenu);
overlay.click(hideMenu);
asideMenu.click(hideMenu);
$(window).resize(hideMenu);

function openMenu() {
	asideMenu.addClass('open');
	asideMenu.removeClass('close');
	overlay.addClass('open');
}

function hideMenu() {
	asideMenu.removeClass('open');
	asideMenu.addClass('close');
	overlay.removeClass('open');
}
