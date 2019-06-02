<?php
/**
 * Defines a SessionType taxonomy to register with WordPress.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp\Content\Taxonomy
 */

namespace JMichaelWard\WordCamp\Content\Taxonomy;

use WebDevStudios\OopsWP\Structure\Content\Taxonomy;

/**
 * Class SessionType
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp\Content\Taxonomy
 */
class SessionType extends Taxonomy {
	/**
	 * Slug for this taxonomy.
	 *
	 * @var string
	 * @since 2019-06-02
	 */
	protected $slug = 'session-type';

	/**
	 * Object types this taxonomy supports.
	 *
	 * @var array
	 * @since 2019-06-02
	 */
	protected $object_types = [ 'wordcamp' ];

	/**
	 * Get labels for this taxonomy.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-06-02
	 * @return array
	 */
	protected function get_labels() : array {
		return [
			'name'          => esc_html__( 'Sessions', 'jmichaelward-wordcamp' ),
			'singular_name' => esc_html( 'Session', 'jmichaelward-wordcamp' ),
		];
	}
}
