const group = $('.cards-wrapper');
const cardsWrapper = $('.cards-wrapper > div');

updatePosition();

$(window).resize(updatePosition);

function updatePosition() {
	cardsWrapper.css('width', group.width());
}
