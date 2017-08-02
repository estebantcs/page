<?php
/*
Plugin Name: RD Hover Effects Pro
Plugin URI: https://wordpress.org/plugins/rd-hover-effects/
Description: RD Hover Effects WordPress Plugin is an impressive hover effects powered by pure CSS3. Easy to use the beautiful amazing Image Hover Effects for your website.
Author: RAKIBUR RAHMAN SAGAR
Author URI: http://wpexpert24.com/
Version: 3.2
*/

//Loading CSS
function rd_hover_effects_style() {
	wp_enqueue_style('main_css', plugins_url( '/css/style.css' , __FILE__ ) );
	wp_enqueue_style('stylesheet_css', plugins_url( '/css/style_com.css' , __FILE__ ) );
	wp_enqueue_style('style2_css', plugins_url( '/css/rd_hover_style.css' , __FILE__ ) );
	wp_enqueue_style('hover_css', plugins_url( '/css/hover_pack.css' , __FILE__ ) );
	wp_enqueue_style('responsive_css', plugins_url( '/css/rdresponsive.css' , __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'rd_hover_effects_style' );


// Loading VafPress Framework
if(!class_exists('VP_rdhoverAutoLoader')){
// Setup Contants
defined( 'VP_RDHOVER_VERSION' ) or define( 'VP_RDHOVER_VERSION', '2.0' );
defined( 'VP_RDHOVER_URL' )     or define( 'VP_RDHOVER_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_RDHOVER_DIR' )     or define( 'VP_RDHOVER_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_RDHOVER_FILE' )    or define( 'VP_RDHOVER_FILE', __FILE__ );

// Lood Bootstrap
require 'framework/bootstrap.php';

}

// Registering Custom Post
function rd_hover_effects_custom_post() {
	register_post_type( 'rd-hover',
		array(
			'labels' => array(
				'name' => __( 'RD Hov Effect' ),
				'singular_name' => __( 'Hover Effect' ),
				'add_new_item' => __( 'Add new hover item title ' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'hover-effects'),
			'menu_icon' => '',
			'menu_position' => 20,
		)
	);
	
}
add_action( 'init', 'rd_hover_effects_custom_post' );

// Registering Custom post's category
function rd_hover_effects_custom_post_taxonomy() {
	register_taxonomy(
		'hover_cat',  
		'rd-hover',
		array(
			'hierarchical'          => true,
			'label'                 => 'RD Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'rd-category',
				'with_front'    => true
				)
			)
	);
}
add_action( 'init', 'rd_hover_effects_custom_post_taxonomy'); 
require 'admin/icon.php';

// Load Metaboxes 

new VP_Metabox(array
(
			'id'          => 'rdmeta',
			'types'       => array('rd-hover'),
			'title'       => __('Hover Information ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_RDHOVER_DIR . '/admin/metabox/main.php'
));



//Loading Shortcode
require_once(VP_RDHOVER_DIR . 'admin/shortcode.php');

//Shortcode Generator 
    function acb_init_shortcodegenerator()
    {
    // Built path to shortcode generator template array file
    //$sg_path = VP_TEAM_DIR() . '/admin/shortcode.php';
    // Initialize the ShortcodeGenerator's object
    $tmpl_sg = array(
    'name' => 'sg_1',
    'template' => VP_RDHOVER_DIR . '/admin/shortcode_generator.php',
    'modal_title' => __( 'Hover Shortcode', 'vp_textdomain'),
    'button_title' => __( 'Hover Shortcode', 'vp_textdomain'),
    'types' => array( 'post', 'page' ),
    'main_image' => VP_RDHOVER_URL . 'images/hover-shortcode.png',
    'sprite_image' => VP_RDHOVER_URL . 'images/hover-shortcode.png',
    //'included_pages' => array( 'appearance_page_vpt_option' ),
    );
    
	$sg = new VP_ShortcodeGenerator($tmpl_sg);
    
	}
	
    // the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
    add_action( 'after_setup_theme', 'acb_init_shortcodegenerator' );
	
	?>