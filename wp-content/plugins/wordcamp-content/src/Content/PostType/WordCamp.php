<?php
/**
 * Defines a WordCamp post type to register with WordPress.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp\Content\PostType
 */

namespace JMichaelWard\WordCamp\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class WordCamp
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp\Content\PostType
 */
class WordCamp extends PostType {
	/**
	 * Post type slug.
	 *
	 * @var string
	 * @since 2019-06-02
	 */
	protected $slug = 'wordcamp';

	/**
	 * Get the post type labels.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-06-02
	 * @return array
	 */
	protected function get_labels() : array {
		return [
			'name'          => esc_html__( 'WordCamps', 'jmichaelward-wordcamp' ),
			'singular_name' => esc_html__( 'WordCamp', 'jmichaelward-wordcamp' ),
		];
	}
}
