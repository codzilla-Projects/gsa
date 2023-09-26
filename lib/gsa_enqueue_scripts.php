<?php

function gsa_admin_scripts_styles($hook) {

    wp_enqueue_style( 'gsa-admin-main', gsa_URL . 'assets/admin/css/main-style.css');

    //var_dump($hook);

    $gsa_pages = ['toplevel_page_content-area',
        'gsa-options_page_home-page-content',
        'gsa-options_page_about-page-content',
        'gsa-options_page_programs-page-content',
        'gsa-options_page_faculty-page-content',
        'gsa-options_page_smart-page-content',
        'gsa-options_page_diploma-page-content',
        'gsa-options_page_courses-page-content',
        'gsa-options_page_partners-page-content',
        'gsa-options_page_purchases-page-content',
        'post-new.php',
        'post.php',
        'gsa-options_page_contact-page-content',
        'gsa-options_page_thankyou-page-content',
		'edit-tags.php','term.php'
    ];

    if( in_array($hook, $gsa_pages) ) {

        wp_enqueue_style( 'gsa-admin-bootsrtap-css', gsa_URL . 'assets/admin/css/bootstrap.min.css');

        wp_enqueue_style( 'gsa-admin-choose_cat-css', gsa_URL . 'assets/admin/css/choose-cat.css');

        wp_enqueue_style( 'gsa-admin-style-css', gsa_URL . 'assets/admin/css/style.css');

         wp_enqueue_script( 'gsa-admin-jquery-js', gsa_URL .'assets/js/jquery.js', array() ,false, true );

        wp_enqueue_script( 'gsa-admin-popper-js', gsa_URL .'assets/admin/js/popper.min.js', array() ,false, true );

        wp_enqueue_script( 'gsa-admin-bootsrtap-js', gsa_URL .'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );


        wp_enqueue_script( 'gsa-choose_cat-js', gsa_URL .'assets/admin/js/choose_cat.js', array() ,false, true ); 

        wp_enqueue_script( 'gsa-admin-script-js', gsa_URL .'assets/admin/js/script.js', array() ,false, true );


        if(function_exists( 'wp_enqueue_media' )){

            wp_enqueue_media();

        }else{

            wp_enqueue_style('thickbox');

            wp_enqueue_script('media-upload');

            wp_enqueue_script('thickbox');

        }

    }



        $primaryColor     = get_option('gsa_primaryColor');

        $secondaryColor   = get_option('gsa_secondaryColor');

        $thirdColor       = get_option('gsa_thirdColor');

        $googleFontUrl    = get_option('gsa_font_url');

        $googleFontName   = get_option('gsa_font_name');

        $custom_css = 

            "

                @import url('{$googleFontUrl}');

                :root {

                   --primaryColor   : {$primaryColor};

                   --secondaryColor : {$secondaryColor};

                   --thirdColor     : {$thirdColor};

                   --gsa-font     : '{$googleFontName}',sans-serif;

                }

            ";

        wp_add_inline_style('gsa-style-css', $custom_css);

        wp_add_inline_style('gsa-admin-main', $custom_css);

}

 

add_action('admin_enqueue_scripts', 'gsa_admin_scripts_styles');





function gsa_scripts_styles() {

    wp_enqueue_style( 'gsa-bootstrap-css', gsa_URL . 'assets/css/bootstrap.min.css');

    wp_enqueue_style( 'gsa-animate-css', gsa_URL . 'assets/css/animate.css');
    
    wp_enqueue_style( 'gsa-choose_cat-css', gsa_URL . 'assets/admin/css/choose-cat.css');

    wp_enqueue_style( 'gsa-swiper-css', gsa_URL . 'assets/css/swiper.min.css');

    wp_enqueue_style( 'gsa-owl-css', gsa_URL . 'assets/css/owl.css');

    wp_enqueue_style( 'gsa-jquery-fancybox-css', gsa_URL . 'assets/css/jquery.fancybox.min.css');
    if ( is_rtl() ) {
    wp_enqueue_style( 'gsa-main-style-css', gsa_URL . 'assets/css/style-rtl.css');
    }else{
    wp_enqueue_style( 'gsa-main-style-css', gsa_URL . 'assets/css/style.css');
    }
    
    global $template;
    if (basename($template) === 'page-about.php'):
        if ( is_rtl() ) {
            wp_enqueue_style( 'gsa-about-css', gsa_URL . 'assets/css/about-rtl.css');
        }else{
           wp_enqueue_style( 'gsa-about-css', gsa_URL . 'assets/css/about.css'); 
        }
    elseif (basename($template) === 'page-programs.php'):
        if ( is_rtl() ) {
            wp_enqueue_style( 'gsa-programs-css', gsa_URL . 'assets/css/programs-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-programs-css', gsa_URL . 'assets/css/programs.css');
        }
    elseif (basename($template) === 'page-contact.php'):
        if ( is_rtl() ) {
            wp_enqueue_style( 'gsa-contact-css', gsa_URL . 'assets/css/contact-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-contact-css', gsa_URL . 'assets/css/contact.css');
        }

    elseif (basename($template) === 'page-smart.php'):
        if ( is_rtl() ) {
            wp_enqueue_style( 'gsa-smart-cities-css', gsa_URL . 'assets/css/smart-cities-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-smart-cities-css', gsa_URL . 'assets/css/smart-cities.css');
        }
    elseif (basename($template) === 'page-courses.php') :
        if ( is_rtl() ) {
            wp_enqueue_style( 'gsa-smart-cities-css', gsa_URL . 'assets/css/smart-cities-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-smart-cities-css', gsa_URL . 'assets/css/smart-cities.css');
        }
    elseif (basename($template) === 'page-partners.php') :
        if ( is_rtl() ) {
            wp_enqueue_style( 'gsa-purchase-css', gsa_URL . 'assets/css/purchase-rtl.css');
        }else{
           wp_enqueue_style( 'gsa-purchase-css', gsa_URL . 'assets/css/purchase.css'); 
        }
    elseif (basename($template) === 'page-purchase.php') : 
        if ( is_rtl() ) {    
            wp_enqueue_style( 'gsa-partner-css', gsa_URL . 'assets/css/partner-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-partner-css', gsa_URL . 'assets/css/partner.css');
        }
    elseif (basename($template) === 'page-diploma.php') :
        if ( is_rtl() ) {  
            wp_enqueue_style( 'gsa-diploma-css', gsa_URL . 'assets/css/diploma-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-diploma-css', gsa_URL . 'assets/css/diploma.css');
        }
    elseif  ( is_single() && 'program' == get_post_type() ):
        if ( is_rtl() ) { 
            wp_enqueue_style( 'gsa-diploma-css', gsa_URL . 'assets/css/diploma-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-diploma-css', gsa_URL . 'assets/css/diploma.css');
        }
    endif;

    
    if (wp_is_mobile(  )):
        if ( is_rtl() ) { 
            wp_enqueue_style( 'gsa-responsive-css', gsa_URL . 'assets/css/responsive-rtl.css');
        }else{
            wp_enqueue_style( 'gsa-responsive-css', gsa_URL . 'assets/css/responsive.css');
        }
    endif;



    wp_enqueue_script( 'gsa-jquery-js', gsa_URL .'assets/js/jquery.js', array() ,false, true );

    wp_enqueue_script( 'gsa-jquery-fancybox-js', gsa_URL .'assets/js/jquery.fancybox.min.js', array() ,false, true );

    wp_enqueue_script( 'gsa-wow-js', gsa_URL .'assets/js/wow.js', array() ,false, true );
    
    wp_enqueue_script( 'gsa-choose_cat-js', gsa_URL .'assets/admin/js/choose_cat.js', array() ,false, true ); 

    wp_enqueue_script( 'gsa-swiper-js', gsa_URL .'assets/js/swiper.min.js', array() ,false, true );

    wp_enqueue_script( 'gsa-owl-js', gsa_URL .'assets/js/owl.js', array() ,false, true );

    wp_enqueue_script( 'gsa-script-js', gsa_URL .'assets/js/script.js', array() ,false, true );

    wp_enqueue_script( 'gsa-script-bundle-js', gsa_URL .'assets/js/bootstrap.bundle.min.js', array() ,false, true );
    
    if (basename($template) === 'page-partners.php') : 
        wp_enqueue_script( 'gsa-jquery-validate-js', gsa_URL .'assets/js/jquery.validate.min.js', array() ,false, true );
        //wp_enqueue_script( 'gsa-form-validate-js', gsa_URL .'assets/js/form-validation.js', array() ,false, true );
    elseif (basename($template) === 'page-purchase.php') :
        wp_enqueue_script( 'gsa-jquery-validate-js', gsa_URL .'assets/js/jquery.validate.min.js', array() ,false, true );
        //wp_enqueue_script( 'gsa-form-validate-js', gsa_URL .'assets/js/form-validation.js', array() ,false, true );
    endif;


        $primaryColor     = get_option('gsa_primaryColor');

        $secondaryColor   = get_option('gsa_secondaryColor');

        $thirdColor       = get_option('gsa_thirdColor');

        $googleFontUrl    = get_option('gsa_font_url');

        $googleFontName   = get_option('gsa_font_name');

        $custom_css = 

            "

                @import url('{$googleFontUrl}');

                :root {

                   --primaryColor   : {$primaryColor};

                   --secondaryColor : {$secondaryColor};

                   --thirdColor     : {$thirdColor};

                   --gsa-font     : '{$googleFontName}',sans-serif;

                }

            ";

    wp_add_inline_style('gsa-main-style-css', $custom_css);



}

add_action( 'wp_enqueue_scripts', 'gsa_scripts_styles' );



