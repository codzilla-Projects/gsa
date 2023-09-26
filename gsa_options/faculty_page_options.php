<?php



function faculty_content_area_callback(){



    $wp_editor_settings = array(



        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



        'textarea_rows'=> 2



    );



    if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){



        foreach ($_POST as $key => $value) {



            if(in_array($key,['faculty_first_section_content', 'faculty_third_section_content_one','faculty_third_section_content_two','faculty_vision_content', 'gsa_faculty_element_one_para', 'gsa_faculty_element_two_para', 'gsa_faculty_element_three_para'])){
                $value = stripcslashes($value);
            }

            update_option( $key, $value);

        }

        if(!isset($_POST['faculty_first_section_hidden'])) {delete_option('faculty_first_section_hidden');}
        if(!isset($_POST['faculty_second_section_hidden'])) {delete_option('faculty_second_section_hidden');}
        if(!isset($_POST['faculty_third_section_hidden'])) {delete_option('faculty_third_section_hidden');}
        if(!isset($_POST['faculty_video_hidden'])) {delete_option('faculty_video_hidden');}
        if(!isset($_POST['faculty_vision_hidden'])) {delete_option('faculty_vision_hidden');}
        if(!isset($_POST['faculty_sixth_sec_hidden'])) {delete_option('faculty_sixth_sec_hidden');}
    }

    if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){



        foreach ($_POST as $key => $value) {



            if(in_array($key,['faculty_first_section_content_ar', 'faculty_third_section_content_one_ar','faculty_third_section_content_two_ar','faculty_vision_content_ar', 'gsa_faculty_element_one_para_ar', 'gsa_faculty_element_two_para_ar', 'gsa_faculty_element_three_para_ar'])){
                $value = stripcslashes($value);
            }

            update_option( $key, $value);

        }

        if(!isset($_POST['faculty_first_section_hidden_ar'])) {delete_option('faculty_first_section_hidden_ar');}
        if(!isset($_POST['faculty_second_section_hidden_ar'])) {delete_option('faculty_second_section_hidden_ar');}
        if(!isset($_POST['faculty_third_section_hidden_ar'])) {delete_option('faculty_third_section_hidden_ar');}
        if(!isset($_POST['faculty_video_hidden_ar'])) {delete_option('faculty_video_hidden_ar');}
        if(!isset($_POST['faculty_vision_hidden_ar'])) {delete_option('faculty_vision_hidden_ar');}
        if(!isset($_POST['faculty_sixth_sec_hidden_ar'])) {delete_option('faculty_sixth_sec_hidden_ar');}
    }
