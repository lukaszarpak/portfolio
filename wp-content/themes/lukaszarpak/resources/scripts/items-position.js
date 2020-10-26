const leftIcons = $('.left-icons');
const hamburger1 = $('.mobile-nav-toggle');
const contactBtn = $('#contact-btn');
const mailbox = $('.mailbox');
const group = $('.cards-wrapper');
const cardsWrapper = $('.cards-wrapper > div');

updatePosition();

$(window).resize(updatePosition);

function updatePosition() {
	console.log(group.width());
	cardsWrapper.css('width', group.width());

	leftIcons.css('left', hamburger.position().left);
	mailbox.css(
		'left',
		contactBtn.position().left -
			(mailbox.outerWidth() - contactBtn.outerWidth())
	);
}
