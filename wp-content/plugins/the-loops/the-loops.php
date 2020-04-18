<?php
/**
 * The Loops plugin
 *
 * The Loops allows you to query the WordPress database for content and display it in a page without having to write php code.
 *
 * @package The_Loops
 */
/**
 * Plugin Name: The Loops
 * Plugin URI: http://wordpress.org/plugins/the-loops/
 * Description: The Loops allows you to query the WordPress database for content and display it in a page without having to write php code.
 * Author: Ulrich Sossou
 * Author URI: http://ulrichsossou.com/
 * Version: 1.0.2
 * License: GPL2 or later
 * Text-domain: the-loops
 */
/*  Copyright 2011  Ulrich Sossou  (http://github.com/sorich87)

    This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
	exit;

if ( ! class_exists( 'The_Loops' ) ) :
/**
 * Main plugin class
 *
 * @package The_Loops
 * @since 0.1
 */
class The_Loops {

	/**
	 * Class contructor
	 *
	 * @package The_Loops
	 * @since 0.1
	 */
	public function __construct() {
		$this->setup_globals();
		$this->includes();
		$this->setup_hooks();
	}

	/**
	 * Global variables
	 *
	 * @package The_Loops
	 * @since 0.1
	 */
	private function setup_globals() {
		$this->file          = __FILE__;
		$this->basename      = plugin_basename( $this->file );
		$this->plugin_dir    = plugin_dir_path( $this->file );
		$this->plugin_url    = plugin_dir_url( $this->file );
		$this->templates_dir = $this->plugin_dir . 'tl-templates/';
	}

	/**
	 * Required files
	 *
	 * @package The_Loops
	 * @since 0.1
	 */
	private function includes() {
		require( $this->plugin_dir . 'tl-functions.php' );
		require( $this->plugin_dir . 'tl-template-tags.php' );
		require( $this->plugin_dir . 'tl-widget.php' );

		if ( is_admin() )
			require( $this->plugin_dir . 'tl-admin.php' );
	}

	/**
	 * Setup the plugin main functions
	 *
	 * @package The_Loops
	 * @since 0.1
	 */
	private function setup_hooks() {
		add_action( 'init', array( $this, 'register_post_type' ) );
	}

	/**
	 * Register loop post type
	 *
	 * @package The_Loops
	 * @since 0.1
	 */
	public function register_post_type() {
		$labels = array(
			'name'               => _x( 'Loops', 'post type general name' ),
			'singular_name'      => _x( 'Loop', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'loop' ),
			'add_new_item'       => __( 'Add New Loop' ),
			'edit_item'          => __( 'Edit Loop' ),
			'new_item'           => __( 'New Loop' ),
			'all_items'          => __( 'Loops' ),
			'view_item'          => __( 'View Loop' ),
			'search_items'       => __( 'Search Loops' ),
			'not_found'          => __( 'No loops found' ),
			'not_found_in_trash' => __( 'No loops found in Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => __( 'Loops' )
		);

		$args = array(
			'capabilities'    => array(
				'edit_post'          => 'edit_theme_options',
				'delete_post'        => 'edit_theme_options',
				'read_post'          => 'read',
				'edit_posts'         => 'edit_theme_options',
				'edit_others_posts'  => 'edit_theme_options',
				'publish_posts'      => 'edit_theme_options',
				'read_private_posts' => 'edit_theme_options'
			),
			'labels'          => $labels,
			'show_ui'         => true,
			'show_in_menu'    => 'themes.php',
			'supports'        => array( 'title' )
		);

		register_post_type( 'tl_loop', $args );
	}
}

$GLOBALS['the_loops'] = new The_Loops();

endif;

