const projectsToggle = $('.projects-toggle');
const projectsMenu = $('.projects-menu');
const projectsMenuExit = $('.projects-menu-exit');

projectsToggle.click(toggleProjectsMenu);
projectsMenuExit.click(toggleProjectsMenu);
$('.contact-btn').click(hideProjectsMenu);

function hideProjectsMenu() {
	if (projectsMenu.hasClass('open')) {
		projectsMenu.removeClass('open');
		projectsMenu.addClass('close');
	}
}

function toggleProjectsMenu() {
	if (!projectsMenu.hasClass('close') && !projectsMenu.hasClass('open')) {
		projectsMenu.addClass('open');
	} else if (projectsMenu.hasClass('close')) {
		projectsMenu.addClass('open');
		projectsMenu.removeClass('close');
	} else {
		projectsMenu.addClass('close');
		projectsMenu.removeClass('open');
	}
}
