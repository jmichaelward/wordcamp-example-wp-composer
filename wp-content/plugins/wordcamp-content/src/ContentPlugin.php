<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp
 */

namespace JMichaelWard\WordCamp;

use JMichaelWard\WordCamp\Content\ContentRegistrar;
use WebDevStudios\OopsWP\Structure\Plugin\Plugin;

/**
 * Class Plugin
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since   2019-06-02
 * @package JMichaelWard\WordCamp
 */
class ContentPlugin extends Plugin {
	/**
	 * Register this plugin's services.
	 *
	 * @var array
	 * @since 2019-06-02
	 */
	protected $services = [
		ContentRegistrar::class,
	];
}
