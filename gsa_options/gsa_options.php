<?php 



function main_content_area_callback(){



	$wp_editor_settings = array( 



		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



		'textarea_rows'=> 2



	);    



	if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){



		foreach ($_POST as $key => $value) {



			if(in_array($key,['footer_content'])){



				$value = stripcslashes($value);



			}				



			update_option( $key, $value);



		}



	}



?>

	<div class="container-fluid text-left padding-right-4">

			<div class="row">



				<div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

					<!-- Top Navigation -->

					<header class="codrops-header">

						<h1 class="text-center site-title"><span>General Settings</span></h1>

					</header>

				</div>

					<br/>

				<div class="d-flex align-items-start p-0 m-0">

					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>

						<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">Colors</button>

						<button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">Fonts</button>

						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>

						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>
						

						<button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">Background Pattern</button>
						

						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>

					</div>

					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

						<form class="form-horizontal form_back p-5 rounded" method="post" action="#">



						    <div class="tab-content" id="v-pills-tabContent">



						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">



									<div class="form-group">

									  	<label for="gsa_header_logo_img" class="col-sm-12 text-left  control-label text-white">Header Logo</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_header_logo_img_url site_half" type="text" name="gsa_header_logo_img" size="60" value="<?= get_option('gsa_header_logo_img'); ?>">

									    	<a href="#" class="gsa_header_logo_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_header_logo_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_header_logo_img" src="<?= get_option('gsa_header_logo_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group">

									  	<label for="gsa_sticky_logo_img" class="col-sm-12 text-left  control-label text-white">Sticky Logo</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_sticky_logo_img_url site_half" type="text" name="gsa_sticky_logo_img" size="60" value="<?= get_option('gsa_sticky_logo_img'); ?>">

									    	<a href="#" class="gsa_sticky_logo_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_sticky_logo_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_sticky_logo_img" src="<?= get_option('gsa_sticky_logo_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group">

									  	<label for="gsa_favicon_img" class="col-sm-12 text-left  control-label text-white">Favicon Logo</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_favicon_img_url site_half" type="text" name="gsa_favicon_img" size="60" value="<?= get_option('gsa_favicon_img'); ?>">

									    	<a href="#" class="gsa_favicon_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_favicon_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_favicon_img" src="<?= get_option('gsa_favicon_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>

						        </div>

						        <div class="tab-pane fade" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">



									<div class="form-group">

										<label for="gsa_primaryColor" class="col-sm-12 text-left  control-label text-white">Primary Color</label>

										<div class="col-sm-12 text-left d-flex align-items-center justify-content-start">

											<input type="color" class="form-control gsa-color" id="gsa_primaryColor" name="gsa_primaryColor" value="<?= get_option('gsa_primaryColor'); ?>">

											<div class="text-white ms-2"><?= get_option('gsa_primaryColor'); ?></div>



										</div>

									</div>	



									<div class="form-group">

										<label for="gsa_secondaryColor" class="col-sm-12 text-left  control-label text-white">Secondary Color</label>

										<div class="col-sm-12 text-left d-flex align-items-center justify-content-start">

											<input type="color" class="form-control gsa-color" id="gsa_secondaryColor" name="gsa_secondaryColor" value="<?= get_option('gsa_secondaryColor'); ?>">

											<div class="text-white ms-2"><?= get_option('gsa_secondaryColor'); ?></div>

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_thirdColor" class="col-sm-12 text-left  control-label text-white">Third Color</label>

										<div class="col-sm-12 text-left d-flex align-items-center justify-content-start">

											<input type="color" class="form-control gsa-color" id="gsa_thirdColor" name="gsa_thirdColor" value="<?= get_option('gsa_thirdColor'); ?>">

											<div class="text-white ms-2"><?= get_option('gsa_thirdColor'); ?></div>

										</div>

									</div>



							    </div>



							    <div class="tab-pane fade" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

							    	<div class="form-group">



										<label for="gsa_font_url" class="col-sm-12 text-left  control-label text-white">Google Font Url</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_font_url" name="gsa_font_url" value="<?= get_option('gsa_font_url'); ?>">



										</div>



									</div>



									<div class="form-group">



										<label for="gsa_font_name" class="col-sm-12 text-left  control-label text-white">Google Font Name</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_font_name" name="gsa_font_name" value="<?= get_option('gsa_font_name'); ?>">



										</div>



									</div>



							    </div>



						        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">



									<div class="form-group">

										<label for="gsa_phone" class="col-sm-12 text-left  control-label text-white">Phone Number</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_phone" name="gsa_phone" value="<?= get_option('gsa_phone'); ?>">

										</div>

									</div>	
									
									<div class="form-group">

										<label for="gsa_second_phone" class="col-sm-12 text-left  control-label text-white">Second Phone Number</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_second_phone" name="gsa_second_phone" value="<?= get_option('gsa_second_phone'); ?>">

										</div>

									</div>	



									<div class="form-group">

										<label for="gsa_email" class="col-sm-12 text-left  control-label text-white">E-mali Address</label>

										<div class="col-sm-12 text-left ">

											<input type="email" class="form-control text-left" id="gsa_email" name="gsa_email" value="<?= get_option('gsa_email'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_location" class="col-sm-12 text-left  control-label text-white">Location</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control text-left" id="gsa_location" name="gsa_location" value="<?= get_option('gsa_location'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_map" class="col-sm-12 text-left  control-label text-white">Google Map</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control text-left" id="gsa_map" name="gsa_map" value="<?= get_option('gsa_map'); ?>">

										</div>

									</div>



							    </div>	      



								<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">



									<div class="form-group">



										<label for="gsa_fb" class="col-sm-12 text-left  control-label text-white">Facebook</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_fb" name="gsa_fb" value="<?= get_option('gsa_fb'); ?>">



										</div>



									</div>



									<div class="form-group">



										<label for="gsa_twitter" class="col-sm-12 text-left  control-label text-white">Twitter</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_twitter" name="gsa_twitter" value="<?= get_option('gsa_twitter'); ?>">



										</div>



									</div>



									<div class="form-group">



										<label for="gsa_youtube" class="col-sm-12 text-left  control-label text-white">Youtube</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_youtube" name="gsa_youtube" value="<?= get_option('gsa_youtube'); ?>">



										</div>



									</div>



									<div class="form-group">



										<label for="gsa_insta" class="col-sm-12 text-left  control-label text-white">Instagram</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_insta" name="gsa_insta" value="<?= get_option('gsa_insta'); ?>">



										</div>



									</div>



									<div class="form-group">



										<label for="gsa_linkedin" class="col-sm-12 text-left  control-label text-white">Linked In</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_linkedin" name="gsa_linkedin" value="<?= get_option('gsa_linkedin'); ?>">



										</div>



									</div>



									<div class="form-group">



										<label for="gsa_whatsapp" class="col-sm-12 text-left  control-label text-white">Whats App</label>



										<div class="col-sm-12 text-left ">



											<input type="text" class="form-control" id="gsa_whatsapp" name="gsa_whatsapp" value="<?= get_option('gsa_whatsapp'); ?>">



										</div>



									</div>



								</div>

								<div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">



									<div class="form-group">

									  	<label for="gsa_background_pattern_img" class="col-sm-12 text-left  control-label text-white">Header Logo</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_background_pattern_img_url site_half" type="text" name="gsa_background_pattern_img" size="60" value="<?= get_option('gsa_background_pattern_img'); ?>">

									    	<a href="#" class="gsa_background_pattern_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_background_pattern_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_background_pattern_img bg-white" src="<?= get_option('gsa_background_pattern_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>

						        </div>

								<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">



									<div class="form-group">

									  	<label for="gsa_footer_logo_img" class="col-sm-12 text-left  control-label text-white">Header Logo</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_footer_logo_img_url site_half" type="text" name="gsa_footer_logo_img" size="60" value="<?= get_option('gsa_footer_logo_img'); ?>">

									    	<a href="#" class="gsa_footer_logo_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_footer_logo_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_footer_logo_img bg-dark" src="<?= get_option('gsa_footer_logo_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group text-left">

										<label for="footer_content" class="col-sm-6 control-label text-white">Footer Content</label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('footer_content'), 'footer_content',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content','class'=>'form-control',) );  ?>

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



<?php



}