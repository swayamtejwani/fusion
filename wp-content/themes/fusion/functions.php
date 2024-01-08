<?php

// Disable Gutenberg from page, post and widgets
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter( 'use_widgets_block_editor', '__return_false' );

// Theme support for title, thumbnail
function fusion_theme_setup() {

    // Adds <title> tag support
    add_theme_support( 'title-tag' );
    
    // Adds featured image support
    add_theme_support('post-thumbnails');

}
add_action( 'after_setup_theme', 'fusion_theme_setup');


// Meta data in headers
function fusion_required_meta_heads(){
    ?>
    <link rel="manifest" href="<?php echo get_bloginfo('template_url'); ?>/images/site.webmanifest" />
    <link rel="mask-icon" href="<?php echo get_bloginfo('template_url'); ?>/images/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/images/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="<?php echo get_bloginfo('template_url'); ?>/images/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
    <?php
}
add_action('wp_head','fusion_required_meta_heads');



// Enqueue theme css & js files
function fusion_load_css_js(){
    
    wp_enqueue_style('bootstrapmincss', get_bloginfo('template_url').'/css/bootstrap.min.css');
    wp_enqueue_style('mainstylecss', get_bloginfo('template_url').'/css/style.css');
    wp_enqueue_style('aoscss','https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css');

    // Owl Stylesheets 
    wp_enqueue_style('owlcarouselcss', get_bloginfo('template_url').'/css/owl.carousel.min.css');
    wp_enqueue_style('owlthemecss', get_bloginfo('template_url').'/css/owl.theme.default.min.css');

    
    wp_enqueue_script('bootstrapminjs', get_bloginfo('template_url').'/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('aosjs','https://unpkg.com/aos@next/dist/aos.js',array('jquery'));
    
    // Owl Script
    wp_enqueue_script('owljs',  get_bloginfo('template_url').'/js/owl.carousel.js' ,array('jquery'));

    wp_enqueue_script('customjs',  get_bloginfo('template_url').'/js/custom.js' ,array('jquery'));
}
add_action('wp_enqueue_scripts','fusion_load_css_js');


// Allow SVG file upload
function fusion_add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
add_filter('upload_mimes', 'fusion_add_file_types_to_uploads');

// Include CPT clients
require_once 'custom-post-types/clients.php';

// Include CPT testimonials
require_once 'custom-post-types/testimonials.php';

// Include CPT teams
require_once 'custom-post-types/teams.php';


/**
 * Add a sidebar.
 */
function fusion_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'fusion' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on 1st column of footer.', 'fusion' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'fusion' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on 2nd column of footer.', 'fusion' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'fusion' ),
		'id'            => 'footer-3',
		'description'   => __( 'Widgets in this area will be shown on 3rd column of footer.', 'fusion' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'fusion' ),
		'id'            => 'footer-4',
		'description'   => __( 'Widgets in this area will be shown on 4th column of footer.', 'fusion' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'fusion_widgets_init' );