<?php
add_action( 'tgmpa_register', 'kaladigital_register_required_plugins' );



function kaladigital_register_required_plugins() {
	
	
	$plugins = array(
		// This is an example of how to include a plugin bundled with a theme.

		array(
			'name'               => 'WP Shamsi', // The plugin name.
			'slug'               => 'wp-shamsi', // The plugin slug (typically the folder name).
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => 'https://wordpress.org/plugins/wp-shamsi/', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be checked for availability to determine if a plugin is active.
		),array(
			'name'               => 'contact form 7', // The plugin name.
			'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => 'https://wordpress.org/plugins/contact-form-7/', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be checked for availability to determine if a plugin is active.
		),
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',   
	);


	tgmpa( $plugins, $config );
}
