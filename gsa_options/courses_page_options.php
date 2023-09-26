<?php
function courses_content_area_callback(){
    $wp_editor_settings = array(
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
        'textarea_rows'=> 2
    );
    if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['first_courses_first_block_content','first_courses_second_block_content','first_courses_third_block_content','second_courses_first_block_content','second_courses_second_block_content','second_courses_third_block_content','third_courses_first_block_content','third_courses_second_block_content','third_courses_third_block_content','fourth_courses_first_block_content','fourth_courses_second_block_content','fourth_courses_third_block_content'])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }

        if(!isset($_POST['courses_first_section_hidden'])) {delete_option('courses_first_section_hidden');}
        if(!isset($_POST['courses_second_section_hidden'])) {delete_option('courses_second_section_hidden');}
        if(!isset($_POST['courses_third_section_hidden'])) {delete_option('courses_third_section_hidden');}
        if(!isset($_POST['courses_video_hidden'])) {delete_option('courses_video_hidden');}
        if(!isset($_POST['courses_vision_hidden'])) {delete_option('courses_vision_hidden');}
        if(!isset($_POST['courses_sixth_sec_hidden'])) {delete_option('courses_sixth_sec_hidden');}
    }

    if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['first_courses_first_block_content_ar','first_courses_second_block_content_ar','first_courses_third_block_content_ar','second_courses_first_block_content_ar','second_courses_second_block_content_ar','second_courses_third_block_content_ar','third_courses_first_block_content_ar','third_courses_second_block_content_ar','third_courses_third_block_content_ar','fourth_courses_first_block_content_ar','fourth_courses_second_block_content_ar','fourth_courses_third_block_content_ar'])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }

        if(!isset($_POST['courses_first_section_hidden_ar'])) {delete_option('courses_first_section_hidden_ar');}
        if(!isset($_POST['courses_second_section_hidden_ar'])) {delete_option('courses_second_section_hidden_ar');}
        if(!isset($_POST['courses_third_section_hidden_ar'])) {delete_option('courses_third_section_hidden_ar');}
        if(!isset($_POST['courses_video_hidden_ar'])) {delete_option('courses_video_hidden_ar');}
        if(!isset($_POST['courses_vision_hidden_ar'])) {delete_option('courses_vision_hidden_ar');}
        if(!isset($_POST['courses_sixth_sec_hidden_ar'])) {delete_option('courses_sixth_sec_hidden_ar');}
    }
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
<div class="container-fluid text-left padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

            <!-- Top Navigation -->

            <header class="codrops-header">

                <h1 class="text-center site-title"><span>courses Cities Diploma Page Settings</span></h1>

            </header>

        </div>

            <br/>

        <div class="d-flex align-items-start p-0 m-0">

            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-page-title-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-title" type="button" role="tab" aria-controls="v-pills-page-title" aria-selected="true">Page Title</button>

                <button class="nav-link" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</button>

                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">Second Section</button>

                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">Third Section</button>
                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">Fourth Section</button>
            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                <form class="form-horizontal form_back p-5 rounded" method="post" action="#">

                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                            <div class="form-group">

                                <label for="courses_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                <div class="col-sm-12 text-left ">

                                    <input type="text" class="form-control" id="courses_page_title" name="courses_page_title" value="<?= get_option('courses_page_title'); ?>">

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                            <div class="form-group text-left">

                                <div class="inline-block">

                                    <?php $name = 'courses_first_section_hidden' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                            </div>

                            <div class="form-group">

                                <label for="courses_first_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                <div class="col-sm-12 text-left ">

                                    <input type="text" class="form-control" id="courses_first_section_title" name="courses_first_section_title" value="<?= get_option('courses_first_section_title'); ?>">

                                </div>

                            </div>
                            <div class="form-group">

                                <label for="courses_first_section_subtitle" class="col-sm-12 text-left  control-label text-white">Sub Title</label>

                                <div class="col-sm-12 text-left ">

                                    <input type="text" class="form-control" id="courses_first_section_subtitle" name="courses_first_section_subtitle" value="<?= get_option('courses_first_section_subtitle'); ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="first_courses_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="first_courses_first_block_img_url site_half" type="text" name="first_courses_first_block_img" size="60" value="<?= get_option('first_courses_first_block_img'); ?>">

                                                <a href="#" class="first_courses_first_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('first_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 first_courses_first_block_img" src="<?= get_option('first_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_courses_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_first_block_title" name="first_courses_first_block_title" value="<?= get_option('first_courses_first_block_title'); ?>">
                                            </div>
                                        </div>


                                        <div class="form-group text-left">
                                            <label for="first_courses_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_courses_first_block_content'), 'first_courses_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_courses_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_courses_first_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_first_block_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_first_block_link_text" name="first_courses_first_block_link_text" value="<?= get_option('first_courses_first_block_link_text'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_first_block_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_first_block_link_url" name="first_courses_first_block_link_url" value="<?= get_option('first_courses_first_block_link_url'); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="first_courses_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="first_courses_second_block_img_url site_half" type="text" name="first_courses_second_block_img" size="60" value="<?= get_option('first_courses_second_block_img'); ?>">

                                                <a href="#" class="first_courses_second_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('first_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 first_courses_second_block_img" src="<?= get_option('first_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_courses_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_second_block_title" name="first_courses_second_block_title" value="<?= get_option('first_courses_second_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="first_courses_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_courses_second_block_content'), 'first_courses_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_courses_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_courses_second_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_second_block_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_second_block_link_text" name="first_courses_second_block_link_text" value="<?= get_option('first_courses_second_block_link_text'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_second_block_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_second_block_link_url" name="first_courses_second_block_link_url" value="<?= get_option('first_courses_second_block_link_url'); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="first_courses_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="first_courses_third_block_img_url site_half" type="text" name="first_courses_third_block_img" size="60" value="<?= get_option('first_courses_third_block_img'); ?>">

                                                <a href="#" class="first_courses_third_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('first_courses_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 first_courses_third_block_img" src="<?= get_option('first_courses_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_courses_third_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_third_block_title" name="first_courses_third_block_title" value="<?= get_option('first_courses_third_block_title'); ?>">
                                            </div>
                                        </div>


                                        <div class="form-group text-left">
                                            <label for="first_courses_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_courses_third_block_content'), 'first_courses_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_courses_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_courses_third_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_third_block_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_third_block_link_text" name="first_courses_third_block_link_text" value="<?= get_option('first_courses_third_block_link_text'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_third_block_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="first_courses_third_block_link_url" name="first_courses_third_block_link_url" value="<?= get_option('first_courses_third_block_link_url'); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                            <div class="form-group text-left">

                                <div class="inline-block">

                                    <?php $name = 'courses_second_section_hidden' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_courses_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="second_courses_first_block_title" name="second_courses_first_block_title" value="<?= get_option('second_courses_first_block_title'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label for="second_courses_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="second_courses_first_block_img_url site_half" type="text" name="second_courses_first_block_img" size="60" value="<?= get_option('second_courses_first_block_img'); ?>">

                                                <a href="#" class="second_courses_first_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('second_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_courses_first_block_img" src="<?= get_option('second_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_courses_first_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="second_courses_first_block_sub_title" name="second_courses_first_block_sub_title" value="<?= get_option('second_courses_first_block_sub_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="second_courses_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_courses_first_block_content'), 'second_courses_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_courses_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_courses_first_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_courses_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="second_courses_second_block_title" name="second_courses_second_block_title" value="<?= get_option('second_courses_second_block_title'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label for="second_courses_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="second_courses_second_block_img_url site_half" type="text" name="second_courses_second_block_img" size="60" value="<?= get_option('second_courses_second_block_img'); ?>">

                                                <a href="#" class="second_courses_second_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('second_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_courses_second_block_img" src="<?= get_option('second_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_courses_second_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="second_courses_second_block_sub_title" name="second_courses_second_block_sub_title" value="<?= get_option('second_courses_second_block_sub_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="second_courses_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_courses_second_block_content'), 'second_courses_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_courses_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_courses_second_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                        <!-- ************** -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                            <div class="form-group text-left">

                                <div class="inline-block">

                                    <?php $name = 'courses_third_section_hidden' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                            </div>

                            <div class="form-group">

                                <label for="courses_third_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                <div class="col-sm-12 text-left ">

                                    <input type="text" class="form-control" id="courses_third_section_title" name="courses_third_section_title" value="<?= get_option('courses_third_section_title'); ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="third_courses_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="third_courses_first_block_img_url site_half" type="text" name="third_courses_first_block_img" size="60" value="<?= get_option('third_courses_first_block_img'); ?>">

                                                <a href="#" class="third_courses_first_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('third_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 third_courses_first_block_img" src="<?= get_option('third_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="third_courses_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="third_courses_first_block_title" name="third_courses_first_block_title" value="<?= get_option('third_courses_first_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="third_courses_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_courses_first_block_content'), 'third_courses_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_courses_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_courses_first_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="third_courses_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="third_courses_second_block_img_url site_half" type="text" name="third_courses_second_block_img" size="60" value="<?= get_option('third_courses_second_block_img'); ?>">

                                                <a href="#" class="third_courses_second_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('third_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 third_courses_second_block_img" src="<?= get_option('third_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="third_courses_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="third_courses_second_block_title" name="third_courses_second_block_title" value="<?= get_option('third_courses_second_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="third_courses_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_courses_second_block_content'), 'third_courses_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_courses_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_courses_second_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="third_courses_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="third_courses_third_block_img_url site_half" type="text" name="third_courses_third_block_img" size="60" value="<?= get_option('third_courses_third_block_img'); ?>">

                                                <a href="#" class="third_courses_third_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('third_courses_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 third_courses_third_block_img" src="<?= get_option('third_courses_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="third_courses_third_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="third_courses_third_block_title" name="third_courses_third_block_title" value="<?= get_option('third_courses_third_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="third_courses_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_courses_third_block_content'), 'third_courses_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_courses_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_courses_third_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                            <div class="form-group text-left">

                                <div class="inline-block">

                                    <?php $name = 'courses_fourth_section_hidden' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                            </div>

                            <div class="form-group">

                                <label for="courses_fourth_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                <div class="col-sm-12 text-left ">

                                    <input type="text" class="form-control" id="courses_fourth_section_title" name="courses_fourth_section_title" value="<?= get_option('courses_fourth_section_title'); ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="fourth_courses_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="fourth_courses_first_block_img_url site_half" type="text" name="fourth_courses_first_block_img" size="60" value="<?= get_option('fourth_courses_first_block_img'); ?>">

                                                <a href="#" class="fourth_courses_first_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('fourth_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 fourth_courses_first_block_img" src="<?= get_option('fourth_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fourth_courses_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="fourth_courses_first_block_title" name="fourth_courses_first_block_title" value="<?= get_option('fourth_courses_first_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="fourth_courses_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_courses_first_block_content'), 'fourth_courses_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_courses_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_courses_first_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="fourth_courses_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="fourth_courses_second_block_img_url site_half" type="text" name="fourth_courses_second_block_img" size="60" value="<?= get_option('fourth_courses_second_block_img'); ?>">

                                                <a href="#" class="fourth_courses_second_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('fourth_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 fourth_courses_second_block_img" src="<?= get_option('fourth_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fourth_courses_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="fourth_courses_second_block_title" name="fourth_courses_second_block_title" value="<?= get_option('fourth_courses_second_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="fourth_courses_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_courses_second_block_content'), 'fourth_courses_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_courses_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_courses_second_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="fourth_courses_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                              <div class="col-sm-12 text-left ">
                                                <input class="fourth_courses_third_block_img_url site_half" type="text" name="fourth_courses_third_block_img" size="60" value="<?= get_option('fourth_courses_third_block_img'); ?>">

                                                <a href="#" class="fourth_courses_third_block_img_upload btn btn-info">Choose</a>

                                                <?php if (!empty(get_option('fourth_courses_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 fourth_courses_third_block_img" src="<?= get_option('fourth_courses_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fourth_courses_fourth_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                            <div class="col-sm-12 text-left ">

                                                <input type="text" class="form-control" id="fourth_courses_third_block_title" name="fourth_courses_third_block_title" value="<?= get_option('fourth_courses_third_block_title'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <label for="fourth_courses_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_courses_third_block_content'), 'fourth_courses_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_courses_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_courses_third_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                        <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="gsa_save" value="Save Settings">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<?php else: ?>
<div dir="rtl" class="container-fluid text-end padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

            <!-- Top Navigation -->

            <header class="codrops-header">

                <h1 class="text-center site-title"><span>إعدادات صفحة الدورات الإدارية</span></h1>

            </header>

        </div>

            <br/>

        <div class="d-flex align-items-start p-0 m-0">

            <div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-page-title-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-title" type="button" role="tab" aria-controls="v-pills-page-title" aria-selected="true">عنوان الصفحة </button>

                <button class="nav-link" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">السكشن الاول </button>

                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">السكشن الثانى </button>

                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">السكشن الثالث</button>

                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">السكشن الرابع </button>
            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                <form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">

                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                            <div class="form-group">

                                <label for="courses_page_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="courses_page_title_ar" name="courses_page_title_ar" value="<?= get_option('courses_page_title_ar'); ?>">

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'courses_first_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                            </div>

                            <div class="form-group">

                                <label for="courses_first_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="courses_first_section_title_ar" name="courses_first_section_title_ar" value="<?= get_option('courses_first_section_title_ar'); ?>">

                                </div>

                            </div>
                            <div class="form-group">

                                <label for="courses_first_section_subtitle_ar" class="col-sm-12 text-end  control-label text-white">Sub Title</label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="courses_first_section_subtitle_ar" name="courses_first_section_subtitle_ar" value="<?= get_option('courses_first_section_subtitle_ar'); ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="first_courses_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="first_courses_first_block_img_url site_half" type="text" name="first_courses_first_block_img" size="60" value="<?= get_option('first_courses_first_block_img'); ?>">

                                                <a href="#" class="first_courses_first_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('first_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 first_courses_first_block_img" src="<?= get_option('first_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_courses_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_first_block_title_ar" name="first_courses_first_block_title_ar" value="<?= get_option('first_courses_first_block_title_ar'); ?>">
                                            </div>
                                        </div>


                                        <div class="form-group text-end">
                                            <label for="first_courses_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_courses_first_block_content_ar'), 'first_courses_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'first_courses_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_courses_first_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_first_block_link_text_ar" class="col-sm-12 text-end  control-label text-white">Link Text</label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_first_block_link_text_ar" name="first_courses_first_block_link_text_ar" value="<?= get_option('first_courses_first_block_link_text_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_first_block_link_url_ar" class="col-sm-12 text-end  control-label text-white">Link URL</label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_first_block_link_url_ar" name="first_courses_first_block_link_url_ar" value="<?= get_option('first_courses_first_block_link_url_ar'); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="first_courses_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="first_courses_second_block_img_url site_half" type="text" name="first_courses_second_block_img" size="60" value="<?= get_option('first_courses_second_block_img'); ?>">

                                                <a href="#" class="first_courses_second_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('first_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 first_courses_second_block_img" src="<?= get_option('first_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_courses_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_second_block_title_ar" name="first_courses_second_block_title_ar" value="<?= get_option('first_courses_second_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="first_courses_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_courses_second_block_content_ar'), 'first_courses_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'first_courses_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_courses_second_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_second_block_link_text_ar" class="col-sm-12 text-end  control-label text-white">Link Text</label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_second_block_link_text_ar" name="first_courses_second_block_link_text_ar" value="<?= get_option('first_courses_second_block_link_text_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_second_block_link_url_ar" class="col-sm-12 text-end  control-label text-white">Link URL</label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_second_block_link_url_ar" name="first_courses_second_block_link_url_ar" value="<?= get_option('first_courses_second_block_link_url_ar'); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="first_courses_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="first_courses_third_block_img_url site_half" type="text" name="first_courses_third_block_img" size="60" value="<?= get_option('first_courses_third_block_img'); ?>">

                                                <a href="#" class="first_courses_third_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('first_courses_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 first_courses_third_block_img" src="<?= get_option('first_courses_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_courses_third_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_third_block_title_ar" name="first_courses_third_block_title_ar" value="<?= get_option('first_courses_third_block_title_ar'); ?>">
                                            </div>
                                        </div>


                                        <div class="form-group text-end">
                                            <label for="first_courses_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_courses_third_block_content_ar'), 'first_courses_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'first_courses_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_courses_third_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_third_block_link_text_ar" class="col-sm-12 text-end  control-label text-white">Link Text</label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_third_block_link_text_ar" name="first_courses_third_block_link_text_ar" value="<?= get_option('first_courses_third_block_link_text_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_courses_third_block_link_url_ar" class="col-sm-12 text-end  control-label text-white">Link URL</label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="first_courses_third_block_link_url_ar" name="first_courses_third_block_link_url_ar" value="<?= get_option('first_courses_third_block_link_url_ar'); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'courses_second_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_courses_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_courses_first_block_title_ar" name="second_courses_first_block_title_ar" value="<?= get_option('second_courses_first_block_title_ar'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label for="second_courses_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="second_courses_first_block_img_url site_half" type="text" name="second_courses_first_block_img" size="60" value="<?= get_option('second_courses_first_block_img'); ?>">

                                                <a href="#" class="second_courses_first_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('second_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_courses_first_block_img" src="<?= get_option('second_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_courses_first_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white"> العنوان الفرعى  </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_courses_first_block_sub_title_ar" name="second_courses_first_block_sub_title_ar" value="<?= get_option('second_courses_first_block_sub_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="second_courses_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_courses_first_block_content_ar'), 'second_courses_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_courses_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_courses_first_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_courses_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_courses_second_block_title_ar" name="second_courses_second_block_title_ar" value="<?= get_option('second_courses_second_block_title_ar'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label for="second_courses_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="second_courses_second_block_img_url site_half" type="text" name="second_courses_second_block_img" size="60" value="<?= get_option('second_courses_second_block_img'); ?>">

                                                <a href="#" class="second_courses_second_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('second_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_courses_second_block_img" src="<?= get_option('second_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_courses_second_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_courses_second_block_sub_title_ar" name="second_courses_second_block_sub_title_ar" value="<?= get_option('second_courses_second_block_sub_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="second_courses_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_courses_second_block_content_ar'), 'second_courses_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_courses_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_courses_second_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                        <!-- ************** -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'courses_third_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                            </div>

                            <div class="form-group">

                                <label for="courses_third_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="courses_third_section_title_ar" name="courses_third_section_title_ar" value="<?= get_option('courses_third_section_title_ar'); ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="third_courses_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="third_courses_first_block_img_url site_half" type="text" name="third_courses_first_block_img" size="60" value="<?= get_option('third_courses_first_block_img'); ?>">

                                                <a href="#" class="third_courses_first_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('third_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 third_courses_first_block_img" src="<?= get_option('third_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="third_courses_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="third_courses_first_block_title_ar" name="third_courses_first_block_title_ar" value="<?= get_option('third_courses_first_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="third_courses_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_courses_first_block_content_ar'), 'third_courses_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_courses_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_courses_first_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="third_courses_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="third_courses_second_block_img_url site_half" type="text" name="third_courses_second_block_img" size="60" value="<?= get_option('third_courses_second_block_img'); ?>">

                                                <a href="#" class="third_courses_second_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('third_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 third_courses_second_block_img" src="<?= get_option('third_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="third_courses_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="third_courses_second_block_title_ar" name="third_courses_second_block_title_ar" value="<?= get_option('third_courses_second_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="third_courses_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_courses_second_block_content_ar'), 'third_courses_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_courses_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_courses_second_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="third_courses_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="third_courses_third_block_img_url site_half" type="text" name="third_courses_third_block_img" size="60" value="<?= get_option('third_courses_third_block_img'); ?>">

                                                <a href="#" class="third_courses_third_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('third_courses_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 third_courses_third_block_img" src="<?= get_option('third_courses_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="third_courses_third_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="third_courses_third_block_title_ar" name="third_courses_third_block_title_ar" value="<?= get_option('third_courses_third_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="third_courses_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_courses_third_block_content_ar'), 'third_courses_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_courses_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_courses_third_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'courses_fourth_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                            </div>

                            <div class="form-group">

                                <label for="courses_fourth_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="courses_fourth_section_title_ar" name="courses_fourth_section_title_ar" value="<?= get_option('courses_fourth_section_title_ar'); ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="fourth_courses_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="fourth_courses_first_block_img_url site_half" type="text" name="fourth_courses_first_block_img" size="60" value="<?= get_option('fourth_courses_first_block_img'); ?>">

                                                <a href="#" class="fourth_courses_first_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('fourth_courses_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 fourth_courses_first_block_img" src="<?= get_option('fourth_courses_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fourth_courses_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="fourth_courses_first_block_title_ar" name="fourth_courses_first_block_title_ar" value="<?= get_option('fourth_courses_first_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="fourth_courses_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_courses_first_block_content_ar'), 'fourth_courses_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_courses_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_courses_first_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="fourth_courses_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="fourth_courses_second_block_img_url site_half" type="text" name="fourth_courses_second_block_img" size="60" value="<?= get_option('fourth_courses_second_block_img'); ?>">

                                                <a href="#" class="fourth_courses_second_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('fourth_courses_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 fourth_courses_second_block_img" src="<?= get_option('fourth_courses_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fourth_courses_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="fourth_courses_second_block_title_ar" name="fourth_courses_second_block_title_ar" value="<?= get_option('fourth_courses_second_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="fourth_courses_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_courses_second_block_content_ar'), 'fourth_courses_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_courses_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_courses_second_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="fourth_courses_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="fourth_courses_third_block_img_url site_half" type="text" name="fourth_courses_third_block_img" size="60" value="<?= get_option('fourth_courses_third_block_img'); ?>">

                                                <a href="#" class="fourth_courses_third_block_img_upload btn btn-info">أختر</a>

                                                <?php if (!empty(get_option('fourth_courses_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 fourth_courses_third_block_img" src="<?= get_option('fourth_courses_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fourth_courses_third_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="fourth_courses_third_block_title_ar" name="fourth_courses_third_block_title_ar" value="<?= get_option('fourth_courses_third_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="fourth_courses_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_courses_third_block_content_ar'), 'fourth_courses_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_courses_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_courses_third_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                        <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="gsa_save_ar" value="Save Settings">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<?php endif; ?> 
<?php
}

                                    