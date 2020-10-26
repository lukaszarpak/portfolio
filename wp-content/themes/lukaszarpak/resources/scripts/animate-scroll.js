jQuery(document).ready(() => {
	const headerHeight = $('header').height();

	$('.contact-btn').click(function () {
		$('html, body').animate(
			{
				scrollTop: $('#contact').offset().top - headerHeight,
			},
			1000
		);
	});

	$('.wp-block-button__link').click(function (event) {
		const id = $(event.currentTarget).attr('href');

		if (id == undefined) {
			return;
		}

		const target = $(id)[0];

		$('html, body').animate(
			{
				scrollTop: $(target).offset().top - headerHeight,
			},
			1000
		);
	});
});
