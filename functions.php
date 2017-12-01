function neuron_hteme_supports() {
    
    // loading theme textdomain
    load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );
    
    // Genarate automated feed links on head  when it is call then remeve the tittle tag from header.php or index.php file
    add_theme_support( 'automatic-feed-links' );
    
    // Adding support for automated tittle tag
    add_theme_support( 'title-tag' );
    
    //Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    
    // This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'neuron' ),
		) );
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    //Add support for core custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );    
}
add_action('after_setup_theme', 'neuron_hteme_supports');