?>
    <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
    <div class="container-fluid text-left padding-right-4">

            <div class="row">



                <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

                    <!-- Top Navigation -->

                    <header class="codrops-header">

                        <h1 class="text-center site-title"><span>Faculty Page Settings</span></h1>

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

                                        <label for="faculty_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="faculty_page_title" name="faculty_page_title" value="<?= get_option('faculty_page_title'); ?>">

                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <?php $name = 'faculty_first_section_hidden' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_first_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="faculty_first_section_title" name="faculty_first_section_title" value="<?= get_option('faculty_first_section_title'); ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_first_section_number" class="col-sm-12 text-left  control-label text-white">Number instructors Show</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="faculty_first_section_number" name="faculty_first_section_number" value="<?= get_option('faculty_first_section_number'); ?>">

                                        </div>

                                    </div>

                                    <?php
                                        $faculty = gsa_get_instructor(-1);
                                        $faculty_third_section_post = get_option('faculty_third_section_post');
                                         if($faculty->have_posts()) :
                                    ?>
                                    <div class="form-group">

                                        <label for="faculty_third_section_sub_title" class="col-sm-12 text-left  control-label text-white">Choose the instructors you want to show on the page</label>
                                        <div class="col-sm-12 text-left multiSelect_field">
                                             <select  name="faculty_third_section_post[]" multiple class="js-example-basic-multiple">
                                                 <?php while($faculty->have_posts()) : $faculty->the_post();
                                                  $program_id = get_the_ID();
                                                  $selected_program = ( in_array($program_id, $faculty_third_section_post) ) ? 'selected="selected"' :  '';
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

                                            <?php $name = 'faculty_second_section_hidden' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                    </div>
                                    <div class="form-group">
                                          <label for="faculty_second_section_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                          <div class="col-sm-12 text-left ">
                                            <input class="faculty_second_section_img_url site_half" type="text" name="faculty_second_section_img" size="60" value="<?= get_option('faculty_second_section_img'); ?>">

                                            <a href="#" class="faculty_second_section_img_upload btn btn-info">Choose</a>

                                            <?php if (!empty(get_option('faculty_second_section_img'))): ?>

                                            <img class="img-fluid img-thumbnail w-50 mt-2 faculty_second_section_img" src="<?= get_option('faculty_second_section_img'); ?>" height="100" style="max-width:100%" />
                                            <?php endif ?>
                                          </div>
                                    </div>

                                    <div class="form-group text-left">
                                        <label for="faculty_second_section_content" class="col-sm-6 control-label text-white">Content</label>
                                        <div class="col-sm-12">
                                             <textarea class="form-control" name="faculty_second_section_content" id="exampleFormControlTextarea1" rows="3"><?= get_option('faculty_second_section_content'); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <?php $name = 'faculty_third_section_hidden' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_third_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="faculty_third_section_title" name="faculty_third_section_title" value="<?= get_option('faculty_third_section_title'); ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_third_section_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="faculty_third_section_sub_title" name="faculty_third_section_sub_title" value="<?= get_option('faculty_third_section_sub_title'); ?>">

                                        </div>

                                    </div>
                                    <?php
                                        $faculty = gsa_get_program(-1);
                                        $faculty_third_section_post = get_option('faculty_third_section_post');
                                        if($faculty->have_posts()) :
                                    ?>
                                    <div class="form-group">

                                        <label for="faculty_third_section_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>
                                        <div class="col-sm-12 text-left multiSelect_field">
                                             <select  name="faculty_third_section_post[]" multiple class="js-example-basic-multiple">
                                                 <?php while($faculty->have_posts()) : $faculty->the_post();
                                                  $program_id = get_the_ID();
                                                  $selected_program = ( in_array($program_id, $faculty_third_section_post) ) ? 'selected="selected"' :  '';
                                                 ?>


                                                <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                            <?php endwhile; wp_reset_query();?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php endif?>
                                </div>

                                <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                                    

                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <?php $name = 'faculty_fourth_hidden' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="services">
                                                <div class="form-group">
                                                    <label for="gsa_faculty_element_one_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                    <div class="col-sm-12 text-left ">
                                                        <input class="gsa_faculty_element_one_img_url site_half" type="text" name="gsa_faculty_element_one_img" size="60" value="<?= get_option('gsa_faculty_element_one_img'); ?>">

                                                        <a href="#" class="gsa_faculty_element_one_img_upload btn btn-info">Choose</a>

                                                        <?php if (!empty(get_option('gsa_faculty_element_one_img'))): ?>

                                                            <img class="img-fluid img-thumbnail w-50 mt-2 gsa_faculty_element_one_img" src="<?= get_option('gsa_faculty_element_one_img'); ?>" height="100" style="max-width:100%" />

                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                    <label for="gsa_faculty_element_one_title" class="col-sm-12 text-left  control-label text-white">First element title</label>

                                                    <div class="col-sm-12 text-left ">

                                                        <input type="text" class="form-control" id="gsa_faculty_element_one_title" name="gsa_faculty_element_one_title" value="<?= get_option('gsa_faculty_element_one_title'); ?>">

                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <?php $name = 'gsa_faculty_element_one_para' ?>
                                                    <label for="<?= $name ?>" class="col-sm-12 control-label text-white">First element paragraph</label>
                                                    <div class="col-sm-12  ">
                                                        <?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="services">
                                                <div class="form-group">
                                                    <label for="gsa_faculty_element_two_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                    <div class="col-sm-12 text-left ">
                                                        <input class="gsa_faculty_element_two_img_url site_half" type="text" name="gsa_faculty_element_two_img" size="60" value="<?= get_option('gsa_faculty_element_two_img'); ?>">

                                                        <a href="#" class="gsa_faculty_element_two_img_upload btn btn-info">Choose</a>

                                                        <?php if (!empty(get_option('gsa_faculty_element_two_img'))): ?>

                                                            <img class="img-fluid img-thumbnail w-50 mt-2 gsa_faculty_element_two_img" src="<?= get_option('gsa_faculty_element_two_img'); ?>" height="100" style="max-width:100%" />

                                                        <?php endif ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">

                                                    <label for="gsa_faculty_element_two_title" class="col-sm-12 text-left  control-label text-white">Second element title</label>

                                                    <div class="col-sm-12 text-left ">
                                                        <input type="text" class="form-control" id="gsa_faculty_element_two_title" name="gsa_faculty_element_two_title" value="<?= get_option('gsa_faculty_element_two_title'); ?>">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <?php $name = 'gsa_faculty_element_two_para' ?>

                                                    <label for="<?= $name ?>" class="col-sm-12 control-label text-white">Second element paragraph</label>

                                                    <div class="col-sm-12  ">

                                                        <?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>

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

                        <h1 class="text-center site-title"><span>إعدادات صفحة الكلية</span></h1>

                    </header>

                </div>

                    <br/>

                <div class="d-flex align-items-start p-0 m-0">

                    <div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <button class="nav-link active" id="v-pills-page-title-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-title" type="button" role="tab" aria-controls="v-pills-page-title" aria-selected="true">عنوان الصفحة </button>

                        <button class="nav-link" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">السكشن الاول </button>

                        <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">السكشن الثانى </button>

                        <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">السكشن الثالث</button>

                        <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">السكشن الرابع</button>

                    </div>

                    <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                        <form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">

                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                                    <div class="form-group">

                                        <label for="faculty_page_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-end ">

                                            <input type="text" class="form-control" id="faculty_page_title_ar" name="faculty_page_title_ar" value="<?= get_option('faculty_page_title_ar'); ?>">

                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                    <div class="form-group text-end">

                                        <div class="inline-block">

                                            <?php $name = 'faculty_first_section_hidden_ar' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_first_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-end ">

                                            <input type="text" class="form-control" id="faculty_first_section_title_ar" name="faculty_first_section_title_ar" value="<?= get_option('faculty_first_section_title_ar'); ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_first_section_number_ar" class="col-sm-12 text-end  control-label text-white">عدد المدربين المراد اظهارهم </label>

                                        <div class="col-sm-12 text-end ">

                                            <input type="text" class="form-control" id="faculty_first_section_number_ar" name="faculty_first_section_number_ar" value="<?= get_option('faculty_first_section_number_ar'); ?>">

                                        </div>

                                    </div>

                                    <?php
                                        $faculty = gsa_get_instructor(-1);
                                        $faculty_third_section_post_ar = get_option('faculty_third_section_post_ar');
                                        if($faculty->have_posts()) :
                                    ?>
                                    <div class="form-group">

                                        <label for="faculty_third_section_post_ar" class="col-sm-12 text-end  control-label text-white">اختر المدربين المراد اظهارهم </label>
                                        <div class="col-sm-12 text-end multiSelect_field">
                                             <select  name="faculty_third_section_post_ar[]" multiple class="js-example-basic-multiple">
                                                 <?php while($faculty->have_posts()) : $faculty->the_post();
                                                  $program_id = get_the_ID();
                                                  $selected_program = ( in_array($program_id, $faculty_third_section_post_ar) ) ? 'selected="selected"' :  '';
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

                                            <?php $name = 'faculty_second_section_hidden_ar' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                    </div>
                                    <div class="form-group">
                                          <label for="faculty_second_section_img" class="col-sm-12 text-end  control-label text-white">Image</label>
                                          <div class="col-sm-12 text-end ">
                                            <input class="faculty_second_section_img_url site_half" type="text" name="faculty_second_section_img" size="60" value="<?= get_option('faculty_second_section_img'); ?>">

                                            <a href="#" class="faculty_second_section_img_upload btn btn-info">Choose</a>

                                            <?php if (!empty(get_option('faculty_second_section_img'))): ?>

                                            <img class="img-fluid img-thumbnail w-50 mt-2 faculty_second_section_img" src="<?= get_option('faculty_second_section_img'); ?>" height="100" style="max-width:100%" />
                                            <?php endif ?>
                                          </div>
                                    </div>

                                    <div class="form-group text-end">
                                        <label for="faculty_second_section_content_ar" class="col-sm-6 control-label text-white">Content</label>
                                        <div class="col-sm-12">
                                             <textarea class="form-control" name="faculty_second_section_content_ar" id="exampleFormControlTextarea1" rows="3"><?= get_option('faculty_second_section_content_ar'); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                    <div class="form-group text-end">

                                        <div class="inline-block">

                                            <?php $name = 'faculty_third_section_hidden_ar' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_third_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-end ">

                                            <input type="text" class="form-control" id="faculty_third_section_title_ar" name="faculty_third_section_title_ar" value="<?= get_option('faculty_third_section_title_ar'); ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="faculty_third_section_sub_title_ar" class="col-sm-12 text-end  control-label text-white">Sub Title</label>

                                        <div class="col-sm-12 text-end ">

                                            <input type="text" class="form-control" id="faculty_third_section_sub_title_ar" name="_arfaculty_third_section_sub_title" value="<?= get_option('faculty_third_section_sub_title'); ?>">

                                        </div>

                                    </div>
                                    <?php
                                        $faculty = gsa_get_program(-1);
                                        $faculty_third_section_post_ar = get_option('faculty_third_section_post_ar');
                                        if($faculty->have_posts()) :
                                    ?>
                                    <div class="form-group">

                                        <label for="faculty_third_section_post_ar" class="col-sm-12 text-end  control-label text-white">اختر البرامج المراد عرضها </label>
                                        <div class="col-sm-12 text-end multiSelect_field">
                                             <select  name="faculty_third_section_post_ar[]" multiple class="js-example-basic-multiple">
                                                 <?php while($faculty->have_posts()) : $faculty->the_post();
                                                  $program_id = get_the_ID();
                                                  $selected_program = ( in_array($program_id, $faculty_third_section_post_ar) ) ? 'selected="selected"' :  '';
                                                 ?>


                                                <option value="<?php echo $program_id?>" <?= $selected_program;?> ><?php the_title()?></option>
                                            <?php endwhile; wp_reset_query();?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php endif?>
                                </div>

                                <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                                    

                                    <div class="form-group text-end">

                                        <div class="inline-block">

                                            <?php $name = 'faculty_fourth_hidden_ar' ?>

                                            <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="services">
                                                <div class="form-group">
                                                    <label for="gsa_faculty_element_one_img_ar" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                    <div class="col-sm-12 text-end ">
                                                        <input class="gsa_faculty_element_one_img_ar_url site_half" type="text" name="gsa_faculty_element_one_img_ar" size="60" value="<?= get_option('gsa_faculty_element_one_img_ar'); ?>">

                                                        <a href="#" class="gsa_faculty_element_one_img_ar_upload btn btn-info">أختر</a>

                                                        <?php if (!empty(get_option('gsa_faculty_element_one_img_ar'))): ?>

                                                            <img class="img-fluid img-thumbnail w-50 mt-2 gsa_faculty_element_one_img_ar" src="<?= get_option('gsa_faculty_element_one_img_ar'); ?>" height="100" style="max-width:100%" />

                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                    <label for="gsa_faculty_element_one_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان العنصر الاول </label>

                                                    <div class="col-sm-12 text-end ">

                                                        <input type="text" class="form-control" id="gsa_faculty_element_one_title_ar" name="gsa_faculty_element_one_title_ar" value="<?= get_option('gsa_faculty_element_one_title_ar'); ?>">

                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <?php $name = 'gsa_faculty_element_one_para_ar' ?>
                                                    <label for="<?= $name ?>" class="col-sm-12 control-label text-white text-end">مقال العنصر الاول </label>
                                                    <div class="col-sm-12  ">
                                                        <?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="services">
                                                <div class="form-group">
                                                    <label for="gsa_faculty_element_two_img_ar" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                    <div class="col-sm-12 text-end ">
                                                        <input class="gsa_faculty_element_two_img_ar_url site_half" type="text" name="gsa_faculty_element_two_img_ar" size="60" value="<?= get_option('gsa_faculty_element_two_img_ar'); ?>">

                                                        <a href="#" class="gsa_faculty_element_two_img_ar_upload btn btn-info">أختر</a>

                                                        <?php if (!empty(get_option('gsa_faculty_element_two_img_ar'))): ?>

                                                            <img class="img-fluid img-thumbnail w-50 mt-2 gsa_faculty_element_two_img_ar" src="<?= get_option('gsa_faculty_element_two_img_ar'); ?>" height="100" style="max-width:100%" />

                                                        <?php endif ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">

                                                    <label for="gsa_faculty_element_two_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان العنصر الثانى</label>

                                                    <div class="col-sm-12 text-end ">
                                                        <input type="text" class="form-control" id="gsa_faculty_element_two_title_ar" name="gsa_faculty_element_two_title_ar" value="<?= get_option('gsa_faculty_element_two_title_ar'); ?>">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <?php $name = 'gsa_faculty_element_two_para_ar' ?>

                                                    <label for="<?= $name ?>" class="col-sm-12 control-label text-white text-end">مقال العنصر الثانى </label>

                                                    <div class="col-sm-12  ">

                                                        <?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>

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

    <?php endif; ?>

<?php



}
