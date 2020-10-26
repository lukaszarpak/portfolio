<?php
/**
 * Get header
 *
 * @package lukaszarpak
 * @since 1.0.0
 */

get_header();
?>

<div class="overlay"></div>

<div class="main-wrapper">
	<h3 class="projects-toggle">More projects <i class="fas fa-caret-down"></i></h3>
	<aside class="projects-menu">
		<span class="projects-menu-exit"><i class="fas fa-times"></i></span>
		<h2 class="section-title">Projects for fun</h2>

		<?php
		$projects_posts = get_posts(
			array(
				'category'    => 5,
				'numberposts' => 20,
			)
		);
		$output         = '<section class="card-list">';

		foreach ( $projects_posts as $p ) {
			$output .= '
			<article class="card">
				<div class="card-header">
					<h3><a href="' . esc_url( get_post_permalink( $p->ID ) ) . '">' . esc_attr( $p->post_title ) . '</a></h3>
				</div>
				<div class="card-tags">';


				$post_tags = get_the_tags( $p->ID );

			if ( $post_tags ) {
				foreach ( $post_tags as $post_tag ) {
					$output .= '<span>' . $post_tag->name . '</span>';
				}
			}

				$output .= '</div>

				<div class="card-description">
					<p>' . esc_attr( wp_trim_words( get_the_excerpt( $p ), 8, '...' ) ) . '</p>
				</div>
				
				<div class="card-more">
					<a href="' . esc_url( get_post_permalink( $p->ID ) ) . '">Learn more</a>
				</div>
			</article>';
		}

		$output .= '</section>';

		echo html_entity_decode( $output );
		?>
		<h2 class="section-title">Commercial Projects</h2>

		<?php

		$projects_posts = get_posts(
			array(
				'category'    => 5,
				'numberposts' => 20,
			)
		);

		$output = '<section class="card-list">';

		foreach ( $projects_posts as $p ) {
			$output .= '
			<article class="card">
				<div class="card-header">
					<h3><a href="' . esc_url( get_post_permalink( $p->ID ) ) . '">' . esc_attr( $p->post_title ) . '</a></h3>
				</div>
				
				<div class="card-description">
					<p>' . esc_attr( wp_trim_words( get_the_excerpt( $p ), 8, '...' ) ) . '</p>
				</div>
				
				<div class="card-tags">';

			$post_tags = get_the_tags( $p->ID );

			if ( $post_tags ) {
				foreach ( $post_tags as $post_tag ) {
					$output .= '<span>' . $post_tag->name . '</span>';
				}
			}

			$output .= '</div>
				<div class="card-more">
					<a href="' . esc_url( get_post_permalink( $p->ID ) ) . '">Learn more</a>
				</div>
			</article>';
		}

		$output .= '</section>';

		echo html_entity_decode( $output );
		?>


	</aside>
	<main>

		<h1><?php echo esc_html( get_the_title() ); ?></h1>
		<div class="card-tags">

		<?php

			$post_tags = get_the_tags();

			$output = '';

		if ( $post_tags ) {
			foreach ( $post_tags as $post_tag ) {
				$output .= '<span>' . $post_tag->name . '</span>';
			}
		}

			echo html_entity_decode( $output );

		?>
		</div>
		<?php the_content(); ?>
	</main>


</div>



<?php
/**
 * Get footer
 *
 * @package lukaszarpak
 * @since 1.0.0
 */

get_footer();
?>
