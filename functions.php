<?php
 
function basic_bmlt_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrap-style', get_stylesheet_uri(), $dependencies ); 
}
 
function basic_bmlt_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.js', $dependencies, '3.3.6', true );
}
 
add_action( 'wp_enqueue_scripts', 'basic_bmlt_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'basic_bmlt_enqueue_scripts' );

/*    Call TGM Plugin Class    */

require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';

function basic_bmlt_register_plugins () {

add_action( 'tgmpa_register', 'basic_bmlt_register_required_plugins' );
	$plugins = array(
		array(
			'name'      => 'BMLT WordPress Plugin',
			'slug'      => 'bmlt-wordpress-satellite-plugin',
			'required'  => false,
		),
		array(
			'name'      => 'crouton',
			'slug'      => 'crouton',
			'required'  => false,
		),
		array(
			'name'      => 'bread',
			'slug'      => 'bread',
			'required'  => false,
		),
		array(
			'name'      => 'BMLT Tabbed Map',
			'slug'      => 'bmlt-tabbed-map',
			'required'  => false,
		),
		array(
			'name'      => 'List Locations BMLT',
			'slug'      => 'list-locations-bmlt',
			'required'  => false,
		),
		array(
			'name'      => 'Upcoming Meetings BMLT',
			'slug'      => 'upcoming-meetings-bmlt',
			'required'  => false,
		),
		array(
			'name'      => 'NACC Plugin',
			'slug'      => 'nacc-wordpress-plugin',
			'required'  => false,
		),
		array(
			'name'      => 'Fetch JFT',
			'slug'      => 'fetch-jft',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

	);
$config = array(
		'id'           => 'basic-bmlt',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'basic-bmlt' ),
			'menu_title'                      => __( 'Install Plugins', 'basic-bmlt' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'basic-bmlt' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'basic-bmlt' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'basic-bmlt' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'basic-bmlt'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'basic-bmlt'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'basic-bmlt'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'basic-bmlt'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'basic-bmlt'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'basic-bmlt'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'basic-bmlt'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'basic-bmlt'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'basic-bmlt'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'basic-bmlt' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'basic-bmlt' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'basic-bmlt' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'basic-bmlt' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'basic-bmlt' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'basic-bmlt' ),
			'dismiss'                         => __( 'Dismiss this notice', 'basic-bmlt' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'basic-bmlt' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'basic-bmlt' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

/*    --------------- End TGM Plugin  ----------------   */

function basic_bmlt_wp_setup() {
    add_theme_support( 'title-tag' );
}
 
add_action( 'after_setup_theme', 'basic_bmlt_wp_setup' );

/* Header Menu */

function basic_bmlt_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'basic_bmlt_register_menu' );

/* Sidebar, Footer, Logo, Main Body and Slider Widgets   */

function basic_bmlt_widgets_init() {
	
	register_sidebar( array(
        'name'          => 'Header Image Logo',
        'id'            => 'header-logo',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Main Header',
        'id'            => 'main-header',
		'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Top',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Bottom',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	register_sidebar( array(
        'name'          => 'Content Left Row 1',
        'id'            => 'content-one-left',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	register_sidebar( array(
        'name'          => 'Content Center Row 1',
        'id'            => 'content-one-center',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	register_sidebar( array(
        'name'          => 'Content Right Row 1',
        'id'            => 'content-one-right',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

  	register_sidebar( array(
        'name'          => 'Content Left Row 2',
        'id'            => 'content-two-left',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	register_sidebar( array(
        'name'          => 'Content Center Row 2',
        'id'            => 'content-two-center',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	register_sidebar( array(
        'name'          => 'Content Right Row 2',
        'id'            => 'content-two-right',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Footer Left',
        'id'            => 'footer-left',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	register_sidebar( array(
        'name'          => 'Footer Left Center',
        'id'            => 'footer-left-center',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Footer Right Center',
        'id'            => 'footer-right-center',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Footer Right',
        'id'            => 'footer-right',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer_copyright_text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
/* Initialize Widget Areas */
add_action( 'widgets_init', 'basic_bmlt_widgets_init' );

/* Add Custom Customizer  */
require get_template_directory() . '/inc/custom_customizer.php';
 
?>
