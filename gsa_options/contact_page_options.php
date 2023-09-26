<?php



function contact_content_area_callback(){



    $wp_editor_settings = array(



        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



        'textarea_rows'=> 2



    );



    if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){



        foreach ($_POST as $key => $value) {



            if(in_array($key,['contact_first_section_content', 'contact_third_section_content_one','contact_third_section_content_two','contact_vision_content', 'gsa_contact_element_one_para', 'gsa_contact_element_two_para', 'gsa_contact_element_three_para','contacts_shortcode'])){
                $value = stripcslashes($value);
            }

            update_option( $key, $value);

        }

        if(!isset($_POST['contact_first_section_hidden'])) {delete_option('contact_first_section_hidden');}
        if(!isset($_POST['contact_second_section_hidden'])) {delete_option('contact_second_section_hidden');}
        if(!isset($_POST['contact_third_section_hidden'])) {delete_option('contact_third_section_hidden');}
        if(!isset($_POST['contact_video_hidden'])) {delete_option('contact_video_hidden');}
        if(!isset($_POST['contact_vision_hidden'])) {delete_option('contact_vision_hidden');}
        if(!isset($_POST['contact_sixth_sec_hidden'])) {delete_option('contact_sixth_sec_hidden');}
    }

    if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){



        foreach ($_POST as $key => $value) {



            if(in_array($key,['contact_first_section_content_ar', 'contact_third_section_content_one_ar','contact_third_section_content_two_ar','contact_vision_content_ar', 'gsa_contact_element_one_para_ar', 'gsa_contact_element_two_para_ar', 'gsa_contact_element_three_para_ar','contacts_shortcode_ar'])){
                $value = stripcslashes($value);
            }

            update_option( $key, $value);

        }

        if(!isset($_POST['contact_first_section_hidden_ar'])) {delete_option('contact_first_section_hidden_ar');}
        if(!isset($_POST['contact_second_section_hidden_ar'])) {delete_option('contact_second_section_hidden_ar');}
        if(!isset($_POST['contact_third_section_hidden_ar'])) {delete_option('contact_third_section_hidden_ar');}
        if(!isset($_POST['contact_video_hidden_ar'])) {delete_option('contact_video_hidden_ar');}
        if(!isset($_POST['contact_vision_hidden_ar'])) {delete_option('contact_vision_hidden_ar');}
        if(!isset($_POST['contact_sixth_sec_hidden_ar'])) {delete_option('contact_sixth_sec_hidden_ar');}
    }
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

    <div class="container-fluid text-left padding-right-4">

        <div class="row">



            <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

                <!-- Top Navigation -->

                <header class="codrops-header">

                    <h1 class="text-center site-title"><span>contact Page Settings</span></h1>

                </header>

            </div>

                <br/>

                    <div class="d-flex align-items-start p-0 m-0">

                <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <button class="nav-link active" id="v-pills-page-title-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-title" type="button" role="tab" aria-controls="v-pills-page-title" aria-selected="true">Page Title</button>

                    <button class="nav-link" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</button>

                    <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">Second Section</button>

                </div>

                <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                    <form class="form-horizontal form_back p-5 rounded" method="post" action="#">

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                                <div class="form-group">

                                    <label for="contact_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="contact_page_title" name="contact_page_title" value="<?= get_option('contact_page_title'); ?>">

                                    </div>

                                </div>
                                <div class="form-group">

                                    <label for="contact_page_sub_title" class="col-sm-12 text-left  control-label text-white">Sub Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="contact_page_sub_title" name="contact_page_sub_title" value="<?= get_option('contact_page_sub_title'); ?>">

                                    </div>

                                </div>
                                <div class="form-group text-left">
                                    <label for="contact_page_content" class="col-sm-6 control-label text-white">Content</label>
                                    <div class="col-sm-12">
                                         <textarea class="form-control" name="contact_page_content" id="exampleFormControlTextarea1" rows="3"><?= get_option('contact_page_content'); ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="contact_page_btn_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="contact_page_btn_text" name="contact_page_btn_text" value="<?= get_option('contact_page_btn_text'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="contact_page_btn_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="contact_page_btn_url" name="contact_page_btn_url" value="<?= get_option('contact_page_btn_url'); ?>">

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'contact_first_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>

                                <div class="form-group">

                                    <label for="contact_first_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="contact_first_section_title" name="contact_first_section_title" value="<?= get_option('contact_first_section_title'); ?>">

                                    </div>

                                </div>
                                 <?php wp_editor( get_option('contact_first_section_form'), 'contact_first_section_form',  array('textarea_rows'=>5,'textarea_name'=> 'contact_first_section_form', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_first_section_form','class'=>'form-control',) );  ?>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'contact_second_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>

                                </div>

                                <div class="form-group">

                                    <label for="contacts_shortcode" class="col-sm-12 text-left  control-label text-white">Phone Number</label>

                                    <div class="col-sm-12 text-left ">
									 <?php wp_editor( get_option('contacts_shortcode'), 'contacts_shortcode',  array('textarea_rows'=>5,'textarea_name'=> 'contacts_shortcode', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contacts_shortcode','class'=>'form-control',) );  ?>

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

                    <h1 class="text-center site-title"><span>إعدادات صفحة تواصل معنا </span></h1>

                </header>

            </div>

                <br/>

                    <div class="d-flex align-items-start p-0 m-0">

                <div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <button class="nav-link active" id="v-pills-page-title-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-title" type="button" role="tab" aria-controls="v-pills-page-title" aria-selected="true">عنوان الصفحة </button>

                    <button class="nav-link" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">السكشن الاول </button>

                    <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">السكشن الثانى </button>

                </div>

                <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                    <form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">

                                <div class="form-group">

                                    <label for="contact_page_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="contact_page_title_ar" name="contact_page_title_ar" value="<?= get_option('contact_page_title_ar'); ?>">

                                    </div>

                                </div>
                                <div class="form-group">

                                    <label for="contact_page_sub_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="contact_page_sub_title_ar" name="contact_page_sub_title_ar" value="<?= get_option('contact_page_sub_title_ar'); ?>">

                                    </div>

                                </div>
                                <div class="form-group text-end">
                                    <label for="contact_page_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                         <textarea class="form-control" name="contact_page_content_ar" id="exampleFormControlTextarea1" rows="3"><?= get_option('contact_page_content_ar'); ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="contact_page_btn_text_ar" class="col-sm-12 text-end  control-label text-white">عنوان اللينك </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="contact_page_btn_text_ar" name="contact_page_btn_text_ar" value="<?= get_option('contact_page_btn_text_ar'); ?>">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="contact_page_btn_url_ar" class="col-sm-12 text-end  control-label text-white">رابط اللينك </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="contact_page_btn_url_ar" name="contact_page_btn_url_ar" value="<?= get_option('contact_page_btn_url_ar'); ?>">

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'contact_first_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                </div>

                                <div class="form-group">

                                    <label for="contact_first_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="contact_first_section_title_ar" name="contact_first_section_title_ar" value="<?= get_option('contact_first_section_title_ar'); ?>">

                                    </div>

                                </div>
                                 <?php wp_editor( get_option('contact_first_section_form'), 'contact_first_section_form',  array('textarea_rows'=>5,'textarea_name'=> 'contact_first_section_form', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_first_section_form','class'=>'form-control',) );  ?>
                            </div>

                            <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'contact_second_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

                                </div>

                                <div class="form-group">

                                    <label for="contacts_shortcode_ar" class="col-sm-12 text-end  control-label text-white">Contact us shortcode</label>

                                    <div class="col-sm-12 text-end ">
                                     <?php wp_editor( get_option('contacts_shortcode_ar'), 'contacts_shortcode_ar',  array('textarea_rows'=>5,'textarea_name'=> 'contacts_shortcode_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contacts_shortcode_ar','class'=>'form-control',) );  ?>

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
