<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Lyx52/WP_FormPlugin
 * @since      1.0.0
 *
 * @package    Formtopage
 * @subpackage Formtopage/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Formtopage
 * @subpackage Formtopage/includes
 * @author     Reinis Mednis & Ikars Melnalksnis <lyxikars123@gmail.com>
 */
class Formtopage_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'formtopage',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
