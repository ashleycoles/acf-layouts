<?php

/*
Plugin Name: ACF Layouts
Description: Extend ACF flexible content
Version: 0.0.1
Author: Ashley Coles
*/

function load_layouts($content_field) {
	if( have_rows($content_field) ):					    
		while ( have_rows($content_field) ) : the_row();	    
			$layout = get_row_layout();
			// check for and set a template in the theme
			$theme_template_path = (file_exists(get_stylesheet_directory() . '/layouts/layout-' . $layout . '.php') ? get_stylesheet_directory() . '/layouts/layout-' . $layout . '.php' : null);
			// check for and set a template in this plugin
			$internal_template_path = (file_exists(plugin_dir_path(__FILE__) . 'layouts/layout-' . $layout . '.php') ? plugin_dir_path(__FILE__) . 'layouts/layout-' . $layout . '.php' : null);
			// try and load the template from the theme first
			if ( $theme_template_path ) {
				include($theme_template_path);
				return;
			}
			// then try within this plugin
			if ( $internal_template_path ) {
				include($internal_template_path);
				return;
			}
	    endwhile;
	endif;
}