<div class="contact-section" id="contact">
	<section>
		<div class="contact-top">
			<h2 class="centered">Contact</h2>
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<p class="limit-width centered">If you have any questions, or you are interested in a cooperation, or you just simply want to know more about me you are welcome to contact me through these channels.</p>
		</div>
		<div class="contact-columns">
			<ul>
				<li>
					<a href="tel:+4550377179" class="heading-font"><i class="fas fa-phone-alt"></i>+45 50 37 71 79</a>
				</li>
				<li>
					<a href="mailto:szarpak90@gmail.com" class="heading-font"><i class="fas fa-at"></i>szarpak90@gmail.com</a>
				</li>
				<li>
					<a href="https://www.facebook.com/Lukaszarpak" target="_blank" class="heading-font"><i class="fab fa-facebook"></i>Łukasz Szrpak</a>
				</li>
			</ul>
		</div>
	</section>
</div>

<footer>
	<div class="footer-first">
			<?php
			/**
			 * Footer navigation
			 *
			 * @package jak
			 */

			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
				)
			);
			?>
	</div>
	<div class="footer-second">
		<ul>
			<li>
				<a href="/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			</li>
			<li>
				<a href="/" target="_blank"><i class="fab fa-github"></i></a>
			</li>
			<li>
				<a href="/" target="_blank"><i class="fab fa-facebook"></i></a>
			</li>
		</ul>
	</div>		
	<div class="footer-third">
		&copy;
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
</footer>

<?php
/**
 * Adds scripts to the bottom of the document
 *
 * @package jak
 * @since 1.0.0
 */

wp_footer();
?>

</body>
</html>
