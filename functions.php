<?php  

define('gsa_ROOT', get_stylesheet_directory().'/');

define('gsa_URL', get_stylesheet_directory_uri() .'/');

define('gsa_ADMIN', admin_url());

define('gsa_BlogUrl', get_bloginfo('url'));



add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 1568, 9999 );
require_once( gsa_ROOT . '/lib/gsa_enqueue_scripts.php' );
require_once( gsa_ROOT . '/lib/gsa_theme_init.php' );
require_once( gsa_ROOT . '/lib/gsa_functions.php');
require_once( gsa_ROOT . '/lib/gsa_meta_fields.php');
require_once( gsa_ROOT . '/lib/gsa_mail_functions.php');
require_once( gsa_ROOT . '/lib/gsa_programs_meta_fields.php');
require_once( gsa_ROOT . '/lib/gsa_taxonomy_terms.php');
require_once( gsa_ROOT . '/lib/wp_bootstrap_navwalker.php');
register_nav_menus();



function gsa_menu_left() {

wp_nav_menu( array(

    'menu'              => 'Main Menu Left',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

  )

 );

}



function gsa_menu_right() {

wp_nav_menu( array(

    'menu'              => 'Main Menu right',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

  )

 );

}


function gsa_menu_left_arabic() {

wp_nav_menu( array(

    'menu'              => 'Main Menu Left arabic',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

  )

 );

}



function gsa_menu_right_arabic() {

wp_nav_menu( array(

    'menu'              => 'Main Menu right arabic',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

  )

 );

}

function gsa_footer_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Footer menu',

    'container'         => '',

    'theme_location'    => 'main-footer',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 4,

  )

 );

}

function gsa_load_theme_textdomain() {
    load_theme_textdomain( 'gsa', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'gsa_load_theme_textdomain' );

function gsa_mime_types( $mimes ) {

    $mimes['svg']  = 'image/svg+xml';

    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;

}



add_filter( 'upload_mimes', 'gsa_mime_types' );

/*Remove Title TO Anchor Tag Menu*/

function my_menu_notitle( $menu ){

  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}

add_filter( 'wp_nav_menu', 'my_menu_notitle' );

add_filter( 'wp_page_menu', 'my_menu_notitle' );

add_filter( 'wp_list_categories', 'my_menu_notitle' );



/*Add Footer Widget*/

function gsa_widgets_init() {



  register_sidebar( array(

    'name'          => 'First Sidebar Column',

    'id'            => 'first_sidebar',

    'before_widget' => '',

    'after_widget'  => '',

  ));

}

add_action( 'widgets_init', 'gsa_widgets_init' );



function gsa_second_widgets_init() {



  register_sidebar( array(

    'name'          => 'Second Sidebar Column',

    'id'            => 'second_sidebar',

    'before_widget' => '',

    'after_widget'  => '',

  ));

}

add_action( 'widgets_init', 'gsa_second_widgets_init' );



add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )

{

    global $post;

    // Check for single page and image post type and remove

    if ( is_single() && $post->post_type == 'image' )

        remove_filter('the_content', 'wpautop');

    return $content;

}

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );



function change_footer_admin() {

  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';

}


add_filter('admin_footer_text', 'change_footer_admin');
esc_html( apply_filters('tips', $category->name.' - slug( '.$category->slug ).')');


add_filter('wp_terms_checklist_args', 'display_custom_checklist');
function display_custom_checklist( $args ){
    if ( $args['taxonomy'] == 'tips' )
    $args['walker'] = new my_custom_walk;
    return $args;
}
class my_custom_walk extends Walker {
    var $tree_type = 'category';
    var $db_fields = array ('parent' => 'parent', 'id' => 'term_id'); //TODO: decouple this

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent<ul class='children'>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $category, $depth, $args, $id = 0 ) {
        extract($args);
        if ( empty($taxonomy) )
            $taxonomy = 'category';

        if ( $taxonomy == 'category' )
            $name = 'post_category';
        else
            $name = 'tax_input['.$taxonomy.']';

        $class = in_array( $category->term_id, $popular_cats ) ? ' class="popular-category"' : '';
        $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" . '<label class="selectit"><input value="' . $category->term_id . '" type="checkbox" name="'.$name.'[]" id="in-'.$taxonomy.'-' . $category->term_id . '"' . checked( in_array( $category->term_id, $selected_cats ), true, false ) . disabled( empty( $args['disabled'] ), false, false ) . ' /> ' . esc_html( apply_filters('the_category', $category->name.' - slug('.$category->slug )) . ')</label>';
    }

    function end_el( &$output, $category, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}