    <?php
    /**
    * WPthemes functions and definitions
    *
    * @link https://developer.wordpress.org/themes/basics/theme-functions/
    *
    * @package WPthemes
    */
    if (!function_exists('wpthemes_setup')) :
    /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * Note that this function is hooked into the after_setup_theme hook, which
    * runs before the init hook. The init hook is too late for some features, such
    * as indicating support for post thumbnails.
    */
    function wpthemes_setup()
    {
    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on WPthemes, use a find and replace
    * to change 'wpthemes' to the name of your theme in all the template files.
    */
    load_theme_textdomain('wpthemes', get_template_directory() . '/languages');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'wpthemes'),
        'menu-2' => esc_html__('Footer', 'wpthemes'),
    ));
    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('wpthemes_custom_background_args', array('default-color' => 'ffffff', 'default-image' => '',)));
    // Add theme support for selective refresh for widgets.
    // add_theme_support( 'customize-selective-refresh-widgets' );
    /**
    * Add support for core custom logo.
    *
    * @link https://codex.wordpress.org/Theme_Logo
    */
                //add_theme_support( 'custom-logo', array('height'      => 250,'width'       => 250,    'flex-width'  => true,  'flex-height' => true,  ) );
}
endif;
add_action('after_setup_theme', 'wpthemes_setup');
    /**
    * Set the content width in pixels, based on the theme's design and stylesheet.
    *
    * Priority 0 to make it available to lower priority callbacks.
    *
    * @global int $content_width
    */
    function wpthemes_content_width()
    {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
        $GLOBALS['content_width'] = apply_filters('wpthemes_content_width', 640);
    }
    add_action('after_setup_theme', 'wpthemes_content_width', 0);
    /**
    * Register widget area.
    *
    * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
    */
    function wpthemes_widgets_init()
    {
        register_sidebar(array(
            'name' => esc_html__('Sidebar', 'wpthemes'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'wpthemes'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }
    add_action('widgets_init', 'wpthemes_widgets_init');
    /**
    * Enqueue scripts and styles.
    */
    function wpthemes_scripts()
    {
        wp_enqueue_style('wpthemes-fontawesome', get_template_directory_uri() . '/css/fontawesome.css', array(), '20151215');
        wp_enqueue_style('owl-carousel-min-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '20151215');
        wp_enqueue_style('wpthemes-style', get_stylesheet_uri());
        wp_enqueue_style('wpthemes-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '20151215');
        wp_enqueue_style( 'custom-font-roboto', "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap");
        wp_enqueue_style( 'custom-font-open-sans', "https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,700&display=swap");
        wp_enqueue_script('jquery');
        wp_enqueue_script('owl-carousel-min-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true);
        wp_enqueue_script('wpthemes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
        wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array(), '20151215', true);
        wp_enqueue_script('css-browser-selector', get_template_directory_uri() . '/js/css_browser_selector.js', array(), '20151215', true);
        wp_enqueue_script('wpthemes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
        $local_data['ajaxurl'] = admin_url('admin-ajax.php');
        wp_enqueue_script('general-js', get_template_directory_uri() . '/js/general.js', array(), '786', true);
        wp_localize_script('general-js', 'jmax', $local_data);
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
    add_action('wp_enqueue_scripts', 'wpthemes_scripts');
    /**
    * Custom template tags for this theme.
    */
    require get_template_directory() . '/inc/template-tags.php';
    require get_template_directory() . '/inc/theme-function.php';
    function add_file_types_to_uploads_method($file_types)
    {
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes);
        return $file_types;
    }
    add_action('upload_mimes', 'add_file_types_to_uploads_method');
    /*if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
    'page_title' => __('Theme General Settings', 'theme_slug'),
    'menu_title' => __('Theme Options', 'theme_slug'),
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false,
    'icon_url' => ' dashicons-art',
    'position' => 100,
    ));
}*/
    /*
    * Shortcode for the homepage map
    * */
    add_shortcode('homepagemap', 'homepage_map');
    function homepage_map()
    {
        ob_start();
        ?>
        <div class="global-community">
            <div class="global-wrap">
                <?php
                $i = 1;
                if (have_rows('pin_settings')):
                    while (have_rows('pin_settings')) : the_row();
                        $pin_digits = get_sub_field('pin_digits');
                        $pin_address = get_sub_field('pin_address');
                        ?>
                        <div class="map-pin map-pin-<?php echo $i; ?>">
                            <a href="javascript:void(0);" title="">
                                <img class="svg" src="<?php echo get_template_directory_uri(); ?>/images/map-pin.svg" alt="map-pin">
                                <div class="pin-digit"><?php echo $pin_digits; ?></div>
                                <div class="map-popup">
                                    <?php echo wp_kses_post($pin_address); ?>
                                </div>
                            </a>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                endif; ?>
                <?php
                return ob_get_clean();
            }

            add_shortcode('why_fiea_slider', 'homepage_why_fiea_slider');
            function homepage_why_fiea_slider(){
                ob_start();
                ?>
                <div class="content-slider">
                    <div class="content-slide owl-carousel">
                        <?php
                        if (have_rows('why_feia_slider')):
                            while (have_rows('why_feia_slider')) : the_row();
                                $image1 = get_sub_field('image1');
                                $image2 = get_sub_field('image2');
                                $button_text = get_sub_field('button_text');
                                $button_link = get_sub_field('button_link');
                                $content = get_sub_field('content');
                                ?>
                                <div class="slider-slide">
                                    <div class="left-img" style="background-image: url(<?php echo $image1 ?>)">
                                    </div>
                                    <div class="right-cnt">
                                        <div class="cnt-img">
                                            <img src="<?php echo $image2 ?>" alt="why-feia-img">
                                        </div>
                                        <div class="cnt-sec">
                                            <a href="<?php if (!empty($button_link)) {
                                                echo esc_url($button_link);
                                            } else { ?>JavaScript:void(0);<?php } ?>" class="btn">
                                            <?php echo $button_text; ?>
                                        </a>
                                        <?php echo wp_kses_post($content); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif; ?>
                </div>
            </div>
            <?php
            return ob_get_clean();
        }

        add_action('init','fiea_custom_post_type');
        function fiea_custom_post_type(){
            /*
                Custom Post Type Videos
            */
                $blogs_labels = array(
                    'name' => _x('Blogs', 'Post Type General Name', ' wpthemes'),
                    'singular_name' => _x('Blog', 'Post type singular name', ' wpthemes'),
                    'menu_name' => _x('Blogs', 'Admin Menu text', ' wpthemes'),
                    'name_admin_bar' => _x('Blogs', 'Add New on Toolbar', ' wpthemes'),
                    'add_new' => __('Add New', ' wpthemes'),
                    'add_new_item' => __('Add New Blog', ' wpthemes'),
                    'new_item' => __('New Blog', ' wpthemes'),
                    'edit_item' => __('Edit Blog', ' wpthemes'),
                    'view_item' => __('View Blog', ' wpthemes'),
                    'all_items' => __('All Blogs', ' wpthemes'),
                    'search_items' => __('Search Blogs', ' wpthemes'),
                    'parent_item_colon' => __('Parent Blog:', ' wpthemes'),
                    'not_found' => __('No blogs found.', ' wpthemes'),
                    'not_found_in_trash' => __('No blogs found found in Trash.', ' wpthemes'),
                    'featured_image' => _x('Blog Cover Image', 'Overrides the “Featured Image”', ' wpthemes'),
                    'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image”', ' wpthemes'),
                    'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” ', ' wpthemes'),
                    'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image”', ' wpthemes'),
                    'archives' => _x('Blogs archives', 'The post type archive label used in nav menus.', ' wpthemes'),
                    'insert_into_item' => _x('Insert into blogs', 'Overrides the “Insert into post”/”Insert into page”', ' wpthemes'),
                    'uploaded_to_this_item' => _x('Uploaded to this video', 'Overrides the “Uploaded to this post”/”Uploaded to this page”', ' wpthemes'),
                    'filter_items_list' => _x('Filter blogs list', 'Screen reader text for the filter links heading on the post type listing screen.', ' wpthemes'),
                    'items_list_navigation' => _x('Blogs list navigation', 'Screen reader text for the pagination heading on the post type listing screen.', ' wpthemes'),
                    'items_list' => _x('Blogs list', 'Screen reader text for the items list heading on the post type listing screen.', ' wpthemes'),
                );
                $blogs_args = array(
                    'label' => __('Blogs', ' wpthemes'),
                    'description' => __('this is Blogs post type', ' wpthemes'),
                    'labels' => $blogs_labels,
                    'supports' => array('title', 'thumbnail', 'author', 'editor', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions'),
                    'hierarchical' => false,
                    'public' => true,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'menu_position' => 5,
                    'menu_icon' => 'dashicons-format-aside',
                    'show_in_admin_bar' => true,
                    'show_in_nav_menus' => true,
                    'can_export' => true,
                    'has_archive' => true,
                    'exclude_from_search' => false,
                    'publicly_queryable' => true,
                    'capability_type' => 'page',
                );
                register_post_type('blogs', $blogs_args);
            }

    /*
        Blog listing Shortcode
    */
        add_shortcode('blog-listing','blog_listing');    
        function blog_listing(){
            ob_start();
            $args = array(
                'post_type'=>'blogs',
                'posts_per_page'=>6,
                'order' => 'DESC',
                'post_status' =>'publish',
            );
            $result = new WP_Query($args);
            ?>
            <div class="blog-container"> 
                <div class="blog-content">
                    <div class="blog-post">
                        <?php
                        if ( $result->have_posts() ) :
                            while ( $result->have_posts() ) : $result->the_post();
                                $post_title = get_the_title();
                                $post_excerpt = get_the_excerpt();
                                $blog_content = get_field('blog_content',get_the_ID());
                                $thumbnail_url = get_the_post_thumbnail_url();
                                $blog_author_name = get_field('blog_author_name',get_the_ID());
                                $author_id = get_the_author_meta( 'ID' );
                                $first_name = get_the_author_meta( 'first_name', $author_id );
                                $last_name = get_the_author_meta( 'last_name', $author_id );
                                $display_name = get_the_author_meta( 'user_login', $author_id );
                                ?>
                                <div class="blog-card">
                                    <?php if(!empty($thumbnail_url)){?>
                                <div class="blog-image" style="background-image:url('<?php echo $thumbnail_url; ?>')">
                                </div>
                                <?php }else{?>
                                <div class="blog-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dummy-img.jpg')">
                                </div>
                                <?php }?>
                                    <div class="blog-cnt">
                                        <h3><?php echo  $post_title; ?></h3>
										<span><?php echo get_the_date(); ?></span>
                                        <p><?php echo wp_trim_words($blog_content,21,'...'); ?></p>
                                        <!-- <span>
                                            <?php if(!empty($first_name) && !empty($last_name)){?>
                                            By <?php echo $first_name. ' '.$last_name .' /';}else{?>
                                                By <?php echo $display_name .' /'; }?> <?php echo get_the_date('M d, Y');?></span> -->
                                            <a href="<?php echo get_the_permalink(); ?>" class="btn" title="CONTINUE READING">CONTINUE READING</a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                        <a href="javascript:void(0);" title="LOAD MORE" class="load-more btn load-more-blogs">LOAD MORE</a>
                    </div>
                </div>
                <?php
                return ob_get_clean();
            }


            /*
                Ajax load more for blogs.
            */
            add_action('wp_ajax_nopriv_blogs_load_more', 'blogs_load_more');
            add_action('wp_ajax_blogs_load_more', 'blogs_load_more');
            function blogs_load_more(){

                $html = '';
                ob_start();
                $paged = ($_POST['paged']) ? $_POST['paged'] : 1;
                $args = array(
                    'post_type'=>'blogs',
                    'posts_per_page'=>6,
                    'paged'=>$paged,
                    'order' => 'DESC',
                    'post_status' =>'publish',
                );
                $result = new WP_Query($args);
                if ( $result->have_posts() ) :
                    while ( $result->have_posts() ) : $result->the_post();
                        $post_title = get_the_title();
                        $post_excerpt = get_the_excerpt();
                        $blog_content = get_field('blog_content',get_the_ID());
                        $thumbnail_url = get_the_post_thumbnail_url();
                        $blog_author_name = get_field('blog_author_name',get_the_ID());
                        $author_id = get_the_author_meta( 'ID' );
                        $first_name = get_the_author_meta( 'first_name', $author_id );
                        $last_name = get_the_author_meta( 'last_name', $author_id );
                        $display_name = get_the_author_meta( 'user_login', $author_id );
                        ?>
                        <div class="blog-card">
                            <?php if(!empty($thumbnail_url)){?>
                                <div class="blog-image" style="background-image:url('<?php echo $thumbnail_url; ?>')">
                                </div>
                                <?php }else{?>
                                <div class="blog-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dummy-img.jpg')">
                                </div>
                                <?php }?>
                                <div class="blog-cnt">
                                    <h3><?php echo  $post_title; ?></h3>
                                    <p><?php echo wp_trim_words($blog_content,21,'...'); ?></p>
                                    <!-- <span>
                                            <?php if(!empty($first_name) && !empty($last_name)){?>
                                            By <?php echo $first_name. ' '.$last_name .' /';}else{?>
                                                By <?php echo $display_name .' /'; }?> <?php echo get_the_date('M d, Y');?></span> -->
                                            <a href="<?php echo get_the_permalink(); ?>" class="btn" title="CONTINUE READING">CONTINUE READING</a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            if ($result->max_num_pages <= 1 || $result->max_num_pages <= $paged) {
                                $hide_button = 'true';
                            } else {
                                $hide_button = 'false';
                            }
                            $html = ob_get_clean();
                            $loaded_content = array(
                                'loaded_content' => $html,
                                'paged' => $paged,
                                'hide_button' => $hide_button
                            );
                            wp_send_json_success($loaded_content);
                            wp_die();
                        }

                        add_shortcode('pagination-shortcode','pagination_shortcode');
                        function pagination_shortcode(){
                           ob_start();
                           the_post_navigation(array(

                            'next_text' => '<span class="meta-nav prev-post" aria-hidden="true">' . __('Previous', 'wpthemes') . '</span> ' .
                            '<span class="screen-reader-text">' . __('Previous post:', 'wpthemes') . '</span> ' .
                            '<span class="post-title"></span>',
                            'prev_text' => '<span class="meta-nav next-post" aria-hidden="true">' . __('Next', 'wpthemes') . '</span> ' .
                            '<span class="screen-reader-text">' . __('Next post:', 'wpthemes') . '</span> ' .
                            '<span class="post-title"></span>',

                        ));?>
                        <a href="<?php echo get_home_url().'/blog-listing';?>" class="btn btn-view-all">View All Post</a>
                        <?php
                        return ob_get_clean();
                    }


                    add_shortcode('recent-posts','recent_posts');
                    function recent_posts(){
                        ob_start();
                        global $post;
                        $recent_posts = array(
                            'post_type' => 'blogs',
                            'posts_per_page' => 3,
                            'post__not_in' => array( $post->ID )
                        );
                        $result = new WP_Query($recent_posts);
                        ?>
                        <div class="blog-container"> 
                            <div class="blog-content">
                                <div class="blog-post">
                                    <?php
                                    if ( $result->have_posts() ) :
                                        while ( $result->have_posts() ) : $result->the_post(); 
                                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
                                            $post_title = get_the_title();
                                            $author_id = get_the_author_meta( 'ID' );
                                            $first_name = get_the_author_meta( 'first_name', $author_id );
                                            $last_name = get_the_author_meta( 'last_name', $author_id );
                                            $display_name = get_the_author_meta( 'user_login', $author_id );
                                            $blog_content = get_field('blog_content',get_the_ID());
                                            ?>
                                            <div class="blog-card">
                                                <?php if(!empty($thumbnail_url)){?>
                                                    <div class="blog-image" style="background-image:url('<?php echo $thumbnail_url; ?>')">
                                                    </div>
                                                <?php }else{?>
                                                    <div class="blog-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dummy-img.jpg')">
                                                    </div>
                                                <?php }?>
                                                <div class="blog-cnt ccc">
                                                    <h3><?php echo $post_title; ?></h3>
                                                    <p><?php echo wp_trim_words($blog_content,21,'...'); ?></p>
                                                    <span><?php echo get_the_date('M d, Y');?></span>
                                                    <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="btn" title="CONTINUE READING">CONTINUE READING</a>
                                                </div>
                                            </div>
                                            <?php 
                                            $i++;
                                        endwhile;
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        return ob_get_clean();
                    }

                    add_shortcode('single-blog-content','single_blog_content');
                    function single_blog_content(){
                        ob_start();

                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
                        $post_title = get_the_title(get_the_ID());
                        $blog_content = get_field('blog_content',get_the_ID());
                        $blog_image_for_detail_page = get_field('blog_image_for_detail_page',get_the_ID());
                        $blog_author_name = get_field('blog_author_name',get_the_ID());
                        $post_excerpt = get_the_excerpt();
                        $author_id = get_the_author_meta( 'ID' );
                        $first_name = get_the_author_meta( 'first_name', $author_id );
                        $last_name = get_the_author_meta( 'last_name', $author_id );
                        ?>
                        <div class="blog-inner">
                            <h1 class="blog-title-top"><?php echo $post_title; ?></h1>
                            <?php if(isset($blog_image_for_detail_page) && !empty($blog_image_for_detail_page)){?>
                                <img src="<?php echo $blog_image_for_detail_page['url'];?>" alt="blog-image" />
                            <?php }else{?>
                                <img src="<?php echo $thumbnail_url;?>" alt="blog-image" />
                            <?php }?>    
                            <div class="author">
                                <?php if(!empty($blog_author_name)){?>
                                    <p>Written By <?php echo $blog_author_name; ?><span>
                                    <?php }?>
                                    <?php echo get_the_date('M d, Y');?></span></p>
                                </div>
                                <p><?php echo wp_kses_post($blog_content); ?></p>

                                <?php
                                the_post_navigation(array(
                                    'prev_text' => '<span class="meta-nav prev-post" aria-hidden="true">' . __('Previous', 'wpthemes') . '</span> ' .
                                    '<span class="screen-reader-text">' . __('Previous post:', 'wpthemes') . '</span> ' .
                                    '<span class="post-title"></span>',
                                    'next_text' => '<span class="meta-nav next-post" aria-hidden="true">' . __('Next', 'wpthemes') . '</span> ' .
                                    '<span class="screen-reader-text">' . __('Next post:', 'wpthemes') . '</span> ' .
                                    '<span class="post-title"></span>', 
                                ));
                                ?>
                                <a href="<?php echo get_home_url().'/blog-listing';?>" class="btn btn-view-all">View All Post</a>
                            </div>
                            <?php

                            $recent_posts = array(
                                'post_type' => 'blogs',
                                'posts_per_page' => 3,
                            );
                            $result = new WP_Query($recent_posts);
                            ?>
                            <div class="blog-container"> 
                                <div class="blog-content">
                                    <div class="blog-post">
                                        <?php
                                        if ( $result->have_posts() ) :
                                            while ( $result->have_posts() ) : $result->the_post(); 
                                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
                                                $author_id = get_the_author_meta( 'ID' );
                                                $blog_content = get_field('blog_content',get_the_ID());
                                                $first_name = get_the_author_meta( 'first_name', $author_id );
                                                $last_name = get_the_author_meta( 'last_name', $author_id );
                                                $blog_author_name = get_field('blog_author_name',get_the_ID());
                                                ?>
                                                <div class="blog-card">
                                                    <div class="blog-image" style="background-image:url('<?php echo $thumbnail_url; ?>')">
                                                    </div>
                                                    <div class="blog-cnt aaa">
                                                        <h3><?php echo  get_the_title(get_the_ID()); ?></h3>
                                                        <p><?php echo wp_trim_words($blog_content,21,'...'); ?></p>
                                                        <span><?php if(!empty($blog_author_name)){?>
                                                            <p>Written By <?php echo $blog_author_name; ?><span>
                                                                <?php }?>/ <?php echo get_the_date('M d, Y');?></span>
                                                                <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="btn" title="CONTINUE READING">CONTINUE READING</a>
                                                            </div>
                                                        </div>
                                                        <?php 
                                                        $i++;
                                                    endwhile;
                                                endif;
                                                wp_reset_postdata();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    return ob_get_clean();
                                }


add_action( 'vc_before_init', 'vc_before_init_actions' ); 
function vc_before_init_actions() {
    require_once( get_template_directory().'/vc-elements/my-first-custom-element.php' ); 
}

function tech101Signup(){

    $sendgrid_api_key = "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";
    $edx_api_key = 'O05CExpyHF19wYw1AIRc3s';

    $echo_result = array();

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    else{
        $email = '';
    }

    if(isset($_POST['first_name'])){
        $first_name = $_POST['first_name'];
    }
    else{
        $first_name = '';
    }

    if(isset($_POST['last_name'])){
        $last_name = $_POST['last_name'];
    }
    else{
        $last_name = '';
    }

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }
    else{
        $username = '';
    }

    if(isset($_POST['post_code'])){
        $post_code = $_POST['post_code'];
    }
    else{
        $post_code = '';
    }

    // sendgrid api
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.sendgrid.com/v3/marketing/contacts',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS =>'{
        "contacts": [
            {
            "email": "'.$email.'",
            "first_name": "'.$first_name.'",
            "last_name": "'.$last_name.'",
            "postal_code": "'.$post_code.'",
            "custom_fields" : {
                "w1_T": "'.$username.'"
            }
            }
        ]
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$sendgrid_api_key
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);


    $echo_result['send_grid_resp'] = $response;

    // edx api
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        // CURLOPT_URL => 'https://lms-stage-feia.raccoongang.com/extended_api/user/create',
        CURLOPT_URL => 'https://tech101.feia.ca/extended_api/user/create',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
                "email": "'.$email.'",
                "username": "'.$username.'",
                "first_name": "'.$first_name.'", 
                "last_name" : "'.$last_name.'"
            }
        ',
        CURLOPT_HTTPHEADER => array(
            'X-Edx-Api-Key: '.$edx_api_key,
            'Content-Type: application/json',
            'Cookie: lms-stage-feia.raccoongang.com_edxapp=1|vhvuu2sgo8dpa81kqlzslb4prrndqczd|kPkfo9USGjCj|IjcwMjUzM2Y1NDIxNTUwOTAyZDNkYjNkMGE3OWE5OTRjNTQ0Mzg1YTY2MjhkYjUxOWU3NDFhOTM1YjUxZjUzZmYi:1lOpu0:PSqG6GPHs8yX8h9o_-btx7UUjFw; openedx-language-preference=en; csrftoken=RZkpsx0oh0dvCvfwQBYGqn7FcigX3YGJOaZYrq3yrUn4F4LMyID65zWqOOR1VP6T'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $echo_result['edx_resp'] = $response;

    echo json_encode($echo_result);

    die();
}

add_action('wp_ajax_tech101_signup', 'tech101Signup');
add_action('wp_ajax_nopriv_tech101_signup', 'tech101Signup');