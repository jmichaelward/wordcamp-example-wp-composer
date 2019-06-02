<?php
/**
 * Plugin Name: WordCamp Content
 * Description: Registers custom post types and taxonomies for this site.
 * Author: Jeremy Ward, WebDevStudios
 * Author URI: https://webdevstudios.com
 */

add_action( 'plugins_loaded', [ new \JMichaelWard\WordCamp\ContentPlugin(), 'run' ] );
