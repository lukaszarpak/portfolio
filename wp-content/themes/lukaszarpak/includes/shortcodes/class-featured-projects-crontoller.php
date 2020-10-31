<?php
/**
 * Init class
 *
 * @package lukaszarpak
 * @since 1.0.0
 */

namespace Lukaszarpak\Shortcodes;

/**
 * Init class
 */
class Featured_Projects_Crontoller {

		/**
		 * Featured projects shortcodes
		 *
		 * @param $attr shortcode atributes
		 */
	public function projects_shortcode( $attr ) {

		shortcode_atts(
			array(
				'category_id'     => 3,
				'number_of_posts' => 5,
			),
			$attr
		);

		$posts  = get_posts(
			array(
				'category'    => $attr['category_id'],
				'numberposts' => $attr['number_of_posts'],
			)
		);
		$output = '<section class="card-list">';

		foreach ( $posts as $p ) {
			$output .= '<article class="card" tabindex="1">
			<div class="card-header">
				<h3>' . esc_attr( $p->post_title ) . '</h3>
			</div>

			<div class="card-description">
				<p>' . esc_attr( wp_trim_words( get_the_excerpt( $p ), 20, '...' ) ) . '</p>
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
		};

		$output .= '</section>';

		return $output;
	}
}
