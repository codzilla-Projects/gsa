<?php 

add_action( 'init', 'gsa_custom_post_types' );

function gsa_custom_post_types() {

    

 $cpts = [



    array(

        'single'   => 'Sliders',

        'plural'   => 'Sliders',

        'cptname'  => 'slider',

        'icon'     => 'dashicons-slides',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 4

        ),



    array(

        'single'   => 'Programs',

        'plural'   => 'Programs',

        'cptname'  => 'program',

        'icon'     => 'dashicons-welcome-learn-more',

        'supports' => ["title","editor","thumbnail","excerpt"],

        'show_in_menu'=> true,

        'position' => 5

        ),

    array(

        'single'   => 'Instructors',

        'plural'   => 'Instructors',

        'cptname'  => 'instructor',

        'icon'     => 'dashicons-groups',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 6

        ),

    array(

        'single'   => 'Modules',

        'plural'   => 'Modules',

        'cptname'  => 'module',

        'icon'     => 'dashicons-admin-multisite',

        'supports' => ["title","editor","excerpt"],

        'show_in_menu'=> true,

        'position' => 7

    ),
    array(

        'single'   => 'Headlines',

        'plural'   => 'Headlines',

        'cptname'  => 'headline',

        'icon'     => 'dashicons-grid-view',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 8

    ),

    array(

        'single'   => 'FAQ',

        'plural'   => 'FAQ',

        'cptname'  => 'faq',

        'icon'     => 'dashicons-format-quote',

        'supports' => ["title","editor"],

        'show_in_menu'=> true,

        'position' => 9

    ),
 ];

 foreach ($cpts as $cpt) {



     $labels = array(

        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'gsa' ),

        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'gsa' ),

        'menu_name'             => __( $cpt['plural'], 'gsa' ),

        'all_items'             => __( 'All '.$cpt['plural'], 'gsa' ),

        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'gsa' ),

        'add_new'               => __( 'Add New', 'gsa' ),

        'new_item'              => __( 'New '.$cpt['single'], 'gsa' ),

        'edit_item'             => __( 'Edit '.$cpt['single'], 'gsa' ),

        'update_item'           => __( 'Update '.$cpt['single'], 'gsa' ),

        'view_item'             => __( 'View '.$cpt['single'], 'gsa' ),

        'search_items'          => __( 'Search '.$cpt['plural'], 'gsa' ),

        'not_found'             => __( 'Not found', 'gsa' ),

        'not_found_in_trash'    => __( 'Not found in Trash', 'gsa' ),

        'featured_image'        => __( 'Featured Image', 'gsa' ),

        'set_featured_image'    => __( 'Set featured image', 'gsa' ),

        'remove_featured_image' => __( 'Remove featured image', 'gsa' ),

        'use_featured_image'    => __( 'Use as featured image', 'gsa' ),

      );

      $args = array(

        'label'                 => __( $cpt['plural'], 'gsa' ),

        'description'           => __( $cpt['plural'].' Description', 'gsa' ),

        'labels'                => $labels,

        'supports'              => $cpt['supports'],

        'hierarchical'          => false,

        'public'                => true,

        'show_ui'               => true,

        'show_in_menu'          =>$cpt['show_in_menu'],

        'menu_position'         => $cpt['position'],

        'menu_icon'             => $cpt['icon'],

        'show_in_admin_bar'     => true,

        'show_in_nav_menus'     => true,

        'can_export'            => true,

        'has_archive'           => true,    

        'exclude_from_search'   => false,

        'publicly_queryable'    => true,

        'capability_type'       => 'post',

        

      );

    // Register Custom Post Type>

    register_post_type( $cpt['cptname'], $args );

    }   

}

$post_type = 'module';

// Register the columns.
add_filter( "manage_{$post_type}_posts_columns", function ( $defaults ) {
	$defaults['custom-one'] = 'Category Slug';
	return $defaults;
} );

