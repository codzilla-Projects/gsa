<?php 
/*********************************

Add Meta Box To programs

**********************************/

function gsa_add_gsa_data_metabox() {

    add_meta_box( "program_extra_side_data", "Additional Data" , "gsa_post_data_callback", array('program'), "side" );
    add_meta_box( "program_extra_data", "program Data" , "gsa_program_meta_data_callback", array('program'), "normal" );
    add_meta_box( "sliders_extra_data", "Additional Data" , "gsa_sliders_data_callback", array('slider'), "side" );
    add_meta_box( "faq_extra_data", "Additional Data" , "gsa_faq_data_callback", array('faq'), "side" );
    global $post;
    if ($post->ID == 15 ):
    add_meta_box( "img_extra_data", "Mobile Featured Image" , "gsa_img_data_callback", array('page'), "side" );
    endif;
}
add_action( 'add_meta_boxes', 'gsa_add_gsa_data_metabox' );

/* Display the post meta box. */
function gsa_img_data_callback( $object, $box ) { 
    $page_mobile_featured_img = esc_attr( get_post_meta( $object->ID, 'page_mobile_featured_img', true ) );
?>
    <?php
    global $post;
    if ($post->ID == 15 ):
    ?>
    <div class="form-group row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <label for="page_mobile_featured_img" class="text-white text-left"><?php _e('Fourth Section Image: ','gsa'); ?></label>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <input class="page_mobile_featured_img_url form-control site_half" type="text" name="page_mobile_featured_img" value="<?php echo $page_mobile_featured_img;?>">
            <a href="#" class="page_mobile_featured_img_upload btn btn-info btn-img">Choose </a>
           
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <img  class="page_mobile_featured_img img-fluid img-thumbnail w-50 mt-2 gsa_header_logo_img" src="<?php echo $page_mobile_featured_img;?>" height="100" style="max-width:100%" />
        </div>
    </div>
<?php endif?>
<?php
}

