<?php 



function partners_content_area_callback(){



	$wp_editor_settings = array( 



		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



		'textarea_rows'=> 2



	);    



   if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,[])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }
    }

    if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,[])){
                $value = stripcslashes($value);
            }
            update_option( $key, $value);
        }
    }
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

	<div class="container-fluid text-left padding-right-4">

		<div class="row">



			<div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

				<!-- Top Navigation -->

				<header class="codrops-header">

					<h1 class="text-center site-title"><span>Purchase Page Settings</span></h1>

				</header>

			</div>

				<br/>

			<div class="d-flex align-items-start p-0 m-0">

				<div class="tab-content col-sm-12 col-md-12 col-lg-12 gray_back" id="v-pills-tabContent">

					<form class="form-horizontal form_back p-5 rounded" method="post" action="#">
                        <div class="form-group">
							<label for="partners_page_title" class="col-sm-12 text-left  control-label text-white">Page Title</label>
                            <div class="col-sm-12 text-left ">
								<input type="text" class="form-control" id="partners_page_title" name="partners_page_title" value="<?= get_option('partners_page_title'); ?>">
                            </div>
						</div>

						<div class="form-group">
						  	<label for="partner_form_img" class="col-sm-12 text-left  control-label text-white">Background Image</label>
						  	<div class="col-sm-12 text-left ">
						    	<input class="partner_form_img_url site_half" type="text" name="partner_form_img" size="60" value="<?= get_option('partner_form_img'); ?>">
						    	<a href="#" class="partner_form_img_upload btn btn-info">Choose</a>
						    	<?php if (!empty(get_option('partner_form_img'))): ?>
						    	<img class="img-fluid img-thumbnail w-50 mt-2 partner_form_img" src="<?= get_option('partner_form_img'); ?>" height="100" style="max-width:100%" />
						    	<?php endif ?>
						  	</div>
						</div>
						<div class="form-group">     
							<label for="partner_form_email" class="col-sm-12 text-left  control-label text-white">Form Email</label>
                            <div class="col-sm-12 text-left ">
								<input type="text" class="form-control" id="partner_form_email" name="partner_form_email" value="<?= get_option('partner_form_email'); ?>">
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

					<h1 class="text-center site-title"><span>إعدادات صفحة الشراء</span></h1>

				</header>

			</div>

				<br/>

			<div class="d-flex align-items-start p-0 m-0">

				<div class="tab-content col-sm-12 col-md-12 col-lg-12 gray_back" id="v-pills-tabContent">

					<form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">
	                    <div class="form-group">
							<label for="partners_page_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الصفحة </label>
	                        <div class="col-sm-12 text-end ">
								<input type="text" class="form-control" id="partners_page_title_ar" name="partners_page_title_ar" value="<?= get_option('partners_page_title_ar'); ?>">
	                        </div>
						</div>

						<div class="form-group">
						  	<label for="partner_form_img" class="col-sm-12 text-end  control-label text-white">صورة الخلفية </label>
						  	<div class="col-sm-12 text-end ">
						    	<input class="partner_form_img_url site_half" type="text" name="partner_form_img" size="60" value="<?= get_option('partner_form_img'); ?>">
						    	<a href="#" class="partner_form_img_upload btn btn-info">أختر </a>
						    	<?php if (!empty(get_option('partner_form_img'))): ?>
						    	<img class="img-fluid img-thumbnail w-50 mt-2 partner_form_img" src="<?= get_option('partner_form_img'); ?>" height="100" style="max-width:100%" />
						    	<?php endif ?>
						  	</div>
						</div>
						<div class="form-group">     
							<label for="partner_form_email_ar" class="col-sm-12 text-end  control-label text-white">نموذج البريد الإلكتروني</label>
	                        <div class="col-sm-12 text-end ">
								<input type="text" class="form-control" id="partner_form_email_ar" name="partner_form_email_ar" value="<?= get_option('partner_form_email_ar'); ?>">
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