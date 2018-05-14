<?php

/*
Plugin Name: ACF Layouts
Description: Extend ACF flexible content
Version: 0.0.2
Author: Ashley Coles
*/

require_once('acf_layouts_create_fields.php');

function load_layouts($content_field) {
	if( have_rows($content_field) ):
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		while ( have_rows($content_field) ) : the_row();	    
			$layout = get_row_layout();
			// check for and set a template in the theme
			$theme_template_path = (file_exists(get_stylesheet_directory() . '/layouts/layout-' . $layout . '.php') ? get_stylesheet_directory() . '/layouts/layout-' . $layout . '.php' : null);
			$bootstrap_template_path = null;
			// check for plugin using plugin name
			if ( is_plugin_active( 'acf_layouts_bootstrap_templates/acf_layouts_bootstrap_templates.php' ) ) {
			  	// check for and set a template in the theme
				$bootstrap_template_path = (file_exists(plugin_dir_path(__FILE__) . '../acf_layouts_bootstrap_templates/layouts/layout-' . $layout . '.php') ? plugin_dir_path(__FILE__) . '../acf_layouts_bootstrap_templates/layouts/layout-' . $layout . '.php' : null);
			} 
			// check for and set a template in this plugin
			$internal_template_path = (file_exists(plugin_dir_path(__FILE__) . 'layouts/layout-' . $layout . '.php') ? plugin_dir_path(__FILE__) . 'layouts/layout-' . $layout . '.php' : null);
			// have we loaded a template file?
			$template_loaded = false;
			// try and load the template from the theme first
			if ( $theme_template_path ) {
				include($theme_template_path);
				$template_loaded = true;
			} 
			// Do we have a bootstrap template?
			else if ( $bootstrap_template_path ) {
				include($bootstrap_template_path);
				$template_loaded = true;
			}
			// then try within this plugin
			else if ( $internal_template_path && !$template_loaded ) {
				include($internal_template_path);
				$template_loaded = true;
			}
			// check we loaded a template, if not throw an error
			if ( !$template_loaded ) {
				echo "Missing template file for field: " . $layout;
			}
	    endwhile;
	endif;
}