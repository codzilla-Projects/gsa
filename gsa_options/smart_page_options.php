<?php
function smart_content_area_callback(){
    $wp_editor_settings = array(
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
        'textarea_rows'=> 2
    );
    if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['second_smart_first_block_content','second_smart_second_block_content','second_smart_third_block_content','third_smart_first_block_content','third_smart_second_block_content','third_smart_third_block_content','fourth_smart_first_block_content','fourth_smart_second_block_content','fourth_smart_third_block_content'])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }

        if(!isset($_POST['smart_first_section_hidden'])) {delete_option('smart_first_section_hidden');}
        if(!isset($_POST['smart_second_section_hidden'])) {delete_option('smart_second_section_hidden');}
        if(!isset($_POST['smart_third_section_hidden'])) {delete_option('smart_third_section_hidden');}
        if(!isset($_POST['smart_video_hidden'])) {delete_option('smart_video_hidden');}
        if(!isset($_POST['smart_vision_hidden'])) {delete_option('smart_vision_hidden');}
        if(!isset($_POST['smart_sixth_sec_hidden'])) {delete_option('smart_sixth_sec_hidden');}
        }
        if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['second_smart_first_block_content_ar','second_smart_second_block_content_ar','second_smart_third_block_content_ar','third_smart_first_block_content_ar','third_smart_second_block_content_ar','third_smart_third_block_content_ar','fourth_smart_first_block_content_ar','fourth_smart_second_block_content_ar','fourth_smart_third_block_content_ar'])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }

        if(!isset($_POST['smart_first_section_hidden_ar'])) {delete_option('smart_first_section_hidden_ar');}
        if(!isset($_POST['smart_second_section_hidden_ar'])) {delete_option('smart_second_section_hidden_ar');}
        if(!isset($_POST['smart_third_section_hidden_ar'])) {delete_option('smart_third_section_hidden_ar');}
        if(!isset($_POST['smart_video_hidden_ar'])) {delete_option('smart_video_hidden_ar');}
        if(!isset($_POST['smart_vision_hidden_ar'])) {delete_option('smart_vision_hidden_ar');}
        if(!isset($_POST['smart_sixth_sec_hidden_ar'])) {delete_option('smart_sixth_sec_hidden_ar');}
    }
    
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
    <div class="container-fluid text-left padding-right-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

                <!-- Top Navigation -->

                <header class="codrops-header">

                    <h1 class="text-center site-title"><span>Smart Cities Diploma Page Settings</span></h1>

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

                                    <label for="smart_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="smart_page_title" name="smart_page_title" value="<?= get_option('smart_page_title'); ?>">

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'smart_first_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>

                                <div class="form-group">

                                    <label for="smart_first_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="smart_first_section_title" name="smart_first_section_title" value="<?= get_option('smart_first_section_title'); ?>">

                                    </div>

                                </div>

                                <?php
                                    $smart = gsa_get_program(-1);
                                    $smart_third_section_post = get_option('smart_third_section_post');
                                    if($smart->have_posts()) :
                                ?>
                                <div class="form-group">

                                    <label for="smart_third_section_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>
                                    <div class="col-sm-12 text-left multiSelect_field">
                                         <select  name="smart_third_section_post[]" multiple class="js-example-basic-multiple">
                                             <?php while($smart->have_posts()) : $smart->the_post();
                                              $program_id = get_the_ID();
                                              $selected_program = ( in_array($program_id, $smart_third_section_post) ) ? 'selected="selected"' :  '';
                                             ?>


                                            <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                        <?php endwhile; wp_reset_query();?>
                                        </select>
                                    </div>
                                </div>
                            <?php endif?>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'smart_second_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                <label for="second_smart_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_smart_first_block_title" name="second_smart_first_block_title" value="<?= get_option('second_smart_first_block_title'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="second_smart_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="second_smart_first_block_img_url site_half" type="text" name="second_smart_first_block_img" size="60" value="<?= get_option('second_smart_first_block_img'); ?>">

                                                    <a href="#" class="second_smart_first_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('second_smart_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_smart_first_block_img" src="<?= get_option('second_smart_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_smart_first_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_smart_first_block_sub_title" name="second_smart_first_block_sub_title" value="<?= get_option('second_smart_first_block_sub_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="second_smart_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_smart_first_block_content'), 'second_smart_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_smart_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_smart_first_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                <label for="second_smart_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_smart_second_block_title" name="second_smart_second_block_title" value="<?= get_option('second_smart_second_block_title'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="second_smart_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="second_smart_second_block_img_url site_half" type="text" name="second_smart_second_block_img" size="60" value="<?= get_option('second_smart_second_block_img'); ?>">

                                                    <a href="#" class="second_smart_second_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('second_smart_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_smart_second_block_img" src="<?= get_option('second_smart_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_smart_second_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_smart_second_block_sub_title" name="second_smart_second_block_sub_title" value="<?= get_option('second_smart_second_block_sub_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="second_smart_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_smart_second_block_content'), 'second_smart_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_smart_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_smart_second_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                            <!-- ************** -->

                                            <div class="form-group">
                                                  <label for="second_smart_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="second_smart_third_block_img_url site_half" type="text" name="second_smart_third_block_img" size="60" value="<?= get_option('second_smart_third_block_img'); ?>">

                                                    <a href="#" class="second_smart_third_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('second_smart_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_smart_third_block_img" src="<?= get_option('second_smart_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_smart_third_block_sub_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="second_smart_third_block_sub_title" name="second_smart_third_block_sub_title" value="<?= get_option('second_smart_third_block_sub_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="second_smart_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_smart_third_block_content'), 'second_smart_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_smart_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_smart_third_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'smart_third_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                                </div>

                                <div class="form-group">

                                    <label for="smart_third_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="smart_third_section_title" name="smart_third_section_title" value="<?= get_option('smart_third_section_title'); ?>">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_smart_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="third_smart_first_block_img_url site_half" type="text" name="third_smart_first_block_img" size="60" value="<?= get_option('third_smart_first_block_img'); ?>">

                                                    <a href="#" class="third_smart_first_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('third_smart_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_smart_first_block_img" src="<?= get_option('third_smart_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_smart_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="third_smart_first_block_title" name="third_smart_first_block_title" value="<?= get_option('third_smart_first_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="third_smart_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_smart_first_block_content'), 'third_smart_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_smart_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_smart_first_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_smart_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="third_smart_second_block_img_url site_half" type="text" name="third_smart_second_block_img" size="60" value="<?= get_option('third_smart_second_block_img'); ?>">

                                                    <a href="#" class="third_smart_second_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('third_smart_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_smart_second_block_img" src="<?= get_option('third_smart_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_smart_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="third_smart_second_block_title" name="third_smart_second_block_title" value="<?= get_option('third_smart_second_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="third_smart_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_smart_second_block_content'), 'third_smart_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_smart_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_smart_second_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_smart_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="third_smart_third_block_img_url site_half" type="text" name="third_smart_third_block_img" size="60" value="<?= get_option('third_smart_third_block_img'); ?>">

                                                    <a href="#" class="third_smart_third_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('third_smart_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_smart_third_block_img" src="<?= get_option('third_smart_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_smart_third_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="third_smart_third_block_title" name="third_smart_third_block_title" value="<?= get_option('third_smart_third_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="third_smart_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_smart_third_block_content'), 'third_smart_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_smart_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_smart_third_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                          <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'smart_fourth_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                                </div>

                                <div class="form-group">

                                    <label for="smart_fourth_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="smart_fourth_section_title" name="smart_fourth_section_title" value="<?= get_option('smart_fourth_section_title'); ?>">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="fourth_smart_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="fourth_smart_first_block_img_url site_half" type="text" name="fourth_smart_first_block_img" size="60" value="<?= get_option('fourth_smart_first_block_img'); ?>">

                                                    <a href="#" class="fourth_smart_first_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('fourth_smart_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 fourth_smart_first_block_img" src="<?= get_option('fourth_smart_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fourth_smart_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="fourth_smart_first_block_title" name="fourth_smart_first_block_title" value="<?= get_option('fourth_smart_first_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="fourth_smart_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('fourth_smart_first_block_content'), 'fourth_smart_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_smart_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_smart_first_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="fourth_smart_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="fourth_smart_second_block_img_url site_half" type="text" name="fourth_smart_second_block_img" size="60" value="<?= get_option('fourth_smart_second_block_img'); ?>">

                                                    <a href="#" class="fourth_smart_second_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('fourth_smart_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 fourth_smart_second_block_img" src="<?= get_option('fourth_smart_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fourth_smart_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="fourth_smart_second_block_title" name="fourth_smart_second_block_title" value="<?= get_option('fourth_smart_second_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="fourth_smart_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('fourth_smart_second_block_content'), 'fourth_smart_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_smart_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_smart_second_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="fourth_smart_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="fourth_smart_third_block_img_url site_half" type="text" name="fourth_smart_third_block_img" size="60" value="<?= get_option('fourth_smart_third_block_img'); ?>">

                                                    <a href="#" class="fourth_smart_third_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('fourth_smart_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 fourth_smart_third_block_img" src="<?= get_option('fourth_smart_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fourth_smart_fourth_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="fourth_smart_third_block_title" name="fourth_smart_third_block_title" value="<?= get_option('fourth_smart_third_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="fourth_smart_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('fourth_smart_third_block_content'), 'fourth_smart_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_smart_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_smart_third_block_content','class'=>'form-control',) );  ?>
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

                    <h1 class="text-center site-title"><span>إعدادات صفحة دبلومة المدن الذكية</span></h1>

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

                                    <label for="smart_page_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="smart_page_title_ar" name="smart_page_title_ar" value="<?= get_option('smart_page_title_ar'); ?>">

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'smart_first_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                </div>

                                <div class="form-group">

                                    <label for="smart_first_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="smart_first_section_title_ar" name="smart_first_section_title_ar" value="<?= get_option('smart_first_section_title_ar'); ?>">

                                    </div>

                                </div>

                                <?php
                                    $smart = gsa_get_program(-1);
                                    $smart_third_section_post_ar = get_option('smart_third_section_post_ar');
                                    if($smart->have_posts()) :
                                ?>
                                <div class="form-group">

                                    <label for="smart_third_section_sub_title" class="col-sm-12 text-end  control-label text-white">البرامج المراد عرضها </label>
                                    <div class="col-sm-12 text-end multiSelect_field">
                                         <select  name="smart_third_section_post_ar[]" multiple class="js-example-basic-multiple">
                                             <?php while($smart->have_posts()) : $smart->the_post();
                                              $program_id = get_the_ID();
                                              $selected_program = ( in_array($program_id, $smart_third_section_post_ar) ) ? 'selected="selected"' :  '';
                                             ?>


                                            <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                        <?php endwhile; wp_reset_query();?>
                                        </select>
                                    </div>
                                </div>
                            <?php endif?>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'smart_second_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                <label for="second_smart_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="second_smart_first_block_title_ar" name="second_smart_first_block_title_ar" value="<?= get_option('second_smart_first_block_title_ar'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="second_smart_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="second_smart_first_block_img_url site_half" type="text" name="second_smart_first_block_img" size="60" value="<?= get_option('second_smart_first_block_img'); ?>">

                                                    <a href="#" class="second_smart_first_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('second_smart_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_smart_first_block_img" src="<?= get_option('second_smart_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_smart_first_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="second_smart_first_block_sub_title_ar" name="second_smart_first_block_sub_title_ar" value="<?= get_option('second_smart_first_block_sub_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="second_smart_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_smart_first_block_content_ar'), 'second_smart_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_smart_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_smart_first_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services">
                                            <div class="form-group">
                                                <label for="second_smart_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="second_smart_second_block_title_ar" name="second_smart_second_block_title_ar" value="<?= get_option('second_smart_second_block_title_ar'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="second_smart_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="second_smart_second_block_img_url site_half" type="text" name="second_smart_second_block_img" size="60" value="<?= get_option('second_smart_second_block_img'); ?>">

                                                    <a href="#" class="second_smart_second_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('second_smart_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_smart_second_block_img" src="<?= get_option('second_smart_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_smart_second_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="second_smart_second_block_sub_title_ar" name="second_smart_second_block_sub_title_ar" value="<?= get_option('second_smart_second_block_sub_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="second_smart_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_smart_second_block_content_ar'), 'second_smart_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_smart_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_smart_second_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                            <!-- ************** -->

                                            <div class="form-group">
                                                  <label for="second_smart_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="second_smart_third_block_img_url site_half" type="text" name="second_smart_third_block_img" size="60" value="<?= get_option('second_smart_third_block_img'); ?>">

                                                    <a href="#" class="second_smart_third_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('second_smart_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 second_smart_third_block_img" src="<?= get_option('second_smart_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="second_smart_third_block_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="second_smart_third_block_sub_title_ar" name="second_smart_third_block_sub_title_ar" value="<?= get_option('second_smart_third_block_sub_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="second_smart_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('second_smart_third_block_content_ar'), 'second_smart_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'second_smart_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_smart_third_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'smart_third_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                                </div>

                                <div class="form-group">

                                    <label for="smart_third_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="smart_third_section_title_ar" name="smart_third_section_title_ar" value="<?= get_option('smart_third_section_title_ar'); ?>">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_smart_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="third_smart_first_block_img_url site_half" type="text" name="third_smart_first_block_img" size="60" value="<?= get_option('third_smart_first_block_img'); ?>">

                                                    <a href="#" class="third_smart_first_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('third_smart_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_smart_first_block_img" src="<?= get_option('third_smart_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_smart_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="third_smart_first_block_title_ar" name="third_smart_first_block_title_ar" value="<?= get_option('third_smart_first_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="third_smart_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_smart_first_block_content_ar'), 'third_smart_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_smart_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_smart_first_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_smart_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="third_smart_second_block_img_url site_half" type="text" name="third_smart_second_block_img" size="60" value="<?= get_option('third_smart_second_block_img'); ?>">

                                                    <a href="#" class="third_smart_second_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('third_smart_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_smart_second_block_img" src="<?= get_option('third_smart_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_smart_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="third_smart_second_block_title_ar" name="third_smart_second_block_title_ar" value="<?= get_option('third_smart_second_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="third_smart_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_smart_second_block_content_ar'), 'third_smart_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_smart_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_smart_second_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_smart_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="third_smart_third_block_img_url site_half" type="text" name="third_smart_third_block_img" size="60" value="<?= get_option('third_smart_third_block_img'); ?>">

                                                    <a href="#" class="third_smart_third_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('third_smart_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_smart_third_block_img" src="<?= get_option('third_smart_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_smart_third_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="third_smart_third_block_title_ar" name="third_smart_third_block_title_ar" value="<?= get_option('third_smart_third_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="third_smart_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_smart_third_block_content_ar'), 'third_smart_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_smart_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_smart_third_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                          <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'smart_fourth_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                                </div>

                                <div class="form-group">

                                    <label for="smart_fourth_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="smart_fourth_section_title_ar" name="smart_fourth_section_title_ar" value="<?= get_option('smart_fourth_section_title_ar'); ?>">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="fourth_smart_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="fourth_smart_first_block_img_url site_half" type="text" name="fourth_smart_first_block_img" size="60" value="<?= get_option('fourth_smart_first_block_img'); ?>">

                                                    <a href="#" class="fourth_smart_first_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('fourth_smart_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 fourth_smart_first_block_img" src="<?= get_option('fourth_smart_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fourth_smart_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="fourth_smart_first_block_title_ar" name="fourth_smart_first_block_title_ar" value="<?= get_option('fourth_smart_first_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="fourth_smart_first_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('fourth_smart_first_block_content_ar'), 'fourth_smart_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_smart_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_smart_first_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="fourth_smart_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="fourth_smart_second_block_img_url site_half" type="text" name="fourth_smart_second_block_img" size="60" value="<?= get_option('fourth_smart_second_block_img'); ?>">

                                                    <a href="#" class="fourth_smart_second_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('fourth_smart_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 fourth_smart_second_block_img" src="<?= get_option('fourth_smart_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fourth_smart_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="fourth_smart_second_block_title_ar" name="fourth_smart_second_block_title_ar" value="<?= get_option('fourth_smart_second_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="fourth_smart_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('fourth_smart_second_block_content_ar'), 'fourth_smart_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_smart_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_smart_second_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="fourth_smart_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="fourth_smart_third_block_img_url site_half" type="text" name="fourth_smart_third_block_img" size="60" value="<?= get_option('fourth_smart_third_block_img'); ?>">

                                                    <a href="#" class="fourth_smart_third_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('fourth_smart_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 fourth_smart_third_block_img" src="<?= get_option('fourth_smart_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fourth_smart_third_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="fourth_smart_third_block_title_ar" name="fourth_smart_third_block_title_ar" value="<?= get_option('fourth_smart_third_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="fourth_smart_third_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('fourth_smart_third_block_content_ar'), 'fourth_smart_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_smart_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_smart_third_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
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
<?php endif ?>

<?php
}

                                    