/* Display the post meta box. */
function gsa_post_data_callback( $object, $box ) { 
    $gsa_programs_types = esc_attr( get_post_meta( $object->ID, 'gsa_programs_types', true ) );
    $diploma_checked = $gsa_programs_types  === 'diploma' ? 'checked' : '';
    $courses_checked = $gsa_programs_types  === 'courses' ? 'checked' : '';
?>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="gsa_programs_type"><?php _e('Programs Type: ','gsa'); ?></label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="diploma" name="gsa_programs_types" <?=$diploma_checked?>>
                        <label class="form-check-label" for="flexCheckDefault">
                            Diploma
                        </label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" value="courses" type="radio" name="gsa_programs_types" <?=$courses_checked?>>
                        <label class="form-check-label" for="flexCheckChecked">
                            Courses
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

/* Display the post meta box. */


function gsa_program_meta_data_callback( $object, $box ) { 

    $third_sec_categories        = get_post_meta( $object->ID, 'third_sec_category', true ) ;
    $fifth_sec_categories        = get_post_meta( $object->ID, 'fivth_sec_category', true ) ;
    $instructors_sec_categories  = get_post_meta( $object->ID, 'instructor_sec_category', true ) ;
    $sixth_sec_categories        = get_post_meta( $object->ID, 'sixth_sec_category', true ) ;

    $wp_editor_settings = array( 
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), 
        'textarea_rows'=> 5,
        'drag_drop_upload'=> true,
        'wpautop' => false,
        'media_buttons'=> true,
        'class'=>'form-control'
    ); 

    $hide_first_section        = esc_attr( get_post_meta( $object->ID, 'hide_first_section', true ) );
    $first_sec_title           = esc_attr( get_post_meta( $object->ID, 'first_sec_title', true ) );
    $first_sec_content         = esc_attr( get_post_meta( $object->ID, 'first_sec_content', true ) );
    $hide_second_section       = esc_attr( get_post_meta( $object->ID, 'hide_second_section', true ) );
    $second_sec_title          = esc_attr( get_post_meta( $object->ID, 'second_sec_title', true));
    $second_sec_first_number   = esc_attr( get_post_meta( $object->ID, 'second_sec_first_number', true));
    $second_sec_first_title    = esc_attr( get_post_meta( $object->ID, 'second_sec_first_title', true));
    $second_sec_first_content  = esc_attr( get_post_meta( $object->ID, 'second_sec_first_content', true));
    $second_sec_second_number  = esc_attr( get_post_meta( $object->ID, 'second_sec_second_number', true));
    $second_sec_second_title   = esc_attr( get_post_meta( $object->ID, 'second_sec_second_title', true));
    $second_sec_second_content = esc_attr( get_post_meta( $object->ID, 'second_sec_second_content', true));
    $second_sec_third_number   = esc_attr( get_post_meta( $object->ID, 'second_sec_third_number', true));
    $second_sec_third_title    = esc_attr( get_post_meta( $object->ID, 'second_sec_third_title', true));
    $second_sec_third_content  = esc_attr( get_post_meta( $object->ID, 'second_sec_third_content', true));
    $second_sec_link_text      = esc_attr( get_post_meta( $object->ID, 'second_sec_link_text', true));
    $second_sec_link_url       = esc_attr( get_post_meta( $object->ID, 'second_sec_link_url', true));
    $hide_third_section        = esc_attr( get_post_meta( $object->ID, 'hide_third_section', true ) );
    $cat_show                  = esc_attr( get_post_meta( $object->ID, 'cat_show', true ) );
    $cat_with_desc_checked                 = $cat_show     === '1' ? 'checked' : '';
    $cat_with_posts_title_checked          = $cat_show     === '2' ? 'checked' : '';
    $cat_with_posts_cat_checked            = $cat_show     === '3' ? 'checked' : '';
    $third_sec_diploma_title   = esc_attr( get_post_meta( $object->ID, 'third_sec_diploma_title', true));
    $third_sec_courses_title   = esc_attr( get_post_meta( $object->ID, 'third_sec_courses_title', true));
    $third_sec_category        = esc_attr( get_post_meta( $object->ID, 'third_sec_category', true));
    $hide_fourth_section       = esc_attr( get_post_meta( $object->ID, 'hide_fourth_section', true ) );
    $fourth_sec_title          = esc_attr( get_post_meta( $object->ID, 'fourth_sec_title', true));
    $fourth_sec_content        = esc_attr( get_post_meta( $object->ID, 'fourth_sec_content', true));
    $fourth_sec_img            = esc_attr( get_post_meta( $object->ID, 'fourth_sec_img', true));
    $fivth_sec_link_text       = esc_attr( get_post_meta( $object->ID, 'fivth_sec_link_text', true));
    $fivth_sec_link_url        = esc_attr( get_post_meta( $object->ID, 'fivth_sec_link_url', true));
    $hide_fivth_section        = esc_attr( get_post_meta( $object->ID, 'hide_fivth_section', true ) );
    $fivth_sec_category        = esc_attr( get_post_meta( $object->ID, 'fivth_sec_category', true));
    $fivth_sec_number          = esc_attr( get_post_meta( $object->ID, 'fivth_sec_number', true));
    $hide_sixth_section        = esc_attr( get_post_meta( $object->ID, 'hide_sixth_section', true ) );
    $sixth_sec_title           = esc_attr( get_post_meta( $object->ID, 'sixth_sec_title', true));
    $sixth_sec_category        = esc_attr( get_post_meta( $object->ID, 'sixth_sec_category', true));
    $hide_faq_section          = esc_attr( get_post_meta( $object->ID, 'hide_faq_section', true ) );
    $faq_sec_title             = esc_attr( get_post_meta( $object->ID, 'faq_sec_title', true));
    $hide_instructor_section   = esc_attr( get_post_meta( $object->ID, 'hide_instructor_section',true) );
    $instructor_sec_title      = esc_attr( get_post_meta( $object->ID, 'instructor_sec_title',true) );
    $instructor_sec_category   = esc_attr( get_post_meta( $object->ID, 'instructor_sec_category',true) );

?>

<div  class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-thm-color">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="#first-section">First Section</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#second-section">Second Section</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#third-section">Third Section</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#fourth-section">Fourth Section</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#fivth-section">Fivth Section</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sixth-section">Sixth Section</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#seventh-section">Seventh Section</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="first-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>First Section </span></h1>
            </header>
        </div>
        <div class="row">
            
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_first_section" name="hide_first_section" value="1" <?php echo $hide_first_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_first_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="first_sec_title"><?php _e('First Section Title: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="first_sec_title" class="form-control" value="<?php echo $first_sec_title; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="first_sec_title"><?php _e('First Section Content: ','gsa'); ?></label>
                            </div>
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php wp_editor( htmlspecialchars_decode($first_sec_content), 'first_sec_content', $wp_editor_settings);  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="second-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>Second Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_second_section" name="hide_second_section" value="1" <?php echo $hide_second_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_second_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="second_sec_title"><?php _e('Second Section Title: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="second_sec_title" class="form-control" value="<?php echo $second_sec_title; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="services">
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_first_number"><?php _e('First Block Number: ','gsa'); ?></label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text"  name="second_sec_first_number" class="form-control" value="<?php echo $second_sec_first_number; ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_first_title"><?php _e('First Block Title: ','gsa'); ?></label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text"  name="second_sec_first_title" class="form-control" value="<?php echo $second_sec_first_title; ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_first_content"><?php _e('First Block Content: ','gsa'); ?></label>
                                        </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                             <?php wp_editor( htmlspecialchars_decode($second_sec_first_content), 'second_sec_first_content', $wp_editor_settings);  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services">
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_second_number"><?php _e('Second Block Number: ','gsa'); ?></label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text"  name="second_sec_second_number" class="form-control" value="<?php echo $second_sec_second_number; ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_second_title"><?php _e('Second Block Title: ','gsa'); ?></label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text"  name="second_sec_second_title" class="form-control" value="<?php echo $second_sec_second_title; ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_second_content"><?php _e('Second Block Content: ','gsa'); ?></label>
                                        </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                            <?php wp_editor( htmlspecialchars_decode($second_sec_second_content), 'second_sec_second_content', $wp_editor_settings);  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services">
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_third_number"><?php _e('Third Block Number: ','gsa'); ?></label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text"  name="second_sec_third_number" class="form-control" value="<?php echo $second_sec_third_number; ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_third_title"><?php _e('Third Block Title: ','gsa'); ?></label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text"  name="second_sec_third_title" class="form-control" value="<?php echo $second_sec_third_title; ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label  class="text-white text-left" for="second_sec_third_content"><?php _e('Third Block Content: ','gsa'); ?></label>
                                        </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                            <?php wp_editor( htmlspecialchars_decode($second_sec_third_content), 'second_sec_third_content', $wp_editor_settings);  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="second_sec_link_text"><?php _e('Second Section Link Text: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="second_sec_link_text" class="form-control" value="<?php echo $second_sec_link_text; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="second_sec_link_url"><?php _e('Second Section Link URL: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="second_sec_link_url" class="form-control" value="<?php echo $second_sec_link_url; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------- -->
            </div>
        </div>
    </div>

    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="instructor-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>Instructor Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_instructor_section" name="hide_instructor_section" value="1" <?php echo $hide_instructor_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_instructor_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="instructor_sec_title"><?php _e('instructor Section Title: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="instructor_sec_title" class="form-control" value="<?php echo $instructor_sec_title; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $instructors = gsa_get_instructor(-1);
                    if($instructors->have_posts()) :
                ?>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="instructor_sec_category"><?php _e('Choose instructors: ','gsa'); ?></label>
                            </div>
                            <div class="col-sm-12 text-left multiSelect_field">
                                <select  name="instructor_sec_category[]" multiple class="js-example-basic-multiple">
                                <option value = ''>Choose Instructors</option>
                                 <?php while($instructors->have_posts()) : $instructors->the_post();
                                  $instructor_id= get_the_ID();
                                  $selected_instructor = ( in_array($instructor_id, $instructors_sec_categories) ) ? 'selected="selected"' :  '';
                                 ?>


                                    <option value="<?php echo $instructor_id?>" <?= $selected_instructor;?> ><?php the_title()?></option>
                                <?php endwhile; wp_reset_query();?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif?>
                
            </div>
        </div>
    </div>
    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="third-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>Third Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_third_section" name="hide_third_section" value="1" <?php echo $hide_third_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_third_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label  class="text-white text-left" for="third_sec_diploma_title"><?php _e('third Section Diploma Title: ','gsa'); ?></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="text"  name="third_sec_diploma_title" class="form-control" value="<?php echo $third_sec_diploma_title; ?>"><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label  class="text-white text-left" for="third_sec_courses_title"><?php _e('third Section Courses Title: ','gsa'); ?></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="text"  name="third_sec_courses_title" class="form-control" value="<?php echo $third_sec_courses_title; ?>"><br>
                    </div>
                </div>
            </div>
            <?php
            $terms = get_terms( array('taxonomy' => 'tips','hide_empty' => true,) );

            ?>
            <div class="form-group row mt-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="choose_topics_show"><?php _e('Choose Topics Show: ','gsa'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" name="cat_show" type="radio" value="1" <?=$cat_with_desc_checked ?>>
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Categories With Descriptions
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="cat_show" type="radio" value="2" <?=$cat_with_posts_title_checked ?>>
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Categories With Posts Title
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="cat_show" type="radio" value="3" <?=$cat_with_posts_cat_checked ?>>
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Categories With Posts Title and Descriptions
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label  class="text-white text-left" for="third_sec_content"><?php _e('third Section Category: ','gsa'); ?></label>
                    </div>
                    <div class="col-sm-12 text-left multiSelect_field">
                         <select  name="third_sec_category[]" multiple class="js-example-basic-multiple">
                         <option value = ''>Choose Category</option>
                            <?php foreach ($terms as $term) : ?>
                            <?php
                                   $selected_term = ( in_array($term->term_id, $third_sec_categories) ) ? 'selected="selected"' :  '';
                            ?>
                            <option value="<?= $term->term_id; ?>"  <?= $selected_term; ?> > <?= $term->name; ?>( slug - <?= $term->slug ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="fourth-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>Fourth Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_fourth_section" name="hide_fourth_section" value="1" <?php echo $hide_fourth_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_fourth_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="fourth_sec_title"><?php _e('Fourth Section Title: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="fourth_sec_title" class="form-control" value="<?php echo $fourth_sec_title; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="fourth_sec_content"><?php _e('Fourth Section Content: ','gsa'); ?></label>
                            </div>
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php wp_editor( htmlspecialchars_decode($fourth_sec_content), 'fourth_sec_content', $wp_editor_settings);  ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------- -->
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="fourth_sec_img" class="text-white text-left"><?php _e('Fourth Section Image: ','gsa'); ?></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                        <input class="fourth_sec_img_url form-control site_half" type="text" name="fourth_sec_img" value="<?php echo $fourth_sec_img;?>">
                        <a href="#" class="fourth_sec_img_upload btn btn-info btn-img">Choose </a>
                       
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <img  class="fourth_sec_img img-fluid img-thumbnail w-50 mt-2 gsa_header_logo_img" src="<?php echo $fourth_sec_img;?>" height="100" style="max-width:100%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="fivth-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>Fivth Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_fivth_section" name="hide_fivth_section" value="1" <?php echo $hide_fivth_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_fivth_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
                <?php
                    $headlines = gsa_get_headline(-1,0);
                    if($headlines->have_posts()) :
                ?>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="fivth_sec_category"><?php _e('Choose Headlines: ','gsa'); ?></label>
                            </div>
                            <div class="col-sm-12 text-left multiSelect_field">
                                <select  name="fivth_sec_category[]" multiple class="js-example-basic-multiple">
                                <option value = ''>Choose Headlines</option>
                                 <?php while($headlines->have_posts()) : $headlines->the_post();
                                  $headline_id= get_the_ID();
                                  $selected_headline = ( in_array($headline_id, $fifth_sec_categories) ) ? 'selected="selected"' :  '';
                                 ?>


                                    <option value="<?php echo $headline_id?>" <?= $selected_headline;?> ><?php the_title()?></option>
                                <?php endwhile; wp_reset_query();?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif?>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="fivth_sec_number"><?php _e('Fivth Section Number: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="fivth_sec_number" class="form-control" value="<?php echo $fivth_sec_number; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="fivth_sec_link_text"><?php _e('Fivth Section Link Text: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="fivth_sec_link_text" class="form-control" value="<?php echo $fivth_sec_link_text; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="fivth_sec_link_url"><?php _e('Fivth Section Link URL: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="fivth_sec_link_url" class="form-control" value="<?php echo $fivth_sec_link_url; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="faq-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>FAQ Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_faq_section" name="hide_faq_section" value="1" <?php echo $hide_faq_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_faq_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="faq_sec_title"><?php _e('faq Section Title: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="faq_sec_title" class="form-control" value="<?php echo $faq_sec_title; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------- -->
            </div>
        </div>
    </div>
    <div class="bg-secondary p-4 mt-4 mb-4">
        <div id="sixth-section">
            <header class="codrops-header mb-3">
                <h1 class="text-center bg-thm-second-color text-white"><span>Sixth Section </span></h1>
            </header>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" type="checkbox" id="hide_sixth_section" name="hide_sixth_section" value="1" <?php echo $hide_sixth_section == '1' ? 'checked' : ''; ?>>
                        <label for="hide_sixth_section" class="text-white text-left"><?php _e('Hidden Section','gsa'); ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="sixth_sec_title"><?php _e('Sixth Section Title: ','gsa'); ?></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text"  name="sixth_sec_title" class="form-control" value="<?php echo $sixth_sec_title; ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------- -->
                <?php
                    $programs = gsa_get_program(-1);
                    if($programs->have_posts()) :
                ?>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label  class="text-white text-left" for="sixth_sec_category"><?php _e('Choose programs: ','gsa'); ?></label>
                            </div>
                            <div class="col-sm-12 text-left multiSelect_field">
                                <select  name="sixth_sec_category[]" multiple class="js-example-basic-multiple">
                                <option value = ''>Choose programs</option>
                                 <?php while($programs->have_posts()) : $programs->the_post();
                                  $program_id= get_the_ID();
                                  $selected_program = ( in_array($program_id, $sixth_sec_categories) ) ? 'selected="selected"' :  '';
                                 ?>


                                    <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                <?php endwhile; wp_reset_query();?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif?>
            </div>
        </div>
    </div>

    <input type="submit" name="save" id="publish" class="button button-primary button-large mt-2 bg-thm-color  pt-2 pb-2 w-100" value="Save">
</div>
<?php

}
/* Display the post meta box. */
function gsa_faq_data_callback( $object, $box ) { 
    $programs_posts     = get_post_meta( $object->ID, 'gsa_programs_post', true ) ;
    $gsa_programs_post  = esc_attr( get_post_meta( $object->ID, 'gsa_programs_post', true ) );
?>
    <?php
        $programs = gsa_get_program(-1);
        if($programs->have_posts()) :
    ?>
    <div class="form-group row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label  class="text-dark text-left" for="fivth_sec_category"><?php _e('Choose the program in which the Faq appear: ','gsa'); ?></label>
                </div>
                <div class="col-sm-12 text-left multiSelect_field">
                    <select  name="gsa_programs_post[]" multiple class="js-example-basic-multiple">
                    <option value = ''>Choose Programs</option>
                    <?php while($programs->have_posts()) : $programs->the_post();
                      $program_id= get_the_ID();
                      $selected_program = ( in_array($program_id, $programs_posts) ) ? 'selected="selected"' :  '';
                     ?>
                        <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                    <?php endwhile; wp_reset_query();?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <?php endif?>
<?php
}
function gsa_sliders_data_callback( $object, $box ) { 
    $gsa_slider_show_home = esc_attr( get_post_meta( $object->ID, 'gsa_slider_show_home', true ) );
    $gsa_slider_smart     = esc_attr( get_post_meta( $object->ID, 'gsa_slider_smart', true ) );
    $gsa_slider_courses     = esc_attr( get_post_meta( $object->ID, 'gsa_slider_courses', true ) );
    var_dump($gsa_slider_show_home, $gsa_slider_smart, $gsa_slider_courses);
    $home_checked  = $gsa_slider_show_home      === '1' ? 'checked' : '';
    $smart_checked = $gsa_slider_smart          === '2' ? 'checked' : '';
    $courses_checked = $gsa_slider_courses      === '3' ? 'checked' : '';
?>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="gsa_slider_show"><?php _e('Slider Show: ','gsa'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" name="gsa_slider_show_home" type="checkbox" value="1"   <?=$home_checked ?>>
                        <label class="form-check-label" for="flexCheckDefault">
                            Show In Home Page
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="gsa_slider_smart" type="checkbox" value="2"   <?=$smart_checked ?>>
                        <label class="form-check-label" for="flexCheckChecked">
                            Show In Smart Cities Diploma Page
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" name="gsa_slider_courses" type="checkbox" value="3" <?=$courses_checked ?>>
                        <label class="form-check-label" for="flexCheckChecked">
                            Show In Smart Cities Management Courses Page
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

add_action( 'save_post', 'gsa_save_custom_meta', 10, 2 );
function gsa_save_custom_meta($post_id){
//var_dump($_POST);die();
    $keys = ['hide_first_section','first_sec_title','first_sec_content','hide_second_section','second_sec_title','second_sec_first_number','second_sec_first_title','second_sec_first_content','second_sec_second_number','second_sec_second_title','second_sec_second_content','second_sec_third_number','second_sec_third_title','second_sec_third_content','second_sec_link_text','second_sec_link_url','hide_third_section','third_sec_diploma_title','third_sec_courses_title','third_sec_category','cat_show','hide_fourth_section','fourth_sec_title','fourth_sec_content','fourth_sec_img','hide_fivth_section','fivth_sec_category','fivth_sec_number','fivth_sec_link_text','fivth_sec_link_url','hide_sixth_section','sixth_sec_title','sixth_sec_category','gsa_programs_types','gsa_slider_link_text','gsa_slider_link_url','gsa_slider_show_home','gsa_slider_smart','gsa_slider_courses','gsa_programs_post','gsa_programs_types','page_mobile_featured_img','hide_instructor_section','instructor_sec_title','instructor_sec_category','hide_faq_section','faq_sec_title'];

    foreach ($keys as $key) {

       if( isset($_POST[$key]) ){
            update_post_meta($post_id, $key, $_POST[$key]);
        }
        else
            if ($_POST[$key] === '')  {
               delete_post_meta($post_id,$key);
                
            }elseif (in_array($key, ['gsa_slider_show_home','gsa_slider_smart','gsa_slider_courses','cat_show']) && !$_POST[$key]){
                delete_post_meta($post_id,$key);
            }
    }
}

function wp_tips_fields($term) {
    
    $programs_orders        = get_term_meta($term->term_id, 'programs_order', true);
    $first_checked          = $programs_orders  === '1' ? 'checked' : '';
    $second_checked         = $programs_orders  === '2' ? 'checked' : '';
    $third_checked          = $programs_orders  === '3' ? 'checked' : '';
    ?>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="gsa_programs_type"><?php _e('Programs Type: ','gsa'); ?></label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="term_fields[programs_order]" <?=$first_checked?>>
                        <label class="form-check-label" for="flexCheckDefault">
                            The first order
                        </label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" value="2" type="radio" name="term_fields[programs_order]" <?=$second_checked?>>
                        <label class="form-check-label" for="flexCheckChecked">
                            The second order
                        </label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" value="3" type="radio" name="term_fields[programs_order]" <?=$third_checked?>>
                        <label class="form-check-label" for="flexCheckChecked">
                            The third order
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php
}

// Add the fields, using our callback function  
// if you have other taxonomy name, replace category with the name of your taxonomy. ex: book_add_form_fields, book_edit_form_fields
add_action('tips_add_form_fields', 'wp_tips_fields', 10, 2);
add_action('tips_edit_form_fields', 'wp_tips_fields', 10, 2);

function wp_save_tips_fields($term_id) {
    if (!isset($_POST['term_fields'])) {
        return;
    }

    foreach ($_POST['term_fields'] as $key => $value) {
        update_term_meta($term_id, $key, sanitize_text_field($value));
    }
}

// Save the fields values, using our callback function
// if you have other taxonomy name, replace tips with the name of your taxonomy. ex: edited_book, create_book
add_action('edited_tips', 'wp_save_tips_fields', 10, 2);
add_action('create_tips', 'wp_save_tips_fields', 10, 2);