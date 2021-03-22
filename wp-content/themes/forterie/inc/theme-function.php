<?php 
/**
* Theme option page
*/

/*if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => __('Theme General Settings','theme_slug'),
        'menu_title' => __('Theme Options','theme_slug'),
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'icon_url'=>' dashicons-art',
        'position' => 100,
	));     
}*/

//Admin logo change
function site_login_logo() { 
	echo '<style type="text/css">';
        $logo = get_field('logo', 'option');
         if (!empty($logo)) { 
            echo '#login h1 a, .login h1 a {background: url('.get_template_directory_uri().'/images/logo.svg) ;background-size: 80%;width: 50%;height: 160px;background-repeat: no-repeat;background-position: center;margin-bottom:0;}';
        }      
    echo '</style>'; 
}

// changing the logo link from wordpress.org to your site
add_action( 'login_enqueue_scripts', 'site_login_logo' );

function site_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'site_login_url' );

// changing the alt text on the logo to show your site name
function site_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'site_login_title' );

// Add favicon icon in theme
function add_favicon() {
    $favicon = (get_field('favicon', 'option'))?: get_template_directory_uri()."/images/favicon.ico";
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.$favicon.'">';
}
  
// Now, just make sure that function runs when you're on the login page and admin pages  
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');
add_action('wp_head', 'add_favicon');


/** News post type **/
function theme_custom_post_type(){
    $labels = array('name'=> _x( 'News', 'Post Type General Name', 'omobono' ));
    $args = array(
		'label'                 => __( 'News', 'wpthemes' ),
		'description'           => __( 'this is News post type', 'omobono' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail','author','editor','excerpt','trackbacks','custom-fields','comments','revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    );
    register_post_type( 'news', $args );
   
}
//add_action( 'init', 'theme_custom_post_type', 0 );