<?php 



function purchases_content_area_callback(){



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

					<h1 class="text-center site-title"><span>Partners Page Settings</span></h1>

				</header>

			</div>

				<br/>

			<div class="d-flex align-items-start p-0 m-0">

				<div class="tab-content col-sm-12 col-md-12 col-lg-12 gray_back" id="v-pills-tabContent">

					<form class="form-horizontal form_back p-5 rounded" method="post" action="#">
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="services">
                        			<div class="form-group">
										<label for="purchases_page_title" class="col-sm-12 text-left  control-label text-white">Page Title</label>
		                                <div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="purchases_page_title" name="purchases_page_title" value="<?= get_option('purchases_page_title'); ?>">
		                                </div>
									</div>
                        		</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="services">
                        			
									 <div class="form-group">     
										<label for="purchase_left_title" class="col-sm-12 text-left  control-label text-white">Left Title</label>
		                                <div class="col-sm-12 text-left ">
											<input type="text" class="left-control w-100" id="purchase_left_title" name="purchase_left_title" value="<?= get_option('purchase_left_title'); ?>">
		                                </div>
									</div>

									<div class="form-group">
									  	<label for="purchase_first_img" class="col-sm-12 text-left  control-label text-white">First Image</label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="purchase_first_img_url site_half" type="text" name="purchase_first_img" size="60" value="<?= get_option('purchase_first_img'); ?>">
									    	<a href="#" class="purchase_first_img_upload btn btn-info">Choose</a>
									    	<?php if (!empty(get_option('purchase_first_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 purchase_first_img" src="<?= get_option('purchase_first_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>
									<div class="form-group">
									  	<label for="purchase_second_img" class="col-sm-12 text-left  control-label text-white">First Image</label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="purchase_second_img_url site_half" type="text" name="purchase_second_img" size="60" value="<?= get_option('purchase_second_img'); ?>">
									    	<a href="#" class="purchase_second_img_upload btn btn-info">Choose</a>
									    	<?php if (!empty(get_option('purchase_second_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 purchase_second_img" src="<?= get_option('purchase_second_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>
									<div class="form-group">
									  	<label for="purchase_third_img" class="col-sm-12 text-left  control-label text-white">First Image</label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="purchase_third_img_url site_half" type="text" name="purchase_third_img" size="60" value="<?= get_option('purchase_third_img'); ?>">
									    	<a href="#" class="purchase_third_img_upload btn btn-info">Choose</a>
									    	<?php if (!empty(get_option('purchase_third_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 purchase_third_img" src="<?= get_option('purchase_third_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="services">
									<div class="form-group">     
										<label for="purchase_form_title" class="col-sm-12 text-left  control-label text-white">Form Title</label>
		                                <div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="purchase_form_title" name="purchase_form_title" value="<?= get_option('purchase_form_title'); ?>">
		                                </div>
									</div>
									<div class="form-group">     
										<label for="purchase_form_email" class="col-sm-12 text-left  control-label text-white">Form Email</label>
		                                <div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="purchase_form_email" name="purchase_form_email" value="<?= get_option('purchase_form_email'); ?>">
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

					<h1 class="text-center site-title"><span>إعدادات صفحة الشركاء</span></h1>

				</header>

			</div>

				<br/>

			<div class="d-flex align-items-start p-0 m-0">

				<div class="tab-content col-sm-12 col-md-12 col-lg-12 gray_back" id="v-pills-tabContent">

					<form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="services">
                        			<div class="form-group">
										<label for="purchases_page_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الصفحة </label>
		                                <div class="col-sm-12 text-end ">
											<input type="text" class="form-control" id="purchases_page_title_ar" name="purchases_page_title_ar" value="<?= get_option('purchases_page_title_ar'); ?>">
		                                </div>
									</div>
                        		</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="services">
                        			
									 <div class="form-group">     
										<label for="purchase_left_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان القسم الاول </label>
		                                <div class="col-sm-12 text-end ">
											<input type="text" class="left-control w-100" id="purchase_left_title_ar" name="purchase_left_title_ar" value="<?= get_option('purchase_left_title_ar'); ?>">
		                                </div>
									</div>

									<div class="form-group">
									  	<label for="purchase_first_img" class="col-sm-12 text-end  control-label text-white">الصورة الاولى </label>
									  	<div class="col-sm-12 text-end ">
									    	<input class="purchase_first_img_url site_half" type="text" name="purchase_first_img" size="60" value="<?= get_option('purchase_first_img'); ?>">
									    	<a href="#" class="purchase_first_img_upload btn btn-info">أختر </a>
									    	<?php if (!empty(get_option('purchase_first_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 purchase_first_img" src="<?= get_option('purchase_first_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>
									<div class="form-group">
									  	<label for="purchase_second_img" class="col-sm-12 text-end  control-label text-white">الصورة الثانية </label>
									  	<div class="col-sm-12 text-end ">
									    	<input class="purchase_second_img_url site_half" type="text" name="purchase_second_img" size="60" value="<?= get_option('purchase_second_img'); ?>">
									    	<a href="#" class="purchase_second_img_upload btn btn-info">أختر </a>
									    	<?php if (!empty(get_option('purchase_second_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 purchase_second_img" src="<?= get_option('purchase_second_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>
									<div class="form-group">
									  	<label for="purchase_third_img" class="col-sm-12 text-end  control-label text-white">الصورة الثالثة </label>
									  	<div class="col-sm-12 text-end ">
									    	<input class="purchase_third_img_url site_half" type="text" name="purchase_third_img" size="60" value="<?= get_option('purchase_third_img'); ?>">
									    	<a href="#" class="purchase_third_img_upload btn btn-info">أختر </a>
									    	<?php if (!empty(get_option('purchase_third_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 purchase_third_img" src="<?= get_option('purchase_third_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="services">
									<div class="form-group">     
										<label for="purchase_form_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان النموذج</label>
		                                <div class="col-sm-12 text-end ">
											<input type="text" class="form-control" id="purchase_form_title_ar" name="purchase_form_title_ar" value="<?= get_option('purchase_form_title_ar'); ?>">
		                                </div>
									</div>
									<div class="form-group">     
										<label for="purchase_form_email_ar" class="col-sm-12 text-end  control-label text-white">نموذج البريد الإلكتروني</label>
		                                <div class="col-sm-12 text-end ">
											<input type="text" class="form-control" id="purchase_form_email_ar" name="purchase_form_email_ar" value="<?= get_option('purchase_form_email_ar'); ?>">
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