// Handle the value for each of the new columns.
add_action( "manage_{$post_type}_posts_custom_column", function ( $column_name, $post_id ) {
	
	if ( $column_name == 'custom-one' ) {
		$term_list = get_the_terms($post->ID, 'tips');
		$types ='';
		foreach($term_list as $term_single) {
			 $types .= '('. ucfirst($term_single->slug).') - ';
		}
		$typesz = rtrim($types, '- ');
		echo $typesz;
			}
	
	
}, 10, 2 );

/* create my custom menu pages */

function gsa_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'GSA Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        get_option('gsa_favicon'),

        2

    );   



  add_submenu_page(

        'content-area',

        'Home Page options',

        'home Page Options',

        'manage_options',

        'home-page-content',

        'home_content_area_callback'

    ); 
  add_submenu_page(

        'content-area',

        'About Page options',

        'About Page Options',

        'manage_options',

        'about-page-content',

        'about_content_area_callback'

    ); 

    add_submenu_page(

        'content-area',

        'Programs Page options',

        'Programs Page Options',

        'manage_options',

        'programs-page-content',

        'programs_content_area_callback'

    ); 

     add_submenu_page(

        'content-area',

        'Faculty Page options',

        'Faculty Page Options',

        'manage_options',

        'faculty-page-content',

        'faculty_content_area_callback'

    ); 

    add_submenu_page(

        'content-area',

        'Contact Page options',

        'Contact Page Options',

        'manage_options',

        'contact-page-content',

        'contact_content_area_callback'

    );


    add_submenu_page(

        'content-area',

        'Smart Page options',

        'Smart Page Options',

        'manage_options',

        'smart-page-content',

        'smart_content_area_callback'

    );
    
    add_submenu_page(

        'content-area',

        'Management Courses Page options',

        'Management Courses Page Options',

        'manage_options',

        'courses-page-content',

        'courses_content_area_callback'

    );

    add_submenu_page(

        'content-area',

		'Purchase Page options',

        'Purchase Page Options',

        'manage_options',

        'partners-page-content',

        'partners_content_area_callback'

    );
    
    add_submenu_page(

        'content-area',

        'Partners Page options',

        'Partners Page Options',
        
        'manage_options',

        'purchases-page-content',

        'purchases_content_area_callback'

    );
	
	add_submenu_page(

        'content-area',

        'Thank You Page options',

        'Thank You Page Options',
        
        'manage_options',

        'thankyou-page-content',

        'thankyou_content_area_callback'

    );

}

register_nav_menus(
    array(
        'main-footer'         => __( 'Main Footer menu' ),
    )
);


add_action( 'admin_menu', 'gsa_register_custom_menu_pages' );



require_once ( gsa_ROOT . 'gsa_options/gsa_options.php');

require_once ( gsa_ROOT . 'gsa_options/home_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/about_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/programs_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/faculty_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/contact_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/smart_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/courses_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/partners_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/purchase_page_options.php');

require_once ( gsa_ROOT . 'gsa_options/thankyou_page_options.php');



add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo() { ?>

    <style type="text/css">

        body{

            background:#c5c5d8!important; 

        }

        #login h1 a, .login h1 a {

            background-image: url(<?php echo get_option('gsa_header_logo_img'); ?>);

            width: 100%;

            height: 100px;

            background-size: contain;

            margin: 0 auto;

        }

        .login form{

            background: rgba(3, 3, 4, .9)!important;

            border-radius: .5rem;

        }

        .login label{

            font-weight: 600!important;

            color: #fff!important;

        }

        .wp-core-ui p .button {

            background: rgba(3, 3, 4, .9)!important;

            border-color: rgba(3, 3, 4, .9)!important;

        }

        .wp-core-ui p .button:hover{

            background-color: #005b52 !important;

            border-color: #005b52 !important;

            color: #fff;

        }

        #reg_passmail{color:#fff;}

    </style>

<?php }

