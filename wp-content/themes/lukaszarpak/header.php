<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lukaszarpak</title>

	<?php
	/**
	 *  Get head tags
	 *
	 * @package lukaszarpak
	 */

	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<div class="header-content">
		<div class="mobile-nav-toggle">
			<div class="hamburger-menu-wrappper">
				<div class="hamburger-menu-btn"></div>
			</div>
		</div>
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		?>
		<div class="header-btn">
			<div class="btn contact-btn" id="contact-btn"><a href="#contact">Contact</a></div>
		</div>
<aside class="mobile-menu-wrappper">
	<?php
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
	?>
	<div class="menu-icons">

		<ul>
			<li>
				<a href="https://www.linkedin.com/in/%C5%82ukasz-szarpak-096b15149/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			</li>
			<li>
				<a href="https://github.com/lukaszarpak" target="_blank"><i class="fab fa-github"></i></a>
			</li>
			<li>
				<a href="https://www.facebook.com/Lukaszarpak" target="_blank"><i class="fab fa-facebook"></i></a>
			</li>
		</ul>
	</div>
	<nav class="mobile-nav">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
				)
			);
			?>
	</nav>
	<div class="menu-footer">
	<a href="
		<?php
			/**
			 * Redirects to the home page
			 *
			 * @package jak
			 */

			echo esc_url( home_url( '/' ) );
		?>
			">
			&copy;
			<?php
			echo esc_attr(
				date_i18n(
					_x( 'Y ', 'copyright date format', 'jak' )
				)
			);
			bloginfo( 'name' );
			?>
	</a>
</div>	
</aside>
</div>
</header>
<div class="left-icons">
	<ul>
		<li>
			<a href="https://www.linkedin.com/in/%C5%82ukasz-szarpak-096b15149/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		</li>
		<li>
			<a href="https://github.com/lukaszarpak" target="_blank"><i class="fab fa-github"></i></a>
		</li>
		<li>
			<a href="https://www.facebook.com/Lukaszarpak" target="_blank"><i class="fab fa-facebook"></i></a>
		</li>
	</ul>
</div>
