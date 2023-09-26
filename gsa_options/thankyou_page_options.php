<?php 



function thankyou_content_area_callback(){



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

						<h1 class="text-center site-title"><span>Thank You Page Settings</span></h1>

					</header>

				</div>

					<br/>

				<div class="d-flex align-items-start p-0 m-0">

					<div class="tab-content col-sm-12 col-md-12 col-lg-12 gray_back" id="v-pills-tabContent">

						<form class="form-horizontal form_back p-5 rounded" method="post" action="#">

							<div class="form-group">
							  	<label for="thankyou_img" class="col-sm-12 text-left  control-label text-white">Background Image</label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="thankyou_img_url site_half" type="text" name="thankyou_img" size="60" value="<?= get_option('thankyou_img'); ?>">
							    	<a href="#" class="thankyou_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('thankyou_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-50 mt-2 thankyou_img" src="<?= get_option('thankyou_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group">     
								<label for="thankyou_Message" class="col-sm-12 text-left  control-label text-white">Message After Submit Forms</label>
                                <div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="thankyou_Message" name="thankyou_Message" value="<?= get_option('thankyou_Message'); ?>">
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

				<h1 class="text-center site-title"><span>اعدادات صفحة شكرا لك</span></h1>

			</header>

		</div>

			<br/>

		<div class="d-flex align-items-start p-0 m-0">

			<div class="tab-content col-sm-12 col-md-12 col-lg-12 gray_back" id="v-pills-tabContent">

				<form class="form-horizontal form_back p-5 rounded" method="post" action="#">

					<div class="form-group">
					  	<label for="thankyou_img" class="col-sm-12 text-end  control-label text-white">صورة الخلفية </label>
					  	<div class="col-sm-12 text-end ">
					    	<input class="thankyou_img_url site_half" type="text" name="thankyou_img" size="60" value="<?= get_option('thankyou_img'); ?>">
					    	<a href="#" class="thankyou_img_upload btn btn-info">أختر</a>
					    	<?php if (!empty(get_option('thankyou_img'))): ?>
					    	<img class="img-fluid img-thumbnail w-50 mt-2 thankyou_img" src="<?= get_option('thankyou_img'); ?>" height="100" style="max-width:100%" />
					    	<?php endif ?>
					  	</div>
					</div>
					<div class="form-group">     
						<label for="thankyou_Message_ar" class="col-sm-12 text-end  control-label text-white">الرسالة بعد تقديم النماذج</label>
                        <div class="col-sm-12 text-end ">
							<input type="text" class="form-control" id="thankyou_Message_ar" name="thankyou_Message_ar" value="<?= get_option('thankyou_Message_ar'); ?>">
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