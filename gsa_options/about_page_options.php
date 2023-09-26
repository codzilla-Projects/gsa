<?php 



function about_content_area_callback(){



	$wp_editor_settings = array( 



		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



		'textarea_rows'=> 2



	);    


	if( isset( $_POST['gsa_save'] ) && !empty( $_POST['gsa_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['about_first_section_content','third_about_first_block_content','third_about_second_block_content','third_about_third_block_content','about_third_section_content_one','about_third_section_content_two','about_third_section_content_third','about_vision_content'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}

		if(!isset($_POST['about_first_section_hidden'])) {delete_option('about_first_section_hidden');}
		if(!isset($_POST['about_second_section_hidden'])) {delete_option('about_second_section_hidden');}
		if(!isset($_POST['about_third_section_hidden'])) {delete_option('about_third_section_hidden');}
		if(!isset($_POST['about_video_hidden'])) {delete_option('about_video_hidden');}
		if(!isset($_POST['about_vision_hidden'])) {delete_option('about_vision_hidden');}
		if(!isset($_POST['about_sixth_sec_hidden'])) {delete_option('about_sixth_sec_hidden');}
	}

	if( isset( $_POST['gsa_save_ar'] ) && !empty( $_POST['gsa_save_ar']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['about_first_section_content_ar','third_about_first_block_content_ar','third_about_second_block_content_ar','third_about_third_block_content_ar','about_third_section_content_one_ar','about_third_section_content_two_ar','about_third_section_content_third','about_vision_content_ar'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}

		if(!isset($_POST['about_first_section_hidden_ar'])) {delete_option('about_first_section_hidden_ar');}
		if(!isset($_POST['about_second_section_hidden_ar'])) {delete_option('about_second_section_hidden_ar');}
		if(!isset($_POST['about_third_section_hidden_ar'])) {delete_option('about_third_section_hidden_ar');}
		if(!isset($_POST['about_video_hidden_ar'])) {delete_option('about_video_hidden_ar');}
		if(!isset($_POST['about_vision_hidden_ar'])) {delete_option('about_vision_hidden_ar');}
		if(!isset($_POST['about_sixth_sec_hidden_ar'])) {delete_option('about_sixth_sec_hidden_ar');}
	}
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
	<div class="container-fluid text-left padding-right-4">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
				<!-- Top Navigation -->
				<header class="codrops-header">

					<h1 class="text-center site-title"><span>About Page Settings</span></h1>

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
				</div>

				<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

					<form class="form-horizontal form_back p-5 rounded" method="post" action="#">

					    <div class="tab-content" id="v-pills-tabContent">

					    	<div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">
                                <div class="form-group">
									<label for="about_page_title" class="col-sm-12 text-left  control-label text-white">Page Title</label>
                                    <div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="about_page_title" name="about_page_title" value="<?= get_option('about_page_title'); ?>">
                                    </div>
								</div>
					        </div>

					        <div class="tab-pane fade show " id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-left">                  

									<div class="inline-block">

										<?php $name = 'about_first_section_hidden' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">Hidden Section</label>

								</div>

                                <div class="form-group">
                                    
									<label for="about_first_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>
									
                                    <div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_first_section_title" name="about_first_section_title" value="<?= get_option('about_first_section_title'); ?>">
									
                                    </div>

								</div>

                                <div class="form-group text-left">

									<label for="about_first_section_content" class="col-sm-6 control-label text-white">Vision Content</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_first_section_content'), 'about_first_section_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_section_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_section_content','class'=>'form-control',) );  ?>

									</div>

								</div>

								<div class="form-group">

								  	<label for="about_first_section_img" class="col-sm-12 text-left  control-label text-white">Image</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_first_section_img_url site_half" type="text" name="about_first_section_img" size="60" value="<?= get_option('about_first_section_img'); ?>">

								    	<a href="#" class="about_first_section_img_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_first_section_img'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_first_section_img" src="<?= get_option('about_first_section_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

					        </div>
					        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-left">

                                    <div class="inline-block">

                                        <?php $name = 'about_third_section_hidden' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">Hidden Section</label>
                                </div>

                                <div class="form-group">

                                    <label for="about_third_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                    <div class="col-sm-12 text-left ">

                                        <input type="text" class="form-control" id="about_third_section_title" name="about_third_section_title" value="<?= get_option('about_third_section_title'); ?>">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_about_first_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="third_about_first_block_img_url site_half" type="text" name="third_about_first_block_img" size="60" value="<?= get_option('third_about_first_block_img'); ?>">

                                                    <a href="#" class="third_about_first_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('third_about_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_about_first_block_img" src="<?= get_option('third_about_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_about_first_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="third_about_first_block_title" name="third_about_first_block_title" value="<?= get_option('third_about_first_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="third_about_first_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_about_first_block_content'), 'third_about_first_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_about_first_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_about_first_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_about_second_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="third_about_second_block_img_url site_half" type="text" name="third_about_second_block_img" size="60" value="<?= get_option('third_about_second_block_img'); ?>">

                                                    <a href="#" class="third_about_second_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('third_about_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_about_second_block_img" src="<?= get_option('third_about_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_about_second_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="third_about_second_block_title" name="third_about_second_block_title" value="<?= get_option('third_about_second_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="third_about_second_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_about_second_block_content'), 'third_about_second_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_about_second_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_about_second_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_about_third_block_img" class="col-sm-12 text-left  control-label text-white">Image</label>
                                                  <div class="col-sm-12 text-left ">
                                                    <input class="third_about_third_block_img_url site_half" type="text" name="third_about_third_block_img" size="60" value="<?= get_option('third_about_third_block_img'); ?>">

                                                    <a href="#" class="third_about_third_block_img_upload btn btn-info">Choose</a>

                                                    <?php if (!empty(get_option('third_about_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_about_third_block_img" src="<?= get_option('third_about_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_about_third_block_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                                <div class="col-sm-12 text-left ">

                                                    <input type="text" class="form-control" id="third_about_third_block_title" name="third_about_third_block_title" value="<?= get_option('third_about_third_block_title'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-left">
                                                <label for="third_about_third_block_content" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_about_third_block_content'), 'third_about_third_block_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_about_third_block_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_about_third_block_content','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
					        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                <div class="form-group text-left">                  

									<div class="inline-block">

										<?php $name = 'about_third_section_hidden' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">Hidden Section</label>

								</div>
                            
                                <div class="form-group">
                                    
									<label for="about_third_section_title_one" class="col-sm-12 text-left  control-label text-white">Title one</label>
									
                                    <div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_third_section_title_one" name="about_third_section_title_one" value="<?= get_option('about_third_section_title_one'); ?>">
									
                                    </div>

								</div>

								<div class="form-group">

								  	<label for="about_third_section_img_one" class="col-sm-12 text-left  control-label text-white">Image one</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_third_section_img_one_url site_half" type="text" name="about_third_section_img_one" size="60" value="<?= get_option('about_third_section_img_one'); ?>">

								    	<a href="#" class="about_third_section_img_one_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_third_section_img_one'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_third_section_img_one" src="<?= get_option('about_third_section_img_one'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_subtitle_one" class="col-sm-12 text-left  control-label text-white">SubTitle one</label>
									
                                    <div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_third_section_subtitle_one" name="about_third_section_subtitle_one" value="<?= get_option('about_third_section_subtitle_one'); ?>">
									
                                    </div>

								</div>

								<div class="form-group text-left">

									<label for="about_third_section_content_one" class="col-sm-6 control-label text-white">Content one</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_third_section_content_one'), 'about_third_section_content_one',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_section_content_one', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_section_content_one','class'=>'form-control',) );  ?>

									</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_title_two" class="col-sm-12 text-left  control-label text-white">Title two</label>
									
                                    <div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_third_section_title_two" name="about_third_section_title_two" value="<?= get_option('about_third_section_title_two'); ?>">
									
                                    </div>

								</div>

								<div class="form-group">

								  	<label for="about_third_section_img_two" class="col-sm-12 text-left  control-label text-white">Image two</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_third_section_img_two_url site_half" type="text" name="about_third_section_img_two" size="60" value="<?= get_option('about_third_section_img_two'); ?>">

								    	<a href="#" class="about_third_section_img_two_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_third_section_img_two'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_third_section_img_two" src="<?= get_option('about_third_section_img_two'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_subtitle_two" class="col-sm-12 text-left  control-label text-white">SubTitle two</label>
									
                                    <div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_third_section_subtitle_two" name="about_third_section_subtitle_two" value="<?= get_option('about_third_section_subtitle_two'); ?>">
									
                                    </div>

								</div>

								<div class="form-group text-left">

									<label for="about_third_section_content_two" class="col-sm-6 control-label text-white">Content two</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_third_section_content_two'), 'about_third_section_content_two',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_section_content_two', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_section_content_two','class'=>'form-control',) );  ?>

									</div>

								</div>

								<!-- ****************************** -->
								<div class="form-group">

								  	<label for="about_third_section_img_third" class="col-sm-12 text-left  control-label text-white">Image third</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_third_section_img_third_url site_half" type="text" name="about_third_section_img_third" size="60" value="<?= get_option('about_third_section_img_third'); ?>">

								    	<a href="#" class="about_third_section_img_third_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_third_section_img_third'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_third_section_img_third" src="<?= get_option('about_third_section_img_third'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_subtitle_third" class="col-sm-12 text-left  control-label text-white">SubTitle third</label>
									
                                    <div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_third_section_subtitle_third" name="about_third_section_subtitle_third" value="<?= get_option('about_third_section_subtitle_third'); ?>">
									
                                    </div>

								</div>

								<div class="form-group text-left">

									<label for="about_third_section_content_third" class="col-sm-6 control-label text-white">Content third</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_third_section_content_third'), 'about_third_section_content_third',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_section_content_third', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_section_content_third','class'=>'form-control',) );  ?>

									</div>

								</div>

					        </div>


							<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
					        	<div class="form-group text-left">                  

									<div class="inline-block">

										<?php $name = 'about_video_hidden' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">Hidden Section</label>

								</div>



								<div class="form-group">

								  	<label for="about_video_img" class="col-sm-12 text-left  control-label text-white">Video Background Image</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_video_img_url site_half" type="text" name="about_video_img" size="60" value="<?= get_option('about_video_img'); ?>">

								    	<a href="#" class="about_video_img_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_video_img'))): ?>

								    		<img class="img-fluid img-thumbnail w-50 mt-2 about_video_img" src="<?= get_option('about_video_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

								<div class="form-group">



										<label for="about_youtube_video" class="col-sm-12 text-left  control-label text-white">Video Youtube Link</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_youtube_video" name="about_youtube_video" value="<?= get_option('about_youtube_video'); ?>">

										</div>

										

									</div>

								<div class="form-group">

								  	<label for="about_video" class="col-sm-12 text-left  control-label text-white">Video</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_video_url site_half" type="text" name="about_video" size="60" value="<?= get_option('about_video'); ?>">

								    	<a href="#" class="about_video_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_video'))): ?>

											<video class="about_video img-thumbnail w-50 mt-2 img-fluid"  height="100" style="max-width:100%" autoplay loop muted>

												<source src="<?= get_option('about_video'); ?>" type="video/mp4">

											</video>

								    	<?php endif ?>

								  	</div>

								</div>



								<div class="form-group">

									<label for="about_video_sec_text" class="col-sm-12 text-left  control-label text-white">Video text</label>

									<div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_video_sec_text" name="about_video_sec_text" value="<?= get_option('about_video_sec_text'); ?>">

									</div>

								</div>

					        </div>

							<div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
					        	
                                <div class="form-group text-left">                  

									<div class="inline-block">

										<?php $name = 'about_vision_hidden' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">Hidden Section</label>

								</div>

                                <div class="form-group">

								  	<label for="about_vision_img" class="col-sm-12 text-left  control-label text-white">Vision Background Image</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_vision_img_url site_half" type="text" name="about_vision_img" size="60" value="<?= get_option('about_vision_img'); ?>">

								    	<a href="#" class="about_vision_img_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_vision_img'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_vision_img" src="<?= get_option('about_vision_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

								<div class="form-group text-left">

									<label for="about_vision_content" class="col-sm-6 control-label text-white">Vision Content</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_vision_content'), 'about_vision_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_vision_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_vision_content','class'=>'form-control',) );  ?>

									</div>

								</div>

								<div class="form-group">

								  	<label for="about_vision_year_img" class="col-sm-12 text-left  control-label text-white">Vision Year Image</label>

								  	<div class="col-sm-12 text-left ">

								    	<input class="about_vision_year_img_url site_half" type="text" name="about_vision_year_img" size="60" value="<?= get_option('about_vision_year_img'); ?>">

								    	<a href="#" class="about_vision_year_img_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_vision_year_img'))): ?>

								    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 about_vision_year_img" src="<?= get_option('about_vision_year_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>
					        </div>

					        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

								<div class="form-group text-left">                  

									<div class="inline-block">

										<?php $name = 'about_sixth_sec_hidden' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">Hidden Section</label>

								</div>

								<div class="form-group">

								  	<label for="about_sixth_image" class="col-sm-12 text-left  control-label text-white">Image</label>

                                    <div class="col-sm-12 text-left ">

								    	<input class="about_sixth_image_url site_half" type="text" name="about_sixth_image" size="60" value="<?= get_option('about_sixth_image'); ?>">

								    	<a href="#" class="about_sixth_image_upload btn btn-info">Choose</a>

								    	<?php if (!empty(get_option('about_sixth_image'))): ?>

								    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 about_sixth_image" src="<?= get_option('about_sixth_image'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>



								<div class="form-group">

									<label for="about_sixth_title" class="col-sm-12 text-left  control-label text-white">Title</label>

									<div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_sixth_title" name="about_sixth_title" value="<?= get_option('about_sixth_title'); ?>">

									</div>

								</div>

								<div class="form-group">

									<label for="about_sixth_btn_title" class="col-sm-12 text-left  control-label text-white">Button Text</label>

									<div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_sixth_btn_title" name="about_sixth_btn_title" value="<?= get_option('about_sixth_btn_title'); ?>">

									</div>

								</div>

								<div class="form-group">

									<label for="about_sixth_btn_url" class="col-sm-12 text-left  control-label text-white">Button Url</label>

									<div class="col-sm-12 text-left ">

										<input type="text" class="form-control" id="about_sixth_btn_url" name="about_sixth_btn_url" value="<?= get_option('about_sixth_btn_url'); ?>">

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

					<h1 class="text-center site-title"><span>إعدادات صفحة عن الشركة </span></h1>

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
					
					<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">السكشن السادس </button>
				</div>

				<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

					<form class="form-horizontal form_back_ar p-5 rounded" method="post" action="#">

					    <div class="tab-content" id="v-pills-tabContent">

					    	<div class="tab-pane fade show active" id="v-pills-page-title" role="tabpanel" aria-labelledby="v-pills-page-title-tab">
                                <div class="form-group">
									<label for="about_page_title_ar" class="col-sm-12 text-end  control-label text-white">عنوان الصفحة </label>
                                    <div class="col-sm-12 text-end ">
										<input type="text" class="form-control" id="about_page_title_ar" name="about_page_title_ar" value="<?= get_option('about_page_title_ar'); ?>">
                                    </div>
								</div>
					        </div>

					        <div class="tab-pane fade show " id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                <div class="form-group text-end">                  

									<div class="inline-block">

										<?php $name = 'about_first_section_hidden_ar' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

								</div>

                                <div class="form-group">
                                    
									<label for="about_first_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>
									
                                    <div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_first_section_title_ar" name="about_first_section_title_ar" value="<?= get_option('about_first_section_title_ar'); ?>">
									
                                    </div>

								</div>

                                <div class="form-group text-end">

									<label for="about_first_section_content_ar" class="col-sm-6 control-label text-white">محتوى الرؤية</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_first_section_content_ar'), 'about_first_section_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_section_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_section_content_ar','class'=>'form-control',) );  ?>

									</div>

								</div>

								<div class="form-group">

								  	<label for="about_first_section_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_first_section_img_url site_half" type="text" name="about_first_section_img" size="60" value="<?= get_option('about_first_section_img'); ?>">

								    	<a href="#" class="about_first_section_img_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_first_section_img'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_first_section_img" src="<?= get_option('about_first_section_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

					        </div>
					        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                <div class="form-group text-end">

                                    <div class="inline-block">

                                        <?php $name = 'about_third_section_hidden_ar' ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>
                                </div>

                                <div class="form-group">

                                    <label for="about_third_section_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                    <div class="col-sm-12 text-end ">

                                        <input type="text" class="form-control" id="about_third_section_title_ar" name="about_third_section_title_ar" value="<?= get_option('about_third_section_title_ar'); ?>">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_about_first_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="third_about_first_block_img_url site_half" type="text" name="third_about_first_block_img" size="60" value="<?= get_option('third_about_first_block_img'); ?>">

                                                    <a href="#" class="third_about_first_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('third_about_first_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_about_first_block_img" src="<?= get_option('third_about_first_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_about_first_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="third_about_first_block_title_ar" name="third_about_first_block_title_ar" value="<?= get_option('third_about_first_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="third_about_first_block_content_ar" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_about_first_block_content_ar'), 'third_about_first_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_about_first_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_about_first_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_about_second_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="third_about_second_block_img_url site_half" type="text" name="third_about_second_block_img" size="60" value="<?= get_option('third_about_second_block_img'); ?>">

                                                    <a href="#" class="third_about_second_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('third_about_second_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_about_second_block_img" src="<?= get_option('third_about_second_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_about_second_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="third_about_second_block_title_ar" name="third_about_second_block_title_ar" value="<?= get_option('third_about_second_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="third_about_second_block_content_ar" class="col-sm-6 control-label text-white">المحتوى </label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_about_second_block_content_ar'), 'third_about_second_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_about_second_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_about_second_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="services">
                                            <div class="form-group">
                                                  <label for="third_about_third_block_img" class="col-sm-12 text-end  control-label text-white">الصورة </label>
                                                  <div class="col-sm-12 text-end ">
                                                    <input class="third_about_third_block_img_url site_half" type="text" name="third_about_third_block_img" size="60" value="<?= get_option('third_about_third_block_img'); ?>">

                                                    <a href="#" class="third_about_third_block_img_upload btn btn-info">أختر </a>

                                                    <?php if (!empty(get_option('third_about_third_block_img'))): ?>

                                                    <img class="img-fluid img-thumbnail w-50 mt-2 third_about_third_block_img" src="<?= get_option('third_about_third_block_img'); ?>" height="100" style="max-width:100%" />
                                                    <?php endif ?>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="third_about_third_block_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

                                                <div class="col-sm-12 text-end ">

                                                    <input type="text" class="form-control" id="third_about_third_block_title_ar" name="third_about_third_block_title_ar" value="<?= get_option('third_about_third_block_title_ar'); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group text-end">
                                                <label for="third_about_third_block_content_ar" class="col-sm-6 control-label text-white">Content</label>
                                                <div class="col-sm-12">
                                                    <?php wp_editor( get_option('third_about_third_block_content_ar'), 'third_about_third_block_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'third_about_third_block_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_about_third_block_content_ar','class'=>'form-control',) );  ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
					        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                                <div class="form-group text-end">                  

									<div class="inline-block">

										<?php $name = 'about_third_section_hidden_ar' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

								</div>
                            
                                <div class="form-group">
                                    
									<label for="about_third_section_title_one_ar" class="col-sm-12 text-end  control-label text-white">العنوان الاول </label>
									
                                    <div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_third_section_title_one_ar" name="about_third_section_title_one_ar" value="<?= get_option('about_third_section_title_one_ar'); ?>">
									
                                    </div>

								</div>

								<div class="form-group">

								  	<label for="about_third_section_img_one" class="col-sm-12 text-end  control-label text-white">الصورة الاولى </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_third_section_img_one_url site_half" type="text" name="about_third_section_img_one" size="60" value="<?= get_option('about_third_section_img_one'); ?>">

								    	<a href="#" class="about_third_section_img_one_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_third_section_img_one'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_third_section_img_one" src="<?= get_option('about_third_section_img_one'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_subtitle_one_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى الاول </label>
									
                                    <div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_third_section_subtitle_one_ar" name="about_third_section_subtitle_one_ar" value="<?= get_option('about_third_section_subtitle_one_ar'); ?>">
									
                                    </div>

								</div>

								<div class="form-group text-end">

									<label for="about_third_section_content_one_ar" class="col-sm-6 control-label text-white">المحتوى الاول </label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_third_section_content_one_ar'), 'about_third_section_content_one_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_section_content_one_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_section_content_one_ar','class'=>'form-control',) );  ?>

									</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_title_two_ar" class="col-sm-12 text-end  control-label text-white">العنوان الثانى </label>
									
                                    <div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_third_section_title_two_ar" name="about_third_section_title_two_ar" value="<?= get_option('about_third_section_title_two_ar'); ?>">
									
                                    </div>

								</div>

								<div class="form-group">

								  	<label for="about_third_section_img_two" class="col-sm-12 text-end  control-label text-white">الصورة الثانية </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_third_section_img_two_url site_half" type="text" name="about_third_section_img_two" size="60" value="<?= get_option('about_third_section_img_two'); ?>">

								    	<a href="#" class="about_third_section_img_two_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_third_section_img_two'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_third_section_img_two" src="<?= get_option('about_third_section_img_two'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_subtitle_two_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى الثانى </label>
									
                                    <div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_third_section_subtitle_two_ar" name="about_third_section_subtitle_two_ar" value="<?= get_option('about_third_section_subtitle_two_ar'); ?>">
									
                                    </div>

								</div>

								<div class="form-group text-end">

									<label for="about_third_section_content_two_ar" class="col-sm-6 control-label text-white">المحتوى الثانى </label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_third_section_content_two_ar'), 'about_third_section_content_two_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_section_content_two_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_section_content_two_ar','class'=>'form-control',) );  ?>

									</div>

								</div>

								<!-- ****************************** -->
								<div class="form-group">

								  	<label for="about_third_section_img_third" class="col-sm-12 text-end  control-label text-white">الصورة الثالثة </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_third_section_img_third_url site_half" type="text" name="about_third_section_img_third" size="60" value="<?= get_option('about_third_section_img_third'); ?>">

								    	<a href="#" class="about_third_section_img_third_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_third_section_img_third'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_third_section_img_third" src="<?= get_option('about_third_section_img_third'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

                                <div class="form-group">
                                    
									<label for="about_third_section_subtitle_third_ar" class="col-sm-12 text-end  control-label text-white">العنوان الفرعى الثالث</label>
									
                                    <div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_third_section_subtitle_third_ar" name="about_third_section_subtitle_third_ar" value="<?= get_option('about_third_section_subtitle_third_ar'); ?>">
									
                                    </div>

								</div>

								<div class="form-group text-end">

									<label for="about_third_section_content_third_ar" class="col-sm-6 control-label text-white">المحتوى الثالث</label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_third_section_content_third_ar'), 'about_third_section_content_third_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_section_content_third_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_section_content_third_ar','class'=>'form-control',) );  ?>

									</div>

								</div>

					        </div>


							<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
					        	<div class="form-group text-end">                  

									<div class="inline-block">

										<?php $name = 'about_video_hidden_ar' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

								</div>



								<div class="form-group">

								  	<label for="about_video_img" class="col-sm-12 text-end  control-label text-white">صورة خلفية الفيديو </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_video_img_url site_half" type="text" name="about_video_img" size="60" value="<?= get_option('about_video_img'); ?>">

								    	<a href="#" class="about_video_img_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_video_img'))): ?>

								    		<img class="img-fluid img-thumbnail w-50 mt-2 about_video_img" src="<?= get_option('about_video_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>


							<div class="form-group">

								<label for="about_youtube_video_ar" class="col-sm-12 text-end  control-label text-white">لينك اليوتيوب </label>

								<div class="col-sm-12 text-end ">

									<input type="text" class="form-control" id="about_youtube_video_ar" name="about_youtube_video_ar" value="<?= get_option('about_youtube_video_ar'); ?>">

								</div>

								

							</div>

								<div class="form-group">

								  	<label for="about_video_ar" class="col-sm-12 text-end  control-label text-white">الفيديو </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_video_ar_url site_half" type="text" name="about_video_ar" size="60" value="<?= get_option('about_video_ar'); ?>">

								    	<a href="#" class="about_video_ar_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_video_ar'))): ?>

											<video class="about_video_ar img-thumbnail w-50 mt-2 img-fluid"  height="100" style="max-width:100%" autoplay loop muted>

												<source src="<?= get_option('about_video_ar'); ?>" type="video/mp4">

											</video>

								    	<?php endif ?>

								  	</div>

								</div>



								<div class="form-group">

									<label for="about_video_sec_text_ar" class="col-sm-12 text-end  control-label text-white">نص الفيديو </label>

									<div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_video_sec_text_ar" name="about_video_sec_text_ar" value="<?= get_option('about_video_sec_text_ar'); ?>">

									</div>

								</div>

					        </div>

							<div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
					        	
                                <div class="form-group text-end">                  

									<div class="inline-block">

										<?php $name = 'about_vision_hidden_ar' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

								</div>

                                <div class="form-group">

								  	<label for="about_vision_img" class="col-sm-12 text-end  control-label text-white">خلفية الرؤية </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_vision_img_url site_half" type="text" name="about_vision_img" size="60" value="<?= get_option('about_vision_img'); ?>">

								    	<a href="#" class="about_vision_img_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_vision_img'))): ?>

								    	<img class="img-fluid img-thumbnail w-50 mt-2 about_vision_img" src="<?= get_option('about_vision_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>

								<div class="form-group text-end">

									<label for="about_vision_content_ar" class="col-sm-6 control-label text-white">محتوى الرؤية </label>

									<div class="col-sm-12">

		                				<?php wp_editor( get_option('about_vision_content_ar'), 'about_vision_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_vision_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_vision_content_ar','class'=>'form-control',) );  ?>

									</div>

								</div>

								<div class="form-group">

								  	<label for="about_vision_year_img" class="col-sm-12 text-end  control-label text-white">صورة الرؤية </label>

								  	<div class="col-sm-12 text-end ">

								    	<input class="about_vision_year_img_url site_half" type="text" name="about_vision_year_img" size="60" value="<?= get_option('about_vision_year_img'); ?>">

								    	<a href="#" class="about_vision_year_img_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_vision_year_img'))): ?>

								    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 about_vision_year_img" src="<?= get_option('about_vision_year_img'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>
					        </div>

					        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

								<div class="form-group text-end">                  

									<div class="inline-block">

										<?php $name = 'about_sixth_sec_hidden_ar' ?>

										<input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

									</div>

									<label for="<?= $name ?>" class="text-white">إخفاء السكشن </label>

								</div>

								<div class="form-group">

								  	<label for="about_sixth_image" class="col-sm-12 text-end  control-label text-white">الصورة </label>

                                    <div class="col-sm-12 text-end ">

								    	<input class="about_sixth_image_url site_half" type="text" name="about_sixth_image" size="60" value="<?= get_option('about_sixth_image'); ?>">

								    	<a href="#" class="about_sixth_image_upload btn btn-info">أختر </a>

								    	<?php if (!empty(get_option('about_sixth_image'))): ?>

								    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 about_sixth_image" src="<?= get_option('about_sixth_image'); ?>" height="100" style="max-width:100%" />

								    	<?php endif ?>

								  	</div>

								</div>



								<div class="form-group">

									<label for="about_sixth_title_ar" class="col-sm-12 text-end  control-label text-white">العنوان </label>

									<div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_sixth_title_ar" name="about_sixth_title_ar" value="<?= get_option('about_sixth_title_ar'); ?>">

									</div>

								</div>

								<div class="form-group">

									<label for="about_sixth_btn_title_ar" class="col-sm-12 text-end  control-label text-white">نص الرابط </label>

									<div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_sixth_btn_title_ar" name="about_sixth_btn_title_ar" value="<?= get_option('about_sixth_btn_title_ar'); ?>">

									</div>

								</div>

								<div class="form-group">

									<label for="about_sixth_btn_url_ar" class="col-sm-12 text-end  control-label text-white">لينك الرابط </label>

									<div class="col-sm-12 text-end ">

										<input type="text" class="form-control" id="about_sixth_btn_url_ar" name="about_sixth_btn_url_ar" value="<?= get_option('about_sixth_btn_url_ar'); ?>">

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