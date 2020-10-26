const projectsToggle = $('.projects-toggle');
const projectsMenu = $('.projects-menu');
const projectsMenuExit = $('.projects-menu-exit');

projectsToggle.click(openProjectsMenu);
projectsMenuExit.click(hideProjectsMenu);

function openProjectsMenu() {
	projectsMenu.addClass('open');
	projectsMenu.removeClass('close');
}

function hideProjectsMenu() {
	projectsMenu.addClass('close');
	projectsMenu.removeClass('open');
}
