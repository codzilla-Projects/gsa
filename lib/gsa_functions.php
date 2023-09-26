<?php

function gsa_get_slider_home($no){

    $args = array(

        'post_type'       => 'slider',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',
		
		'meta_query' => array(
			array(
				'key'     => 'gsa_slider_show_home',
				'value'   => '1',
				'compare' =>'LIKE',
			)
		),

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}



function gsa_get_slider_smart($no){

    $args = array(

        'post_type'       => 'slider',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

		'meta_query' => array(
			array(
				'key'     => 'gsa_slider_smart',
				'value'   => '2',
				'compare' =>'LIKE',
			)
		),

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_slider_courses($no){

    $args = array(

        'post_type'       => 'slider',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'meta_query' => array(
			array(
				'key'     => 'gsa_slider_courses',
				'value'   => '3',
				'compare' =>'LIKE',
			)
		),

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}



function gsa_get_program($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_by_desc($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

         'meta_key'       => 'gsa_programs_types',
		
         'orderby'        => 'meta_value',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_programs($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'post__in'        =>   get_option('programs_third_section_post'),

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_faculty($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'post__in'        =>   get_option('faculty_third_section_post'),

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_diploma($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'post__in'        =>   get_option('diploma_eighth_section_post'),

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_by_meta($no, $meta_value){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'meta_key'        => 'gsa_programs_types',

        'meta_value'      => $meta_value,

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_smart($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'post__in'        =>   get_option('smart_third_section_post'),

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_program_post_in($no, $programs){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',
        
        'post__in'        =>  $programs,

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}


function gsa_get_program_courses($no){

    $args = array(

        'post_type'       => 'program',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'post__in'        =>   get_option('courses_third_section_post'),

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}



function gsa_get_instructor($no){

    $args = array(

        'post_type'       => 'instructor',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}
function gsa_get_instructor_single($no, $instructors){

    $args = array(

        'post_type'       => 'instructor',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',
        
        'post__in'        =>  $instructors,

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}
function gsa_get_module($no, $cat_id){

    $args = array(

        'post_type'       => 'module',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC',

        'tax_query' => array(
            array(
                'taxonomy' => 'tips',
                'field'    => 'id',
                'terms'    => $cat_id,
            ),
        ),

    );

    return $posts = new WP_Query( $args );

}


function gsa_get_headline($no, $headlines){

    $args = array(

        'post_type'       => 'headline',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',
        
        'post__in'        =>  $headlines,

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_headlines($no){

    $args = array(

        'post_type'       => 'headline',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_faq($no){

    $args = array(

        'post_type'       => 'faq',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}

function gsa_get_faq_single($no){

    $args = array(

        'post_type'       => 'faq',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',
		
		'meta_query' => array(
			array(
				'key'     => 'gsa_programs_post',
				'value'   => get_the_ID(),
				'compare' =>'LIKE',
			)
		),

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}
