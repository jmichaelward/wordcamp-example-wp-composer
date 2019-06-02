<?php
/**
 * Defines a Service which registers custom content types with WordPress.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp\Content
 */

namespace JMichaelWard\WordCamp\Content;

use JMichaelWard\WordCamp\Content\PostType as PostType;
use JMichaelWard\WordCamp\Content\Taxonomy as Taxonomy;
use WebDevStudios\OopsWP\Structure\Content\ContentTypeInterface;
use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class ContentRegistrar
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp\Content
 */
class ContentRegistrar extends Service {
	/**
	 * The ContentType objects this service registers.
	 *
	 * @var array
	 * @since 2019-06-02
	 */
	private $content_types = [
		PostType\WordCamp::class,
		Taxonomy\SessionType::class,
	];

	/**
	 * Hooks for this Service.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-06-02
	 */
	public function register_hooks() {
		add_action( 'init', [ $this, 'register_content_types' ] );
	}

	/**
	 * Hookable callback to register content types with WordPress.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-06-02
	 */
	public function register_content_types() {
		foreach ( $this->content_types as $content_type_class ) {
			$this->register_content_type( new $content_type_class() );
		}
	}

	/**
	 * Call methods on individual ContentType objects to set them up.
	 *
	 * @param ContentTypeInterface $content_type An object which implements ContentTypeInterface.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-06-02
	 */
	private function register_content_type( ContentTypeInterface $content_type ) {
		$content_type->register();
	}
}
