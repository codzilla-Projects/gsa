<?php
/**
** Template Name: Partners Template
**/
	require_once( gsa_ROOT  . '/switching_languages/partners_page_switching.php');
	get_header(); 
?>
<section class="purchase-page" style="background-image:url('<?= $purchase_form_img; ?>')">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="purchase-left">
					<div class="sec-title">
						<h2>
							<?= $purchase_left_title; ?>						
						</h2>
					</div>
					<div class="purchase-left-img">
						<img src="<?= $purchase_first_img; ?>">
					</div>
					<div class="purchase-left-img">
						<img src="<?= $purchase_second_img; ?>">
					</div>

					<div class="purchase-left-img">
						<img src="<?= $purchase_third_img; ?>">
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="purchase-form">
					<div class="title">
						<h2>
							<?= $purchase_form_title; ?>
						</h2>
					</div>
				
					<div class="form-box">
						<div class="default-form">
							<form method="post" action="" id="contact-form">
								 <?php if(isset($_POST['registerPurchase']) && $_POST['registerPurchase'] === "Register"):
						            $response = gsa_register_new_purchase($_POST);
						          ?>
						            <?php endif ?>
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Name','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input id="contact_fullname" type="text" name="fullname" value=""
											>
										</div>
									</div>
									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Email(business email only)','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input id="contact_email" type="email" name="email" value="" required pattern="^[a-zA-Z0-9._%+-]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!live.com)(?!outlook.com)[a-zA-Z0-9_-]+.[a-zA-Z0-9-.]{2,61}$" oninvalid="setCustomValidity('Please enter business email')" onchange="try{setCustomValidity('')}catch(e){}')"
											>
										</div>
									</div>

									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Phone Number','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input id="contact_phone" type="tel" name="phone" value=""
											>
										</div>
									</div>

									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Governorate','gsa'); ?><span>*</span></small>

										<div class="field-inner multiSelect_field">
					                        <select id="contact_governorate"  name="governorate" class="js-example-basic-multiple">
					                        	<option value = ''><?php _e('Choose Governorate','gsa'); ?></option>
					                        	<?php get_template_part('template-parts/ksa_governorate');?>
					                        </select>
					            
					                    </div>
									</div>
									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Organization','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input id="contact_organization" type="text" name="organization" value=""
											>
										</div>
									</div>
									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Job title','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input id="contact_jobtitle" type="text" name="job_title" value=""
											>

										</div>
									</div>
									<?php
					                    $programs = gsa_get_program_by_desc(-1);
					                    if($programs->have_posts()) :
					                ?>
									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Programs','gsa'); ?><span>*</span></small>
										<div class="field-inner multiSelect_field">
										 <select id="contact_programs" name="programs[]" multiple class="js-example-basic-multiple">
			                                 <?php while($programs->have_posts()) : $programs->the_post();
			                                  $programs_id= get_the_ID();
			                                 
			                                 ?>
			                                    <option value="<?php the_title()?>" ><?php the_title()?></option>
			                                <?php endwhile; wp_reset_query();?>
			                                </select>
										</div>

									</div>
									<?php endif;?>
									<div class="form-group col-lg-6 col-md-12 col-sm-12">
										<small><?php _e('Industry','gsa'); ?><span>*</span></small>
										<div class="field-inner multiSelect_field">
											<select id="contact_industry" name="industry" class="js-example-basic-multiple">
				                               	<option value = ''><?php _e('Choose Industry','gsa'); ?></option>
				                               	<?php get_template_part('template-parts/industry');?>
				                            </select>

										</div>

									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<div class="field-inner">
											<div class="news-letter">
												<div class="checkboxes">
												  <div class="checkboxes__row">
													<div class="checkboxes__item">
													  <small class="checkbox style-d">
														<input type="checkbox" value="Agree" checked="checked" name="send_news">
														<div class="checkbox__checkmark"></div>
														<div class="checkbox__body"><?php _e('Receive updates/subscribe to newsletter','gsa'); ?></div>
													  </small>
													</div>
												  </div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
										<button class="thm-btn second-thm-btn form-submit"  type="submit" name="registerPurchase" value="Register">
											<?php _e('Submit','gsa'); ?>
										</button>
									</div>
								</div>
								 <?php if($response['status'] == 1): ?>
					                <script type='text/javascript'>window.location.href = '<?php bloginfo('url') ?>/<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>thank-you <?php else: ?> شكرا-لك/<?php endif?>';</script>
					            <?php endif ?>
					           
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer()?>
<script type="text/javascript">
	jQuery.validator.addMethod("emailExt", function(value, element, param) {
    return value.match(/^(?!.+@(gmail|google|yahoo|outlook|hotmail|msn)\..+)(.+@.+\..+)$/);
},'Your E-mail is wrong');
$(function() {
  $("form").validate({
    rules: {
      fullname: "required",
      email: {
        required: true,
        email: true,
		emailExt: true
      },
      phone: "required",
      governorate: "required",
      organization: "required",
      job_title: "required",
      programs: "required",
      industry: "required",
    },
    messages: {
      fullname: "<?php _e('Please enter your Full name','gsa'); ?>",
      email: "<?php _e('Please enter a business email address','gsa'); ?>",
      phone: "<?php _e('Please enter your phone','gsa'); ?>",
      governorate: "<?php _e('Please enter your governorate','gsa'); ?>",
      organization: "<?php _e('Please enter your organization','gsa'); ?>",
      job_title: "<?php _e('Please enter your job title','gsa'); ?>",
      programs: "<?php _e('Please enter your programs','gsa'); ?>",
      industry: "<?php _e('Please enter your industry','gsa'); ?>",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
