<?php 
function home_content_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['vision_content', 'gsa_home_element_one_para', 'gsa_home_element_two_para', 'gsa_home_element_three_para'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
		if(!isset($_POST['slider_hidden'])) {delete_option('slider_hidden');}
		if(!isset($_POST['video_hidden'])) {delete_option('video_hidden');}
		if(!isset($_POST['seventh_hidden'])) {delete_option('seventh_hidden');}
		if(!isset($_POST['eighth_hidden'])) {delete_option('eighth_hidden');}
		if(!isset($_POST['ninth_hidden'])) {delete_option('ninth_hidden');}
		if(!isset($_POST['tenth_hidden'])) {delete_option('tenth_hidden');}
	}

	if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['vision_content_ar', 'certificate_content_ar', 'gsa_home_element_one_para_ar', 'gsa_home_element_two_para_ar'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
		if(!isset($_POST['slider_hidden_ar'])) {delete_option('slider_hidden_ar');}
		if(!isset($_POST['video_hidden_ar'])) {delete_option('video_hidden_ar');}
		if(!isset($_POST['seventh_hidden_ar'])) {delete_option('seventh_hidden_ar');}
		if(!isset($_POST['eighth_hidden_ar'])) {delete_option('eighth_hidden_ar');}
		if(!isset($_POST['ninth_hidden_ar'])) {delete_option('ninth_hidden_ar');}
		if(!isset($_POST['tenth_hidden_ar'])) {delete_option('tenth_hidden_ar');}
	}
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
	<div class="container-fluid text-left padding-right-4">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

					<!-- Top Navigation -->

					<header class="codrops-header">

						<h1 class="text-center site-title"><span>Home Page Settings</span></h1>

					</header>

				</div>

					<br/>

				<div class="d-flex align-items-start p-0 m-0">

					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</button>

						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">Second Section</button>
						
						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">Third Section</button>

						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">Fourth Section</button>
						
						<button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="true">Fifth Section</button>
						
						<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">Sixth Section</button>

						<button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="true">Seventh Section</button>

						<button class="nav-link" id="v-pills-eighthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighthsection" type="button" role="tab" aria-controls="v-pills-eighthsection" aria-selected="true">Eighth Section</button>

						<button class="nav-link" id="v-pills-ninthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ninthsection" type="button" role="tab" aria-controls="v-pills-ninthsection" aria-selected="true">Ninth Section</button>

						<button class="nav-link" id="v-pills-tenthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenthsection" type="button" role="tab" aria-controls="v-pills-tenthsection" aria-selected="true">Tenth Section</button>

					</div>

					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

						<form class="form-horizontal form_back p-5 rounded" method="post" action="#">



						    <div class="tab-content" id="v-pills-tabContent">



						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">


						        	<div class="form-group">
										<label for="gsa_main_title" class="col-sm-12 text-left  control-label text-white">Title</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="gsa_main_title" name="gsa_main_title" value="<?= get_option('gsa_main_title'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="gsa_main_btn_text" class="col-sm-12 text-left  control-label text-white">Button Text</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="gsa_main_btn_text" name="gsa_main_btn_text" value="<?= get_option('gsa_main_btn_text'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="gsa_main_btn_url" class="col-sm-12 text-left  control-label text-white">Button URL</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="gsa_main_btn_url" name="gsa_main_btn_url" value="<?= get_option('gsa_main_btn_url'); ?>">
										</div>
									</div>
									<div class="form-group">

									  	<label for="gsa_main_img" class="col-sm-12 text-left  control-label text-white">Main Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_main_img_url site_half" type="text" name="gsa_main_img" size="60" value="<?= get_option('gsa_main_img'); ?>">

									    	<a href="#" class="gsa_main_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_main_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_main_img" src="<?= get_option('gsa_main_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>
						        </div>

						        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

									

									<div class="form-group text-left">                  

										<div class="inline-block">

											<?php $name = 'slider_hidden' ?>

											<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

										</div>

										<label for="<?= $name ?>" class="text-white">Hidden Section</label>

									</div>



									<div class="form-group">



										<label for="slider_number" class="col-sm-12 text-left  control-label text-white">Slides number</label>

										<div class="col-sm-12 text-left ">

											<input type="number" class="form-control" id="slider_number" name="slider_number" value="<?= get_option('slider_number'); ?>">

										</div>

										

									</div>
						        </div>

						        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">



									<div class="form-group">

									  	<label for="gsa_vision_img" class="col-sm-12 text-left  control-label text-white">vision Background Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_vision_img_url site_half" type="text" name="gsa_vision_img" size="60" value="<?= get_option('gsa_vision_img'); ?>">

									    	<a href="#" class="gsa_vision_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_vision_img'))): ?>

									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_vision_img" src="<?= get_option('gsa_vision_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>

									<div class="form-group">
										<label for="vision_title" class="col-sm-12 text-left  control-label text-white">Vision Title</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="vision_title" name="vision_title" value="<?= get_option('vision_title'); ?>">
										</div>
									</div>

									<div class="form-group text-left">

										<label for="vision_content" class="col-sm-6 control-label text-white">Vision Content</label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('vision_content'), 'vision_content',  array('textarea_rows'=>5,'textarea_name'=> 'vision_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'vision_content','class'=>'form-control',) );  ?>

										</div>

									</div>

									<div class="form-group">

									  	<label for="gsa_vision_year_img" class="col-sm-12 text-left  control-label text-white">vision Year Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_vision_year_img_url site_half" type="text" name="gsa_vision_year_img" size="60" value="<?= get_option('gsa_vision_year_img'); ?>">

									    	<a href="#" class="gsa_vision_year_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_vision_year_img'))): ?>

									    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 gsa_vision_year_img" src="<?= get_option('gsa_vision_year_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>
						        </div>

						        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

									<div class="form-group">
										<label for="home_fourth_title" class="col-sm-12 text-left  control-label text-white">Title</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="home_fourth_title" name="home_fourth_title" value="<?= get_option('home_fourth_title'); ?>">
										</div>
									</div>

									<div class="form-group">
										<label for="home_fourth_number" class="col-sm-12 text-left  control-label text-white">Number Show Programs</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="home_fourth_number" name="home_fourth_number" value="<?= get_option('home_fourth_number'); ?>">
										</div>
									</div>
						        </div>

								<div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
						        	<div class="form-group">
										<label for="certificate_title" class="col-sm-12 text-left  control-label text-white">Certificate Title</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="certificate_title" name="certificate_title" value="<?= get_option('certificate_title'); ?>">
										</div>
									</div>
									<div class="form-group text-left">
										<label for="certificate_content" class="col-sm-6 control-label text-white">Certificate Content</label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('certificate_content'), 'certificate_content',  array('textarea_rows'=>5,'textarea_name'=> 'certificate_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'certificate_content','class'=>'form-control',) );  ?>
										</div>
									</div>
									<div class="form-group">
										<label for="certificate_link_text" class="col-sm-12 text-left  control-label text-white">Certificate Link Text</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="certificate_link_text" name="certificate_link_text" value="<?= get_option('certificate_link_text'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="certificate_link_url" class="col-sm-12 text-left  control-label text-white">Certificate Link URL</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="certificate_link_url" name="certificate_link_url" value="<?= get_option('certificate_link_url'); ?>">
										</div>
									</div>
									<div class="form-group">
									  	<label for="gsa_certificate_img" class="col-sm-12 text-left  control-label text-white">Certificate Image</label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="gsa_certificate_img_url site_half" type="text" name="gsa_certificate_img" size="60" value="<?= get_option('gsa_certificate_img'); ?>">
									    	<a href="#" class="gsa_certificate_img_upload btn btn-info">Choose</a>
									    	<?php if (!empty(get_option('gsa_certificate_img'))): ?>
									    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_certificate_img" src="<?= get_option('gsa_certificate_img'); ?>" height="100" style="max-width:100%" />
									    	<?php endif ?>
									  	</div>
									</div>

						        </div>

						        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

									

									<div class="form-group text-left">                  

										<div class="inline-block">

											<?php $name = 'video_hidden' ?>

											<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

										</div>

										<label for="<?= $name ?>" class="text-white">Hidden Section</label>

									</div>



									<div class="form-group">

									  	<label for="gsa_video_img" class="col-sm-12 text-left  control-label text-white">Video Background Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_video_img_url site_half" type="text" name="gsa_video_img" size="60" value="<?= get_option('gsa_video_img'); ?>">

									    	<a href="#" class="gsa_video_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_video_img'))): ?>

									    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_video_img" src="<?= get_option('gsa_video_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>

									<div class="form-group">



										<label for="gsa_youtube_video" class="col-sm-12 text-left  control-label text-white">Video Youtube Link</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_youtube_video" name="gsa_youtube_video" value="<?= get_option('gsa_youtube_video'); ?>">

										</div>

										

									</div>

									<div class="form-group">

									  	<label for="gsa_video" class="col-sm-12 text-left  control-label text-white">Video</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_video_url site_half" type="text" name="gsa_video" size="60" value="<?= get_option('gsa_video'); ?>">

									    	<a href="#" class="gsa_video_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_video'))): ?>

												<video class="gsa_video img-thumbnail w-50 mt-2 img-fluid"  height="100" style="max-width:100%" autoplay loop muted>

													<source src="<?= get_option('gsa_video'); ?>" type="video/mp4">

												</video>

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group">



										<label for="video_text" class="col-sm-12 text-left  control-label text-white">Video text</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="video_text" name="video_text" value="<?= get_option('video_text'); ?>">

										</div>

										

									</div>



						        </div>



						        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

									

									<div class="form-group text-left">

										<div class="inline-block">

											<?php $name = 'seventh_hidden' ?>

											<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

										</div>

										<label for="<?= $name ?>" class="text-white">Hidden Section</label>

									</div>



									<div class="form-group">

									  	<label for="gsa_home_seventh_img" class="col-sm-12 text-left  control-label text-white">Background Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_home_seventh_img_url site_half" type="text" name="gsa_home_seventh_img" size="60" value="<?= get_option('gsa_home_seventh_img'); ?>">

									    	<a href="#" class="gsa_home_seventh_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_home_seventh_img'))): ?>

									    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_seventh_img" src="<?= get_option('gsa_home_seventh_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_seventh_text" class="col-sm-12 text-left  control-label text-white">Button text</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_seventh_text" name="gsa_home_seventh_text" value="<?= get_option('gsa_home_seventh_text'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_seventh_url" class="col-sm-12 text-left  control-label text-white">Button url</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_seventh_url" name="gsa_home_seventh_url" value="<?= get_option('gsa_home_seventh_url'); ?>">

										</div>

									</div>



						        </div>



						        <div class="tab-pane fade show" id="v-pills-eighthsection" role="tabpanel" aria-labelledby="v-pills-eighthsection-tab">

									

									<div class="form-group text-left">

										<div class="inline-block">

											<?php $name = 'eighth_hidden' ?>

											<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

										</div>

										<label for="<?= $name ?>" class="text-white">Hidden Section</label>

									</div>


									<div class="row">
										<div class="col-md-6">
											<div class="services">
												<div class="form-group">
												  	<label for="gsa_home_element_one_img" class="col-sm-12 text-left  control-label text-white">Image</label>
												  	<div class="col-sm-12 text-left ">
												    	<input class="gsa_home_element_one_img_url site_half" type="text" name="gsa_home_element_one_img" size="60" value="<?= get_option('gsa_home_element_one_img'); ?>">

												    	<a href="#" class="gsa_home_element_one_img_upload btn btn-info">Choose</a>

												    	<?php if (!empty(get_option('gsa_home_element_one_img'))): ?>

												    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_element_one_img" src="<?= get_option('gsa_home_element_one_img'); ?>" height="100" style="max-width:100%" />

												    	<?php endif ?>
												  	</div>
												</div>
												<div class="form-group">

													<label for="gsa_home_element_one_title" class="col-sm-12 text-left  control-label text-white">First element title</label>

													<div class="col-sm-12 text-left ">

														<input type="text" class="form-control" id="gsa_home_element_one_title" name="gsa_home_element_one_title" value="<?= get_option('gsa_home_element_one_title'); ?>">

													</div>

												</div>

												<div class="form-group">
													<?php $name = 'gsa_home_element_one_para' ?>
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
												  	<label for="gsa_home_element_two_img" class="col-sm-12 text-left  control-label text-white">Image</label>
												  	<div class="col-sm-12 text-left ">
												    	<input class="gsa_home_element_two_img_url site_half" type="text" name="gsa_home_element_two_img" size="60" value="<?= get_option('gsa_home_element_two_img'); ?>">

												    	<a href="#" class="gsa_home_element_two_img_upload btn btn-info">Choose</a>

												    	<?php if (!empty(get_option('gsa_home_element_two_img'))): ?>

												    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_element_two_img" src="<?= get_option('gsa_home_element_two_img'); ?>" height="100" style="max-width:100%" />

												    	<?php endif ?>
												  	</div>
												</div>

												<div class="form-group">

													<label for="gsa_home_element_two_title" class="col-sm-12 text-left  control-label text-white">Second element title</label>

													<div class="col-sm-12 text-left ">
														<input type="text" class="form-control" id="gsa_home_element_two_title" name="gsa_home_element_two_title" value="<?= get_option('gsa_home_element_two_title'); ?>">

													</div>
												</div>

												<div class="form-group">
													<?php $name = 'gsa_home_element_two_para' ?>

													<label for="<?= $name ?>" class="col-sm-12 control-label text-white">Second element paragraph</label>

													<div class="col-sm-12  ">

														<?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>

													</div>
												</div>
											</div>
										</div>
									</div>
						        </div>



								<div class="tab-pane fade show" id="v-pills-ninthsection" role="tabpanel" aria-labelledby="v-pills-ninthsection-tab">

									

									<div class="form-group text-left">

										<div class="inline-block">

											<?php $name = 'ninth_hidden' ?>

											<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

										</div>

										<label for="<?= $name ?>" class="text-white">Hidden Section</label>

									</div>



									<div class="form-group">

									  	<label for="gsa_home_ninth_img" class="col-sm-12 text-left  control-label text-white">Background Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_home_ninth_img_url site_half" type="text" name="gsa_home_ninth_img" size="60" value="<?= get_option('gsa_home_ninth_img'); ?>">

									    	<a href="#" class="gsa_home_ninth_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_home_ninth_img'))): ?>

									    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_ninth_img" src="<?= get_option('gsa_home_ninth_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>

									<div class="form-group">

									  	<label for="gsa_home_ninth_mobile_img" class="col-sm-12 text-left  control-label text-white">Background Mobile Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_home_ninth_mobile_img_url site_half" type="text" name="gsa_home_ninth_mobile_img" size="60" value="<?= get_option('gsa_home_ninth_mobile_img'); ?>">

									    	<a href="#" class="gsa_home_ninth_mobile_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_home_ninth_mobile_img'))): ?>

									    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_ninth_mobile_img" src="<?= get_option('gsa_home_ninth_mobile_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_ninth_headline" class="col-sm-12 text-left  control-label text-white">Headline</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_ninth_headline" name="gsa_home_ninth_headline" value="<?= get_option('gsa_home_ninth_headline'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_ninth_btntext" class="col-sm-12 text-left  control-label text-white">Button text</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_ninth_btntext" name="gsa_home_ninth_btntext" value="<?= get_option('gsa_home_ninth_btntext'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_ninth_btnurl" class="col-sm-12 text-left  control-label text-white">Button url</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_ninth_btnurl" name="gsa_home_ninth_btnurl" value="<?= get_option('gsa_home_ninth_btnurl'); ?>">

										</div>

									</div>



						        </div>



								<div class="tab-pane fade show" id="v-pills-tenthsection" role="tabpanel" aria-labelledby="v-pills-tenthsection-tab">

									

									<div class="form-group text-left">

										<div class="inline-block">

											<?php $name = 'tenth_hidden' ?>

											<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

										</div>

										<label for="<?= $name ?>" class="text-white">Hidden Section</label>

									</div>



									<div class="form-group">

									  	<label for="gsa_home_tenth_img" class="col-sm-12 text-left  control-label text-white">Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="gsa_home_tenth_img_url site_half" type="text" name="gsa_home_tenth_img" size="60" value="<?= get_option('gsa_home_tenth_img'); ?>">

									    	<a href="#" class="gsa_home_tenth_img_upload btn btn-info">Choose</a>

									    	<?php if (!empty(get_option('gsa_home_tenth_img'))): ?>

									    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_tenth_img" src="<?= get_option('gsa_home_tenth_img'); ?>" height="100" style="max-width:100%" />

									    	<?php endif ?>

									  	</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_tenth_headline" class="col-sm-12 text-left  control-label text-white">Headline</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_tenth_headline" name="gsa_home_tenth_headline" value="<?= get_option('gsa_home_tenth_headline'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_tenth_btntext" class="col-sm-12 text-left  control-label text-white">Button text</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_tenth_btntext" name="gsa_home_tenth_btntext" value="<?= get_option('gsa_home_tenth_btntext'); ?>">

										</div>

									</div>



									<div class="form-group">

										<label for="gsa_home_tenth_btnurl" class="col-sm-12 text-left  control-label text-white">Button url</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="gsa_home_tenth_btnurl" name="gsa_home_tenth_btnurl" value="<?= get_option('gsa_home_tenth_btnurl'); ?>">

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

				<h1 class="text-center site-title"><span>إعدادات الصفحة الرئيسية </span></h1>

			</header>

		</div>

			<br/>

		<div class="d-flex align-items-start p-0 m-0">

			<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">السكشن الاولى </button>

				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">السكشن الثانى </button>
				
				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">السكشن الثالث</button>

				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">السكشن الرابع </button>
				
				<button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="true">السكشن الخامس </button>
				
				<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">السكشن السادس</button>

				<button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="true">السكشن السابع </button>

				<button class="nav-link" id="v-pills-eighthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighthsection" type="button" role="tab" aria-controls="v-pills-eighthsection" aria-selected="true">السكشن الثامن </button>

				<button class="nav-link" id="v-pills-ninthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ninthsection" type="button" role="tab" aria-controls="v-pills-ninthsection" aria-selected="true">السكشن التاسع </button>

				<button class="nav-link" id="v-pills-tenthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenthsection" type="button" role="tab" aria-controls="v-pills-tenthsection" aria-selected="true">السكشن العاشر </button>

			</div>

			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

				<form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">



				    <div class="tab-content" id="v-pills-tabContent">



				        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">


				        	<div class="form-group">
								<label for="gsa_main_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_main_title_ar" name="gsa_main_title_ar" value="<?= get_option('gsa_main_title_ar'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="gsa_main_btn_text_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_main_btn_text_ar" name="gsa_main_btn_text_ar" value="<?= get_option('gsa_main_btn_text_ar'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="gsa_main_btn_url_ar" class="col-sm-12 text-end  control-label text-white">لينك الرابط </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_main_btn_url_ar" name="gsa_main_btn_url_ar" value="<?= get_option('gsa_main_btn_url_ar'); ?>">
								</div>
							</div>
							<div class="form-group">

							  	<label for="gsa_main_img" class="col-sm-12 text-end  control-label text-white">صورة الخلفية الرئيسية </label>

							  	<div class="col-sm-12 text-end ">

							    	<input class="gsa_main_img_url site_half" type="text" name="gsa_main_img" size="60" value="<?= get_option('gsa_main_img'); ?>">

							    	<a href="#" class="gsa_main_img_upload btn btn-info">أختر </a>

							    	<?php if (!empty(get_option('gsa_main_img'))): ?>

							    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_main_img" src="<?= get_option('gsa_main_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>

							  	</div>

							</div>
				        </div>

				        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

							

							<div class="form-group text-end">                  

								<div class="inline-block">

									<?php $name = 'slider_hidden_ar' ?>

									<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

								</div>

								<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

							</div>



							<div class="form-group">



								<label for="slider_number_ar" class="col-sm-12 text-end  control-label text-white">عدد الصور المراد ظهورها </label>

								<div class="col-sm-12 text-end ">

									<input type="number" class="form-control" id="slider_number_ar" name="slider_number_ar" value="<?= get_option('slider_number_ar'); ?>">

								</div>

								

							</div>
				        </div>

				        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">



							<div class="form-group">

							  	<label for="gsa_vision_img" class="col-sm-12 text-end  control-label text-white">خلفية سكشن الرؤية </label>

							  	<div class="col-sm-12 text-end ">

							    	<input class="gsa_vision_img_url site_half" type="text" name="gsa_vision_img" size="60" value="<?= get_option('gsa_vision_img'); ?>">

							    	<a href="#" class="gsa_vision_img_upload btn btn-info">أختر </a>

							    	<?php if (!empty(get_option('gsa_vision_img'))): ?>

							    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_vision_img" src="<?= get_option('gsa_vision_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>

							  	</div>

							</div>

							<div class="form-group">
								<label for="vision_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الرؤية </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="vision_title_ar" name="vision_title_ar" value="<?= get_option('vision_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group text-end">

								<label for="vision_content_ar" class="col-sm-6 control-label text-white">نص الرؤية </label>

								<div class="col-sm-12">

	                				<?php wp_editor( get_option('vision_content_ar'), 'vision_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'vision_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'vision_content_ar','class'=>'form-control',) );  ?>

								</div>

							</div>

							<div class="form-group">

							  	<label for="gsa_vision_year_img" class="col-sm-12 text-end  control-label text-white">صورة السنة </label>

							  	<div class="col-sm-12 text-end ">

							    	<input class="gsa_vision_year_img_url site_half" type="text" name="gsa_vision_year_img" size="60" value="<?= get_option('gsa_vision_year_img'); ?>">

							    	<a href="#" class="gsa_vision_year_img_upload btn btn-info">أختر </a>

							    	<?php if (!empty(get_option('gsa_vision_year_img'))): ?>

							    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 gsa_vision_year_img" src="<?= get_option('gsa_vision_year_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>

							  	</div>

							</div>
				        </div>

				        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

							<div class="form-group">
								<label for="home_fourth_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="home_fourth_title_ar" name="home_fourth_title_ar" value="<?= get_option('home_fourth_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="home_fourth_number_ar" class="col-sm-12 text-end  control-label text-white">عدد البرامج المراد ظهورها </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="home_fourth_number_ar" name="home_fourth_number_ar" value="<?= get_option('home_fourth_number_ar'); ?>">
								</div>
							</div>
				        </div>

						<div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
				        	<div class="form-group">
								<label for="certificate_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الشهادة </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="certificate_title_ar" name="certificate_title_ar" value="<?= get_option('certificate_title_ar'); ?>">
								</div>
							</div>
							<div class="form-group text-end">
								<label for="certificate_content_ar" class="col-sm-6 control-label text-white">محتوى الشهادة </label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('certificate_content_ar'), 'certificate_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'certificate_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'certificate_content_ar','class'=>'form-control',) );  ?>
								</div>
							</div>
							<div class="form-group">
								<label for="certificate_link_text_ar" class="col-sm-12 text-end  control-label text-white">نص لينك الشهادة </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="certificate_link_text_ar" name="certificate_link_text_ar" value="<?= get_option('certificate_link_text_ar'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="certificate_link_url_ar" class="col-sm-12 text-end  control-label text-white">عنوان لينك الشهادة </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="certificate_link_url_ar" name="certificate_link_url_ar" value="<?= get_option('certificate_link_url_ar'); ?>">
								</div>
							</div>
							<div class="form-group">
							  	<label for="gsa_certificate_img" class="col-sm-12 text-end  control-label text-white">صورة الشهادة</label>
							  	<div class="col-sm-12 text-end ">
							    	<input class="gsa_certificate_img_url site_half" type="text" name="gsa_certificate_img" size="60" value="<?= get_option('gsa_certificate_img'); ?>">
							    	<a href="#" class="gsa_certificate_img_upload btn btn-info">أختر </a>
							    	<?php if (!empty(get_option('gsa_certificate_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-50 mt-2 gsa_certificate_img" src="<?= get_option('gsa_certificate_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>

				        </div>

				        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

							

							<div class="form-group text-end">                  

								<div class="inline-block">

									<?php $name = 'video_hidden_ar' ?>

									<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

								</div>

								<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

							</div>



							<div class="form-group">

							  	<label for="gsa_video_img" class="col-sm-12 text-end  control-label text-white">خلفية سكشن الفيديو </label>

							  	<div class="col-sm-12 text-end ">

							    	<input class="gsa_video_img_url site_half" type="text" name="gsa_video_img" size="60" value="<?= get_option('gsa_video_img'); ?>">

							    	<a href="#" class="gsa_video_img_upload btn btn-info">أختر </a>

							    	<?php if (!empty(get_option('gsa_video_img'))): ?>

							    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_video_img" src="<?= get_option('gsa_video_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>

							  	</div>

							</div>


							<div class="form-group">

								<label for="gsa_youtube_video_ar" class="col-sm-12 text-end  control-label text-white">لينك اليوتيوب </label>

								<div class="col-sm-12 text-end ">

									<input type="text" class="form-control" id="gsa_youtube_video_ar" name="gsa_youtube_video_ar" value="<?= get_option('gsa_youtube_video_ar'); ?>">

								</div>

								

							</div>


							<div class="form-group">

							  	<label for="gsa_video_ar" class="col-sm-12 text-end  control-label text-white">الفيديو </label>

							  	<div class="col-sm-12 text-end ">

							    	<input class="gsa_video_ar_url site_half" type="text" name="gsa_video_ar" size="60" value="<?= get_option('gsa_video_ar'); ?>">

							    	<a href="#" class="gsa_video_ar_upload btn btn-info">أختر </a>

							    	<?php if (!empty(get_option('gsa_video_ar'))): ?>

										<video class="gsa_video_ar img-thumbnail w-50 mt-2 img-fluid"  height="100" style="max-width:100%" autoplay loop muted>

											<source src="<?= get_option('gsa_video_ar'); ?>" type="video/mp4">

										</video>

							    	<?php endif ?>

							  	</div>

							</div>



							<div class="form-group">



								<label for="video_text_ar" class="col-sm-12 text-end  control-label text-white">نص الفيديو </label>

								<div class="col-sm-12 text-end ">

									<input type="text" class="form-control" id="video_text_ar" name="video_text_ar" value="<?= get_option('video_text_ar'); ?>">

								</div>

								

							</div>



				        </div>



				        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

							

							<div class="form-group text-end">

								<div class="inline-block">

									<?php $name = 'seventh_hidden_ar' ?>

									<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

								</div>

								<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

							</div>



							<div class="form-group">

							  	<label for="gsa_home_seventh_img" class="col-sm-12 text-end  control-label text-white">صورة الخلفية </label>

							  	<div class="col-sm-12 text-end ">

							    	<input class="gsa_home_seventh_img_url site_half" type="text" name="gsa_home_seventh_img" size="60" value="<?= get_option('gsa_home_seventh_img'); ?>">

							    	<a href="#" class="gsa_home_seventh_img_upload btn btn-info">أختر </a>

							    	<?php if (!empty(get_option('gsa_home_seventh_img'))): ?>

							    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_seventh_img" src="<?= get_option('gsa_home_seventh_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>

							  	</div>

							</div>



							<div class="form-group">

								<label for="gsa_home_seventh_text_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>

								<div class="col-sm-12 text-end ">

									<input type="text" class="form-control" id="gsa_home_seventh_text_ar" name="gsa_home_seventh_text_ar" value="<?= get_option('gsa_home_seventh_text_ar'); ?>">

								</div>

							</div>



							<div class="form-group">

								<label for="gsa_home_seventh_url_ar" class="col-sm-12 text-end  control-label text-white">لينك الرابط </label>

								<div class="col-sm-12 text-end ">

									<input type="text" class="form-control" id="gsa_home_seventh_url_ar" name="gsa_home_seventh_url_ar" value="<?= get_option('gsa_home_seventh_url_ar'); ?>">

								</div>

							</div>



				        </div>



				        <div class="tab-pane fade show" id="v-pills-eighthsection" role="tabpanel" aria-labelledby="v-pills-eighthsection-tab">

							

							<div class="form-group text-end">

								<div class="inline-block">

									<?php $name = 'eighth_hidden_ar' ?>

									<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

								</div>

								<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

							</div>


							<div class="row">
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
										  	<label for="gsa_home_element_one_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
										  	<div class="col-sm-12 text-end ">
										    	<input class="gsa_home_element_one_img_url site_half" type="text" name="gsa_home_element_one_img" size="60" value="<?= get_option('gsa_home_element_one_img'); ?>">

										    	<a href="#" class="gsa_home_element_one_img_upload btn btn-info">أختر </a>

										    	<?php if (!empty(get_option('gsa_home_element_one_img'))): ?>

										    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_element_one_img" src="<?= get_option('gsa_home_element_one_img'); ?>" height="100" style="max-width:100%" />

										    	<?php endif ?>
										  	</div>
										</div>
										<div class="form-group">

											<label for="gsa_home_element_one_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الفقرة الاولى </label>

											<div class="col-sm-12 text-end ">

												<input type="text" class="form-control" id="gsa_home_element_one_title_ar" name="gsa_home_element_one_title_ar" value="<?= get_option('gsa_home_element_one_title_ar'); ?>">

											</div>

										</div>

										<div class="form-group">
											<?php $name = 'gsa_home_element_one_para_ar' ?>
											<label for="<?= $name ?>" class="col-sm-12 control-label text-white">فقرة العنصر الأول</label>
											<div class="col-sm-12  ">
												<?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
										  	<label for="gsa_home_element_two_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
										  	<div class="col-sm-12 text-end ">
										    	<input class="gsa_home_element_two_img_url site_half" type="text" name="gsa_home_element_two_img" size="60" value="<?= get_option('gsa_home_element_two_img'); ?>">

										    	<a href="#" class="gsa_home_element_two_img_upload btn btn-info">أختر </a>

										    	<?php if (!empty(get_option('gsa_home_element_two_img'))): ?>

										    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_element_two_img" src="<?= get_option('gsa_home_element_two_img'); ?>" height="100" style="max-width:100%" />

										    	<?php endif ?>
										  	</div>
										</div>

										<div class="form-group">
											<label for="gsa_home_element_two_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الفقرة الثانية </label>
											<div class="col-sm-12 text-end ">
												<input type="text" class="form-control" id="gsa_home_element_two_title_ar" name="gsa_home_element_two_title_ar" value="<?= get_option('gsa_home_element_two_title_ar'); ?>">
											</div>
										</div>

										<div class="form-group">
											<?php $name = 'gsa_home_element_two_para_ar' ?>
											<label for="<?= $name ?>" class="col-sm-12 control-label text-white">نص الفقرة الثانية</label>
											<div class="col-sm-12  ">
												<?php wp_editor( get_option($name), $name,  array('textarea_rows'=>5,'textarea_name'=> $name, 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id' => $name,'class'=>'form-control',) );  ?>
											</div>
										</div>
									</div>
								</div>
							</div>
				        </div>

						<div class="tab-pane fade show" id="v-pills-ninthsection" role="tabpanel" aria-labelledby="v-pills-ninthsection-tab">

							<div class="form-group text-end">
								<div class="inline-block">
									<?php $name = 'ninth_hidden_ar' ?>
									<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
								</div>
								<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
							</div>

							<div class="form-group">
							  	<label for="gsa_home_ninth_img" class="col-sm-12 text-end  control-label text-white">صورة الخلفية </label>
							  	<div class="col-sm-12 text-end ">
							    	<input class="gsa_home_ninth_img_url site_half" type="text" name="gsa_home_ninth_img" size="60" value="<?= get_option('gsa_home_ninth_img'); ?>">
							    	<a href="#" class="gsa_home_ninth_img_upload btn btn-info">أختر </a>
							    	<?php if (!empty(get_option('gsa_home_ninth_img'))): ?>
							    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_ninth_img" src="<?= get_option('gsa_home_ninth_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>

							<div class="form-group">
							  	<label for="gsa_home_ninth_mobile_img" class="col-sm-12 text-end  control-label text-white">صورة خلفية الموبايل </label>
							  	<div class="col-sm-12 text-end ">
							    	<input class="gsa_home_ninth_mobile_img_url site_half" type="text" name="gsa_home_ninth_mobile_img" size="60" value="<?= get_option('gsa_home_ninth_mobile_img'); ?>">
							    	<a href="#" class="gsa_home_ninth_mobile_img_upload btn btn-info">أختر </a>
							    	<?php if (!empty(get_option('gsa_home_ninth_mobile_img'))): ?>
							    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_ninth_mobile_img" src="<?= get_option('gsa_home_ninth_mobile_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>

							<div class="form-group">
								<label for="gsa_home_ninth_headline_ar" class="col-sm-12 text-end  control-label text-white">العنوان</label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_home_ninth_headline_ar" name="gsa_home_ninth_headline_ar" value="<?= get_option('gsa_home_ninth_headline_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="gsa_home_ninth_btntext_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_home_ninth_btntext_ar" name="gsa_home_ninth_btntext_ar" value="<?= get_option('gsa_home_ninth_btntext_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="gsa_home_ninth_btnurl_ar" class="col-sm-12 text-end  control-label text-white">لينك الرابط </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_home_ninth_btnurl_ar" name="gsa_home_ninth_btnurl_ar" value="<?= get_option('gsa_home_ninth_btnurl_ar'); ?>">
								</div>
							</div>
				        </div>

						<div class="tab-pane fade show" id="v-pills-tenthsection" role="tabpanel" aria-labelledby="v-pills-tenthsection-tab">
							<div class="form-group text-end">
								<div class="inline-block">
									<?php $name = 'tenth_hidden_ar' ?>
									<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
								</div>
								<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
							</div>

							<div class="form-group">
							  	<label for="gsa_home_tenth_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
							  	<div class="col-sm-12 text-end ">
							    	<input class="gsa_home_tenth_img_url site_half" type="text" name="gsa_home_tenth_img" size="60" value="<?= get_option('gsa_home_tenth_img'); ?>">
							    	<a href="#" class="gsa_home_tenth_img_upload btn btn-info">أختر </a>
							    	<?php if (!empty(get_option('gsa_home_tenth_img'))): ?>
							    		<img class="img-fluid img-thumbnail w-50 mt-2 gsa_home_tenth_img" src="<?= get_option('gsa_home_tenth_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>

							<div class="form-group">
								<label for="gsa_home_tenth_headline_ar" class="col-sm-12 text-end  control-label text-white">العنوان</label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_home_tenth_headline_ar" name="gsa_home_tenth_headline_ar" value="<?= get_option('gsa_home_tenth_headline_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="gsa_home_tenth_btntext_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_home_tenth_btntext_ar" name="gsa_home_tenth_btntext_ar" value="<?= get_option('gsa_home_tenth_btntext_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="gsa_home_tenth_btnurl_ar" class="col-sm-12 text-end  control-label text-white">لينك الرابط </label>
								<div class="col-sm-12 text-end ">
									<input type="text" class="form-control" id="gsa_home_tenth_btnurl_ar" name="gsa_home_tenth_btnurl_ar" value="<?= get_option('gsa_home_tenth_btnurl_ar'); ?>">
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