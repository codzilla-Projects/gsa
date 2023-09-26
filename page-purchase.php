<?php
/**
** Template Name: Purchase Template
**/
require_once( gsa_ROOT  . '/switching_languages/purchase_page_switching.php');
	get_header(); 
?>
<section class="partners-page" style="background-image: url('<?=$partner_form_img?>');">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-md-6">
				<div class="partner-form">
					<div class="form-box">
						<div class="default-form">
							<form method="post" action="" id="contact-form">
								 <?php if(isset($_POST['registerPrograms']) && $_POST['registerPrograms'] === "Register"):
						            $response = gsa_register_new_programs($_POST);
		
						          ?>
						            <?php endif ?>
								<div class="row clearfix">
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<small><?php _e('Name','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input type="text" name="fullname" value=""
												required="">
										</div>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<small><?php _e('Email(business email only)','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input type="email" name="email" value=""
												required="">
										</div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<small><?php _e('Phone Number','gsa'); ?><span>*</span></small>
										<div class="field-inner">
											<input type="tel" name="phone" value=""
												required="">
										</div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<small><?php _e('Governorate','gsa'); ?><span>*</span></small>

										<div class="field-inner multiSelect_field">
					                        <select  name="governorate" class="js-example-basic-multiple">
					                        	<option value = ''><?php _e('Choose Governorate','gsa'); ?></option>
					                        	<?php get_template_part('template-parts/ksa_governorate');?>
					                        </select>
					                    </div>
									</div>
									<?php
					                    $programs = gsa_get_program_by_desc(-1);
					                    if($programs->have_posts()) :
					                ?>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<small><?php _e('Programs','gsa'); ?><span>*</span></small>
										<div class="field-inner multiSelect_field">
										 <select  name="programs[]" multiple class="js-example-basic-multiple" required="">
			                                 <?php while($programs->have_posts()) : $programs->the_post();
			                                  $programs_id= get_the_ID();
			                                 
			                                 ?>
			                                    <option value="<?php the_title()?>" ><?php the_title()?></option>
			                                <?php endwhile; wp_reset_query();?>
			                                </select>
										</div>

									</div>
									<?php endif;?>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<div class="field-inner">
											<div class="news-letter">
												<div class="checkboxes">
												  <div class="checkboxes__row">
													<div class="checkboxes__item">
													  <label class="checkbox style-d">
														<input type="checkbox" value="agree" name="send_news">
														<div class="checkbox__checkmark"></div>
															<div class="checkbox__body">
																<?php _e('Receive updates/subscribe to newsletter','gsa'); ?>
															</div>
													  </label>
													</div>
												  </div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
										<button class="thm-btn second-thm-btn"  type="submit" name="registerPrograms" value="Register">
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
    return value.match(/^(?!.+@(gmail|google|yahoo|outlook|hotmail|msn)\..+)(.+@.+\..+)
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
      programs: "required",
    },
    messages: {
      fullname: "<?php _e('Please enter your Full name','gsa'); ?>",
      email: "<?php _e('Please enter a business email address','gsa'); ?>",
      phone: "<?php _e('Please enter your phone','gsa'); ?>",
      governorate: "<?php _e('Please enter your governorate','gsa'); ?>",
      programs: "<?php _e('Please enter your programs','gsa'); ?>",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
