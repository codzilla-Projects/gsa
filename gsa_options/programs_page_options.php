<?php
function programs_content_area_callback(){
    $wp_editor_settings = array(
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
        'textarea_rows'=> 2
    );
    if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['programs_first_block_content','programs_second_block_content','second_programs_first_block_content','second_programs_second_block_content','second_programs_third_block_content','programs_certificate_content','programs_third_section_sub_title'])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }

        if(!isset($_POST['programs_first_section_hidden'])) {delete_option('programs_first_section_hidden');}
        if(!isset($_POST['programs_second_section_hidden'])) {delete_option('programs_second_section_hidden');}
        if(!isset($_POST['programs_third_section_hidden'])) {delete_option('programs_third_section_hidden');}
        if(!isset($_POST['programs_video_hidden'])) {delete_option('programs_video_hidden');}
        if(!isset($_POST['programs_vision_hidden'])) {delete_option('programs_vision_hidden');}
        if(!isset($_POST['programs_sixth_sec_hidden'])) {delete_option('programs_sixth_sec_hidden');}
    }

    if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['programs_first_block_content_ar','programs_second_block_content_ar','second_programs_first_block_content_ar','second_programs_second_block_content_ar','second_programs_third_block_content_ar','programs_certificate_content_ar','programs_third_section_sub_title_ar'])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }

        if(!isset($_POST['programs_first_section_hidden_ar'])) {delete_option('programs_first_section_hidden_ar');}
        if(!isset($_POST['programs_second_section_hidden_ar'])) {delete_option('programs_second_section_hidden_ar');}
        if(!isset($_POST['programs_third_section_hidden_ar'])) {delete_option('programs_third_section_hidden_ar');}
        if(!isset($_POST['programs_video_hidden_ar'])) {delete_option('programs_video_hidden_ar');}
        if(!isset($_POST['programs_vision_hidden_ar'])) {delete_option('programs_vision_hidden_ar');}
        if(!isset($_POST['programs_sixth_sec_hidden_ar'])) {delete_option('programs_sixth_sec_hidden_ar');}
    }
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
    <div class="container-fluid text-left padding-right-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

                <!-- Top Navigation -->

                <header class="codrops-header">

                    <h1 class="text-center site-title"><span>programs Page Settings</span></h1>

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

                    <button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="true">Fifth Section</button>

                    <button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">Sixth Section</button>

                    <button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="true">Seventh Section</button>
                </div>

                <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                    <form class="form-horizontal form_back p-5 rounded" method="post" action="#">

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                                <div class="form-group">

                                    <label for="programs_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_page_title" name="programs_page_title" value="<?= get_option('programs_page_title'); ?>">

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'programs_first_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>

                                <div class="form-group">

                                    <label for="programs_first_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_first_section_title" name="programs_first_section_title" value="<?= get_option('programs_first_section_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_first_section_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_first_section_sub_title" name="programs_first_section_sub_title" value="<?= get_option('programs_first_section_sub_title'); ?>">

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="programs_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="programs_first_block_img_url site_half" type="text" name="programs_first_block_img" size="60" value="<?= get_option('programs_first_block_img'); ?>">

                                                    <a href="#" class="programs_first_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('programs_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 programs_first_block_img" src="<?= get_option('programs_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="programs_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="programs_first_block_title" name="programs_first_block_title" value="<?= get_option('programs_first_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="programs_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('programs_first_block_content'), 'programs_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'programs_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'programs_first_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                            <div class="form-group">

	                                        	<label for="programs_first_block_url" class="col-sm-12 text-left  control-label text-white">First Block Link URL</label>

		                                        <div class="col-sm-12 text-left ">

		                                            <input type="text" class="form-control" id="programs_first_block_url" name="programs_first_block_url" value="<?= get_option('programs_first_block_url'); ?>">

		                                        </div>

	                                    	</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="programs_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="programs_second_block_img_url site_half" type="text" name="programs_second_block_img" size="60" value="<?= get_option('programs_second_block_img'); ?>">

                                                    <a href="#" class="programs_second_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('programs_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 programs_second_block_img" src="<?= get_option('programs_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="programs_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="programs_second_block_title" name="programs_second_block_title" value="<?= get_option('programs_second_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="programs_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('programs_second_block_content'), 'programs_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'programs_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'programs_second_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                            <div class="form-group">

	                                        	<label for="programs_second_block_url" class="col-sm-12 text-left  control-label text-white">Second Block Link URL</label>

		                                        <div class="col-sm-12 text-left ">

		                                            <input type="text" class="form-control" id="programs_second_block_url" name="programs_second_block_url" value="<?= get_option('programs_second_block_url'); ?>">

		                                        </div>

	                                    	</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'programs_second_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                <label for="second_programs_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_programs_first_block_title" name="second_programs_first_block_title" value="<?= get_option('second_programs_first_block_title'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="second_programs_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="second_programs_first_block_img_url site_half" type="text" name="second_programs_first_block_img" size="60" value="<?= get_option('second_programs_first_block_img'); ?>">

                                                    <a href="#" class="second_programs_first_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('second_programs_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_programs_first_block_img" src="<?= get_option('second_programs_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_programs_first_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_programs_first_block_sub_title" name="second_programs_first_block_sub_title" value="<?= get_option('second_programs_first_block_sub_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="second_programs_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_programs_first_block_content'), 'second_programs_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_programs_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_programs_first_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                <label for="second_programs_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_programs_second_block_title" name="second_programs_second_block_title" value="<?= get_option('second_programs_second_block_title'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="second_programs_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="second_programs_second_block_img_url site_half" type="text" name="second_programs_second_block_img" size="60" value="<?= get_option('second_programs_second_block_img'); ?>">

                                                    <a href="#" class="second_programs_second_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('second_programs_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_programs_second_block_img" src="<?= get_option('second_programs_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_programs_second_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_programs_second_block_sub_title" name="second_programs_second_block_sub_title" value="<?= get_option('second_programs_second_block_sub_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="second_programs_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_programs_second_block_content'), 'second_programs_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_programs_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_programs_second_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                            <!-- ******************* -->
                                            <div class="form-group">
                                                  <label for="second_programs_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="second_programs_third_block_img_url site_half" type="text" name="second_programs_third_block_img" size="60" value="<?= get_option('second_programs_third_block_img'); ?>">

                                                    <a href="#" class="second_programs_third_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('second_programs_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_programs_third_block_img" src="<?= get_option('second_programs_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_programs_third_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_programs_third_block_sub_title" name="second_programs_third_block_sub_title" value="<?= get_option('second_programs_third_block_sub_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="second_programs_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_programs_third_block_content'), 'second_programs_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_programs_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_programs_third_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'programs_third_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                                </div>

                                <div class="form-group">

                                    <label for="programs_third_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_third_section_title" name="programs_third_section_title" value="<?= get_option('programs_third_section_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_third_section_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_third_section_sub_title" name="programs_third_section_sub_title" value="<?= get_option('programs_third_section_sub_title'); ?>">

                                    </div>

                                </div>
                                <?php
                                    $programs = gsa_get_program(-1);
                                    $programs_third_section_post = get_option('programs_third_section_post');
                                    if($programs->have_posts()) :
                                ?>
                                <div class="form-group">

                                    <label for="programs_third_section_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>
                                    <div class="col-sm-12 text-left multiSelect_field">
                                         <select  name="programs_third_section_post[]" multiple class="js-example-basic-multiple">
                                             <?php while($programs->have_posts()) : $programs->the_post();
                                              $program_id = get_the_ID();
                                              $selected_program = ( in_array($program_id, $programs_third_section_post) ) ? 'selected="selected"' :  '';
                                             ?>


                                            <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                        <?php endwhile; wp_reset_query();?>
                                        </select>
                                    </div>
                                </div>
                            <?php endif?>
                            </div>
                            <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
                                <div class="form-group">
                                    <label for="programs_certificate_title" class="col-sm-12 text-left  control-label text-white">Certificate Title</label>
                                    <div class="col-sm-12 text-left ">
                                        <input type="text" class="form-control" id="programs_certificate_title" name="programs_certificate_title" value="<?= get_option('programs_certificate_title'); ?>">
                                    </div>
                                </div>
                                <div class="form-group text-left">
                                    <label for="programs_certificate_content" class="col-sm-6 control-label text-white">Certificate Content</label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('programs_certificate_content'), 'programs_certificate_content',  array('textarea_rows'=>5,'textarea_name'=> 'programs_certificate_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'programs_certificate_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="programs_certificate_link_text" class="col-sm-12 text-left  control-label text-white">Certificate Link Text</label>
                                    <div class="col-sm-12 text-left ">
                                        <input type="text" class="form-control" id="programs_certificate_link_text" name="programs_certificate_link_text" value="<?= get_option('programs_certificate_link_text'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="programs_certificate_link_url" class="col-sm-12 text-left  control-label text-white">Certificate Link URL</label>
                                    <div class="col-sm-12 text-left ">
                                        <input type="text" class="form-control" id="programs_certificate_link_url" name="programs_certificate_link_url" value="<?= get_option('programs_certificate_link_url'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                      <label for="programs_certificate_img" class="col-sm-12 text-left  control-label text-white">Certificate Image</label>
                                      <div class="col-sm-12 text-left ">
                                        <input class="programs_certificate_img_url site_half" type="text" name="programs_certificate_img" size="60" value="<?= get_option('programs_certificate_img'); ?>">
                                        <a href="#" class="programs_certificate_img_upload btn btn-info">Choose</a>
                                        <?php if (!empty(get_option('programs_certificate_img'))): ?>
                                        <img class="img-fluid img-thumbnail w-50 mt-2 programs_certificate_img" src="<?= get_option('programs_certificate_img'); ?>" height="100" style="max-width:100%" />
                                        <?php endif ?>
                                      </div>
                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'programs_vision_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>

                                <div class="form-group">

                                    <label for="programs_fifth_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_fifth_title" name="programs_fifth_title" value="<?= get_option('programs_fifth_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_fifth_link_url" class="col-sm-12 text-left  control-label text-white">Video Link </label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_fifth_link_url" name="programs_fifth_link_url" value="<?= get_option('programs_fifth_link_url'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">
                                      <label for="programs_fifth_img" class="col-sm-12 text-left  control-label text-white">Background Image</label>
                                      <div class="col-sm-12 text-left ">
                                        <input class="programs_fifth_img_url site_half" type="text" name="programs_fifth_img" size="60" value="<?= get_option('programs_fifth_img'); ?>">
                                        <a href="#" class="programs_fifth_img_upload btn btn-info">Choose</a>
                                        <?php if (!empty(get_option('programs_fifth_img'))): ?>
                                        <img class="img-fluid img-thumbnail w-50 mt-2 programs_fifth_img" src="<?= get_option('programs_fifth_img'); ?>" height="100" style="max-width:100%" />
                                        <?php endif ?>
                                      </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'programs_sixth_sec_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>





                                <div class="form-group">

                                    <label for="programs_sixth_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_sixth_title" name="programs_sixth_title" value="<?= get_option('programs_sixth_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_sixth_btn_title" class="col-sm-12 text-left  control-label text-white">Button Text</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_sixth_btn_title" name="programs_sixth_btn_title" value="<?= get_option('programs_sixth_btn_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_sixth_btn_url" class="col-sm-12 text-left  control-label text-white">Button Url</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_sixth_btn_url" name="programs_sixth_btn_url" value="<?= get_option('programs_sixth_btn_url'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                      <label for="programs_sixth_img" class="col-sm-12 text-left  control-label text-white">Image</label>

                                    <div class="col-sm-12 text-left ">

                                        <input class="programs_sixth_img_url site_half" type="text" name="programs_sixth_img" size="60" value="<?= get_option('programs_sixth_img'); ?>">

                                        <a href="#" class="programs_sixth_img_upload btn btn-info">Choose</a>

                                        <?php if (!empty(get_option('programs_sixth_img'))): ?>

                                        <img class="img-fluid bg-dark img-thumbnail w-50 mt-2 programs_sixth_img" src="<?= get_option('programs_sixth_img'); ?>" height="100" style="max-width:100%" />

                                        <?php endif ?>

                                      </div>

                                </div>
								
								 <div class="form-group">

                                      <label for="programs_sixth_mobile_img" class="col-sm-12 text-left  control-label text-white">Background Mobile Image</label>

                                    <div class="col-sm-12 text-left ">

                                        <input class="programs_sixth_mobile_img_url site_half" type="text" name="programs_sixth_mobile_img" size="60" value="<?= get_option('programs_sixth_mobile_img'); ?>">

                                        <a href="#" class="programs_sixth_mobile_img_upload btn btn-info">Choose</a>

                                        <?php if (!empty(get_option('programs_sixth_mobile_img'))): ?>

                                        <img class="img-fluid bg-dark img-thumbnail w-50 mt-2 programs_sixth_mobile_img" src="<?= get_option('programs_sixth_mobile_img'); ?>" height="100" style="max-width:100%" />

                                        <?php endif ?>

                                      </div>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'programs_seventh_sec_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>
                                <div class="form-group">

                                      <label for="programs_seventh_img" class="col-sm-12 text-left  control-label text-white">Image</label>

                                    <div class="col-sm-12 text-left ">

                                        <input class="programs_seventh_img_url site_half" type="text" name="programs_seventh_img" size="60" value="<?= get_option('programs_seventh_img'); ?>">

                                        <a href="#" class="programs_seventh_img_upload btn btn-info">Choose</a>

                                        <?php if (!empty(get_option('programs_seventh_img'))): ?>

                                        <img class="img-fluid bg-dark img-thumbnail w-50 mt-2 programs_seventh_img" src="<?= get_option('programs_seventh_img'); ?>" height="100" style="max-width:100%" />

                                        <?php endif ?>

                                      </div>

                                </div>
                                <div class="form-group">

                                    <label for="programs_seventh_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_seventh_title" name="programs_seventh_title" value="<?= get_option('programs_seventh_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_seventh_btn_title" class="col-sm-12 text-left  control-label text-white">Button Text</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_seventh_btn_title" name="programs_seventh_btn_title" value="<?= get_option('programs_seventh_btn_title'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="programs_seventh_btn_url" class="col-sm-12 text-left  control-label text-white">Button Url</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="programs_seventh_btn_url" name="programs_seventh_btn_url" value="<?= get_option('programs_seventh_btn_url'); ?>">

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

                <h1 class="text-center site-title"><span>إعدادات صفحة البرامج </span></h1>

            </header>

        </div>

            <br/>

        <div class="d-flex align-items-start p-0 m-0">

            <div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-page-title-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-title" type="button" role="tab" aria-controls="v-pills-page-title" aria-selected="true">عنوان الصفحة </button>

                <button class="nav-link" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">السكشن الاول </button>

                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">السكشن الثانى </button>

                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">السكشن الثالث </button>

                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">السكشن الرابع </button>

                <button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="true">السكشن الخامس </button>

                <button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">السكشن السادس</button>

                <button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="true">السكشن السابع </button>
            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                <form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">

                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                            <div class="form-group">

                                <label for="programs_page_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_page_title_ar" name="programs_page_title_ar" value="<?= get_option('programs_page_title_ar'); ?>">

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'programs_first_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                            </div>

                            <div class="form-group">

                                <label for="programs_first_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_first_section_title_ar" name="programs_first_section_title_ar" value="<?= get_option('programs_first_section_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_first_section_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_first_section_sub_title_ar" name="programs_first_section_sub_title_ar" value="<?= get_option('programs_first_section_sub_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="programs_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="programs_first_block_img_url site_half" type="text" name="programs_first_block_img" size="60" value="<?= get_option('programs_first_block_img'); ?>">

                                                <a href="#" class="programs_first_block_img_upload btn btn-info">أختر </a>

                                                <?php if (!empty(get_option('programs_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 programs_first_block_img" src="<?= get_option('programs_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="programs_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="programs_first_block_title_ar" name="programs_first_block_title_ar" value="<?= get_option('programs_first_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="programs_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('programs_first_block_content_ar'), 'programs_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'programs_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'programs_first_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="programs_first_block_url_ar" class="col-sm-12 text-end  control-label text-white">رابط البلوك الاول </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="programs_first_block_url_ar" name="programs_first_block_url_ar" value="<?= get_option('programs_first_block_url_ar'); ?>">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                              <label for="programs_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="programs_second_block_img_url site_half" type="text" name="programs_second_block_img" size="60" value="<?= get_option('programs_second_block_img'); ?>">

                                                <a href="#" class="programs_second_block_img_upload btn btn-info">أختر </a>

                                                <?php if (!empty(get_option('programs_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 programs_second_block_img" src="<?= get_option('programs_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="programs_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="programs_second_block_title_ar" name="programs_second_block_title_ar" value="<?= get_option('programs_second_block_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="programs_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('programs_second_block_content_ar'), 'programs_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'programs_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'programs_second_block_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="programs_second_block_url_ar" class="col-sm-12 text-end  control-label text-white">عنوان البلوك الثانى </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="programs_second_block_url_ar" name="programs_second_block_url_ar" value="<?= get_option('programs_second_block_url_ar'); ?>">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'programs_second_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                            </div>
                               <div class="row">
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_programs_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_programs_first_block_title_ar" name="second_programs_first_block_title_ar" value="<?= get_option('second_programs_first_block_title_ar'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label for="second_programs_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="second_programs_first_block_img_url site_half" type="text" name="second_programs_first_block_img" size="60" value="<?= get_option('second_programs_first_block_img'); ?>">

                                                <a href="#" class="second_programs_first_block_img_upload btn btn-info">أختر </a>

                                                <?php if (!empty(get_option('second_programs_first_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_programs_first_block_img" src="<?= get_option('second_programs_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_programs_first_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_programs_first_block_sub_title_ar" name="second_programs_first_block_sub_title_ar" value="<?= get_option('second_programs_first_block_sub_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="second_programs_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_programs_first_block_content_ar'), 'second_programs_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_programs_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_programs_first_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_programs_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_programs_second_block_title_ar" name="second_programs_second_block_title_ar" value="<?= get_option('second_programs_second_block_title_ar'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <label for="second_programs_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="second_programs_second_block_img_url site_half" type="text" name="second_programs_second_block_img" size="60" value="<?= get_option('second_programs_second_block_img'); ?>">

                                                <a href="#" class="second_programs_second_block_img_upload btn btn-info">أختر </a>

                                                <?php if (!empty(get_option('second_programs_second_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_programs_second_block_img" src="<?= get_option('second_programs_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_programs_second_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_programs_second_block_sub_title_ar" name="second_programs_second_block_sub_title_ar" value="<?= get_option('second_programs_second_block_sub_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="second_programs_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_programs_second_block_content_ar'), 'second_programs_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_programs_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_programs_second_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                        <!-- ******************* -->
                                        <div class="form-group">
                                              <label for="second_programs_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                              <div class="col-sm-12 text-end ">
                                                <input class="second_programs_third_block_img_url site_half" type="text" name="second_programs_third_block_img" size="60" value="<?= get_option('second_programs_third_block_img'); ?>">

                                                <a href="#" class="second_programs_third_block_img_upload btn btn-info">أختر </a>

                                                <?php if (!empty(get_option('second_programs_third_block_img'))): ?>

                                                <img class="img-fluid img-thumbnail w-50 mt-2 second_programs_third_block_img" src="<?= get_option('second_programs_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="second_programs_third_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                            <div class="col-sm-12 text-end ">

                                                <input type="text" class="form-control" id="second_programs_third_block_sub_title_ar" name="second_programs_third_block_sub_title_ar" value="<?= get_option('second_programs_third_block_sub_title_ar'); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-end">
                                            <label for="second_programs_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_programs_third_block_content_ar'), 'second_programs_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_programs_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_programs_third_block_content_ar','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'programs_third_section_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                            </div>

                            <div class="form-group">

                                <label for="programs_third_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_third_section_title_ar" name="programs_third_section_title_ar" value="<?= get_option('programs_third_section_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_third_section_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_third_section_sub_title_ar" name="programs_third_section_sub_title_ar" value="<?= get_option('programs_third_section_sub_title_ar'); ?>">

                                </div>

                            </div>
                            <?php
                                $programs = gsa_get_program(-1);
                                $programs_third_section_post = get_option('programs_third_section_post');
                                if($programs->have_posts()) :
                            ?>
                            <div class="form-group">

                                <label for="programs_third_section_post_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى </label>
                                <div class="col-sm-12 text-end multiSelect_field">
                                     <select  name="programs_third_section_post_ar[]" multiple class="js-example-basic-multiple">
                                         <?php while($programs->have_posts()) : $programs->the_post();
                                          $program_id = get_the_ID();
                                          $selected_program = ( in_array($program_id, $programs_third_section_post_ar) ) ? 'selected="selected"' :  '';
                                         ?>


                                        <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                    <?php endwhile; wp_reset_query();?>
                                    </select>
                                </div>
                            </div>
                        <?php endif?>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
                            <div class="form-group">
                                <label for="programs_certificate_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الشهادة</label>
                                <div class="col-sm-12 text-end ">
                                    <input type="text" class="form-control" id="programs_certificate_title_ar" name="programs_certificate_title_ar" value="<?= get_option('programs_certificate_title_ar'); ?>">
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <label for="programs_certificate_content_ar" class="col-sm-6 control-label text-white">محتوى الشهادة </label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('programs_certificate_content_ar'), 'programs_certificate_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'programs_certificate_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'programs_certificate_content_ar','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="programs_certificate_link_text_ar" class="col-sm-12 text-end  control-label text-white">نص لينك الشهادة </label>
                                <div class="col-sm-12 text-end ">
                                    <input type="text" class="form-control" id="programs_certificate_link_text_ar" name="programs_certificate_link_text_ar" value="<?= get_option('programs_certificate_link_text_ar'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="programs_certificate_link_url_ar" class="col-sm-12 text-end  control-label text-white">رابط لينك الشهادة </label>
                                <div class="col-sm-12 text-end ">
                                    <input type="text" class="form-control" id="programs_certificate_link_url_ar" name="programs_certificate_link_url_ar" value="<?= get_option('programs_certificate_link_url_ar'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                  <label for="programs_certificate_img" class="col-sm-12 text-end  control-label text-white">صورة الشهادة </label>
                                  <div class="col-sm-12 text-end ">
                                    <input class="programs_certificate_img_url site_half" type="text" name="programs_certificate_img" size="60" value="<?= get_option('programs_certificate_img'); ?>">
                                    <a href="#" class="programs_certificate_img_upload btn btn-info">أختر </a>
                                    <?php if (!empty(get_option('programs_certificate_img'))): ?>
                                    <img class="img-fluid img-thumbnail w-50 mt-2 programs_certificate_img" src="<?= get_option('programs_certificate_img'); ?>" height="100" style="max-width:100%" />
                                    <?php endif ?>
                                  </div>
                            </div>

                        </div>

                        <div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'programs_vision_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                            </div>

                            <div class="form-group">

                                <label for="programs_fifth_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_fifth_title_ar" name="programs_fifth_title_ar" value="<?= get_option('programs_fifth_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_fifth_link_url_ar" class="col-sm-12 text-end  control-label text-white">لينك الفيديو </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_fifth_link_url_ar" name="programs_fifth_link_url_ar" value="<?= get_option('programs_fifth_link_url_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">
                                  <label for="programs_fifth_img" class="col-sm-12 text-end  control-label text-white">صورة الخلفية </label>
                                  <div class="col-sm-12 text-end ">
                                    <input class="programs_fifth_img_url site_half" type="text" name="programs_fifth_img" size="60" value="<?= get_option('programs_fifth_img'); ?>">
                                    <a href="#" class="programs_fifth_img_upload btn btn-info">أختر </a>
                                    <?php if (!empty(get_option('programs_fifth_img'))): ?>
                                    <img class="img-fluid img-thumbnail w-50 mt-2 programs_fifth_img" src="<?= get_option('programs_fifth_img'); ?>" height="100" style="max-width:100%" />
                                    <?php endif ?>
                                  </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'programs_sixth_sec_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                            </div>





                            <div class="form-group">

                                <label for="programs_sixth_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_sixth_title_ar" name="programs_sixth_title_ar" value="<?= get_option('programs_sixth_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_sixth_btn_title_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_sixth_btn_title_ar" name="programs_sixth_btn_title_ar" value="<?= get_option('programs_sixth_btn_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_sixth_btn_url_ar" class="col-sm-12 text-end  control-label text-white">لينك الرابط </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_sixth_btn_url_ar" name="programs_sixth_btn_url_ar" value="<?= get_option('programs_sixth_btn_url_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                  <label for="programs_sixth_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>

                                <div class="col-sm-12 text-end ">

                                    <input class="programs_sixth_img_url site_half" type="text" name="programs_sixth_img" size="60" value="<?= get_option('programs_sixth_img'); ?>">

                                    <a href="#" class="programs_sixth_img_upload btn btn-info">أختر </a>

                                    <?php if (!empty(get_option('programs_sixth_img'))): ?>

                                    <img class="img-fluid bg-dark img-thumbnail w-50 mt-2 programs_sixth_img" src="<?= get_option('programs_sixth_img'); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

                                  </div>

                            </div>
                            
                             <div class="form-group">

                                  <label for="programs_sixth_mobile_img" class="col-sm-12 text-end  control-label text-white">صورة خلفية الموبايل  </label>

                                <div class="col-sm-12 text-end ">

                                    <input class="programs_sixth_mobile_img_url site_half" type="text" name="programs_sixth_mobile_img" size="60" value="<?= get_option('programs_sixth_mobile_img'); ?>">

                                    <a href="#" class="programs_sixth_mobile_img_upload btn btn-info">أختر </a>

                                    <?php if (!empty(get_option('programs_sixth_mobile_img'))): ?>

                                    <img class="img-fluid bg-dark img-thumbnail w-50 mt-2 programs_sixth_mobile_img" src="<?= get_option('programs_sixth_mobile_img'); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

                                  </div>

                            </div>

                        </div>

                        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

                            <div class="form-group text-end">

                                <div class="inline-block">

                                    <?php $name = 'programs_seventh_sec_hidden_ar' ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                            </div>
                            <div class="form-group">

                                  <label for="programs_seventh_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>

                                <div class="col-sm-12 text-end ">

                                    <input class="programs_seventh_img_url site_half" type="text" name="programs_seventh_img" size="60" value="<?= get_option('programs_seventh_img'); ?>">

                                    <a href="#" class="programs_seventh_img_upload btn btn-info">أختر </a>

                                    <?php if (!empty(get_option('programs_seventh_img'))): ?>

                                    <img class="img-fluid bg-dark img-thumbnail w-50 mt-2 programs_seventh_img" src="<?= get_option('programs_seventh_img'); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

                                  </div>

                            </div>
                            <div class="form-group">

                                <label for="programs_seventh_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_seventh_title_ar" name="programs_seventh_title_ar" value="<?= get_option('programs_seventh_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_seventh_btn_title_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_seventh_btn_title_ar" name="programs_seventh_btn_title_ar" value="<?= get_option('programs_seventh_btn_title_ar'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="programs_seventh_btn_url_ar" class="col-sm-12 text-end  control-label text-white">عنوان الرابط </label>

                                <div class="col-sm-12 text-end ">

                                    <input type="text" class="form-control" id="programs_seventh_btn_url_ar" name="programs_seventh_btn_url_ar" value="<?= get_option('programs_seventh_btn_url_ar'); ?>">

                                </div>

                            </div>



                        </div>

                    </div>



                    <div class="form-group">



                        <div class="col-sm-12">



                        <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="gsa_save_ar" value="حفظ الاعدادات ">



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
